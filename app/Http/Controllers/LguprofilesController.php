<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Geocode;
use App\Lguprofile;

class LguprofilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  /lguprofiles
		
		$lguprofiles = Lguprofile::all();
		
		return view('lguprofiles.index',compact('lguprofiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // /lguprofiles/create
		 
		return view('lguprofiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Geocode $geocode)
    {
		$this->validate(request(),[
			'geocode_id'		=>	['required'],
			'district' 	=>	['required','max:255','regex:/^[a-zA-Z-" *"]*/m'],
			'sitios_of_bgy'	=>	['required','max:255','regex:/^[a-zA-Z-," *"]*/m'],
			'classification'	=>	['required'],
			'landarea'	=>	['required','max:255','regex:/^\d*\.\d{2}/m'],
			'indigenous_group' 	=>	['required','max:255','regex:/^[a-zA-Z-" *"]*/m']
			]);
			
        Lguprofile::create([
			'geocode_id' => $geocode->id,
			'district' => request('district'),
			'sitios_of_bgy' => request('sitios_of_bgy'),
			'classification' => request('classification'),
			'landarea' => request('landarea'),
			'indigenous_group' => request('indigenous_group')]);
			
		return redirect('/lguprofiles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
