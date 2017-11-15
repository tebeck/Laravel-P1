<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenerosController extends Controller
{

public function listar() {
    $getGenres = Genre::all();
    return view("generos", compact("getGenres"));
}








}
