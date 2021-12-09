<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cholqinfo;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Arr; 
class CholqinfoController extends Controller
{
    //

   public function solis(){


return view('ajqijab/solicitud');

   }
public function index(Request $request){


//     date_default_timezone_set("America/Guatemala");

// $fecha = "";
//     $fecha = $request->get('fecho');
        
 
//         // $cc = cholqinfo::whereDate('fecha' , $request->get('fecho'))->get();

// if($fecha == null){
// $fecha =date('d-m-Y');


// $nfecha = explode("-", $fecha);
// $dia = $nfecha[2];
// $mes = $nfecha[1];
// $anio = $nfecha[0];

// $fechaMod = $anio."/".$mes."/".$dia; 


// // select fecha,  nombre_nawal, glifo as glifo1,
// // (select glifo from cholqij, nawals where nawal_concepcion = nawals.inde and fecha = '20/03/1907') as glifo2,
// //  fuerza, nawal_concepcion from cholqij inner join nawals 
// // ON cholqij.inde = nawals.inde where fecha = '20/03/1907'


// $cc = DB::select("select fecha, total,  nombre_nawal, fuerza, glifo as glifo1,
// (select imginfo from cholqij, nawals where nombre_nawal = nawals.nombre and fecha = '$fechaMod') as imginfo12,
// (select nombre from cholqij, nawals where nawal_concepcion = nawals.inde and fecha = '$fechaMod') as ncnombre, n_concepcion,
// (select glifo from cholqij, nawals where nawal_concepcion = nawals.inde and fecha = '$fechaMod') as glifo2, 
// (select imginfo from cholqij, nawals where nawal_concepcion = nawals.inde and fecha = '$fechaMod') as imginfo2,
// (select nombre from cholqij, nawals where nawal_destino = nawals.inde and fecha = '$fechaMod') as ndnombre, n_destino,
// (select glifo from cholqij, nawals where nawal_destino = nawals.inde and fecha = '$fechaMod') as glifo3, 
// (select imginfo from cholqij, nawals where nawal_destino = nawals.inde and fecha = '$fechaMod') as imginfo3, 
// (select nombre from cholqij, nawals where nawal_derecha = nawals.inde and fecha = '$fechaMod') as ndernombre, n_derecha,
// (select glifo from cholqij, nawals where nawal_derecha = nawals.inde and fecha = '$fechaMod') as glifo4,
// (select imginfo from cholqij, nawals where nawal_derecha = nawals.inde and fecha = '$fechaMod') as imginfo4,
// (select nombre from cholqij, nawals where nawal_izquierda = nawals.inde and fecha = '$fechaMod') as niznombre,n_izquierda,
// (select glifo from cholqij, nawals where nawal_izquierda = nawals.inde and fecha = '$fechaMod') as glifo5,
// (select imginfo from cholqij, nawals where nawal_izquierda = nawals.inde and fecha = '$fechaMod') as imginfo5,
// (select nombre from cholqij, nawals where nawal_izquierda_concepcion = nawals.inde and fecha = '$fechaMod') as nizcnombre,n_izquierda_concepcion,
// (select glifo from cholqij, nawals where nawal_izquierda_concepcion = nawals.inde and fecha = '$fechaMod') as glifo6,
// (select imginfo from cholqij, nawals where nawal_izquierda_concepcion = nawals.inde and fecha = '$fechaMod') as imginfo6,
// (select nombre from cholqij, nawals where nawal_derecha_concepcion = nawals.inde and fecha = '$fechaMod') as ndercnombre,n_derecha_concepcion,
// (select glifo from cholqij, nawals where nawal_derecha_concepcion = nawals.inde and fecha = '$fechaMod') as glifo7,
// (select imginfo from cholqij, nawals where nawal_derecha_concepcion = nawals.inde and fecha = '$fechaMod') as imginfo7,
// (select nombre from cholqij, nawals where nawal_izquierda_destino = nawals.inde and fecha = '$fechaMod') as nizdenombre,n_izquierda_destino,
// (select glifo from cholqij, nawals where nawal_izquierda_destino = nawals.inde and fecha = '$fechaMod') as glifo8,
// (select imginfo from cholqij, nawals where nawal_izquierda_destino = nawals.inde and fecha = '$fechaMod') as imginfo8,
// (select nombre from cholqij, nawals where nawal_derecha_destino = nawals.inde and fecha = '$fechaMod') as nderdenombre,n_derecha_destino,
// (select glifo from cholqij, nawals where nawal_derecha_destino = nawals.inde and fecha = '$fechaMod') as glifo9,
// (select imginfo from cholqij, nawals where nawal_derecha_destino = nawals.inde and fecha = '$fechaMod') as imginfo9,
// (select nombre from cholqij, nawals where cargadornombre = nawals.inde and fecha = '$fechaMod') as cargadornombre,solarnumero,
// (select glifo from cholqij, nawals where cargadornombre = nawals.inde and fecha = '$fechaMod') as glifo10,
// (select imginfo from cholqij, nawals where nawal_derecha_destino = nawals.inde and fecha = '$fechaMod') as imginfo10
//  from cholqij inner join nawals 
// ON cholqij.inde = nawals.inde where fecha = '$fechaMod'");



// return view('cholqij.hoy')->with('chol', $cc)->with('fesha',Carbon::parse($fecha)->formatLocalized('%A %d %B %Y'));

// }else{

//         $nfecha = explode("-", $fecha);
//         $dia = $nfecha[0];
//         $mes = $nfecha[1];
//         $anio = $nfecha[2];
    
//         $fechaMod = $anio."/".$mes."/".$dia; 

//         // select fecha,  nombre_nawal, glifo as glifo1,
//         // (select nawals.glifo from cholqinfos, nawals where nawal_concepcion = nawals.inde and fecha = '20/03/1907') as glifo2,
//         //  fuerza, nawal_concepcion from cholqinfos inner join nawals 
//         // ON cholqinfos.inde = nawals.inde where fecha = '20/03/1907'


//         // select fecha,  nombre_nawal, fuerza, glifo as glifo1,
//         // (select nombre from cholqij, nawals where nawal_concepcion = nawals.inde and fecha = '$fechaMod') as ncnombre, n_concepcion,
//         // (select glifo from cholqij, nawals where nawal_concepcion = nawals.inde and fecha = '$fechaMod') as glifo2, 
//         // (select nombre from cholqij, nawals where nawal_destino = nawals.inde and fecha = '$fechaMod') as ndnombre, n_destino,
//         // (select glifo from cholqij, nawals where nawal_destino = nawals.inde and fecha = '$fechaMod') as glifo3, 
//         // (select nombre from cholqij, nawals where nawal_derecha = nawals.inde and fecha = '$fechaMod') as ndernombre, n_derecha,
//         // (select glifo from cholqij, nawals where nawal_derecha = nawals.inde and fecha = '$fechaMod') as glifo4,
//         // (select nombre from cholqij, nawals where nawal_izquierda = nawals.inde and fecha = '$fechaMod') as niznombre,n_izquierda,
//         // (select glifo from cholqij, nawals where nawal_izquierda = nawals.inde and fecha = '$fechaMod') as glifo5,
//         // (select nombre from cholqij, nawals where nawal_izquierda_concepcion = nawals.inde and fecha = '$fechaMod') as nizcnombre,n_izquierda_concepcion,
//         // (select glifo from cholqij, nawals where nawal_izquierda_concepcion = nawals.inde and fecha = '$fechaMod') as glifo6,
//         // (select nombre from cholqij, nawals where nawal_derecha_concepcion = nawals.inde and fecha = '$fechaMod') as ndercnombre,n_derecha_concepcion,
//         // (select glifo from cholqij, nawals where nawal_derecha_concepcion = nawals.inde and fecha = '$fechaMod') as glifo7,
//         // (select nombre from cholqij, nawals where nawal_izquierda_destino = nawals.inde and fecha = '$fechaMod') as nizdenombre,n_izquierda_destino,
//         // (select glifo from cholqij, nawals where nawal_izquierda_destino = nawals.inde and fecha = '$fechaMod') as glifo8,
//         // (select nombre from cholqij, nawals where nawal_derecha_destino = nawals.inde and fecha = '$fechaMod') as nderdenombre,n_derecha_destino,
//         // (select glifo from cholqij, nawals where nawal_derecha_destino = nawals.inde and fecha = '$fechaMod') as glifo9,
//         // (select nombre from cholqij, nawals where cargadornombre = nawals.inde and fecha = '$fechaMod') as cargadornombre,solarnumero,
//         // (select glifo from cholqij, nawals where cargadornombre = nawals.inde and fecha = '$fechaMod') as glifo10
//         //  from cholqij inner join nawals 
//         // ON cholqij.inde = nawals.inde where fecha = '$fechaMod'

//         $cc = DB::select("select fecha, total,  nombre_nawal, fuerza, glifo as glifo1,
//         (select imginfo from cholqij, nawals where nombre_nawal = nawals.nombre and fecha = '$fechaMod') as imginfo12,
//         (select nombre from cholqij, nawals where nawal_concepcion = nawals.inde and fecha = '$fechaMod') as ncnombre, n_concepcion,
//         (select glifo from cholqij, nawals where nawal_concepcion = nawals.inde and fecha = '$fechaMod') as glifo2, 
//         (select imginfo from cholqij, nawals where nawal_concepcion = nawals.inde and fecha = '$fechaMod') as imginfo2,
//         (select nombre from cholqij, nawals where nawal_destino = nawals.inde and fecha = '$fechaMod') as ndnombre, n_destino,
//         (select glifo from cholqij, nawals where nawal_destino = nawals.inde and fecha = '$fechaMod') as glifo3, 
//         (select imginfo from cholqij, nawals where nawal_destino = nawals.inde and fecha = '$fechaMod') as imginfo3, 
//         (select nombre from cholqij, nawals where nawal_derecha = nawals.inde and fecha = '$fechaMod') as ndernombre, n_derecha,
//         (select glifo from cholqij, nawals where nawal_derecha = nawals.inde and fecha = '$fechaMod') as glifo4,
//         (select imginfo from cholqij, nawals where nawal_derecha = nawals.inde and fecha = '$fechaMod') as imginfo4,
//         (select nombre from cholqij, nawals where nawal_izquierda = nawals.inde and fecha = '$fechaMod') as niznombre,n_izquierda,
//         (select glifo from cholqij, nawals where nawal_izquierda = nawals.inde and fecha = '$fechaMod') as glifo5,
//         (select imginfo from cholqij, nawals where nawal_izquierda = nawals.inde and fecha = '$fechaMod') as imginfo5,
//         (select nombre from cholqij, nawals where nawal_izquierda_concepcion = nawals.inde and fecha = '$fechaMod') as nizcnombre,n_izquierda_concepcion,
//         (select glifo from cholqij, nawals where nawal_izquierda_concepcion = nawals.inde and fecha = '$fechaMod') as glifo6,
//         (select imginfo from cholqij, nawals where nawal_izquierda_concepcion = nawals.inde and fecha = '$fechaMod') as imginfo6,
//         (select nombre from cholqij, nawals where nawal_derecha_concepcion = nawals.inde and fecha = '$fechaMod') as ndercnombre,n_derecha_concepcion,
//         (select glifo from cholqij, nawals where nawal_derecha_concepcion = nawals.inde and fecha = '$fechaMod') as glifo7,
//         (select imginfo from cholqij, nawals where nawal_derecha_concepcion = nawals.inde and fecha = '$fechaMod') as imginfo7,
//         (select nombre from cholqij, nawals where nawal_izquierda_destino = nawals.inde and fecha = '$fechaMod') as nizdenombre,n_izquierda_destino,
//         (select glifo from cholqij, nawals where nawal_izquierda_destino = nawals.inde and fecha = '$fechaMod') as glifo8,
//         (select imginfo from cholqij, nawals where nawal_izquierda_destino = nawals.inde and fecha = '$fechaMod') as imginfo8,
//         (select nombre from cholqij, nawals where nawal_derecha_destino = nawals.inde and fecha = '$fechaMod') as nderdenombre,n_derecha_destino,
//         (select glifo from cholqij, nawals where nawal_derecha_destino = nawals.inde and fecha = '$fechaMod') as glifo9,
//         (select imginfo from cholqij, nawals where nawal_derecha_destino = nawals.inde and fecha = '$fechaMod') as imginfo9,
//         (select nombre from cholqij, nawals where cargadornombre = nawals.inde and fecha = '$fechaMod') as cargadornombre,solarnumero,
//         (select glifo from cholqij, nawals where cargadornombre = nawals.inde and fecha = '$fechaMod') as glifo10,
//         (select imginfo from cholqij, nawals where nawal_derecha_destino = nawals.inde and fecha = '$fechaMod') as imginfo10
//          from cholqij inner join nawals 
//         ON cholqij.inde = nawals.inde where fecha = '$fechaMod'");



// // $cc = Arr::add($cc, 'fesha', Carbon::parse($fecha)->formatLocalized('%A %d %B %Y'));

// return view('cholqij.hoy')->with('chol', $cc)->with('fesha',Carbon::parse($fecha)->formatLocalized('%A %d %B %Y'));
// }

//     //else{
//     //  $noticias = Noticia::paginate(5);
//     //}

//     // return response($noticias);
//     // return view('cholqij.hoy');
    
return view('cholqij/hoy');
    
        }
    

    }






















