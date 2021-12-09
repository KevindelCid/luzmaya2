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


    <small>Aqui se muestrán los detalles de cada profesional...</small>
     <table class="table">
         <thead>
             <tr>
                 <th>id</th>
                 <th>Nombre</th>
                 <th>Consultas totales</th>
                 <th>Total bruto</th>
                 <th>Comision </th>
                 <th>Total a depositar</th>
                 <th>Acciones</th>

             </tr>
         </thead>

         <tfoot>
            
            @foreach ($data as $dat)
                <tr>
                   
                    <td>{{ $dat->id  }}</td> 
                    <td>{{ $dat->nombre  }}</td>
                    <td>{{ $dat->consultas_totales }}</td>
                    <td>{{ $dat->ganancia_bruta }}</td>
                    <td>{{ $dat->comision }}</td>
                  
                    <td>{{ $dat->depositar }}</td>
                   <td><a href="{{url('admin/detalles/'.$dat->id)}}">Detalles</a></td>
                    


                </tr>
            @endforeach
        </tfoot>

    </table>
























         <tbody>
          
</div>
@endsection 