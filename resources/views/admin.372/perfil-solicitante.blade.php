@extends('layouts.app')

@section('content')
<div class="container">


@if(isset($mensaje))
{{ $mensaje }}
@endif


<div class="col-md-12">
    <div class="box">
{{-- <form action="" class="mb-5" method="" enctype="multipart/form-data"> --}}
<div class="row mb-5" >



<div class="col-md-4 form-group ">      
    <h4 class=""></h4> 

 
<div class="photo-banner">
<a href="{{ url('perfil/config') }}">
<img class="img-fluid " data-toggle="modal" data-target="#cambiarimg" src="{{ asset($users->foto) }}" width="250" alt="">
</a>


</div>
</div>

{{-- <h6> Contacto externo: {{ $gg->correo }}</h6>
--}}








<div class="col-md-4 form-group">
<h1>{{ $users->name }} </h1>
@foreach($encuesta as $encu)
<h3>se identifica con el dpi: {{ $encu->dpi }} </h3><br>
<p>Número de telefono: {{ $encu->telefono }}</p><br>
<p>Originario de: {{ $encu->pueblo_origen }}</p><br>
<p>Se define como: {{ $encu->auto_definicion }}</p><br>
<p><strong>Biografía</strong> {{ $encu->biografia_encuesta }}</p><br>

@endforeach
<p>Email de contacto: {{ $users->email }}</p>
</div>


<div class="col-md-4 form-group">

<p>¿Este usuario es un ajq'ij real?</p> 
<form method="POST" action="{{ route('acept') }}" class="mb-5"
enctype="multipart/form-data">
@csrf
<input hidden name="user" id="user" type="text" value="{{ $id }}">
<input hidden name="tipo" id="tipo" type="text" value="2">
<input hidden name="solicitud" id="solicitud" type="text" value="{{ $ids }}">
<input hidden name="encuesta" id="encuesta" type="text" value="{{ $ide }}">
@foreach($encuesta as $encu)
<input hidden name="dpi" id="dpi" type="text" value="{{ $encu->dpi }}">

<input hidden name="bio" id="bio" type="text" value="{{ $encu->biografia_encuesta }}">
@endforeach
<input class="btn btn-success" type="submit" value="Aceptar">

</form>

<form method="POST" action="{{ route('negation') }}" class="mb-5"
enctype="multipart/form-data">
@csrf
<input hidden name="user" id="user" type="text" value="{{ $id }}">
<input hidden name="solicitud" id="solicitud" type="text" value="{{ $ids }}">
<input hidden name="encuesta" id="encuesta" type="text" value="{{ $ide }}">

<input hidden name="tipo" id="tipo" type="text" value="2">
<input class="btn btn-danger" type="submit" value="rechazar">

</form>



</div>
</div>
</div>
</div>










</div>

@endsection('layouts.app')