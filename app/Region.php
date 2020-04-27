<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name','psgCode'];
	   
	   /**
     * Get the lguprofile that owns.
     */
    public function province()
    {
        return $this->hasMany('App\Province');
    }
}
