<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Ventas;
use App\models\Agenda;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Mail\ReservacionMailable;
use App\Mail\ReservacioncMailable;
use Illuminate\Support\Facades\Mail;

// use App\models\pagos;
define("KEY","rElOjd1pARedveintey15");
define("COD","AES-128-ECB");

class PagosController extends Controller
{
  



    function confirmationfree(Request $request){



        $input = $request->all();
       
        $idevento = $input["id"];
      
    
    
        $venta = Ventas::create([
          
            "id_usuario"=> auth()->user()->id,
            "id_evento"=>$idevento,
            "precio"=>0,
            "estado"=>"completado",
            "cliente"=>0,
           
         ]);
    
    
    
    
         $updateven=Agenda::findOrfail($idevento);
        
         $updateven->estado = 3;
         $updateven->cliente = auth()->user()->id;
         
         $updateven->save();
         
         $evento = DB::table('agendas')->where('id',  $idevento )->get();
         
     $correoA = "sin info";
         
         foreach($evento as $event){
         
            $correoA = $event->id_usuario;
            $eventoname=  $event->titulo;
        $eventofecha = $event->fecha;
        $eventohora =$event->hora_inicio;
        
         $link = openssl_encrypt(auth()->user()->id."XfWS+".$event->id_usuario."XfWS+".$event->fecha,COD,KEY);
         
         }
         
         
          $us = DB::table('users')->where('id',  $correoA )->get();
         foreach($us as $user){

            $correoAj = $user->email;
         }
         
         
         
         
         //$trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
         $link = strtr($link, "/", "t");
         
    
    
    
    
    
      
        
    
    
    
    $updateven2=Agenda::findOrfail($idevento);
    
    $updateven2->link = $link;
    
    $updateven2->save();
    
    $mensaje = "El evento ha sido reservado exitosamente";
    
    
    
      $data = array(
        'correoA'      =>  $correoA,
        'titulo' => $eventoname,
        'fecha' => $eventofecha,
        'hora' =>$eventohora,
        'link'   =>  'https://luzmaya.com/reuniones/'.$link,
        'correoC' => auth()->user()->email
    );

 

    Mail::to($correoAj)->send(new ReservacionMailable($data));

    Mail::to(auth()->user()->email)->send(new ReservacioncMailable($data));

    
    
    
    return array("mensaje"=>$mensaje);
    
    
    
    
    
    
    }



function token(Request $request){







    $input = $request->all();
    $tokenm = $input["paymentToken"];
    $idevento = $input["idevento"];
    $paymentid = $input["paymentID"];
    
    //sandbox
    // $clientId = "AYSaPOpSAY0hkzp0GinLbXfkEegCbZSWj_649wZHJ17LEXVRUWC9n1Sq5J6xPAtW4ngRHejZS_zGLPhj";
    // $Secret = "EAWEggvsy0yaEyeUYOOB5yh3zVyQR7LE7dlH6Tixy4C_vlj8AkWIiwpr7sTkd8iW58t7aWnocR9cRgxL";


//production
$clientId = "Ad-gpEmn2auvNk9Yh22pimfQgUc8Vc1G-TKjNLPXvsf6plz6joBWNb529_9uMwRIMUA87h7Xe5-lP5Ye";
$Secret = "ENH4nC7l7IPxBoLhc54i2qFCQY8rVVEh3cKRw7QSTI9STtXtRqcYMcoTAKI2BwWHsRXSkH1IbU1aZ2I2";


    $login =  curl_init("https://api-m.sandbox.paypal.com/v1/oauth2/token");
    curl_setopt($login, CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($login, CURLOPT_USERPWD,$clientId.":".$Secret);
    curl_setopt($login, CURLOPT_POSTFIELDS,"grant_type=client_credentials");
    $Respuesta = curl_exec($login);
   

    $objectResponse = json_decode($Respuesta);
    $AccesToken = $objectResponse->access_token;

//  print_r($AccesToken);
 

$venta = curl_init("https://api-m.sandbox.paypal.com/v1/payments/payment/".$paymentid);
curl_setopt($venta	, CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$AccesToken));
curl_setopt($venta, CURLOPT_RETURNTRANSFER,TRUE);

$sellResponse = curl_exec($venta);


$transactionData = json_decode($sellResponse);

$state = $transactionData->state;
$email = $transactionData->payer->payer_info->email;

$total = $transactionData->transactions[0]->amount->total;
$currency = $transactionData->transactions[0]->amount->currency;
$custom = $transactionData->transactions[0]->custom;

$code = explode("#",$custom); 
$sidRecuperado = $code[0];
$claveVentaRecuperada= openssl_decrypt($code[1], COD,KEY);



// $pago = curl_init("https://api-m.sandbox.paypal.com/v2/checkout/orders");
// curl_setopt($pago	, CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$AccesToken));



curl_setopt($venta	, CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$AccesToken));
curl_setopt($venta, CURLOPT_RETURNTRANSFER,TRUE);


curl_close($venta);
curl_close($login);



$updateVenta=Ventas::findOrfail($claveVentaRecuperada);
$updateVenta->paypaldatos = $sellResponse;
$updateVenta->estado = "aprobado";
$updateVenta->save();


$updateven=Agenda::findOrfail($idevento);

$updateven->estado = 2;
$updateven->cliente = auth()->user()->id;

$updateven->save();

$evento = DB::table('agendas')->where('id',  $idevento )->get();

foreach($evento as $event){

   
$link = openssl_encrypt(auth()->user()->id."XfWS+".$event->id_usuario."XfWS+".$event->fecha,COD,KEY);

}


//$trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
$link = strtr($link, "/", "t");



$update2Venta = Ventas::where("clave_transaccion", $sidRecuperado)->
where("precio", $total)->
where("id", $claveVentaRecuperada)->

update(["estado" => "completado"]);



$updateven2=Agenda::findOrfail($idevento);

$updateven2->estado = 3;
$updateven2->link = $link;
$err = false;
$update2Venta == 1 ? $updateven2->save(): $err = true;


$state == "approved" ? $estado = 1 : $estado = 0;


if($err == true){
    
$updateven2=Agenda::findOrfail($idevento);

$updateven2->estado = 1;
$updateven2->link = null;
$updateven2->cliente = null;
$updateven2->save();
$estado = 0;
}

    return view("pagar/verificacion")->with('estado',$estado);

}



function index(Request $request){

    $input = $request->all();
    $titu = $input["titulo"];
    $precio = $input["precio"];
    $ide =  $input["ide"];
 
    $sid = Session::getId();
    

    $afen = Agenda::find($ide);


if($afen->estado == 2 |$afen->estado == 3 ){

    return Redirect::back();

}


isset(auth()->user()->id)?

$cosa = Ventas::create([
      
        "id_usuario"=> auth()->user()->id,
        "id_evento"=> $ide,
        "clave_transaccion"=>$sid,
        "paypaldatos"=>"nada por ahora",
        "correo"=> auth()->user()->email,
        "precio"=>$precio,
        "estado"=>"pendiente",
       
     ])
     :


     $cosa =    Ventas::create([
      
        "id_usuario"=> "0",
        "clave_transaccion"=>$sid,
        "paypaldatos"=>"nada por ahora",
        "correo"=> "a este punto solo se debe solicitar",
        "precio"=>$precio,
       

     ]);


$idVenta = $cosa->id;
$encventa = openssl_encrypt($idVenta,COD,KEY);



    return view('pagar.index')->with('titu', $titu)->with('precio',$precio)->with('idventa',$encventa)
    ->with('id_evento',$ide)->with('datosEvento',$afen);
}


}