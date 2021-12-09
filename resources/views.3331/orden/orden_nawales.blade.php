@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
<link href="{{ asset('css/orden.css') }}" rel="stylesheet">

    <div class="container ">
        <section class="score">
            <span class="correct">0</span>/<span class="total">0</span>
            <button id="play-again-btn">Jugar de nuevo</button>
          </section>
          <section class="draggable-items">
            <!-- Will be dynamically populated - Example Element: -->
            <!-- <i class="fab fa-codepen draggable" draggable="true" style="color: #111111;" id="codepen"></i> -->
         
        
        </section>
          <section class="matching-pairs">
  
          </section>

</div>
<script src="{{ asset('js/orden.js') }}"></script>
@endsection('layouts.app') 
