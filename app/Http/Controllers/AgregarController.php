<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registro;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AgregarController extends Controller
{
    public function presentar()
    {
        return view('registrar');
    }

    public function guardar()
    {
        $informacion = new registro();
        $informacion->marca = request()->input('marca');
        $informacion->modelo = request()->input('modelo');
        $informacion->placa = request()->input('placa');
        $informacion->save();
        \Session::flash('mensaje_1','Vehiculo Registrado');
        return view('test');
    }
}
