<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nawal;

class NawalController extends Controller
{
    //

    public function vista(){


        $datos['nawales']=nawal::paginate(3);
        return view('nawal.ver',$datos);

    }
    
    public function index(){
        $nawa = nawal::all();
        return view('nawales.ver')->with('nawales',$nawa);
       
    }


    public function create(Request $request){

        $nawal = new nawal;
        $nawal -> nombre = $request ->nombre;
        $nawal -> tipo_nawal = $request ->tipo_nawal;
        $nawal -> descripcion = $request ->descripcion;
        $nawal -> c_buenas = $request ->c_buenas;
        $nawal -> c_malas = $request ->c_malas;
        $nawal -> inde = $request ->inde;
        if($request->hasFile('glifo')){

            $nawal['glifo']=$request->file('glifo')->store('uploads','public');
        }
        $nawal ->save();
        return view('nawales/crear');

    }


public function read(){



}


}
