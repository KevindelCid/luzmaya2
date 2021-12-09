essta es la vista
@extends('layouts.app')
@section('content')
    <div class="container">

este es el index de ajqijab, donde se mostraran todos los ajq'ijab

@if (Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje') }}  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif


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
            @if($ajq->estado = '1')
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
<a href="{{url('home')}}">Inicio</a>

</div>

@endsection('layouts.app')
