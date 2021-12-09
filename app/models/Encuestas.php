<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuestas extends Model
{
    use HasFactory;

    

    protected $table = "encuestas";

    protected $fillable = [

        "pueblo_origen",
        "auto_definicion",
        "biografia_encuesta",
        "telefono",
        "id_usuario",
        "dpi"
       

    ];



}
