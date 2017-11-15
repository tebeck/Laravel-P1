<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function mejoresActores(){
        $getMejores = Actor::where("rating", ">", 7)->get();
        return view("actores", compact("getMejores"));
    }

    public function listar(){
      $getActors = Actor::all();
      return view("actores", compact("getActors"));
    }

    public function guardar(Request $r){


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

}
