<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telefono extends Model
{
    protected $table="telefonos";

    public function chofer(){

    	return $this->belongsTo('App\chofer');
    }
}
