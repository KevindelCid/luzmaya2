<?php

namespace App\Http\Controllers;
use App\models\Agenda;
use App\models\Reuniones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Ventas;
use App\Mail\ContinuacionEvMailable;
use App\Mail\ContinuacionEvCMailable;
use Exception;
use Illuminate\Support\Facades\Mail;

define("KEY","rElOjd1pARedveintey15");
define("COD","AES-128-ECB");

class AgendaController extends Controller
{
   public function index(){


return view("perfil.index");


   }



   function active(Request $request){


      $input = $request->all();
      $id = $input["idevento"];
      
      $datos = Agenda::find($id);
      $estado = $datos->estado;

  
   return array("estadoajax"=>$estado);
   




    
}







   public function guardarContinuacion(Request $request)
   {


      $input = $request->all();






      $evento = DB::table('agendas')->where('link',  $input['enlace'])->get();
      if ($evento != "[]") {




         foreach ($evento as $event) {
            $idcliente = $event->cliente;
         }
      } else {

         echo "<script> swal('Error','No puedes agregar un evento nuevo porque el usuario cliente no existe','error'); </script>";
      }


      if ($this->validacion($input["fecha"], $input["inicio"], $input["horafinal"])) {
         $titulo = $input['titulo'];

         if (isset($input["precio"])) {
            if ($input['titulo'] != null) {

               $titulo = $input['titulo'];
            } else {

               $titulo = "Sin título";
            }

            $agenda = Agenda::create([

               "id_usuario" => auth()->user()->id,
               "titulo" => $titulo,
               "fecha" => $input["fecha"],
               "hora_inicio" => $input["inicio"],
               "hora_final" => $input["horafinal"],
               "descripcion" => $input["descripcion"],
               "estado" => 2,
               "precio" => $input["precio"],
               "cliente" => $idcliente,

            ]);
         } else {


            $agenda = Agenda::create([

               "id_usuario" => auth()->user()->id,
               "titulo" => $titulo,
               "fecha" => $input["fecha"],
               "hora_inicio" => $input["inicio"],
               "hora_final" => $input["horafinal"],
               "descripcion" => $input["descripcion"],
               "estado" => 2,

               "cliente" => $idcliente,



            ]);



            $data = Agenda::latest('id')->first();

            $idevento = $data['id'];


            $venta = Ventas::create([
          
               "id_usuario"=> auth()->user()->id,
               "id_evento"=>$idevento,
               "precio"=>0,
               "estado"=>"completado",
               "cliente"=>$idcliente,
              
            ]);
       


            $evento = DB::table('agendas')->where('id',  $idevento )->get();
            $correoA = "sin info";
            
            
            foreach($evento as $event){
            
               
               $descripcionEv = $event->descripcion;
               $eventoname=  $event->titulo;
           $eventofecha = $event->fecha;
           $eventohora =$event->hora_inicio;
   
               // por probar
            $link = openssl_encrypt(auth()->user()->id."XfWS+".$event->id_usuario."XfWS+".$event->fecha,COD,KEY);
            
            }
            $us = DB::table('users')->where('id',  $correoA )->get();
            foreach($us as $user){
   
               $correoAj = $user->email;
            }
            $usClientes = DB::table('users')->where('id',  $idcliente )->get();
            foreach($usClientes as $user){
   
               $correoC = $user->email;
            }
            
            //$trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
            $link = strtr($link, "/", "t");
            
    $updateven2=Agenda::findOrfail($idevento);
    
    $updateven2->link = $link;
    
    $updateven2->save();
    
    $mensaje = "El evento ha sido reservado exitosamente";
    


            $data = array(
                'correoA'      => auth()->user()->email ,
                'descripcion' => $descripcionEv,
                'titulo' => $eventoname,
                'fecha' => $eventofecha,
                'hora' =>$eventohora,
                'link'   =>  'https://luzmaya.com/reuniones/'.$link,
                'correoC' => $correoC
            );
        
       
        
            Mail::to(auth()->user()->email)->send(new ContinuacionEvMailable($data));
        
            Mail::to($correoC)->send(new ContinuacionEvCMailable($data));

         //    echo "<script> swal('Error','No fue posible enviar el correo electrónico de notificación ya que los servicios de Gmail han fallado '".$e."'); </script>";

         // }


         }

         // Reuniones::create([

         //    id_evento


         // ]);




         return response()->json(["ok" => true]);
      } else {

         return response()->json(["ok" => false]);
      }
   }




public function editar(Request $request){
    
    
   $input = $request->all();


   $evento = Agenda::findOrFail($input['idE']);

 
   $evento->titulo = $input['tituloE'];

   $evento->fecha = $input['fechaE'];
   $evento->hora_inicio = $input['horaE'];
   $evento->hora_final = $input['horafinal'];
   $evento->descripcion = $input['descriE'];
if(auth()->user()->tipo == 2){
   $evento->precio = $input['precioE'];
}

  
   if($evento->save()){

      return response()->json(["ok"=>true]);

   }
   else{
    
           return response()->json(["ok"=>false]);
     
        }

    
}









public function guardar(Request $request){
    
    
    $input = $request->all();


    

    if($this->validacion($input["fecha"], $input["inicio"], $input["horafinal"])){
$titulo = $input['titulo'];

if(isset($input["precio"])){
   if($input['titulo'] != null ){

$titulo = $input['titulo'];
   }else{

      $titulo = "Sin título";

   }

               $agenda = Agenda::create([
      
                  "id_usuario"=> auth()->user()->id,
                  "titulo"=>$titulo,
                  "fecha"=>$input["fecha"],
                  "hora_inicio"=>$input["inicio"],
                  "hora_final"=>$input["horafinal"],
                  "descripcion"=>$input["descripcion"],
                  "estado"=> 1,
                  "precio"=>$input["precio"],
      
               ]);
            }else{


               $agenda = Agenda::create([
      
                  "id_usuario"=> auth()->user()->id,
                  "titulo"=>$titulo,
                  "fecha"=>$input["fecha"],
                  "hora_inicio"=>$input["inicio"],
                  "hora_final"=>$input["horafinal"],
                  "descripcion"=>$input["descripcion"],
                  "estado"=> 1,
                  
      
               ]);

            }

               // Reuniones::create([

               //    id_evento


               // ]);




               return response()->json(["ok"=>true]);
               
         } else{
     
            return response()->json(["ok"=>false]);
      
         }

     
}



public function mostrar(){

   // $agenda = Agenda::all();
   // $n_agenda =[];

   // foreach($agenda as $valor){

   //    $n_agenda[] = [

   //       "id"=>$valor->id,
   //       "start"=>$valor->fecha . " " . $valor->hora_inicio,
   //       "end"=>$valor->fecha . " ". $valor->hora_final,
   //       "title"=>$valor->titulo,
   //       "backgroundColor"=>$valor->estado == 1 ? "#7ACF2A" : "#CF2A2A",
   //       "textColor"=>"#fff",
   //       "extendedProps"=>[
   //          "id_usuario"=>$valor->id_usuario,
   //          "precio"=>$valor->precio,
            
   //       ]

   //    ]; 

 //  }
 
}


public function eventito(Request $request){


   $input = $request->all();
   $id = $input["id"];
   
   $datos = Agenda::find($id);
 
   $descripcion = $datos->descripcion;
   $precio = $datos->precio;
// $input = $request->all();

   // return view('agenda.index')->with('datos', $id);
   // return view("agenda.index")->with('datos', $id);

//    return response()->json([
//       'name' => 'Abigail',
//       'state' => 'CA'
//   ]);  
return array("datoid"=>$descripcion,"precio"=>$precio);

   // return response()->json(["ok"=>true ]);
   
// return view("agenda.index")->with("dato","POR LA GRAN PUTAAAAA FUNCIONÄ MIERDA!!" );
 }





