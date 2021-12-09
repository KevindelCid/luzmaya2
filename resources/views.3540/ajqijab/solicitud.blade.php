
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="box">
<form action="" class="mb-5" method="" enctype="multipart/form-data">
    <div class="row">
        
        <div class="col-md-5 form-group">
       {{ $coso }} aqui se solicita ser un ajq´ij<br>
       La solicitud de un usuario para ingresar como un ajq'ij  se ejecuta de la siguiente forma:
           <br>
       llena el formulario lateral, los campos con un simbolo de asterisco (*) son obligatorios para seguir con el proceso
           <br>
          al presionar el boton "enviar solicitud" se enviará su solicitud a nuestros servidores... sus datos 
           serán analizados para corroborar la veracidad de la solicitud y asi asegurarnos de seguir brindando un servicio 
           real a los usuarios de Wal'ijab, una vez se haya completado este primer paso se procederá a enviarle un correo electronico
           a: nombreajqijsolicitante@correo.com con las credenciales para ingresar a una entrevista de verificación dentro de nuestra 
           plataforma www.Walijab.com al completar esta reunion un Ajq'ij será quien valide la veracidad de su profesión y de ser 
           validada su profesion como veráz automaticamente se le dará de alta en nuestra plataforma para poder brindar sus servicios
           como Ajq'ij. Muchas gracias por confiar en nosotros.
             </div>
        <div class="col-md-7 form-group">

      <label for="">¿Cual es su pueblo originario?</label>
         <input type="text" class="form-control" name="origin" id="origin" aria-describedby="helpId" placeholder="">
      <br>
  
        <label for="">En pocas palabras ¿Como se define a usted mismo mismo?</label>
           <input type="text" class="form-control" name="origin" id="origin" aria-describedby="helpId" placeholder="">
       <br>

          <label for="">Autobiografía</label>
             <textarea class="form-control" name="bio" row="5" id="bio" aria-describedby="helpId" ></textarea>
             <small id="helpId" class="form-text text-muted">Usarémos esta información para validar la primera etapa de su aplicación como ajq'ij</small>
             <input name="" id="" class="btn btn-primary" type="button" value="Envviar solicitud">
           </div>

        </div></div></form></div></div>
 
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