<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{
    protected $fillable = ["nombre", "apellido_paterno", 
    "apellido_materno", "clave_catastral"];
}
