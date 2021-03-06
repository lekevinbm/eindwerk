/*
  WiFi Web Server To turn on wasmachine device
 */
#include <SPI.h>
#include <WiFi101.h>
#include <WiFiUdp.h>
#include <RTCZero.h> 

RTCZero rtc;

#include "arduino_secrets.h" 
void turnON(int );
String getNumberInString(int );
///////please enter your sensitive data in the Secret tab/arduino_secrets.h
char ssid[] = SECRET_SSID;        // your network SSID (name)
char pass[] = SECRET_PASS;    // your network password (use for WPA, or use as key for WEP)
int keyIndex = 0;                 // your network key Index number (needed only for WEP)

int status = WL_IDLE_STATUS;
WiFiServer server(80);

const int GMT = 1;

String device_status = "Ready to run";
String end_time = "";         //Time that the wash will end
int program_minutes = 0;

void setup() {
  Serial.begin(9600);      // initialize serial communication
  pinMode(6, OUTPUT);      // set the LED pin mode
  pinMode(0, OUTPUT);
  pinMode(2, OUTPUT);

  // check for the presence of the shield:
  if (WiFi.status() == WL_NO_SHIELD) {
    Serial.println("WiFi shield not present");
    while (true);       // don't continue
  }

  // attempt to connect to WiFi network:
  while ( status != WL_CONNECTED) {
    Serial.print("Attempting to connect to Network named: ");
    Serial.println(ssid);                   // print the network name (SSID);

    // Connect to WPA/WPA2 network. Change this line if using open or WEP network:
    status = WiFi.begin(ssid, pass);
    // wait 10 seconds for connection:
    delay(10000);
  }
  server.begin();                           // start the web server on port 80
  printWiFiStatus();                        // you're connected now, so print out the status
  rtc.begin();
  
  unsigned long epoch;
  int numberOfTries = 0, maxTries = 6;
  do {
    epoch = WiFi.getTime();
    numberOfTries++;
  }
  while ((epoch == 0) || (numberOfTries > maxTries));

  if (numberOfTries > maxTries) {
    Serial.print("NTP unreachable!!");
    while (1);
  }
  else {
    Serial.print("Epoch received: ");
    Serial.println(epoch);
    rtc.setEpoch(epoch);

    Serial.println();
  }
}


void loop() {
  WiFiClient client = server.available();   // listen for incoming clients

  if (client) {                             // if you get a client,
    Serial.println("new client");           // print a message out the serial port
    String currentLine = "";    // make a String to hold incoming data from the client
    String jsonfile = "";        //json message that will be send to the smartphone
    
    while (client.connected()) {            // loop while the client's connected
      if (client.available()) {             // if there's bytes to read from the client,
        char c = client.read();             // read a byte, then
        Serial.write(c);                    // print it out the serial monitor
        if (c == '\n') {                    // if the byte is a newline character

          // if the current line is blank, you got two newline characters in a row.
          // that's the end of the client HTTP request, so send a response:
          if (currentLine.length() == 0) {
            // HTTP headers always start with a response code (e.g. HTTP/1.1 200 OK)
            // and a content-type so the client knows what's coming, then a blank line:
            //client.println("HTTP/1.1 200 OK");
            //client.println("Content-type:text/html");

          client.println("HTTP/1.1 200 OK");
          client.println("Content-type:application/json");
          client.println("Access-Control-Allow-Origin: *");
          client.println("Access-Control-Allow-Headers: X-CSRF-Token");
          client.println();
          client.print(jsonfile);
          client.println();
          
            // the content of the HTTP response follows the header:
            //client.print("Click <a href=\"/H\">here</a> turn the LED on pin 9 on<br>");
            //client.print("Click <a href=\"/L\">here</a> turn the LED on pin 9 off<br>");

            // The HTTP response ends with another blank line:
            client.println();
            // break out of the while loop:
            break;
          }
          else {      // if you got a newline, then clear currentLine:
            currentLine = "";
          }
        }
        else if (c != '\r') {    // if you got anything else but a carriage return character,
          currentLine += c;      // add it to the end of the currentLine
        }
        
        // Check to see what the client request was:
        if (currentLine.endsWith("GET /status")) {
          jsonfile= "{\"status\":\""+device_status+"\"}";       
          
        }
        
        if (currentLine.endsWith("GET /run")) {
          digitalWrite(6, HIGH);               // GET /H turns the LED on
         turnON(100);
         device_status = "Running";
          jsonfile= "{\"status\":\""+device_status+"\"}";
        }
        
        if (currentLine.endsWith("GET /runprogramA")) {
          digitalWrite(6, HIGH);               // GET /H turns the LED on
         turnON(100);
         device_status = "Running Program A";
         program_minutes = 45;
         //end_time= getNumberInString(rtc.getHours() + GMT) + getNumberInString(rtc.getMinutes())+getNumberInString(rtc.getSeconds());
          jsonfile= "{\"status\":\""+device_status+"\",\"end_time\":\""+end_time+"\"}";
        }
        
        if (currentLine.endsWith("GET /stop")) {
          digitalWrite(6, LOW);                // GET /L turns the LED off
         turnON(0);
         device_status = "Ready to rerun";
          jsonfile= "{\"status\":\""+device_status+"\"}";
        }
        
        if (currentLine.endsWith("GET /re-run")) {
          digitalWrite(6, HIGH);                // GET /L turns the LED off
         turnON(0);
         device_status = "Running";
          jsonfile= "{\"status\":\""+device_status+"\"}";
        }
      }
    }
    // close the connection:
    client.stop();
    Serial.println("client disonnected");
  }
}

void printWiFiStatus() {
  // print the SSID of the network you're attached to:
  Serial.print("SSID: ");
  Serial.println(WiFi.SSID());

  // print your WiFi shield's IP address:
  IPAddress ip = WiFi.localIP();
  Serial.print("IP Address: ");
  Serial.println(ip);

  // print the received signal strength:
  long rssi = WiFi.RSSI();
  Serial.print("signal strength (RSSI):");
  Serial.print(rssi);
  Serial.println(" dBm");
  // print where to go in a browser:
  Serial.print("To see this page in action, open a browser to http://");
  Serial.println(ip);
}


void turnON(int speedMotor){
  digitalWrite(motorDIR,HIGH);
  delay(20);
  analogWrite(motorPWM,speedMotor);
  }
  
 String getNumberInString(int number) {
  if (number < 10) {
    return "0"+String(number);
  }
  return String(number);
}
