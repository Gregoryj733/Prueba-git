@extends('layout')

@section('centro')

<p><strong>Vehiculo</strong></p>

Marca: {{$informacion->marca}} <br>
Modelo: {{$informacion->modelo}} <br>
Placa: {{$informacion->placa}} <br>

<style>
	
.botones{
	width: 400px;
	margin: 10px auto;
	text-align: center;
}
.botones form{
	display: inline-block;
}

</style>

<div class="botones">
	<form action="{{route('listado.edit',$informacion->id)}}" method="GET">
		    {{method_field('PUT')}}
		    {{csrf_field()}}
		    <input type="submit" value="Editar">
		</form>
		
		<form action="{{route('listado.destroy',$informacion->id)}}" method="POST">
		    {{method_field('DELETE')}}
		    {{csrf_field()}}
		    <input type="submit" value="Eliminar">
		</form> 
</div>


@stop