<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\ajqij;
use App\Models\Encuestas;
use App\Models\Solicitudes;
use App\User;
use App\models\Agenda;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;

class AjqijabController extends Controller
{



  function validatea(Request $request)
  {



    $v = Validator::make($request->all(), [
      'biografia_encuesta' => [ 'required','string','unique:encuestas'],
      'telefono' => ['required', 'string', 'max:12','min:8', 'unique:encuestas'],
      'dpi' => ['required', 'string', 'max:13','min:13', 'unique:encuestas'],
    
  ]);


  if ($v->fails()) {
      return redirect()->back()->withInput()->withErrors($v->errors());
  } 



    $input = $request->all();

    Encuestas::create([
      'pueblo_origen' => $input['pueblo'],
      'auto_definicion' => $input['definicion'],
      'biografia_encuesta' => $input['biografia_encuesta'],
      'telefono' => $input['telefono'],
      'id_usuario' => auth()->user()->id,
      'dpi' => $input['dpi'],
    ]);
$dato = Encuestas::latest('id_encuesta')->where('id_usuario',auth()->user()->id)->first();


Solicitudes::create([
  
  'id_usuario' => auth()->user()->id,
  'id_tipo_profesional' => 1,
  'id_encuesta' => $dato->id_encuesta,

]);


    return view('ajqijab/validate-ajqij');
  }
  
