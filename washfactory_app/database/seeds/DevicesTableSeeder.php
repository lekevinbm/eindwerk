<?php

use Illuminate\Database\Seeder;
use App\Location;
use App\Device;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = Location::all();
        foreach($locations as $key => $location){
            for($i=1;$i<6;$i++){
                if($i ==4){
                    Device::create([
                        'type' => 'wash', 'code_name' => 'WM-'.$location->location_code.'-'.$i, 'brand' => 'Ipso', 'manufacturer_code' => 'IPS80051O', 'activation_status' => 'out-of-service','location_id' => $location->id
                    ]);
                    Device::create([
                        'type' => 'dry', 'code_name' => 'DRY-'.$location->location_code.'-'.$i, 'brand' => 'Ipso', 'manufacturer_code' => 'IPS80051O', 'activation_status' => 'out-of-service','location_id' => $location->id
                    ]);
                }elseif($i ==5){
                    Device::create([
                        'type' => 'wash', 'code_name' => 'WM-'.$location->location_code.'-'.$i, 'brand' => 'Ipso', 'manufacturer_code' => 'IPS80051O', 'activation_status' => 'non-active','location_id' => $location->id
                    ]);
                    Device::create([
                        'type' => 'dry', 'code_name' => 'DRY-'.$location->location_code.'-'.$i, 'brand' => 'Ipso', 'manufacturer_code' => 'IPS80051O', 'activation_status' => 'non-active','location_id' => $location->id
                    ]);
                } else{
                    Device::create([
                        'type' => 'wash', 'code_name' => 'WM-'.$location->location_code.'-'.$i, 'brand' => 'Ipso', 'manufacturer_code' => 'IPS80051O', 'activation_status' => 'active','location_id' => $location->id
                    ]);
                    Device::create([
                        'type' => 'dry', 'code_name' => 'DRY-'.$location->location_code.'-'.$i, 'brand' => 'Ipso', 'manufacturer_code' => 'IPS80051O', 'activation_status' => 'active','location_id' => $location->id,
                    ]);
                }
            }
        }
    }
}