 public function eventitoajqij(Request $request){

      $input = $request->all();
 $id = $input["id"];


      $datos = Agenda::find($id);
      $descripcion = $datos->descripcion;
      $precio = $datos->precio;
  

      //  Agenda::find($id);

   //    $descripcion = $datos['descripcion'];
   //   dd($descripcion);
   // $input = $request->all();
   
      // return view('agenda.index')->with('datos', $id);
      // return view("agenda.index")->with('datos', $id);
   
   //    return response()->json([
   //       'name' => 'Abigail',
   //       'state' => 'CA'
   //   ]);  
   return array("datoid"=>$descripcion,"precio"=>$precio);
   
      // return response()->json(["ok"=>true ]);
      
   // return view("agenda.index")->with("dato","POR LA GRAN PUTAAAAA FUNCIONÄ MIERDA!!" );
    }



public function listar(){



   // DB::select('SELECT * FROM agendas where');
   $eventos = 
   DB::table('agendas')->where('id_usuario', auth()->user()->id )->orwhere('cliente', auth()->user()->id )->get();

   // $eventos = Agenda::all();
   // dd($eventos);
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
            "id_usuario"=>$evento->id_usuario,
            "precio"=>$evento->precio,


         ]

      ]; 


   }

   return response()->json($eve);

}

public function validacion($fecha, $horai, $horaf){


   // $agenda = Agenda::select("*")
   //    ->whereDate('fecha', $fecha)
   //    ->whereBetween('hora_inicio',[$horai, $horaf])
   //    ->orwhereBetween('hora_final',[$horai, $horaf])
   //    ->whereTime('hora_inicio','>', $horai)
   //    ->whereTime('hora_final','<',$horai)
   //    ->where('id_usuario', '==', auth()->user()->id )
   //    ->first();

      return  true ;


}
}

// public function guardar(Request $request){
    

//     $input = $request->all();

//    if($this->validacion($input["fecha"], $input["inicio"], $input["horafinal"])){

//          $agenda = Agenda::create([

//             "id_usuario"=> auth()->user()->id,
//             "titulo"=>$input["titulo"],
//             "fecha"=>$input["fecha"],
//             "hora_inicio"=>$input["inicio"],
//             "hora_final"=>$input["horafinal"],
//             "descripcion"=>$input["descripcion"],

//          ]);

//          return response()->json(["ok"=>true]);

//    } else{
//       return response()->json(["ok"=>false]);

//    }