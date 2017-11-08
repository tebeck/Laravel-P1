<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    // protected $table = users
    protected $timestamp = false;
    protected $guarded = []; // Podes modificar todas las tablas, si no hay nada en este array.


}
