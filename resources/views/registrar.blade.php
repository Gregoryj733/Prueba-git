@extends('layout')

@section('centro')

<p><strong>Registro de Vehiculo</strong></p>

 

	<form action="{{url('registrar')}}" method="POST">
	 {{csrf_field()}}

		<input type="text" name="marca" placeholder="Marca del Vehiculo"><br>	
		<input type="text" name="modelo" placeholder="Modelo del Vehiculo"><br>
		<input type="text" name="placa" placeholder="Placa del Vehiculo"><br><br>
		<input type="submit" value="Registrar">             
	            
    </form>

@stop