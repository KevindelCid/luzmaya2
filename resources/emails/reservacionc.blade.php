<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h1>¡Muchas gracias por usar los servicios de LuzMaya!</h1>
<p>Ha reservado una cita con el titulo: "{{$data['titulo']}}"</p>
<p>El evento se llevará a cabo la fecha: {{ $data['fecha'] }}</p><br>
<p>a las {{ $data['hora'] }}</p><br>



<p>Ingrese a la reunión desde el siguiente link: {{$data['link']}} o vaya a sus eventos proximos en https://luzmaya.com
</p>

</body>
</html>