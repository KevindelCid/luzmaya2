
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="box">
<div action="" class="mb-5" method="" enctype="multipart/form-data">
    <div class="row">
        
        <div class="col-md-5 form-group">
      <h2>Empiese a ofrecer sus servicios como Ajq'ij</h2>
       La solicitud de un usuario para ingresar como un ajq'ij  se ejecuta de la siguiente forma:
           <br>
       llena el formulario lateral, los campos con un simbolo de asterisco (*) son obligatorios para seguir con el proceso
           <br>
          al presionar el boton "enviar solicitud" se enviará su solicitud a nuestros servidores... sus datos 
           serán analizados para corroborar la veracidad de la solicitud y asi asegurarnos de seguir brindando un servicio 
           real a los usuarios de LuzMaya. Un Ajq'ij será quien valide la veracidad de su profesión y de ser 
           validada su profesión como veráz automaticamente se le dará de alta en nuestra plataforma para poder brindar sus servicios
           como Ajq'ij. Muchas gracias por confiar en nosotros.
             </div>
        <div class="col-md-7 form-group">


          <form method="POST" action="{{ route('val') }}" class="mb-5"
          enctype="multipart/form-data">
       
  @csrf
      <label for="">¿Cual es su pueblo originario?</label>
         <input type="text" value="{{ old('pueblo') }}" class="form-control" name="pueblo" id="pueblo" aria-describedby="helpId" placeholder="">
      <br>
  
        <label for="">En pocas palabras ¿Como se define a usted mismo mismo?</label>
           <input type="text" value="{{ old('definicion') }}" class="form-control" name="definicion" id="definicion" aria-describedby="helpId" placeholder="">
       <br>

          <label for="">Autobiografía *</label>
             <textarea required  class="form-control  @error('biografia_encuesta') is-invalid @enderror" name="biografia_encuesta" row="5" id="biografia_encuesta" aria-describedby="helpId" >{{ old('biografia_encuesta') }}</textarea>
            
             @error('biografia_encuesta')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
             <small id="helpId" class="form-text text-muted"></small>
             



             <label for="">Cual es su numero de teléfono?*</label>
             <input  required  value="{{ old('telefono') }}"  type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono"  id="telefono" aria-describedby="helpId" >
            
             @error('telefono')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror

         <label for="">Cual es su número de DPI?*</label>
         <input  required  value="{{ old('dpi') }}"  type="number" class="form-control @error('dpi') is-invalid @enderror" name="dpi"  id="dpi" aria-describedby="helpId" >
        
         @error('dpi')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
     @enderror
            
             <small id="helpId" class="form-text text-muted">Usarémos esta información unicamente para pode contactar con su persona y confirmar su identidad en caso fuese necesario.</small>
            
             <input type="submit" class="btn btn-danger form-control"
             value="{{ __('Enviar solicitud') }}">
            </form>


            </div>

         

        </div></div></div></div></div>
 
    </div>

    @endsection('layouts.app')
    {{-- <script>

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('agenda');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
          });
          calendar.render();
        });
  
      </script> --}}