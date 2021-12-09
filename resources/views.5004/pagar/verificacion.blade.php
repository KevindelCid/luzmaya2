





@extends('layouts.app')
@section('content')



<div class="container">

    @if($estado == 1)
    <h3 class="centrar" >Se ha efectuado el pago correctamente.  <a style="color:blue;" href="{{ route('inicio') }}">Regresar sus eventos pendientes</a> </h3>
    @else
    <h3>Ha habido un error y no se ha podido efectuar ningun pago</h3>
    @endif
    
</div>

@endsection('layouts.app')





