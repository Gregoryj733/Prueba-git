@extends('layout')

@section('centro')
@section('alerta')
    
@if(Session::has('mensaje_1'))
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Registro Éxitoso</h1>
                {{ Session::get('mensaje_1') }}
            </div>
        </div>
    </div> 
@endif

@if(Session::has('mensaje_2'))
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Registro Editado</h1>
                {{ Session::get('mensaje_2') }}
            </div>
        </div>
    </div> 
@endif

@if(Session::has('mensaje_3'))
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Registro Elminado</h1>
                {{ Session::get('mensaje_3') }}
            </div>
        </div>
    </div> 
@endif

@stop
@stop