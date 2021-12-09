<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    // protected $guarded = [];  

   protected $table = "agendas";

    protected $fillable = [

        "id_usuario",
        "titulo",
        "fecha",
        "hora_inicio",
        "hora_final", 
        "descripcion",
        "estado",
        "precio",
        "cliente"
       

    ];

}
