var device_status = "";
$(function() {
    if($('.open-reservation-page').length){
        console.log('yatta');
        var device_from_studio = $('input#device_from_studio').val();
        if(device_from_studio == 'ready'){
            $('.time-status').text('Start het toestel');
            $('.time-status').css('font-size','2em');
            $('.time-status-extra').empty();
            $('#play-device-btn').removeClass('locked');
            $('#play-device-btn').addClass('active');
        }else if(device_from_studio == 'countdown'){
            var timer2 = "14:48";
            $('#play-device-btn').removeClass('active');
            $('#play-device-btn').removeClass('locked');
            $('#play-device-btn').addClass('deactivated');
            $('#stop-device-btn').removeClass('deactivated');
            $('#stop-device-btn').addClass('active');
            $('#lock-button').removeClass('active');
            $('#lock-button').addClass('locked');
            $('.time-status').css('font-size','5em');
            var interval = setInterval(function() {
            var timer = timer2.split(':');
            //by parsing integer, I avoid all extra string processing
            var minutes = parseInt(timer[0], 10);
            var seconds = parseInt(timer[1], 10);
            --seconds;
            minutes = (seconds < 0) ? --minutes : minutes;
            if (minutes < 0) clearInterval(interval);
            seconds = (seconds < 0) ? 59 : seconds;
            seconds = (seconds < 10) ? '0' + seconds : seconds;
            minutes = (minutes < 10) ?  minutes : minutes;
            $('.time-status').html(minutes + ':' + seconds);
            $('.time-status').css('font-size','5em');
            timer2 = minutes + ':' + seconds;
            }, 1000);
        }else if(device_from_studio == 'yes'){
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({url: "http://172.20.10.10/status", method:"get",success: function(result){
                if(result.status == 'Ready to run'){
                    device_status = 'Ready to run';
                    $('.time-status').text('Start het toestel');
                    $('#lock-button').removeClass('active');
                    $('#lock-button').addClass('locked');
                    $('#play-device-btn').removeClass('locked');
                    $('#play-device-btn').addClass('active');
                }

                if(result.status == 'Running'){
                    device_status = 'Running';
                    $('#lock-button').removeClass('active');
                    $('#lock-button').addClass('locked');
                    $('#play-device-btn').removeClass('active');
                    $('#play-device-btn').removeClass('locked');
                    $('#play-device-btn').addClass('deactivated');
                    $('#stop-device-btn').removeClass('deactivated');
                    $('#stop-device-btn').addClass('active');
                    $('#cancel-reservation-btn').removeClass('active');
                    $('#cancel-reservation-btn').addClass('locked');
                }

                if(result.status == 'Ready to rerun'){
                    device_status = 'Ready to rerun'
                    $('#play-device-btn').removeClass('deactivated');
                    $('#play-device-btn').removeClass('locked');
                    $('#play-device-btn').addClass('active');
                    $('#stop-device-btn').removeClass('active');
                    $('#stop-device-btn').addClass('deactivated');
                    $('#cancel-reservation-btn').removeClass('active');
                    $('#cancel-reservation-btn').addClass('locked');   
                }
                
            }});
        }
    }
});



//get Device Running Info
var getDeviceRunningInfo = function(){
    console.log('geting device info');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({url: "http://172.20.10.10/getinfo", method:"get",success: function(result){
        // Set the date we're counting down to
        var countDownDate = new Date(result.end_time).getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        $('.time-status').text(hours+":"+ minutes +":"+seconds);

        // If the count down is finished, write some text 
        if (distance < 0) {
            clearInterval(x);
            alert('Uw was is gedaan.');
        }
        }, 1000);
    },fail:function(jqXHR, textStatus){
        console.log('failmessage:'+textStatus);
    }
    });
}

//open device door
$(document).on("click", '#lock-button.active', function(){
    console.log('open door button pressed');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({url: "http://172.20.10.10/open", method:"get",success: function(result){
        $('#lock-button').removeClass('active');
        $('#lock-button').addClass('deactivated');
    }});
});

//run device
$(document).on("click", '#play-device-btn.active', function(){
    var link_value = $('input#link').val();
    if(link_value == 'ready'){
        var timer2 = "45:00";
        $('#play-device-btn').removeClass('active');
        $('#play-device-btn').removeClass('locked');
        $('#play-device-btn').addClass('deactivated');
        $('#stop-device-btn').removeClass('deactivated');
        $('#stop-device-btn').addClass('active');
        $('.time-status').html('45:00');
        $('.time-status').css('font-size','5em');
        $('#lock-button').removeClass('active');
        $('#lock-button').addClass('locked');
        var interval = setInterval(function() {
        var timer = timer2.split(':');
        //by parsing integer, I avoid all extra string processing
        var minutes = parseInt(timer[0], 10);
        var seconds = parseInt(timer[1], 10);
        --seconds;
        minutes = (seconds < 0) ? --minutes : minutes;
        if (minutes < 0) clearInterval(interval);
        seconds = (seconds < 0) ? 59 : seconds;
        seconds = (seconds < 10) ? '0' + seconds : seconds;
        minutes = (minutes < 10) ?  minutes : minutes;
        $('.time-status').html(minutes + ':' + seconds);
        $('.time-status').css('font-size','5em');
        timer2 = minutes + ':' + seconds;
        }, 1000);
    }else{           

        console.log('play button pressed');
        var program = "programA";
        if(device_status == 'Ready to run'){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "http://172.20.10.10/run"+program,
                method:"get",
                success: function(result){
                    console.log(result);
                    device_status = 'Running';
                    $('#play-device-btn').removeClass('active');
                    $('#play-device-btn').removeClass('locked');
                    $('#play-device-btn').addClass('deactivated');
                    $('#stop-device-btn').removeClass('deactivated');
                    $('#stop-device-btn').addClass('active');
                    $('#cancel-reservation-btn').removeClass('active');
                    $('#cancel-reservation-btn').addClass('locked');  
                }
            });
        }

        if(device_status == 'Ready to rerun'){
            console.log('status is rerun');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({url: "http://172.20.10.10/re-run", method:"get",success: function(result){
                console.log(result);
                device_status = 'Running';
                $('#play-device-btn').removeClass('active');
                $('#play-device-btn').removeClass('locked');
                $('#play-device-btn').addClass('deactivated');
                $('#stop-device-btn').removeClass('deactivated');
                $('#stop-device-btn').addClass('active');
                $('#cancel-reservation-btn').removeClass('active');
                $('#cancel-reservation-btn').addClass('locked');  
            }
            });
        }
    }
    
});


//stop device
$(document).on("click", '#stop-device-btn.active', function(){
    console.log('stop button pressed');
    if(device_status == 'Running'){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({url: "http://172.20.10.10/stop", method:"get",success: function(result){
            //var stopped_time = result.stopped_time;
            console.log(result);
            device_status = 'Ready to rerun'
            $('#play-device-btn').removeClass('deactivated');
            $('#play-device-btn').removeClass('locked');
            $('#play-device-btn').addClass('active');
            $('#stop-device-btn').removeClass('active');
            $('#stop-device-btn').addClass('deactivated');
            $('#cancel-reservation-btn').removeClass('active');
            $('#cancel-reservation-btn').addClass('locked');   
        }});
    }
});