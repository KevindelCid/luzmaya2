{{-- este es el perfil del ajqij que posee el id # {{ $id }}

@foreach( $infoajqij as $gg )
<br>
el nombre de el ajqij es: {{ $gg->nombre." ".$gg->apellido }}
<br>
el correo electronico del ajqij es: {{ $gg->correo }}
<br>
biografia de {{ $gg->nombre." ".$gg->apellido }} 
<br>
{{ $gg->biografia }}
<br>
este ajqij fue creado la fecha: {{ $gg->created_at }}
@endforeach --}}

@extends('layouts.app')
@section('content')
<script src="{{ asset('js/agendaaj.js') }}"></script>

    <div class="container">
        <div class="col-md-12">
            <div class="box">
<form action="" class="mb-5" method="" enctype="multipart/form-data">
    <div class="row">



@if($infoajqij == null)

<h1><b><strong>No se encontró el Ajq'ij</strong></b></h1>

@endif

        @foreach( $infoajqij as $gg )



          <input type="hidden" name="" id="iid" value="{{$gg->id}}">
            <div class="col-md-4 form-group">

        <img class="img-fluid" id="imagen" src="{{ asset( $gg->foto ) }}" width="250" alt="">
      
            <h1>{{ $gg->name }}</h1>
 
    
           {{-- <h6> Contacto externo: {{ $gg->correo }}</h6>
      --}}
            <h3>biografia</h3> 
            <h6>{{ $gg->name }} </h6>
    
            {{ $gg->descripcion_user }}
                
            </div>
            <div class="col-md-8 form-group">
                <h1>Horarios disponibles de {{ $gg->name }}</h1>


          

<div id="agendaaj"></div>

    </div>
            
    </div>
</form>




<!-- Modal -->
<div class="modal fade" id="solicitarcitamodal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Solicitar una cita con {{ $gg->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       
        <div class="col-md-12">
          <div class="box">
<div class="mb-5">
  <div class="row">
    <div class="col-md-4 form-group">


    {{-- por el momento esta función no está disponible... --}}

    </div>
  </div>
</div>
          </div>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="click_evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content ">
        <div class="modal-header">
         
          <h5 class="modal-title">Detalles del evento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
 <form method="post" action="{{ route('pagar.index') }}">
  @csrf
        <div class="modal-body">
        
     
          <div class="row">
         
                 
            <div class="col-10">
            
              <div class="form-group">
           <h1 id="tituloE" name="tituloE"></h1>
           <input type="hidden" name="titulo" id="titulo" value="">
          </div>
        
        </div>
        <div class="col-2">
        
          <div class="form-group">
           <h2 id="precioE"></h2>
           <input type="hidden" name="precio" id="precio" value="">
           
          </div>
        
        </div>
        
      </div>

  <h6 id="HoraE" ></h6>
  <input type="hidden" name="hora" id="hora" value="">
  <input type="hidden" name="fecha" id="fecha" value="">
  <small id="descriE"></small>
 <input type="hidden" name="ide" id="ide">
 <input type="hidden" name="stado" id="stado" value="">

  <input type="hidden" name="descri" id="descri" value="">
     
        </div> 
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>


          <input type="submit" value="Reservar cita" id="comprarevento" class="btn btn-success">
         
                </div>
              </form>









             


      </div>
    </div>
  </div>
  

<!-- Modal -->
<div class="modal fade dark" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
              

<div class="form-group">
  <label for=""></label>
  <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
</div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>



    
@endforeach
        </div>
</form>
    </div>

    @endsection('layouts.app')
    {{-- <script>

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('agenda');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
          });
          calendar.render();
        });
  
      </script> --}}