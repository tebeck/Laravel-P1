<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peliculasController extends Controller
{

  public function listar()
  {
    $peliculas = [
           "Toy Story",
           "Toy Story 2",
           "Buscando a Nemo",
           "Ratatouille"
         ];

    return view("peliculas", compact("peliculas"));
  }

  public function buscarPeli($nombre)
  {
    $peliculas = array(
         array(
             'nombre' => "Buscando a Nemo",
             'desc' => "DDD",
             'img' => "/img/nemo.jpg"
         ),

         array(
             'nombre' => 'Toy Story',
             'desc' => 'AAAA',
             'img' => "/img/toystory.jpg"
         ),

         array(
             'nombre' => 'Toy Story 2',
             'desc' => 'Homepage',
             'img' => "/img/toystory.jpg"
         ),
         array(
             'nombre' => 'Ratatouille',
             'desc' => 'Homepage',
             'img' => "/img/toystory.jpg"
         )
    );
      $peliFinal = "No existe";
       foreach ($peliculas as $key => $val) {
           if ($val['nombre'] === $nombre) {
               $peliFinal = $val['nombre'];
               $srcImg = $val['img'];
           }
         }

    return view("detallePelicula", compact("peliFinal", "srcImg"));

  }
}
