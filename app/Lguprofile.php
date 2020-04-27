<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Geocode;

class Lguprofile extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lguprofiles';
	
   protected $fillable = ['geocode_id','district','sitios_in_bgy','classification','landarea','indigenous_group'];
  
  /**
     * Get the geocode that owns the lguprofile.
     */
	 
	public function geocode()
    {
        return $this->belongsTo('App\Gocode');
    }
	
	public function add()
	{
		//
	}
}
