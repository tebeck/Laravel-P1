<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();


Route::get('/', function () {
    return view('/layouts/masterPage');
});

Route::get("/borrarPelicula/{id}", "peliculasController@borrar");

Route::get('/peliculas', 'peliculasController@listar');

Route::get('/peliculas/{nombre}', 'peliculasController@buscarPeli');

Route::get('/generos', 'GenerosController@listar');

Route::get('/actores', 'ActorController@mejoresActores');
Route::get('/actores', 'ActorController@listar');



Route::get('/home', 'HomeController@index')->name('home');

Route::get("/pelicula/{id}", "peliculasController@detalle");
Route::post("/agregarPelicula", "peliculasController@guardar");

Route::get("/genero/{id}", "GenerosController@show");

//---Actors--

Route::get("/addActor", "ActorController@agregar");
Route::post("/addActor", "ActorController@guardar");
