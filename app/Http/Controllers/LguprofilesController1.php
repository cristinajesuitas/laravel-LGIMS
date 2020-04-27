<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lguprofile;
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

        $lguprofiles = Lguprofile::all();
		
      /*foreach ($lguprofiles as $row_lguprofile) {
			var_dump ($row_lguprofile->geocode->barangay);
			var_dump ($row_lguprofile->district);
			echo $lguprofile->sitios_of_bgy;
			echo $lguprofile->classification;
			echo $lguprofile->landarea;
			echo $lguprofile->indigenous_group;
			echo $lguprofile->unitNo;
			echo $lguprofile->floorNo;
			echo $lguprofile->phaseNo;
			echo $lguprofile->blockNo;
			echo $lguprofile->lotNo;
			echo $lguprofile->houseno;
			echo $lguprofile->street;
			echo $lguprofile->sitio;
			echo $lguprofile->munLogo;
			echo $lguprofile->bgyLogo;
	   }*/
		return view('lguprofiles.index',compact('lguprofiles'));
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
		//Get Barangay List
	
	public function getGeocodes()
		{
			
		$geocode = App\Geocode::pluck('barangay');
		
		foreach ($geocodes as $geocode)
			{
				echo $geocode->barangay;
			}
			
			return view('lguprofiles.create',compact('geocodes',$geocodes));
		}
	
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
        $lguprofile->geocode_id = $request->geocode_id;
		$lguprofile->district = $request->district;
		$lguprofile->sitios_in_bgy = $request->sitios_in_bgy;
		$lguprofile->classification = $request->classification;
		$lguprofile->landarea = $request->landarea;
		$lguprofile->indigenous_group = $request->indigenous_group;
		$lguprofile->unitNo = $request->unitNo;
		$lguprofile->floorNo = $request->floorNo;
		$lguprofile->phaseNo = $request->phaseNo;
		$lguprofile->blockNo = $request->blockNo;
		$lguprofile->lotNo = $request->lotNo;
		$lguprofile->houseno = $request->houseno;
		$lguprofile->street = $request->street;
		$lguprofile->sitio = $request->sitio;
		$lguprofile->munLogo=$request->munLogo;
		$lguprofile->bgyLogo=$request->bgyLogo;
				
        $lguprofile->save(); 
		//persist the data
        return redirect()->route('lguprofiles.index')->with('info','LGU Profile Added Successfully!');
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
	
	/*functions to get data
	public function 
	{
		$this->lguprofile = Lguprofile::with('lguprofilegeocode')->get();
			
	}*/
	
	// function for ending data to view 
    public function tesview() {

    return view('view whic you wanna send your data', 
         [
           $lguprofile_details => $this->lguprofile
         ]);
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
