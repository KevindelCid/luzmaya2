@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="box">
<form action="{{ url('/ajqijab') }}" class="mb-5" method="post" enctype="multipart/form-data">
@csrf
@include('ajqijab.form',['modo'=>'Crear'])


</form>

</div>
        </div>
@endsection('layouts.app')
