<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    protected $dato= "vehiculo";
    protected $fillable=['marca','modelo','placa'];
    public $timestamps= false; 
}
