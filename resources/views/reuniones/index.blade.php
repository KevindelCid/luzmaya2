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

{{-- <div  class="portada" id="portada">  --}}
        {{-- <div class="header">
        <h1 class="logotipo">{{$titu}}</h1>
       
        <p class="mensaje">{{$descri}}</p> --}}
        <div class="ou" id="ou">
<div  class="col-md-12">
    <div class="box">
{{-- <form action="" class="mb-5" method="" enctype="multipart/form-data"> --}}
<div class="row mb-5" >
  <div class="col-md-12 form-group">
                       

    <div class="form-group">
        <div class="header">
            <h1 class="logotipo">{{$titu}}</h1>
           
      
       <p>La reunión empezará en: </p>
    </div>
  </div>
  <div class="col-md-12 form-group">
                       

    <div class="form-group">
 <div  id="cuenta" class="cuenta"></div>
    </div>
</div>
</div>
</div>
</div>
    {{-- <div class="redes-sociales">
        <a href="https://www.facebook.com/falconamsters" class="btn-red-social"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.twitter.com/falconamsters" class="btn-red-social"><i class="fab fa-twitter"></i></a>
        <a href="https://www.twitter.com/falconamsters" class="btn-red-social"><i class="fab fa-instagram"></i></a>
    </div> --}}
</div>
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
    width: "115%",
    height: 600,
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


{{-- <div  class="col-md-12">
    <div class="box">

<div class="row mb-5" >
  <div class="col-md-12 form-group"> --}}
                       

    


<div class="container s" id="tex" hidden>
    <h3>¡Bienvenido, la reunion ha empezado! @if (auth()->user()->tipo == 2) <a data-toggle="modal" data-target="#modalcontinuacion" style="color: blue; cursor:pointer;"><small>Agendar un evento de continuación</small></a> @endif </h3>
    {{-- <h3>{{ $cadena }}</h3> --}}
    
<div id="meet" class="containers" style="margin-left:-55px;" hidden></div>
 


    

</div>
    </div>
  </div>
</div></div>

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








 
 <!-- Modal -->
 <div class="modal fade" id="modalcontinuacion" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Agregar una nueva reunión con esta persona</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
             </div>
             <div class="modal-body">
                @if (auth()->user()->tipo == 2)
                <form method="POST" id="datosform">
                    @csrf
                    <div class="row">

                       
                            <div class="col-9">

                                        
                                        <div class="form-group">
                                <small>Solo se admiten eventos gratuitos</small>
                                </div>
                                </div>
                                    <div class="col-9">

                                        
                                        <div class="form-group">

                                            <label for="">Título</label>
                                            <input type="text" class="form-control" name="titulo" id="titulo">

                                        </div>

                                    </div>
                                    <div class="col-3">

                                        <div class="form-group">

                                            <label for="">Precio</label>
                                            $<input disabled type="number" oninput="precio();" class="form-control" name="precio"
                                                id="precio">

                                        </div>

                            </div>
                        
                            {{-- <div class="col-12">

                                <div class="form-group">

                                    <label for="">Título</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo">

                                </div>

                            </div> --}}

                       
                    </div>
                    <div class="row">

                        <div class="col-6">

                            <div class="form-group">

                                <label for="">Fecha</label>
                                <input type="date" required	 class="form-control" name="fecha" id="fecha">

                            </div>

                        </div>

                        <div class="col-3">

                            <div class="form-group">

                                <label for="inicio">Hora de inicio</label>
                                <input type="time" required class="form-control" name="inicio" id="inicio">

                            </div>

                        </div>
                        <div class="col-3">

                            <div class="form-group">

                                <label for="tiempo">Duracion (minutos)</label>
                                <input type="number" value="30" class="form-control" name="tiempo" id="tiempo">

                            </div>

                        </div>



                    </div>


                    {{-- <div class="row">

<div class="col-12">

<div class="form-group">

<label for="">Finalización</label>
<textarea class="form-control" id="horafinal" name="horafinal" cols="30" rows="5"></textarea>

</div>

</div>

</div> --}}
                    <div class="row">

                        <div class="col-12">

                            <div class="form-group">

                                <label for="">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" cols="30"
                                    rows="5"></textarea>

                            </div>

                        </div>

                    </div>
                </form>

            </div>

            <div class="modal-footer">

                  <button onclick="guardarContinuacion();" type="button" class="btn btn-success" 
                   >Guardar</button>
                {{-- <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
<button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button> --}}

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

         </div>
         @else

         <h5>Lo sentimos... solo tu Guía espiritual puede crear un nuevo evento <small>de hecho no deberías haber ingresado aquí xd <strong>Hello developer!</strong></small></h5>

         @endif
     </div>
 </div>





 <script src="{{ asset('js/inMeeting.js') }}" ></script>



@endsection('layouts.app')