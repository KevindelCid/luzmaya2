





@extends('layouts.app')
@section('content')



<div class="container">

    @if($estado == 1)
    <h3 class="centrar" >Se ha efectuado el pago correctamente.  <a style="color:blue;" href="{{ route('inicio') }}">Regresar sus eventos pendientes</a> </h3>
    @else
    <h3>El pago ha sido rechazado por Paypal</h3>
    @endif
    
</div>

@endsection('layouts.app')





