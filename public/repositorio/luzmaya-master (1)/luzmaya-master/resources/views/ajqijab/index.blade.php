@extends('layouts.app')
@section('content')
    <div class="container">

@if(isset(auth()->user()->tipo) && auth()->user()->tipo !=2)
<a href="{{ route('soli') }}">¿Usted es un Ajq'ij?
</a>
@endif

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
  <h2>Contacte con un Ajq'ij</h2><br>
<div class="col-md-4 form-group">
  <small>Los sacerdotes mayas o Ajq'ij aparecen en orden de quien cuenta con más citas futuras disponibles.</small>
    {{-- <input type="input" placeholder="Busque a un Ajq'ij" class="form-control"> --}}
</div>

{{-- <div class="col-md-2 form-group">
                      
    <input type="submit" class="btn btn-danger" value="Buscar">
</div> --}}
        </div>
        <p>Ingrese al perfil de un Ajq'ij para ver sus horarios disponibles.</p>

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
 <div class="contis">{{ $ajqijs->links() }}</div>
</div>



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
