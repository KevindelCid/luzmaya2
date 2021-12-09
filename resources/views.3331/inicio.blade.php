@extends('layouts.app')

@section('content')
@if(isset($estado))
@if($estado == 1)
<script> alert("El pago ha sido efectuado con éxito") </script>
@endif
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

     <h3>Se muestran sus eventos proximos...</h3>
     <table class="table">
         <thead>
             <tr>
                 <th>Fecha</th>
                 <th>Titulo</th>
                 <th>Hora de inicio</th>
                 <th>Titular</th>
                 <th>Acciones</th>

             </tr>
         </thead>
         <tbody>
          
            
            
                 <?php setlocale(LC_TIME, "spanish") ?>
                 @foreach($eventos as $evento)
  <tr>  
            
     <td scope="row"> <?php $Nueva_Fecha = date("d-m-Y", strtotime($evento->fecha)); $Mes_Anyo = strftime(" %d de %B de %Y", strtotime($Nueva_Fecha)); print_r( $Mes_Anyo); ?> </td>
                 <td>{{ $evento->titulo }}</td>
                 <td> {{date("g:i a",strtotime($evento->hora_inicio))}} </td>
                 <td>{{ $evento->name }}
                  <td><a  class="btn btn-warning" data-toggle="modal" data-target="#click_evento{{$evento->id}}" href="">informacion</a>@if($evento->link != "") <a class="btn btn-danger" href="{{ url('reuniones/'.$evento->link) }}">Ir a la reunion</a>@endif </td>   
                </td>
                 </tr>



<!-- Modal -->
<div class="modal fade" id="click_evento{{$evento->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title">Detalles del evento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
  
        <div class="modal-body white">
  
          
                 <div class="row">
           
                   
                   <div class="col-10">
                   
                     <div class="form-group">
           <h1 id="tituloE" name="tituloE">{{ $evento->titulo }}</h1>
          </div>
          
        </div>
        <div class="col-2">
        
          <div class="form-group">
            @if(auth()->user()->tipo == 2 )
           <h2 id="precioE">{{ "$".$evento->precio }}</h2>
  @endif
          </div>
          
        </div>
        
      </div>
  <h6 id="HoraE">Este evento se llevará acabo el día <?php $Nueva_Fecha = date("d-m-Y", strtotime($evento->fecha)); $Mes_Anyo = strftime(" %d de %B del %Y", strtotime($Nueva_Fecha)); print_r( $Mes_Anyo); ?> a las {{date("g:i a",strtotime($evento->hora_inicio))}}</h6>
  <small id="descriE">{{ $evento->descripcion }}</small>
  
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-warning">Editar</button>
        </div>
      </div>
    </div>
  </div>





            @endforeach
                 
            
         </tbody>
     </table>
       {{ $eventos->links()}}
     
       
      
        </div>
    </div>
</div>
@endsection
