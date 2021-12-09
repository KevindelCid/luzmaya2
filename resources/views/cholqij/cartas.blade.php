@extends('layouts.app')
@section('content')
   <link href="{{ asset('css/ca.css') }}" rel="stylesheet">
    <div class="container ">
        <div id="obj1" class="col-md-12">
            <div class="box">

                <div class="row">
                    <h2 for="name">Cholq'ij</h2>
                    <br>
                    <div class="col-md-4 form-group">

                        <input type="date" class="form-control" name="nawalDate" id="nawalDate">
                    </div>
                    <div class="col-md-2 form-group">

                        <input type="submit" onclick="calcularNawal()" class="btn btn-primary" value="Calcular">
                        <input type="submit" onclick="calcularNawalHoy()" class="btn btn-success" value="Hoy">
                    </div>
                </div>
                <div class="cards-list">


                    {{-- aqui cargador del año --}}

                    <div class="card normal" data-toggle="modal" data-target="#mncargador">
                        <div class="card_image"> 
                            <img hidden id="imgcargador" src="" />
                         </div>
                        <div class="card_title ">
                            <p id="nawalcargador"></p>
                        </div>

                        <div class="card_title1 title-white">
                            <p>muerte repentina</p>
                        </div>
                        <div class="card_titlec title-white">
                            <p>Cargador del año</p>
                        </div>
                    </div>






  {{-- aqui nawal de la fecha --}}

  <div class="card fecha r" data-toggle="modal" data-target="#mn">
    <div class="card_image"> 
        <img hidden id="imgfechan" src="" />
     </div>
    <div class="card_title ">
        <p id="nawalfecha"></p>
    </div>

    <div class="card_title1 title-white">
        <p>muerte repentina</p>
    </div>
    <div class="card_titlec title-white">
        <p>Nawal de la fecha</p>
    </div>
