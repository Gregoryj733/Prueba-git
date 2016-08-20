@extends('layout')

@section('centro')


	<p><strong>Listado de Vehiculos Registrados</strong></p>

	@foreach($informacion as $informar)

	<ul><a href="{{route('listado.show',$informar->id)}}">{{$informar->marca}} {{$informar->modelo}} {{$informar->placa}}</a></ul>

	@endforeach


@stop