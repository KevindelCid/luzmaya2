@extends('layouts.app')
@section('content')

<script src='https://meet.jit.si/external_api.js'></script>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,600,700,900&display=swap" rel="stylesheet">
<link href="{{ asset('css/cuenta-regresiva.css') }}" rel="stylesheet">

@if(isset($mensaje))
<div class="centrar">
<h3>{{$mensaje}} <a style="color:rgb(77, 0, 177);" href="{{route('inicio')}}">ir al inicio</a> </h3>

</div>

@else
<section>
<div class="portada" id="portada"> 
        {{-- <div class="header">
        <h1 class="logotipo">{{$titu}}</h1>
       
        <p class="mensaje">{{$descri}}</p> --}}
        
<div class="col-md-12">
    <div class="box">
{{-- <form action="" class="mb-5" method="" enctype="multipart/form-data"> --}}
<div class="row mb-5" >
  <div class="col-md-12 form-group">
                       

    <div class="form-group">
        <div class="header">
            <h1 class="logotipo">{{$titu}}</h1>
           
      
        <div><p>La reunión empezará en: </p></div> 
    </div>
  </div>
  <div class="col-md-12 form-group">
                       

    <div class="form-group">
 <div id="cuenta"></div>
    </div></div>
</div>
</div>
</div>
    {{-- <div class="redes-sociales">
        <a href="https://www.facebook.com/falconamsters" class="btn-red-social"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.twitter.com/falconamsters" class="btn-red-social"><i class="fab fa-twitter"></i></a>
        <a href="https://www.twitter.com/falconamsters" class="btn-red-social"><i class="fab fa-instagram"></i></a>
    </div> --}}
</div>
<main class="contenedor">
@if($estado == 1)
<input type="hidden" id="enlace" value="@if(isset($enlace)) {{$enlace}} @endif">

<script type="text/javascript">


function meetjit(){
    var enlace = $("#enlace").val();

    if (enlace !== '') {
    // the variable is defined

    const domain = 'meet.jit.si';
const options = {
   
    //aqui genero un link pero me interesa que este compuesto por el id del usuario cliente 
    //por el id del ajqij
    //por la fecha en la que se agendó
    //el estado del evento

    //deberia quedar de la siguiente forma: nombre_ajqij&22-33-17-9-210

    // y estos datos de preferencia encriptarlos
    // y luego guardar este dato en la base de datos para acceder a el despues y eliminarlo al completar la reunion

    roomName: enlace,
    width: 1000,
    height: 500,
    configOverwrite: { startWithVideoMuted: true },
    parentNode: document.querySelector('#meet')
};
const api = new JitsiMeetExternalAPI(domain, options);
}
else{

alert("el enlace no ha sido proporcionado en este caso vamos a mostrar la fecha y hora de la reunion más cercana que tiene pendiente la persona y una tabla con todas las reuniones que tiene pendientes con su fecha y hora");

}
}
window.onload = meetjit;
</script>


<div class="container s" id="tex" hidden>
    <h3>¡Bienvenido, la reunion ha empezado!</h3>
    {{-- <h3>{{ $cadena }}</h3> --}}
    
<div id="meet" class="containers" hidden></div>
 

    

</div>

@endif

@if($estado != 1)


<div class="container s" id="tex" hidden>
    <h3>No tienes acceso a esta reunión</h3>
    {{-- <h3>{{ $cadena }}</h3> --}}
</div>
@endif

</main>


<script>

var hora = "{{$hora}}";
var fesha = "{{$fecha}}";
var estado = {{ $estado }};


var nhora = hora.split(':');
var nFecha = fesha.split('-');


    var anio, mes, dia, hora, minutos,segundos = 0;
    segundos = nhora[2];
    anio = nFecha[0];
    mes = nFecha[1];
    dia = nFecha[2];
    hora = nhora[0];
    minutos = nhora[1];
    </script>
 
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/simplyCountdown.min.js') }}"></script>	
<script src="{{ asset('js/countdown.js') }}"></script>	
@endif

@endsection('layouts.app')