</div>





                     {{-- aqui día año solar --}}

                     <div class="card normal" data-toggle="modal" data-target="#mnsolar">
                        <div class="card_image"> 
                            <img hidden id="imgsolar" src="" />
                         </div>
                        <div class="card_title ">
                            <p id="nawalsolar"></p>
                        </div>

                        <div class="card_title1 title-white">
                            <p>muerte repentina</p>
                        </div>
                        <div class="card_titlec title-white">
                            <p>Día año solar</p>
                        </div>
                    </div>




                </div>
              
                <div class="centrar">
                    <h2 id="txt" hidden>9 Lunaciones, energías totales: <b id="totalE"></b> </h2>

                    <h6 id="fecho">fecha</h6>
                </div>
                <div class="cards-list">


                    {{-- aqui nawal auxiliar izquierdo de engendramiento --}}

                    <div class="card normal" data-toggle="modal" data-target="#mnAEI">
                        <div class="card_image"> 
                            <img hidden id="imgnAEI" src="" />
                         </div>
                        <div class="card_title ">
                            <p id="nawalAEI"></p>
                        </div>

                        <div class="card_title1 title-white">
                            <p>muerte repentina</p>
                        </div>
                        <div class="card_titlec title-white">
                            <p>Nawal auxiliar de engendramiento</p>
                        </div>
                    </div>

                    {{-- aqui nawal de engendramimento --}}

                    <div class="card norte" data-toggle="modal" data-target="#mnE">
                        <div class="card_image">
                            <img hidden id="imgnE" src="" />
                        </div>
                        <div class="card_title ">
                            <p id="nawalE"></p>
                        </div>
                        <div class="card_title1 title-white">
                            <p>muerte repentina</p>
                        </div>
                        <div class="card_titlec title-white">
                            <p>Nawal de Engendramiento</p>
                        </div>
                    </div>

                    {{-- aqui nawal aux derecho de engendramiento --}}


                    <div class="card normal" data-toggle="modal" data-target="#mnAED">
                        <div class="card_image">
                            <img hidden id="imgnAED" src="" />
                        </div>
                        <div class="card_title ">
                            <p id="nawalAED"></p>
                        </div>
                        <div class="card_title1 title-white">
                            <p>muerte repentina</p>
                        </div>
                        <div class="card_titlec title-white">
                            <p>Nawal Auxiliar de Engendramiento</p>
                        </div>
                    </div>

                    {{-- aqui nawal auxiliar izquierdo --}}


                    <div class="card este" data-toggle="modal" data-target="#mnAI">
                        <div class="card_image">
                            <img hidden id="imgnAI" src="" />
                        </div>
                        <div class="card_title ">
                            <p id="nawalAI"></p>
                        </div>
                        <div class="card_title1 title-white">
                            <p>muerte repentina</p>
                        </div>
                        <div class="card_titlec title-white">
                            <p>Nawal Auxiliar Izquierdo</p>
                        </div>
                    </div>

                    {{-- aqui nawal de la fecha --}}


                    <div class="card fecha" data-toggle="modal" data-target="#mn">
                        <div class="card_image">
                            <img hidden id="imgn" src="" />
                        </div>
                        <div class="card_title ">
                            <p id="nawal"></p>
                        </div>
                        <div class="card_title1 title-white">
                            <p>muerte repentina</p>
                        </div>
                        <div class="card_titlec title-white">
                            <p>Nawal de la fecha</p>
                        </div>
                    </div>


                    {{-- aqui nawal auxiliar derecho --}}


                    <div class="card oeste" data-toggle="modal" data-target="#mnAD">
                        <div class="card_image">
                            <img hidden id="imgnAD" src="" />
                        </div>
                        <div class="card_title ">
                            <p id="nawalAD"></p>
                        </div>
                        <div class="card_title1 title-white">
                            <p>muerte repentina</p>
                        </div>
                        <div class="card_titlec title-white">
                            <p>Nawal Auxiliar Derecho</p>
                        </div>
                    </div>



                    {{-- aqui nawal auxiliar DE DESTINO --}}


                    <div class="card normal" data-toggle="modal" data-target="#mnADI">
                        <div class="card_image">
                            <img hidden id="imgnADI" src="" />
                        </div>
                        <div class="card_title ">
                            <p id="nawalADI"></p>
                        </div>
                        <div class="card_title1 title-white">
                            <p>muerte repentina</p>
                        </div>
                        <div class="card_titlec title-white">
                            <p>Nawal Auxiliar de Destino</p>
                        </div>
                    </div>


                    {{-- aqui nawal auxiliar DE DESTINO --}}


                    <div class="card sur" data-toggle="modal" data-target="#mnD">
                        <div class="card_image">
                            <img hidden id="imgnD" src="" />
                        </div>
                        <div class="card_title ">
                            <p id="nawalD"></p>
                        </div>
                        <div class="card_title1 title-white">
                            <p>muerte repentina</p>
                        </div>
                        <div class="card_titlec title-white">
                            <p>Nawal de Destino</p>
                        </div>
                    </div>




                    {{-- aqui nawal auxiliar DE DESTINO --}}


                    <div class="card normal" data-toggle="modal" data-target="#mnADD">
                        <div class="card_image">
                            <img hidden id="imgnADD" src="" />
                        </div>
                        <div class="card_title ">
                            <p id="nawalADD"></p>
                        </div>
                        <div class="card_title1 title-white">
                            <p>muerte repentina</p>
                        </div>
                        <div class="card_titlec title-white">
                            <p>Nawal Auxiliar de Destino</p>
                        </div>
                    </div>



                </div>







                    <div class="col-md-12">
                        <div class="box">




                            <div class="row">

                                <div class="col-md-4 ">
                                    <label href="" id="nawalAEI"></label>
                                    <img data-toggle="modal" data-target="#mnAEI" hidden	 class="img-fluid col-md-4 m-2 p-0 flo" id="imgnAEI" src="" width="200" alt="">

                                </div>

                                <div class="col-md-4 ">
                                    <a href="" id="nawalE"></a>


                                    <img class="img-fluid col-md-4 m-2 p-0 flo"data-toggle="modal" data-target="#mnE" hidden	  id="imgnE" src="" width="200" alt="">

                                </div>
                                <div class="col-md-4 ">
                                    <a href="" id="nawalAED"></a>


                                    <img class="img-fluid col-md-4 m-2 p-0 flo" data-toggle="modal" data-target="#mnAED" hidden	 id="imgnAED" src="" width="200" alt="">

                                </div>




                                <div class="col-md-4 ">
                                    <a href="" id="nawalAI"></a>


                                    <img class="img-fluid col-md-4 m-2 p-0 flo" data-toggle="modal" data-target="#mnAI" hidden	 id="imgnAI" src="" width="200" alt="">

                                </div>
                                <div class="col-md-4 ">
                                    <a href="" id="nawal"></a>


                                    <img class="img-fluid col-md-4 m-2 p-0 flo" data-toggle="modal" data-target="#mn" hidden	  id="imgn" src="" width="200" alt="">

                                </div>

                                <div class="col-md-4 ">
                                    <a href="" id="nawalAD"></a>


                                    <img class="img-fluid col-md-4 m-2 p-0 flo" data-toggle="modal" data-target="#mnAD" hidden	  id="imgnAD" src="" width="200" alt="">

                                </div>



                                <div class="col-md-4 ">
                                    <a href="" id="nawalADI"></a>


                                    <img class="img-fluid col-md-4 m-2 p-0 flo" data-toggle="modal" data-target="#mnADI" hidden	  id="imgnADI" src="" width="200" alt="">

                                </div>
                                <div class="col-md-4 ">
                                    <a href="" id="nawalD"></a>


                                    <img class="img-fluid col-md-4 m-2 p-0 flo" data-toggle="modal" data-target="#mnD" hidden	 id="imgnD" src="" width="200" alt="">

                                </div>
                                <div class="col-md-4 ">
                                    <a href="" id="nawalADD"></a>


                                    <img class="img-fluid col-md-4 m-2 p-0 flo" data-toggle="modal" data-target="#mnADD" hidden	  id="imgnADD" src="" width="200" alt="">

                                </div>



