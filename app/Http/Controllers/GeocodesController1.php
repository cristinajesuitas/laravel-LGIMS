<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Geocode;

class GeocodesController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all geocodes from the database and return to view
		
        $geocodes = Geocode::all();
		
		return view('geocodes.index',compact('geocodes'));
    }
	/*show all the resources in a table*/
	
		public function show(Geocode $geocode)
	{
				
		return view('geocodes.show', compact('geocode'));
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
        $geocode->province = $request->input('province');
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
	
	protected function validator(array $data)
    {
        return Validator::make($data, [
            'code' => ['required', 'string', 'max:9','unique:geocodes','regex:/^[0-9]{9}$'],
			'region' => ['required', 'string', 'max:255'],
			'province' => ['required', 'string', 'max:255','not_regex:'/^[0]+\b/m'],
			'municipal' => ['required', 'string', 'max:255','regex:'/^[a-zA-Z ]+\b/m'],
            'barangay' => ['required', 'string', 'max:255','regex:'/^[a-zA-Z ]+\b/m'],
			'zipcode' => ['required', 'string', 'max:4','regex:/^[1-9][0-9]{3}$/m'],
		 ]);
    }
	/*
	public function checkPSGC();
	{
		
	}*/
}
