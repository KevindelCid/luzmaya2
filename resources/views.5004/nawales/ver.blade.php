@extends('layouts.app')
@section('content')
    <div class="container ">
        <div class="form-group">
            
<div class="collapse-btn" id="obj2" ><i class="fa fa-bars"  onclick="mostrar();" aria-hidden="true"></i></div>
<div class="collapse-btnc" id="obj3"> <i class="fa fa-bars"  onclick="ocultar();" aria-hidden="true"></i></p></div>
        <div id="obj1" class="col-md-12 collapse-menu">
            <div class="box">
                <form action="" class="mb-3" >
                 <div class="row">               
@foreach ($nawales as $nawal)
                     <div class="col-md-1 form-group">
                        <div class="conti">
                            <div class="card">
                              {{-- <img class="img-fluid" src="{{ asset('storage').'/'.$nawal->glifo  }}" width="20" alt=""> --}}
                              <a href="{{url('nawales/ver?nawal=').$nawal->nombre}}" class="" >{{  $nawal->nombre  }}</a>
                            </div>
                        </div>
                    </div>
@endforeach
                 </div>
                </form>
            </div>
        </div>
        </div>
        <div class="centrar">

        </div>
        @foreach ($nawales as $nawal)
        @if($nawal->nombre == Request::get("nawal") )
        <div id="main" class="container-fluid h-100">
            <div class="row h-100">
     <img class="img-fluid col-md-4 m-0 p-0" src="{{ asset('storage').'/'.$nawal->glifo  }}" width="200" alt="">
<div class="col-md-6 m-0 p-0 centrar">
    <div class="col-md-12 m-0 p-0 centrar">
<h2> {{ Request::get("nawal") }}</h2>
<h2 >{{ $nawal->tipo_nawal }}</h2>
<p>{{ $nawal->descripcion }}</p>
<h2>Virtudes/Luz</h2>
<p >{{ $nawal->c_buenas }}</p>
<h2>Vergüenzas/oscuridad</h2>
<p >{{ $nawal->c_malas }}</p>
    </div>
    

             
       </div>
            </div>
        </div>
     
        @endif
        @endforeach





















           {{-- @foreach ($nawales as $nawal)   
               
           <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$nawal->glifo  }}" width="50" alt="">
                
           @endforeach --}}




                {{-- <a href="{{ url('/nawales/'.$nawal->id.'/edit') }}" class="btn btn-success ">
                 Editar
                </a>
        


 <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$nawal->glifo  }}" width="250" alt="">



               <form action="{{ url('/nawales/'.$nawal->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger" value="Borrar" onclick="return confirm('¿Quieres Borrar este Nawal')">
            
            </form></td>
        </tr>    --}}
       
{{-- 
{!! $nawales->links() !!}
<a href="{{url('home')}}">Inicio</a> --}}

</div>

@endsection('layouts.app')
