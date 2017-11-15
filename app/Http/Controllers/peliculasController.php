<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;


class PeliculasController extends Controller
{

  public function guardar(Request $r) {

    $mensajes = [
      "required" => "El campo :attribute es requerido",
      "min" => "El campo :attribute tiene un minimo de :min",
      "unique" => "El campo :attribute esta repetido",
      "max" => "El campo :attribute tiene un máximo de :max",
      "integer" => "El campo :attribute debe ser un número entero",
      "numeric" => "El campo :attribute debe ser un número",
      "string" => "El campo :attribute debe ser un texto",
      "date" => "El campo :attribute debe ser una fecha"
    ];

    $reglas = [
      "titulo" => "required|string|unique:movies,title",
      "premios" => "required|integer|min:0",
      "rating" => "required|numeric|min:0|max:10",
      "fecha_de_estreno" => "required|date",
      "duracion" => "required|integer|min:0"
    ];

    $this->validate($r, $reglas, $mensajes);

    $pelicula = new Movie(); // Agregamos a la base de datos con estos datos de la tabla movies.
    $pelicula->title = $r->input("titulo");
    $pelicula->release_date = $r->input("fecha_de_estreno");
    $pelicula->awards = $r->input("premios");
    $pelicula->length = $r->input("duracion");
    $pelicula->rating = $r->input("rating");
    $pelicula->genre_id = $r->input("genero");

    $pelicula->save();
    //Pelicula::create($r->all()); para usar esto, los campos del form deben llamarse iguales a los de la tabla.

    return redirect("/peliculas");
  }


  public function agregar()
  {
    $generos = Genre::all();
    return view("agregarPelicula", compact("generos"));
  }

  public function listar()
  {
    $peliculas = Movie::all();
    return view("peliculas", compact("peliculas"));
  }

  public function detalle($id)
  {
    $peliFinal = Movie::find($id);
    return view("detallePelicula", compact("peliFinal"));
  }

  public function borrar($id)
  {
    $borrarPeli =  Movie::find($id);
    $borrarPeli->delete(); // Si tira error de cascada, ver la estructura de la tabla.
    return redirect("/peliculas");
  }


  }

  // public function buscarPeli($nombre)
  // {



    // $peliculas = array(
    //      array(
    //          'nombre' => "Buscando a Nemo",
    //          'desc' => "DDD",
    //          'img' => "/img/nemo.jpg"
    //      ),
    //      array(
    //          'nombre' => 'Toy Story',
    //          'desc' => 'AAAA',
    //          'img' => "/img/toystory.jpg"
    //      ),
    //
    //      array(
    //          'nombre' => 'Toy Story 2',
    //          'desc' => 'Homepage',
    //          'img' => "/img/toystory.jpg"
    //      ),
    //      array(
    //          'nombre' => 'Ratatouille',
    //          'desc' => 'Homepage',
    //          'img' => "/img/toystory.jpg"
    //      )
    // );
    //
    //   $peliFinal = "No existe";
    //    foreach ($peliculas as $key => $val) {
    //        if ($val['nombre'] === $nombre) {
    //            $peliFinal = $val['nombre'];
    //            $srcImg = $val['img'];
    //        }
    //      }
    // return view("detallePelicula", compact("peliFinal", "srcImg"));
