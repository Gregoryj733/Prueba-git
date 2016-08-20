<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chofer extends Model
{
    protected $table="chofers";

    public function telefono(){

    	//return $this->hasOne('App\telefono');
    	return $this->hasMany('App\telefono');
    }
}
