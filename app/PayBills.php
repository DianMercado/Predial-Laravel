<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PayBills extends Model
{
    protected $fillable = ["clave_catastral", "telefono", 
    "correo", "comprobante_pago_cliente"];
}
