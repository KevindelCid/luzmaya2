<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    
    protected $table = "ventas";

    protected $fillable = [

        "id_usuario",
        "id_evento",
        "clave_transaccion",
        "paypaldatos",
        "correo",
        "precio",
        "estado"
       
    ];




}
