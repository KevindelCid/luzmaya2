<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Models\Encuestas;
use App\Models\Solicitudes;
use PhpParser\Node\Scalar\Encapsed;

class AdminController extends Controller
{











    public function confirmation(Request $request, $id){

       
      
        
           $update = DB::update('update agendas set estado = 4
           where id=' . $id);
           $mensaje = "Se ha actualizado el estado del evento";
           $mensajeErr = "No se ha podido actualizar el evento";

   if ($update) {
    return array("mensaje"=>$mensaje);
        
   } else {
    return array("mensaje"=>$mensajeErr);
   }
         }
        
        
        
        


         public function confirmationAll($idp){

       
      
        
            $update = DB::update('update agendas set estado = 4
            where id_usuario =' . $idp.' and estado = 3');
            $mensaje = "Se han actualizado todos los eventos";
            $mensajeErr = "No se ha podido actualizar ningún evento";
 


    if ($update) {
     return array("mensaje"=>$mensaje);
         
    } else {
     return array("mensaje"=>$mensajeErr);
    }
          }
         






    function pago($idp, $ide)
    {


        if ($ide == 'a') {

            // vamos a mostrar datos de toooodooo lo que este profesional ha vendido

            $allEvents = DB::select('select users.email, users.id as id, users.name as nombre, COUNT(*) AS consultas_totales, 
                                SUM(agendas.precio) as ganancia_bruta,
                                (((SUM(agendas.precio)*5)/100)) as comision,
                                SUM(agendas.precio)-(((SUM(agendas.precio)*5)/100)) as depositar
                                from  agendas join users 
                                ON agendas.id_usuario = users.id 
                                where users.tipo = 2 and agendas.estado = 3 and users.id = '.$idp.'
                                GROUP BY users.email, users.name, users.id
                                ORDER BY  COUNT(*) desc');

            return view('admin/confirmar-pago',compact('allEvents'));

        } else {

            //si no vamos a mostrar lo del evento en especifico 

            $onlyOneEvent = DB::select('select  
            agendas.id as id,
            agendas.precio as ganancia_bruta,
            ((agendas.precio*5)/100) as comision,
            agendas.precio-(((agendas.precio*5)/100)) as depositar
            from agendas where id = '.$ide);
            $prof = DB::select('select  * from users where id = '.$idp);


            // dd($onlyOneEvent);

            return view('admin/confirmar-pago',compact('onlyOneEvent','prof'));


        }



       
    }

    function negocios()
    {

        if (auth()->user()->tipo != 39) {
            return redirect()->route('home');
        }

        $data = DB::select('select  users.id as id, users.name as nombre, COUNT(*) AS consultas_totales, 
    SUM(agendas.precio) as ganancia_bruta,
    (((SUM(agendas.precio)*5)/100)) as comision,
    SUM(agendas.precio)-(((SUM(agendas.precio)*5)/100)) as depositar
from  agendas join users 
    ON agendas.id_usuario = users.id 
    where users.tipo = 2 and agendas.estado = 3
GROUP BY users.name, users.id
ORDER BY  COUNT(*) desc');

        return view('admin/negocios', compact('data'));
    }

    function detalles($id)
    {




        if (auth()->user()->tipo != 39) {
            return redirect()->route('home');
        }
        $profesional =  DB::select('select* from users where id =' . $id);



        $eventos = DB::select('select  users.id as id, users.name as nombre, COUNT(*) AS consultas_totales, 
SUM(agendas.precio) as ganancia_bruta,
(((SUM(agendas.precio)*5)/100)) as comision,
SUM(agendas.precio)-(((SUM(agendas.precio)*5)/100)) as depositar
from  agendas join users 
ON agendas.id_usuario = users.id 
where users.tipo = 2 and agendas.estado = 3 and users.id = ' . $id . '
GROUP BY users.name, users.id
ORDER BY  COUNT(*) desc');



        $data = DB::select('select agendas.id as ida, agendas.cliente, agendas.fecha, 
    agendas.precio as ganancia_bruta, 
    (((agendas.precio*5)/100)) as comision,
    agendas.precio-(((agendas.precio*5)/100)) as depositar
    from agendas join users 
        ON agendas.id_usuario = users.id
        where users.id =' . $id . ' and agendas.estado = 3');




        return view('admin/detalles', compact('data', 'profesional', 'eventos'));
    }




    function perfil($id, $ids, $ide)
    {

        if (auth()->user()->tipo != 39) {
            return redirect()->route('home');
        }

        $encuesta =  DB::select('select * from encuestas where id_encuesta = :id', ['id' => $ide]);

        $users = User::find($id);



        return view('admin/perfil-solicitante', compact('users', 'id', 'ids', 'ide', 'encuesta'));
    }



    function acept(Request $request)
    {


        if (auth()->user()->tipo != 39) {
            return redirect()->route('home');
        }
        $datos = $request->all();
        $id = $datos['user'];


        $usuario = User::findOrFail($id);

        $usuario->tipo = $datos['tipo'];
        $usuario->descripcion_user = $datos['bio'];
        $usuario->dpi = $datos['dpi'];
        $usuario->save();
        $ids = $datos['solicitud'];
        $ide = $datos['encuesta'];

        Solicitudes::where('id_solicitud', $ids)->delete();
        Encuestas::where('id_encuesta', $ide)->delete();

        $encuesta =  DB::select('select * from encuestas where id_encuesta = :id', ['id' => $ide]);






        // aqui seria nitido mandar un correo electrónico notiicandole a la persona que su solicitud fue aceptada
        $mensaje = "El usuario ha sido aceptado como ajq'ij";

        return redirect(action('AdminController@index'))->with('mensaje', $mensaje);
    }

    function negation(Request $request)
    {

        if (auth()->user()->tipo != 39) {
            return redirect()->route('home');
        }

        $datos = $request->all();
        $id = $datos['user'];
        $ids = $datos['solicitud'];
        $ide = $datos['encuesta'];

        Solicitudes::where('id_solicitud', $ids)->delete();
        Encuestas::where('id_encuesta', $ide)->delete();




        $mensaje = "El usuario ha sido rechazado";



        // aqui seria nitido mandar un correo electrónico notiicandole a la persona que su solicitud fue aceptada

        return redirect(action('AdminController@index'))->with('mensaje', $mensaje);
        // return view('admin/cp',compact('mensaje'));
    }



    function index()
    {

        if (auth()->user()->tipo != 39) {
            return redirect()->route('home');
        }



        $data = Encuestas::join('solicitudes_profesionales', 'solicitudes_profesionales.id_encuesta', '=', 'encuestas.id_encuesta')
            ->join('users', 'users.id', '=', 'solicitudes_profesionales.id_usuario')
            ->paginate(5);






        // $eventos = DB::select("select * from agendas  inner join users on agendas.id_usuario = users.id where fecha >= '$fee'
        // and (cliente=".auth()->user()->id." or id_usuario = ".auth()->user()->id.")   ORDER BY fecha");


        // $eventos = new Paginator($eventoss, 1);

        // $eventos = $this->arrayPaginator($eventos);





        return view('admin/cp', compact('data'));
    }
}
