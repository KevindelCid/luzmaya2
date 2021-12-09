@extends('layouts.app')
@section('content')
    <div class="container">

Elige la fecha en la que esperas hacer una cita
 

@if (Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje') }}  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif








<div id="obj1" class="col-md-12">
    <div class="box">
        <form action="{{ route('cholqij.hoy') }}" class="mb-5" method="get" enctype="multipart/form-data">
        <div class="row">    
  <h2>Contacta con un Ajq'ij</h2><br>
<div class="col-md-4 form-group">
  
    <input type="input" placeholder="Busca a un Ajq'ijab" class="form-control">
</div>

<div class="col-md-2 form-group">
                      
    <input type="submit" class="btn btn-danger" value="Buscar">
</div>
        </div>
        <p>Ingresa al perfil de un Ajq'ij para ver los horarios disponibles o <a href="">Visualiza las reuniones disponibles</a></p>

        </form>
    </div>
</div>

<div class="contis">
    @foreach ($ajqijs as $ajq)

    <div class="form-group">
 <div class="cards">
     <div class="blanco" id="dd">
    <a href="{{url('ajqijab/perfil/'.$ajq->id)}}">
    <img class=" nc img-fluid" src="{{ $ajq->foto  }}" width="250" alt="">
    <h4>{{ $ajq->name }}</h4>
    <div class="modules line-clamps">
    <p >{{$ajq->descripcion_user}}</p>
    </div>
</div>
</a>
   
 </div>
</div>

 @endforeach
 
</div>
<div class="contis">{{ $ajqijs->links() }}</div>




</div>

  
    
<div style="text-align: center;">

</div>


















{{-- 

<a href="{{ url('ajqijab/create') }}"> Registrar un ajq'ij</a>
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Fecha de nacimiento</th>
            <th>Correo</th>
            <th>Biografía</th>
            <th>Estado</th>
            <th>Acciones</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($ajqijs as $ajq)
            
   
        <tr>
            <td>{{ $ajq->id }}</td>
            <td>
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$ajq->foto  }}" width="100" alt="">
               </td>
            <td>{{ $ajq->nombre }}</td>
            <td>{{ $ajq->apellido }}</td>
            <td>{{ $ajq->telefono }}</td>
            <td>{{ $ajq->nacimiento }}</td>
            <td>{{ $ajq->correo }}</td>            
            <td>{{ $ajq->biografia }}</td>
            {{-- esto no esta funcionando  --}}
            {{-- @if($ajq->estado = '1')
            <td>  {{ __('Activo') }}  </td>
            @else
            @if($ajq->estado = '2')
            <td>  {{ __('No Activo') }}  </td>
            @endif
            @endif
            <td>
                
                
                <a href="{{ url('/ajqijab/'.$ajq->id.'/edit') }}" class="btn btn-success ">
                 Editar
                </a>
        
               <form action="{{ url('/ajqijab/'.$ajq->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger" value="Borrar" onclick="return confirm('¿Quieres Borrar este ajq\'ij')">
            
            </form></td>
        </tr>   
          @endforeach
    </tbody>
</table>
{!! $ajqijs->links() !!}
<a href="{{url('home')}}">Inicio</a>  --}}

</div>

@endsection('layouts.app')
