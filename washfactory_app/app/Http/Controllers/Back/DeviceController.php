<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDeviceFormRequest;
use App\Http\Requests\UpdateDeviceFormRequest;
use App\Device;
use App\Location;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::all();
        return view('back.devices.index',[
            'devices' => $devices
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all()->sortBy('name');;
        return view('back.devices.create',[
            'locations' => $locations
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDeviceFormRequest $request)
    {
        $location = Location::find($request->location);
        $location_code = $location->location_code;
        if($request->type == 'wash'){
            $foundAFreeCodeName = false;
            $amount = $location->washing_machines->count() + 1;
            while(!$foundAFreeCodeName){
                $code_name = 'WM-'.$location_code.'-'.$amount;
                $deviceWithSameCode = Device::where('code_name',$code_name)->first();
                if($deviceWithSameCode){         
                    $amount--;
                }else{
                    $foundAFreeCodeName = true;
                }
            }
        }else{
            $foundAFreeCodeName = false;
            $amount = $location->dryers->count() + 1;
            while(!$foundAFreeCodeName){
                $code_name = 'DRY-'.$location_code.'-'.$amount;
                $deviceWithSameCode = Device::where('code_name',$code_name)->first();
                if($deviceWithSameCode){         
                    $amount--;
                }else{
                    $foundAFreeCodeName = true;
                }
            }
        }
        Device::create([
            'type' => $request->type,
            'code_name' => $code_name,
            'brand' => $request->brand,
            'manufacturer_code' => $request->manufacturer_code,
            'activation_status' => $request->activation_status,
            'task_status' => 'unoccupied',
            'location_id' => $request->location,
        ]);

        return redirect()->route('admin.devices');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        $locations = Location::all()->sortBy('name');
        return view('back.devices.edit',[
            'device' => $device,
            'locations' => $locations
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeviceFormRequest $request, Device $device)
    {
        $location = Location::find($request->location);
        $location_id = $request->location;
        $location_code = $location->location_code;
        if($device->location_id != $location_id || $device->type != $request->type){
            if($request->type == 'wash'){
                $foundAFreeCodeName = false;
                $amount = $location->washing_machines->count() + 1;
                while(!$foundAFreeCodeName){             
                    $code_name = 'WM-'.$location_code.'-'.$amount;
                    $deviceWithSameCode = Device::where('code_name',$code_name)->first();
                    if($deviceWithSameCode){         
                        $amount--;
                    }else{
                        $foundAFreeCodeName = true;
                    }
                }
            }else{
                $foundAFreeCodeName = false;
                $amount = $location->dryers->count() + 1;
                while(!$foundAFreeCodeName){      
                    $code_name = 'DRY-'.$location_code.'-'.$amount;
                    $deviceWithSameCode = Device::where('code_name',$code_name)->first();
                    if($deviceWithSameCode){         
                        $amount--;
                    }else{
                        $foundAFreeCodeName = true;
                    }
                }
            }
        }

        $device->type = $request->type;
        $device->brand = $request->brand;
        $device->manufacturer_code = $request->manufacturer_code;
        $device->activation_status = $request->activation_status;
        $device->location_id = $location_id;
        $device->code_name = $code_name;
        $device->save();

        return redirect()->route('admin.devices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete();
        return redirect()->route('admin.devices');
    }
}