<!-- Modal -->
<div class="modal fade dark" id="mnAEI" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title centrar">Nawal Auxiliar Izquierdo de Engendramiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p id="nawalAEI"></p>

                <img class="" id="mimgnAEI" src="" width="1000" alt="">




            </div>
          
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade dark" id="mnE" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title centrar">Nawal de Engendramiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                

                <img class="" id="mimgnE" src="" width="1000" alt="">




            </div>
          
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade dark" id="mnAED" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title centrar">Nawal Auxiliar Derecho de Engendramiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p id="nawalAEI"></p>

                <img class="" id="mimgnAED" src="" width="1000" alt="">




            </div>
          
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade dark" id="mnAI" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title centrar">Nawal Auxiliar Izquierdo </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p id="nawalAEI"></p>

                <img class="" id="mimgnAI" src="" width="1000" alt="">




            </div>
          
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade dark" id="mn" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title centrar">Nawal de la Fecha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p id="nawalAEI"></p>

                <img class="" id="mimgn" src="" width="1000" alt="">




            </div>
          
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade dark" id="mnAD" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title centrar">Nawal Auxiliar Derecho </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p id="nawalAEI"></p>

                <img class="" id="mimgnAD" src="" width="1000" alt="">




            </div>
          
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade dark" id="mnADI" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title centrar">Nawal Auxiliar Izquierdo de Destino</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p id="nawalAEI"></p>

                <img class="" id="mimgnADI" src="" width="1000" alt="">




            </div>
          
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade dark" id="mnD" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title centrar">Nawal de Destino</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p id="nawalAEI"></p>

                <img class="" id="mimgnD" src="" width="1000" alt="">




            </div>
          
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade dark" id="mnADD" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title centrar">Nawal Auxiliar Derecho de Destino</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p id="nawalAEI"></p>

                <img class="" id="mimgnADD" src="" width="1000" alt="">




            </div>
          
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade dark" id="mncargador" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title centrar">Nawal Auxiliar Derecho de Destino</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p id="nawalAEI"></p>

                <img class="" id="mimgncargador" src="" width="1000" alt="">




            </div>
          
        </div>
    </div>
</div>








                            @endsection('layouts.app')
                            <script src="{{ asset('js/cholqme.js') }}"></script>
