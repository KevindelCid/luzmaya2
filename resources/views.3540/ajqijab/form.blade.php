
<h1>{{ $modo }} Ajq'ij  </h1><a href="{{ url('ajqijab/') }}"> Regresar</a>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
  @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
  @endforeach
    </ul>
</div>
@endif


      <!-- <h3 class="heading">How Can We Help?</h3> -->

        <div class="row">
          
          <div class="col-md-6 form-group">
            <label for="name" class="col-form-label">Nombres:</label>

<input type="text" name="nombre" class="form-control" value="{{ isset($ajq->nombre)?$ajq->nombre:old('nombre') }}" id="apellido">

</div>


<div class="col-md-6 form-group">
    <label for="name" class="col-form-label">Apellidos:</label>
<input type="text" name="apellido" class="form-control"  value="{{ isset($ajq->apellido)?$ajq->apellido:'' }}" id="apellido">
</div>


<div class="col-md-6 form-group">
    <label for="name" class="col-form-label">Numero de telefono:</label>

<input type="number" class="form-control"  name="telefono"value="{{ isset($ajq->telefono)?$ajq->telefono:'' }}"  id="telefono">
</div>


<div class="col-md-6 form-group">
    <label for="name" class="col-form-label">Correo:</label>

<input type="email" class="form-control"  name="correo"value="{{ isset($ajq->correo)?$ajq->correo:'' }}"  id="correo">
</div>


<div class="col-md-6 form-group">
    <label for="name" class="col-form-label">Fecha y hora de nacimiento:</label>
<input type="datetime-local" class="form-control"  name="nacimiento" value="{{ isset($ajq->nacimiento)?$ajq->nacimiento:'' }}" id="nacimiento">
</div>
<div class="col-md-6 form-group">
    <label for="name" class="col-form-label">Estado:</label>
<select name="estado" class="form-control" id="estado">
    <option value="0"selected>Seleccione el estado</option>
    <option value="1"selected>Activo</option>
    <option value="2" >No Activo</option>
 
  </select>
</div>

<div class="col-md-4 form-group">
    <label for="name" class="col-form-label">Foto de perfil:</label>
@if(isset($ajq->foto))
<img src="{{ asset('storage').'/'.$ajq->foto  }}" class="img-thumbnail img-fluid"  alt="">
@endif
<input type="file" name="foto" value="" class="form-control"  id="foto">
</div>
<div class="col-md-8 form-group">
    <label for="name" class="col-form-label">Biografía:</label>
<textarea type="text" name="biografia" class="form-control" rows="3" value="" id="biografia">{{ isset($ajq->biografia)?$ajq->biografia:'' }}</textarea>
</div>
<div class="col-md-12 form-group">

<input type="submit" class="btn btn-danger form-control"  class="btn btn-success" value="{{ $modo }}">
</div>
