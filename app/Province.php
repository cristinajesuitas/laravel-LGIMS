<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Region;

class Province extends Model
{
    protected $fillable = ['region_id','name','psgCode'];
	   
	   /**
     * Get the lguprofile that owns.
     */
    public function region()
    {
        return $this->belongsTo('App\Region');
    }
}
