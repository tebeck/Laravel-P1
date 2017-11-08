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
}
