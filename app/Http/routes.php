<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

 Route::get('/', function () {
      return view('inicio');
 });

 Route::get('/alerta', function () {
      return view('test');
 });

Route::get('/chofe/{id}', function ($id) {
 	
	 $chofer=App\chofer::find($id);
      echo "Nombre: ". $chofer->nombre; echo "<br>";
      //echo "Telefono: ". $chofer->telefono->tel;

      echo "Telefono";echo "<br>";
      foreach ($chofer->telefono as $tele) {
      	echo $tele->tel. "<br>";
      }

 });

 Route::get('/telefon/{id}', function ($id) {
 	
	 $tel=App\telefono::find($id);
      echo "Telefono: ". $tel->tel; echo "<br>";
      //echo "Nombre: ". $tel->chofer->nombre;

   
 });

Route::resource('/listado','TodoController');
Route::get('/registrar','AgregarController@presentar');
Route::post('/registrar','AgregarController@guardar');




