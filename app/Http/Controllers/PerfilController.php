<?php

namespace App\Http\Controllers;




use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    
 public function index(){

    // $datos['ajqijs']=ajqij::paginate(5);
    return view('perfil.index');
 
  }

 
  public function config(){

    // $datos['ajqijs']=ajqij::paginate(5);
    return view('perfil.config');
 
  }




}
