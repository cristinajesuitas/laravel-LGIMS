<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lguprofile;
use App\Geocode;


class LguprofileController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all lguprofiles from the database and return to view
        $lguprofiles = DB::table('lguprofiles')->get();
		
        return view('lguprofiles.index',['lguprofiles'=>$lguprofiles]);
    }
	
	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return view to create lguprofile
		
        //$geocodes = Geocode::all();
		
		return view('lguprofiles.create');
    }
	/**Search records from database
	*
	
	public function search(Request $request)
	{
		$search = $request->get('search');
		$geocodes = DB::table('geocodes')->where('barangay');
		return view('create',['geocodes'=> $geocodes]);
	}*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		//Persist the lguprofile in the database
        //form data is available in the request object
        $lguprofile = new Lguprofile();
		//input method is used to get the value of input with its
        //name specified
        $lguprofile->geocode_id = $request->input('geocode_id');
		$lguprofile->district = $request->input('district'); 
        $lguprofile->sitios_in_bgy = $request->input('sitios_in_bgy');
        $lguprofile->classification = $request->input('classification');
        $lguprofile->landarea = $request->input('landarea');
		$lguprofile->indigenous_group = $request->input('indigenous_group');
		$lguprofile->unitNo = $request->input('unitNo'); 
		$lguprofile->floorNo = $request->input('floorNo');
		$lguprofile->phaseNo = $request->input('phaseNo');
		$lguprofile->blockNo = $request->input('blockNo');
		$lguprofile->lotNo = $request->input('lotNo');
		$lguprofile->houseno = $request->input('houseno');
		$lguprofile->street = $request->input('street');
		$lguprofile->sitio = $request->input('sitio');
        $lguprofile->save(); //persist the data
        return redirect()->route('lguprofiles.index')->with('info','lguprofile Added Successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the lguprofile
        $lguprofile = lguprofile::find($id);
        return view('lguprofile.edit',['lguprofile'=> $lguprofile]);
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
        //Retrieve the lguprofile and update
        $lguprofile = lguprofile::find($request->input('id'));
        $lguprofile->code = $request->input('code');
        $lguprofile->region = $request->input('region');
        $lguprofile->province = $request->input('province');
        $lguprofile->municipal = $request->input('municipal');
		$lguprofile->barangay = $request->input('barangay');
		$lguprofile->district = $request->input('district');
		$lguprofile->zipcode = $request->input('zipcode');
        $lguprofile->save(); //persist the data
        return redirect()->route('lguprofiles.index')->with('info','lguprofile Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Retrieve the lguprofile
        $lguprofile = lguprofile::find($id);
        //delete
        $lguprofile->delete();
        return redirect()->route('lguprofiles.index');
    }
	    /**
     * Search page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
	public function search(Request $request)
	{
		$q = $request->get('q');
		if($q !=""){
				$geocode = Geocode::where('barangay','LIKE','%'.$q.'%')->get();
					
				if (count($geocode) >0){
					return view('lguprofiles.create')->withDetails($geocode)->withQuery($q);
				}
		else
		{
			return view('lguprofiles.create')->withMessage('No Data Found');
		}
		}
	}
	
	
	public function upload()
	{
		if(Input::hasFile('file')){
			echo 'Uploaded<br />';
		$file = Input::file('file');
		$file->moved('logos',$file->getClientOriginalName());
		echo '<img src"logos/' .$file->getClientOriginalName(). '" />';
		}
	}
}
