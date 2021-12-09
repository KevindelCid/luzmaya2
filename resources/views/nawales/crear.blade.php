@extends('layouts.app')
@section('content')
    <div class="container">

    <div class="col-md-12">
        <div class="box">
<form action="{{ url('/nawales/crear') }}" class="mb-5" method="POST" enctype="multipart/form-data">
@csrf



<div class="row">
          
    <div class="col-md-6 form-group">
      <label for="name" class="col-form-label">Nombre:</label>

<input type="text" name="nombre" class="form-control" value="" id="nombre">

</div>


<div class="col-md-6 form-group">
<label for="name" class="col-form-label">Significado del Nawal:</label>
<input type="text" name="tipo_nawal" class="form-control"  value="" id="tipo_nawal">
</div>


<div class="col-md-6 form-group">
<label for="name" class="col-form-label">Descripción:</label>

<textarea  class="form-control"  name="descripcion"  id="descripcion"> </textarea>
</div>


<div class="col-md-6 form-group">
<label for="name" class="col-form-label">Virtudes/Luz:</label>

<textarea type="text" class="form-control"  name="c_buenas"  id="c_buenas"></textarea>
</div>


<div class="col-md-6 form-group">
<label for="name" class="col-form-label">Vergüenzas/Oscuridad:</label>
<textarea type="text" class="form-control"  name="c_malas" id="c_malas"> </textarea>
</div>


<div class="col-md-6 form-group">
<label for="name" class="col-form-label">Numero de nawal:</label>
<input type="number" name="inde" class="form-control"  value="" id="inde">
</div>


<div class="col-md-4 form-group">
<label for="name" class="col-form-label">Foto de Glifo:</label>
@if(isset($nawal->glifo))
<img src="{{ asset('storage').'/'.$nawal->glifo  }}" class="img-thumbnail img-fluid"  alt="">
@endif
<input type="file" name="glifo" value="" class="form-control"  id="glifo">
</div> 

<div class="col-md-12 form-group">

<input type="submit" class="btn btn-primary form-control"  class="btn btn-success" value="Crear nawal">
</div>




</form>

</div>
    </div>

</div>

@endsection('layouts.app')
