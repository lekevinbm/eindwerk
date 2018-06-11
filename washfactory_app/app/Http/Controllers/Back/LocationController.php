<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLocationFormRequest;
use App\Http\Requests\UpdateLocationFormRequest;
use App\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();

        //dd($locations);
        return view('back.locations.index',[
            'locations' => $locations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLocationFormRequest $request)
    {
        Location::create([
            'name' => $request->name,
            'street_name' => $request->street_name,
            'street_number' => $request->street_number,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.locations');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        return view('back.locations.edit',[
            'location' => $location
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocationFormRequest $request, Location $location)
    {
        $location->name = $request->name;
        $location->street_name = $request->street_name;
        $location->street_number = $request->street_number;
        $location->postcode = $request->postcode;
        $location->postcode = $request->city;
        $location->postcode = $request->description;
        $location->save();

        return redirect()->route('admin.locations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('admin.locations');
    }
}
