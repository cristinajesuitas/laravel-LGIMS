<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Region;

class RegionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
         // /psgc
		
		$regions = Region::all();
		
		return view('psgc.index',['regions' => $regions ]);
    }

         /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        // Shows a view to create a new resource

                 

    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */

    public function show(Region $region)
    {
        return view('regions.show',['region'=>$region]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // POST /psgc/regions
        /* create a new geocode using the request data
        */
		
       Region::create($this->validateRegion());

     return redirect('psgc');
    
		
        // and then redirect to the home page
        
    }
	/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */

     public function edit(Region $region)
    {
       // return view('/psgc',['region'=>$region]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Region $region)
    {
        $region->update($this->validateRegion());
        
        return redirect('psgc',['region'=>$region]);
    }

    public function validateRegion()
    {
        return request()->validate([
			'name'		=>	['required','max:255','regex:/\D+$/','unique:regions'],
			'psgCode' 	=>	['required','regex:/\d{9}/',Rule::unique('regions')->ignore(request('region')) ],
			]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        //
    }
}
