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
        $locations = Location::all();
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
        Device::create([
            'type' => $request->type,
            'code_name' => $request->code_name,
            'brand' => $request->brand,
            'manufacturer_code' => $request->manufacturer_code,
            'activation_status' => $request->activation_status,
            'task_status' => 'unoccupied',
            'location_id' => $request->location,
            'qr_code' => 'unknown'
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
        $locations = Location::all();
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
        $device->type = $request->type;
        $device->code_name = $request->code_name;
        $device->brand = $request->brand;
        $device->manufacturer_code = $request->manufacturer_code;
        $device->activation_status = $request->activation_status;
        $device->location_id = $request->location;
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
