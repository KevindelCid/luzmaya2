@extends('layouts.app')
@section('content')
<link href="{{ asset('css/preguntas.css') }}" rel="stylesheet">
   

<div class="puntaje" hidden id="puntaje"></div>
        <div class="contenedor">
           
            <div class="encabezado">
              <div class="categoria" id="categoria">
              </div>
            
              <div class="numero" hidden id="numero"></div>
              <div class="pregunta" id="pregunta">
              </div>
              <img src="#" class="imagen" id="imagen">
            </div>
            <div class="btn" id="btn1" onclick="oprimir_btn(0)"></div>
            <div class="btn" id="btn2" onclick="oprimir_btn(1)"></div>
            <div class="btn" id="btn3" onclick="oprimir_btn(2)"></div>
            <div class="btn" id="btn4" onclick="oprimir_btn(3)"></div>
            
            <script src="{{ asset('js/preguntas.js') }}"></script>
          </div>

 
    @endsection('layouts.app')

