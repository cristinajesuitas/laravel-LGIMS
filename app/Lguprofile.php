<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Geocode;

class Lguprofile extends Model
{
   protected $fillable = ['geocode_id','sitios_in_bgy','classification','landarea','indigenous_group','unitNo','floorNo','phaseNo','blockNo','lotNo','houseno','street','sitio'];
} 
{
  

  
 /*  public function geocode()
    {
        return $this->belongsTo('App\Geocode');
    }*/
}
