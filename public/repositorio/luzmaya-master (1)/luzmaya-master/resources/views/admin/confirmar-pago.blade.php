@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
     
          {{-- @if(isset($mensaje)){{ $mensaje }}@endif  --}}



          <div class="col-md-12">
            <div class="box">
        {{-- <form action="" class="mb-5" method="" enctype="multipart/form-data"> --}}
        <div class="row mb-5" >
        
        
        
        <div class="col-md-12 form-group ">      


          @if(session('mensaje'))
          <div class="alert alert-success">
            {{ session('mensaje') }}
          </div>
        @endif

@if(isset($allEvents))
@foreach($allEvents as $ae)
          <h3>Depositar a {{ $ae->nombre }}</h3>
<small>1) A continuación dirijase a Paypal.com e inicie sesión con la cuenta de administración de LuzMaya.com</small>

        </div>


        <div class="col-md-6 form-group ">      

<small>2) deposite la cantidad de:</small>
<h1>${{$ae->depositar }}</h1>
          

        </div>
        <div class="col-md-6 form-group ">      
<small>a:</small>
<h1>{{$ae->email}}</h1>

           

        </div>
        <div class="col-md-6 form-group ">    
            <small> 3) confirme que ha depositado la cantidad de: {{ $ae->depositar }} a {{ $ae->email }}</small>
           
            <button class=" c btn btn-success" onclick="confirmarTodo({{ $ae->id }});" href="">Confirmar pago</button>
        </div>

@endforeach






@elseif(isset($onlyOneEvent))

@if($onlyOneEvent == null)
<h3>No se encontró ningún evento con estos parametros.</h3>
@endif

@foreach($onlyOneEvent as $ae)



          <h3>Depositar a @foreach($prof as $pro){{ $pro->name }}@endforeach</h3>
<small>1) A continuación dirijase a Paypal.com e inicie sesión con la cuenta de administración de LuzMaya.com</small>

        </div>


        <div class="col-md-6 form-group ">      

<small>2) deposite la cantidad de:</small>
<h1>${{$ae->depositar }}</h1>
          

        </div>
        <div class="col-md-6 form-group ">      
<small>a:</small>
<h1>@foreach($prof as $pro){{$pro->email}}@endforeach</h1>

           

        </div>
        <div class="col-md-6 form-group ">    
            <small> 3) confirme que ha depositado la cantidad de: {{ $ae->depositar }} a @foreach($prof as $pro){{$pro->email}}@endforeach</small>
           
            <button  class=" c btn btn-success" onclick="confirmar({{ $ae->id }}, @foreach($prof as $pro){{$pro->id}}@endforeach);" href="">Confirmar pago</button>
        </div>

@endforeach


@else
<h3>No se encontraron todos los parametros</h3>
@endif

    </div>
</div>
</div>
   























        </div>

    </div>
          
</div>
<script src="{{ asset('js/agenda.js') }}"></script>
@endsection 