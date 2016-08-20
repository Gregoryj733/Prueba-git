<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registro;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informacion=registro::all();
        return view('listado',compact('informacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $informacion=registro::find($id);
        return view('visualiza',compact('informacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informacion=registro::find($id);
        return view('editar',compact('informacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $informacion = registro::find($id);
        $informacion->marca = request()->input('nueva_marca');
        $informacion->modelo = request()->input('nuevo_modelo');
        $informacion->placa = request()->input('nueva_placa');
        $informacion->save();
        \Session::flash('mensaje_2','Vehiculo Editado');
        return view('test');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informacion = registro::destroy($id);
        \Session::flash('mensaje_3','Vehiculo Eliminado');
        return view('test');
    }
}
