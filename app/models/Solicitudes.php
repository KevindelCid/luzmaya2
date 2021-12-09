<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
    use HasFactory;



    protected $table = "solicitudes_profesionales";

    protected $fillable = [

        "id_usuario",
        "id_tipo_profesional",
        "id_encuesta"
       

    ];



 

}
