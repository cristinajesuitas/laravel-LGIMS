<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use DB;

class UsermanagementController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all users from the database and return to view
        $users = User/*represents the model*/::all();
        return view('usermanagement.index',['users'=>$users]);
    }

	public function search(Request $request)
	{
		$q = $request->get('q');
		if($q !=""){
				$user = User::where('name','LIKE','%'.$q.'%')->get();
				if (count($user) >0){
					return view('usermanagement.index')->withDetails($user)->withQuery($q);
				}
		else
		{
			return view('usermanagement.index')->withMessage('No Data Found');
		}
		}
	}
	
	

	public function showChangePasswordForm()
	{
		return view('auth.changepassword');
	}
}
