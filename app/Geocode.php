<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lguprofile;

class Geocode extends Model
{
    protected $fillable = ['code','region','province','municipal','barangay','zipcode'];
	   
	   /**
     * Get the lguprofile that owns.
     */
    public function lguprofile()
    {
        return $this->hasOne('App\Lguprofile');
    }
	// $lguprofile -> geocode
	
	public function addLguprofile ($barangay)
	{
		Lguprofile::create([
			'geocode_id' => $this->id]);
	}
}
