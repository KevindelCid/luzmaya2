
@extends('layouts.app')
@section('content')
    <div class="container">


   

        <div class="col-md-12">
            <div class="box">
        <form action="" class="mb-5" method="" enctype="multipart/form-data">
        <div class="row">
        
        
          
        
            <div class="col-md-8 form-group ">     
         <h4>Editar datos de tu perfil</h4>
                    <label for="">Nombre: </label>
                    <input type="text"  id="name" class="form-control" placeholder="{{auth()->user()->name}}">
<br>
                    <label for="">Correo: </label>
                    <input type="text" id="email" autocomplete="off" value="" class="form-control" placeholder="{{auth()->user()->email}}">
                 
                    <small>El nuevo correo que ingreses será el que deberás usar cuando vayas a loguearte</small>
<br>
                   
<br>
<label for="">Biografía/Frase: </label>
                    <textarea type="text" class="form-control" placeholder="{{auth()->user()->biografia}}">{{auth()->user()->descripcion}}</textarea>
                  
                    <small>Puedes escribir tu biografía o dejar un estado como una frase con la que te sientas identificado</small>
<br><br>
                    <label>Nueva contraseña:</label>
                    <div class="input-group">
                  <input ID="txtPassword" type="Password" Class="form-control">
                  <div class="input-group-append">
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                      </div>
                </div>
                <br>
                <label>Repita la contraseña:</label>
                <div class="input-group">
              <input ID="txtPassword2" type="Password" Class="form-control">
              <div class="input-group-append">
                    <button id="show_password2" class="btn btn-primary" type="button" onclick="mostrarPassword2()"> <span class="fa fa-eye-slash icon"></span> </button>
                  </div>
            </div>
              
            <br>

            <label for="">Nueva foto del perfil: </label>
            <input type="file" class="form-control" placeholder="{{auth()->user()->name}}">
<br>
<input type="submit" value="Guardar cambios" class="btn btn-success">
        </div>

     
        <div class="col-md-4 form-group ">     
         
          


            <p>Completa la información de tu perfil.</p>
           {{-- <h6> Contacto externo: {{ $gg->correo }}</h6>
        --}}
        
          
        </div>
        
            
                
        
        
            {{-- <div class="col-md-8 form-group">
            
        </div>
             --}}
          
        
        </div>
        
      

        </form>
        
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        

    </div>

    @endsection('layouts.app')