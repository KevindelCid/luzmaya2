<?php

namespace App\Http\Controllers;




use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ReunionesController extends Controller
{
    

function indexdos(){

   $status = 4;

  return view('reuniones.index')->with("estado",$status);
}

 public function index($enlace){



  $evento = DB::table('agendas')->where('link',  $enlace )->get();
if($evento != "[]"){




  foreach($evento as $event){
   
isset(auth()->user()->id)?
    ( $event->cliente == auth()->user()->id |  $event->id_usuario == auth()->user()->id ? $status = 1 : $status = 2 )
     :
     $status = 3;

    
     date_default_timezone_set('America/Guatemala');
     $fecha_actual = date("Y-m-d H:i:s",time());
    
     $fecha_entrada = $event->fecha." ".$event->hora_inicio;
         
$fecha =  $event->fecha;
$hora = $event->hora_inicio;
$titulo = $event->titulo;
$descri = $event->descripcion;


     
     if($fecha_actual > $fecha_entrada)
        {
      //   echo "La Reunión ha termindo";
      $cadena = "La reunion está en curso";

         

        }else
           {
         //   echo "la reunion aun no empieza \n";
           $date1 = new DateTime($fecha_entrada);
           $date2 = new DateTime($fecha_actual);
           $diff = $date1->diff($date2);
           // will output 2 days
          $cadena =  "Faltan ".$diff->m." mes(es) ". $diff->days . ' dia(s) '.$diff->h." hora(s) ".$diff->i." minutos para el inicio de esta reunion";


           }



  }
  isset($status)?  :$status = 5;




return view('reuniones.index')->with("enlace",$enlace)->with("estado",$status)->with("cadena",$cadena)
->with("fecha",$fecha)->with("hora",$hora)->with("titu",$titulo)->with("descri",$descri);
}else{

  $mensaje = "No se ha encontrado ninguna reunión
  ";
  
return view('reuniones.index')->with("mensaje",$mensaje);

}


    // $datos['ajqijs']=ajqij::paginate(5);
    
  }

//  function enla($enlace){


//   return array("enlace"=>$enlace);
//  }




public function listar($id){

  $eventos = 
   DB::table('agendas')->where('id_usuario', $id)->where('tipo',2);

  $eve=[];

  foreach($eventos as $evento){


     $eve[] = [

        "id"=>$evento->id,
        "start"=>$evento->fecha . " " . $evento->hora_inicio,
        "end"=>$evento->fecha . " ". $evento->hora_final,
        "title"=>$evento->titulo,
        "backgroundColor"=>$evento->estado == 1 ? "#7ACF2A" : "#CF2A2A",
        "textColor"=>"#fff",
        "extendedProps"=>[
           "id_usuario"=>$evento->id_usuario
        ]

     ]; 


  }

  return response()->json($eve);

}






}
