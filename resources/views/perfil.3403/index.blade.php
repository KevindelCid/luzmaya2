@extends('layouts.app')
@section('content')
    <script src="{{ asset('js/agenda.js') }}"></script>
    <script src="{{ asset('js/precios.js') }}"></script>
    <div class="container">





        <div class="col-md-12">
            <div class="box">
                {{-- <form action="" class="mb-5" method="" enctype="multipart/form-data"> --}}
                <div class="row mb-5">
                    <div class="col-md-2 form-group">


                        <div class="form-group">

                            <select class="form-control" name="nawalS" id="nawalS">
                                <option id="BATZ">BATZ</option>
                                <option id="E">E</option>
                                <option id="AJ">AJ</option>
                                <option>IX</option>
                                <option>TZIKIN</option>
                                <option>AJMAQ</option>
                                <option>NOJ</option>
                                <option>TIJAX</option>
                                <option>KAWOQ</option>

                                <option>AJPU</option>
                                <option>IMOX</option>
                                <option>IQ</option>
                                <option>AQABAL</option>
                                <option>KAT</option>
                                <option>KAN</option>
                                <option>KEME</option>
                                <option>KEEJ</option>
                                <option>QANIL</option>
                                <option>TOJ</option>
                                <option>TZI</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1 form-group">
                        <div class="form-group">

                            <select class="form-control" name="energiaS" id="energiaS">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>

                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>

                            </select>
                        </div>



                    </div>
                    <div class="col-md-9 form-group">
                        <div class="form-group">

                            <input type="submit" class="form-control btn btn-success" onclick="mostrarNawalModal()"
                                value="Agendar" id="ccn" name="ccn" aria-describedby="helpId" placeholder="">

                        </div>
                    </div>



                    <div class="col-md-4 form-group ">
                        <h4 class="">{{ auth()->user()->name }} </h4>

                        <div class="photo">
                            <div class="photo-container">
                                <a href="{{ url('perfil/config') }}">
                                    <img class="img-fluid " onclick="" src="{{ auth()->user()->foto }}" width="250"
                                        alt=""></a>
                                <div class="texto-encima cente">Editar datos del perfil</div>



                            </div>
                            <div class="photo-banner">
                                <a href="{{ url('perfil/config') }}">
                                    <img class="img-fluid " data-toggle="modal" data-target="#cambiarimg"
                                        src="{{ auth()->user()->foto }}" width="250" alt="">
                                </a>

                            </div>
                        </div>
                    </div>

                    {{-- <h6> Contacto externo: {{ $gg->correo }}</h6> --}}








                    <div class="col-md-8 form-group">
                        <h1>Su agenda </h1>
                        @if (auth()->user()->tipo == 2)

                            <h3>Agenda ajq'ij</h3>
                            <b>Todos los eventos que ingrese serán publicos y las personas podrán verlos, comprarlos o
                                reclamarlos</b>

                        @endif




                        <div id="agenda"></div>
                    </div>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->

    <div class="use" style="color:#0e0e0e" ;>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar los registros</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        
        
        <form method="POST" id="datosformeditar">
            @csrf
            <div class="row">

                @if (auth()->user()->tipo == 2)
                    <div class="col-9">

                        <div class="form-group">

                            <label for="">Título</label>
                            <input type="text" class="form-control" id="tituloE" name="tituloE">

                        </div>

                    </div>
                    <div class="col-3">

                        <div class="form-group">

                            <label for="">Precio</label>
                            $<input type="number"  class="form-control" name="precioE"
                                id="precioE">

                        </div>

                    </div>
                @else
                    <div class="col-12">

                        <div class="form-group">

                            <label for="">Título</label>
                            <input type="text" class="form-control" name="tituloE" id="tituloE">

                        </div>

                    </div>

                @endif
            </div>
            <div class="row">

                <div class="col-6">

                    <div class="form-group">

                        <label for="">Fecha</label>
                        <input type="date" class="form-control" name="fechaE" id="fechaE">

                    </div>

                </div>

                <div class="col-3">

                    <div class="form-group">

                        <label for="inicio">Hora de inicio</label>
                        <input type="time" class="form-control" name="horaE" id="horaE">

                    </div>

                </div>
                <div class="col-3">

                    <div class="form-group">

                        <label for="tiempo">Duracion (minutos)</label>
                        <input type="number" class="form-control" name="tiempoE" id="tiempoE">
                        <input hidden type="number" class="form-control" name="idE" id="idE">

                    </div>

                </div>



            </div>


            {{-- <div class="row">

<div class="col-12">

<div class="form-group">

<label for="">Finalización</label>
<textarea class="form-control" id="horafinal" name="horafinal" cols="30" rows="5"></textarea>

</div>

</div>

</div> --}}
            <div class="row">

                <div class="col-12">

                    <div class="form-group">

                        <label for="">Descripción</label>
                        <textarea class="form-control" id="descriE" name="descriE" cols="30"
                            rows="5"></textarea>

                    </div>

                </div>

            </div>
        </form>



  </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button"  onclick="editar();" class="btn btn-danger">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>


        <!-- Modal -->
        <div class="modal fade" id="click_evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="modal-title">Detalles del evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body white">


                        <div class="row">


                            <div class="col-10">

                                <div class="form-group">
                                    <h1 id="tituloEd" name="tituloEd"></h1>
                                </div>

                            </div>
                            <div class="col-2">

                                <div class="form-group">
                                    @if (auth()->user()->tipo == 2)
                                        <h2 id="precioEd"></h2>
                                    @endif
                                </div>

                            </div>

                        </div>
                        <h6 id="HoraEd"></h6>
                        <small id="descriEd"></small>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-warning"  data-dismiss="modal" data-toggle="modal" data-target="#editmodal">Editar</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade dark" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title centrado">Agregar evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        <form method="POST" id="datosform">
                            @csrf
                            <div class="row">

                                @if (auth()->user()->tipo == 2)
                                    <div class="col-9">

                                        <div class="form-group">

                                            <label for="">Título</label>
                                            <input type="text" class="form-control" name="titulo" id="titulo">

                                        </div>

                                    </div>
                                    <div class="col-3">

                                        <div class="form-group">

                                            <label for="">Precio</label>
                                            $<input type="number" oninput="precio();" class="form-control" name="precio"
                                                id="precio">

                                        </div>

                                    </div>
                                @else
                                    <div class="col-12">

                                        <div class="form-group">

                                            <label for="">Título</label>
                                            <input type="text" class="form-control" name="titulo" id="titulo">

                                        </div>

                                    </div>

                                @endif
                            </div>
                            <div class="row">

                                <div class="col-6">

                                    <div class="form-group">

                                        <label for="">Fecha</label>
                                        <input type="date" class="form-control" name="fecha" id="fecha">

                                    </div>

                                </div>

                                <div class="col-3">

                                    <div class="form-group">

                                        <label for="inicio">Hora de inicio</label>
                                        <input type="time" class="form-control" name="inicio" id="inicio">

                                    </div>

                                </div>
                                <div class="col-3">

                                    <div class="form-group">

                                        <label for="tiempo">Duracion (minutos)</label>
                                        <input type="number" value="30" class="form-control" name="tiempo" id="tiempo">

                                    </div>

                                </div>



                            </div>


                            {{-- <div class="row">

  <div class="col-12">
  
    <div class="form-group">
  
  <label for="">Finalización</label>
  <textarea class="form-control" id="horafinal" name="horafinal" cols="30" rows="5"></textarea>
  
    </div>
  
  </div>
  
</div> --}}
                            <div class="row">

                                <div class="col-12">

                                    <div class="form-group">

                                        <label for="">Descripción</label>
                                        <textarea class="form-control" id="descripcion" name="descripcion" cols="30"
                                            rows="5"></textarea>

                                    </div>

                                </div>

                            </div>
                        </form>

                    </div>

                    <div class="modal-footer">

                        <button onclick="guardar();" type="button" class="btn btn-success" name="btnGuardar"
                            id="btnGuardar">Guardar</button>
                        {{-- <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button> --}}

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                    </div>

                </div>


            </div>
        </div>
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
