@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
     
          {{-- @if(isset($mensaje)){{ $mensaje }}@endif  --}}



          <div class="col-md-12">
            <div class="box">
        {{-- <form action="" class="mb-5" method="" enctype="multipart/form-data"> --}}
        <div class="row mb-5" >
        
        
        
        <div class="col-md-6 form-group ">      


          @if(session('mensaje'))
          <div class="alert alert-success">
            {{ session('mensaje') }}
          </div>
        @endif

<a href="{{ url('admin/negocios') }}"><-Volver</a><br>
    <small>Aqui se muestrán los detalles de cada evento vendido por @foreach($profesional as $pro) <strong>{{$pro->name}}</strong> @endforeach...</small><br>
   @foreach($eventos as $ev)
    <small>El total de eventos vendidos fueron: <strong>{{ $ev->consultas_totales }}</strong></small><br>
    <small>El total de las comisiones de luzmaya es: <strong>${{ $ev->comision }}</strong> </small><br>
    <small>El total de ganancias brutas han sido: <strong>${{ $ev->ganancia_bruta }}</strong> </small><br>
    <small>El total a depositar a @foreach($profesional as $pro) <strong>{{$pro->name}}</strong> @endforeach es: <strong>${{ $ev->depositar }}</strong> </small><br>
   
        </div>


        <div class="col-md-6 form-group ">      


            <small>Puede pagar los eventos uno a uno o puede</small><br>
          
            <a class="btn btn-danger" 
            href="  @foreach($profesional as $pro) {{ url('admin/confirmar-pago/'.$pro->id.'/a') }}@endforeach">Pagar todo ${{ $ev->depositar }}</a>
            @endforeach


        </div>
        <div class="col-md-12 form-group ">      


            <table class="table">
                <thead>
                    <tr>
                        <th>id del cliente</th>
                        <th>Fecha</th>
                        <th>Ganancia Bruta</th>
                        <th>Comisión</th>
                        <th>Total a depositar</th>
                        <th>Acción</th>
       
                    </tr>
                </thead>
       
                <tfoot>
                   
                   @foreach ($data as $dat)
                       <tr>
                          
                           <td>{{ $dat->cliente  }}</td> 
                           <td>{{ $dat->fecha  }}</td>
                          
                           <td>{{ $dat->ganancia_bruta }}</td>
                           <td>{{ $dat->comision }}</td>
                           <td>{{ $dat->depositar }}</td>
                          <td><a class="btn btn-success" 
                            href="@foreach($profesional as $pro)   {{ url('admin/confirmar-pago/'.$pro->id.'/'. $dat->ida ) }} @endforeach">Pagar</a></td>
                           
       
       
                       </tr>
                   @endforeach
               </tfoot>
       
           </table>

        </div>



    </div>
</div>
</div>
   
























        </div>

    </div>
          

@endsection 