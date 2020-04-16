<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Population;

class PopulationsController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show search page for  from the database and return to view
        $populations = Population::all();
        return view('population.index',['populations'=>$populations]);
    }
}
