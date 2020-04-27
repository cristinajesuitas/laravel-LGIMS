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
        // /geocodes
		
		$geocodes = Geocode::all();
		
		return view('geocodes.index',compact('geocodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // /geocodes/create
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
        // POST /geocodes
		// create a new geocode using the request data
		
		//$geocode = new Geocode;
		
		/*$geocode->code = request('code');
        $geocode->region = request('region');
        $geocode->province = request('province');
        $geocode->municipal = request('municipal');
		$geocode->barangay = request('barangay');
		$geocode->zipcode = request('zipcode');
		
		//save it to the database*/
		
		$this->validate(request(),[
			'code'		=>	['required','max:9','regex:/^\d{9}/m','unique:geocodes'],
			'region' 	=>	['required','max:255'],
			'province'	=>	['required','max:255','regex:/^[a-zA-Z-" *"]*/m'],
			'municipal'	=>	['required','max:255','regex:/^[a-zA-Z-" *"]*/m'],
			'barangay' 	=>	['required','max:255','regex:/^[a-zA-Z-" *"]*/m'],
			'zipcode' 	=>	['required','max:4','regex:/[1-9]\d{3}/']
			]);
			
			
			
		Geocode::create(request(['code','region','province','municipal','barangay','zipcode']));
		
		// and then redirect to the home page
		
		return redirect('/geocodes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Geocode $geocode)
    {
        // GET /geocodes/id
		return view('geocodes.show', compact('geocode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // GET /geocodes/id/edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // PATCH /geocodes/id
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  DELETE /geocodes/id
    }
}
