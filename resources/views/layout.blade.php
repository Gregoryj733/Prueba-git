<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('plugins/css/bootstrap.css')}}"> -->
	{!!Html::style('assets/css/bootstrap.css')!!}
	{!!Html::style('assets/css/bootstrap-theme.min.css')!!}
	{!!Html::style('assets/css/bootstrap.min.css')!!}
	<!--<link rel="stylesheet" href="{{asset('assets/css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"-->
	<title>Document</title>
</head>


<style type="text/css">
	
*{
	margin: 0;
	padding: 0;
}

html,body{
	height: 100%;	
}

.caja_1{
	
	border-radius: 25px;
	border: 2px solid #73AD21;
	height: 90px;
	width: 1000px;
	background-color: lightblue;
	margin-left: auto;
	margin-right: auto;
	position: absolute;

}

h4{

text-align: center;

}

footer{
	text-indent: 40px;
	line-height: 2.8;
}
ul,ol{
	padding: .3em;
	height: 20px;
	margin: auto;
	text-indent: 20px;
}

.caja_2{

	top: 100px;
	border: 2px solid #73AD21;
	height: 459px;
	width: 161px;
	margin-left: 6px;
	margin-right: auto;
	position: absolute;
}

.caja_3{
	
	top: 100px;
	padding: .8em;
	border-radius: 15px 50px;
	border: 2px solid #73AD21;
	height: 460px;
	width: 813px;
	margin-left: 180px;
	margin-right: auto;
	position: absolute;

}

.caja_4{
	
	top: 570px;
	border-radius: 25px;
	border: 2px solid #73AD21;
	height: 50px;
	width: 1000px;
	background-color: lightblue;
	margin-left: auto;
	margin-right: auto;
	position: absolute;

}

.caja_principal{
	height: 98%;
	width: 1000px;
	margin-left: auto;
	margin-right: auto;
	background-color: #FFFFFF;
	position: relative;

}

</style>

<body>
	<div class="caja_principal">

				<!-- Cabecera -->
				<div class="caja_1">
					<header> 
						<h1 align="center">Estacionamiento</h1>
						<h4>Carúpano</h4>
					</header>
				</div>
				

				<!-- Menu -->
				<div class="caja_2">
				<nav>
					<ul>
						<ol><a href="/">Inicio<a/></ol>
						<ol><a href="/registrar">Registrar<a/></ol>
						<ol><a href="/listado">Listado<a/></ol>
					</ul>
				</nav>
				</div>

				<!-- contenido -->
				<div class="caja_3">
				<article>
					<section>
						@yield('centro')
					</section>
					<section>
						@yield('alerta')
					</section>
				</article>
				</div>
			
				<div class="caja_4">
				<footer><strong>Gregory Rivera</strong></footer>
				</div>
	</div>



	{!!Html::style('assets/js/jquery.js')!!}
	{!!Html::style('assets/js/bootstrap.js')!!}
	<!--<script src="{{asset('assets/js/jquery.js')}}"></script>-->
	<!--<script src="{{asset('assets/js/bootstrap.js')}}"></script>-->
</body>
</html>