<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Geocode;

class GeocodeController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all geocodes from the database and return to view
        $geocodes = Geocode::all()->toArray();
        return view('geocodes.index',compact('geocodes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return view to create geocode
        return view('geocodes.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Persist the geocode in the database
        //form data is available in the request object
        $geocode = new Geocode();
        //input method is used to get the value of input with its
        //name specified
        $geocode->code = $request->input('code');
        $geocode->region = $request->input('region');
        $geocode->province = $request->input('region');
        $geocode->municipal = $request->input('municipal');
		$geocode->barangay = $request->input('barangay');
		$geocode->zipcode = $request->input('zipcode');
        $geocode->save(); //persist the data
        return redirect()->route('geocodes.index')->with('info','geocode Added Successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the geocode
        $geocode = Geocode::find($id);
        return view('geocode.edit',['geocode'=> $geocode]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Retrieve the geocode and update
        $geocode = Geocode::find($request->input('id'));
        $geocode->code = $request->input('code');
        $geocode->region = $request->input('region');
        $geocode->province = $request->input('province');
        $geocode->municipal = $request->input('municipal');
		$geocode->barangay = $request->input('barangay');
		$geocode->district = $request->input('district');
		$geocode->zipcode = $request->input('zipcode');
        $geocode->save(); //persist the data
        return redirect()->route('geocodes.index')->with('info','geocode Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Retrieve the geocode
        $geocode = Geocode::find($id);
        //delete
        $geocode->delete();
        return redirect()->route('geocodes.index');
    }
	
}