  public function index(Request $request)
  {

    //    $datos['users']=ajqij::paginate(5);
    $datos =
      DB::select("SELECT users.id as id, users.foto as foto,
users.descripcion_user as descripcion_user, users.name, COUNT(*) AS num FROM 
agendas join users 
ON agendas.id_usuario = users.id 
WHERE
fecha >= '2021-10-10' 
AND tipo = 2 
GROUP BY users.name, users.id, users.foto, users.descripcion_user
ORDER BY COUNT(*) DESC");



    $datos = $this->arrayPaginator($datos, $request);



    return view('ajqijab.index')->with('ajqijs', $datos);
  }





  public function arrayPaginator($array, $request)
  {
    $page = $request->input('page', 1);

    $perPage = 4; // este es el numero de registros que se mostrarán en cada pagina de la paginacion
    $offset = ($page * $perPage) - $perPage;

    return new LengthAwarePaginator(
      array_slice($array, $offset, $perPage, true),
      count($array),
      $perPage,
      $page,
      ['path' => $request->url(), 'query' => $request->query()]
    );
  }


  public function verperfil($id)
  {


    // $eventos = 
    // DB::table('agendas')
    // ->join('users', 'agendas.id', '=', 'users.id')
    // ->where('id_usuario', $id)
    // ->where('users.tipo', 2);


    $consulta = DB::select("select  * from users where id = $id and tipo = 2");

    // $listar = DB::select("select  * from agendas inner join users on agendas.id_usuario = users.id
    // where id_usuario = $id and tipo = 2");






    return view('ajqijab/perfil')->with('id', $id)->with('infoajqij', $consulta); //solo se llama a la vista sin los parametros extras que tiene la url

  }



  public function evento(Request $request)
  {

  
    $input = $request->all();
    $id = $input["id"];




    $datos = Agenda::find($id);
    $descripcion = $datos->descripcion;
    $precio = $datos->precio;
    $estado = $datos->estado;
    // $input = $request->all();

    // return view('agenda.index')->with('datos', $id);
    // return view("agenda.index")->with('datos', $id);

    //    return response()->json([
    //       'name' => 'Abigail',
    //       'state' => 'CA'
    //   ]);  
    return array("datoid" => $descripcion, "precio" => $precio, "id" => $id, "estado" => $estado);

    // return response()->json(["ok"=>true ]);

    // return view("agenda.index")->with("dato","POR LA GRAN PUTAAAAA FUNCIONÄ MIERDA!!" );
  }





  public function verperfil2($id)
  {
    date_default_timezone_set('America/Guatemala');
    $fee =  Carbon::now()->format('Y-m-d');



// Aquí es donde muestro los eventos disponibles de cada sacerdote
    $eventos = DB::select("select agendas.id, agendas.fecha, agendas.titulo, agendas.hora_inicio, agendas.hora_final, agendas.titulo, agendas.estado from agendas inner join users on agendas.id_usuario = users.id where id_usuario = $id and tipo = 2 and agendas.fecha >= '$fee'");
    $eve = [];

    foreach ($eventos as $evento) {


      if ($evento->estado == 1 | $evento->estado == 2) {

        $eve[] = [

          "id" => $evento->id,
          "start" => $evento->fecha . " " . $evento->hora_inicio,
          "end" => $evento->fecha . " " . $evento->hora_final,
          "title" => $evento->titulo,
          "backgroundColor" => $evento->estado == 1 | $evento->estado == 2 ? "#7ACF2A" : "#CF2A2A",
          "textColor" => "#fff",
          "extendedProps" => [
            //  "id_usuario"=>$evento->id_usuario
          ]

        ];
      }
    }


  

    return response()->json($eve);
  }

  public function indexv()
  {

    //  $datos['ajqijs']=ajqij::paginate(3);
    //  return view('ajqijab.vista',$datos);

  }

  public function solis()
  {

    if(auth()->user()->tipo == 2){

      return redirect()->route('inicio');
    }
    $f = 'holis';
    return view('ajqijab/solicitud')->with('coso', $f);
  }
  public function eres()
  {

    return view('ajqijab.eres_ajqij');
  }

  public function create()
  {
    return view('ajqijab.create');
  }

  public function edit($id)
  {

    $ajqij = ajqij::findOrFail($id);
    return view('ajqijab.edit', compact('ajqij'));
    //
  }


  function listar($id)
  {


    //    // DB::select('SELECT * FROM agendas where');
    //    $eventos = 
    //    DB::table('agendas')
    //    ->join('users', 'agendas.id', '=', 'users.id')
    //    ->where('id_usuario', $id;



    //    $eventos = DB::table('users')
    //    ->join('contacts', 'users.id', '=', 'contacts.user_id')
    //    ->join('orders', 'users.id', '=', 'orders.user_id')
    //    ->select('users.*', 'contacts.phone', 'orders.price')
    //    ->get();


    //    // $eventos = Agenda::all();
    //    // dd($eventos);
    //    $eve=[];

    //    foreach($eventos as $evento){


    //       $eve[] = [

    //          "id"=>$evento->id,
    //          "start"=>$evento->fecha . " " . $evento->hora_inicio,
    //          "end"=>$evento->fecha . " ". $evento->hora_final,
    //          "title"=>$evento->titulo,
    //          "backgroundColor"=>$evento->estado == 1 ? "#7ACF2A" : "#CF2A2A",
    //          "textColor"=>"#fff",
    //          "extendedProps"=>[
    //             "id_usuario"=>$evento->id_usuario
    //          ]

    //       ]; 


    //    }

    //    return response()->json($eve);

  }



  public function store(Request $request)
  {
    //
    // $datosEmpleado = request()->all();


    $campos = [
      'nombre' => 'required|string|max:100',
      'apellido' => 'required|string|max:100',
      'telefono' => 'required|string|max:100',
      'correo' => 'required|email',
      'estado' => 'required|string|max:10',


    ];
    $mensaje = [
      'required' => 'El atributo :attribute es requerido'
    ];


    if ($request->hasFile('foto')) {
      $campos = ['foto' => 'required|max:10000|mimes:jpeg,png,jpg'];
      $mensaje = ['required' => 'La imagen debe ser estar en los formatos jpeg,png o jpg'];
    }


    $this->validate($request, $campos, $mensaje);

    $datosAjqij = request()->except('_token');
    // echo $datosEmpleado;

    if ($request->hasFile('foto')) {

      $datosAjqij['foto'] = $request->file('foto')->store('uploads', 'public');
    }

    ajqij::insert($datosAjqij);

    return redirect('ajqijab')->with('mensaje', 'Se ha agregado un ajq\'ij');
    // return response()->json($datosEmpleado);
  }




  //
}
