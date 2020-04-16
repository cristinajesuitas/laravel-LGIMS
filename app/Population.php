<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    protected $fillable = [
							'householdhead_id', 
							'relationship',
							'lname',
							'fname',
							'mname',
							'birthdate',
							'geocodes_id',
							'sex',
							'civilstatus',
							'citizenship',
							'occupation',
							'education',
							'religion',
							'ethnicity',
							'staydate',
							'reasonIn'];
}
