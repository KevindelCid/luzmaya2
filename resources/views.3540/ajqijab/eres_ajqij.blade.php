
@extends('layouts.app')
@section('content')
    <div class="container">
       ¿Eres un Ajq'ij? <br>
       Nos sentiríamos honrados de contar con su presencia en esta plataforma



<a href="{{ url('ajqijab/solicitud') }}">Solicitar ingreso como ajq'ij</a>

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