<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h1>Su Guía espiritual ha dado continuidad a su caso</h1>
<p>Se ha agendado un nuevo evento con su guía espiritual con el titulo:  <br> <strong>"{{$data['titulo']}}"</strong></p>
<p>El evento se llevará a cabo la fecha: {{ $data['fecha'] }}</p><br>
<p>a las {{ $data['hora'] }}</p><br>
<p>Los detalles: son los siguientes:</p>
<p>{{ $data['descripcion'] }}</p>



<p> Ingrese a la reunión con el siguiente link: {{$data['link']}} o dirijase a sus eventos proximos en https://www.luzmaya.com
</p>

</body>
</html>