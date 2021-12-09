@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
          {{-- @if(isset($mensaje)){{ $mensaje }}@endif  --}}


          @if(session('mensaje'))
          <div class="alert alert-success">
            {{ session('mensaje') }}
          </div>
        @endif


     <h3>Se muestran las solicitudes pendientes de Profesionales...</h3>
     <table class="table">
         <thead>
             <tr>
                 <th>Foto</th>
                 <th>Solicitante</th>
                
                 <th>Teléfono</th>
                 <th>tipo solicitud</th>
                 <th>Email</th>
                 <th>DPI</th>
                 <th>Emisión</th>
                 <th>Acción</th>

             </tr>
         </thead>

         <tfoot>
            
            @foreach ($data as $dat)
                <tr>
                    <td scope="row">

                        <img class="img-thumbnail gg" width="60" src="{{ asset($dat->foto) }}"
                            width="100" alt="">


                    </td>
                    {{-- <td><a class="btn btn-primary" href="{{ url('dat/' . $dat->id) }}">Perfil</a>
                        <a class="btn btn-warning" href="{{ url('edicion/' . $dat->id) }}">Editar</a>
                    </td> --}}
                   
                    <td>{{ $dat->name  }}</td>
                    <td>{{ $dat->telefono }}</td>
                    <td>{{ $dat->id_tipo_profesional }}</td>
                    <td>{{ $dat->email }}</td>
                    <td>pendiente</td>
                    <td>{{ $dat->created_at }}</td>
                    <td><a href="{{ url('admin/perfil-solicitante/'.$dat->id.'/'.$dat->id_solicitud.'/'.$dat->id_encuesta) }}">Aceptar/Rechazar</a></td>
                    


                </tr>
            @endforeach
        </tfoot>

    </table>
























{{ $data->links() }}
         <tbody>
          
</div>
@endsection 