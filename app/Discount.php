<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = ["clave_catastral", "correo", 
    "tipo_tramite", "archivo_comprobante"];
}

