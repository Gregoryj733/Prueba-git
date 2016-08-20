@extends('layout')

@section('centro')

<p><strong>Edición de Vehiculo</strong></p>

<form action="{{route('listado.update',$informacion->id)}}" method="POST">
	{{method_field('PUT')}}
    {{csrf_field()}}

	<input type="text" name="nueva_marca" value="{{$informacion->marca}}"> <br>
	<input type="text" name="nuevo_modelo" value="{{$informacion->modelo}}"> <br>
	<input type="text" name="nueva_placa" value="{{$informacion->placa}}"> <br>
	<br><input type="submit" value="Editar">

</form>

@stop