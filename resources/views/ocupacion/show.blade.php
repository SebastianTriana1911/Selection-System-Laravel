<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- A la variable que contiene todos los registros segun el id que se le haya
    pasado como parametro desde la vista index, se le asignaran los campos necesarios
    para poder mostrar su informacion -->
    <h1>Ocupacion {{$ocupacion -> nombre_ocupacion}}</h1>

    <strong>Codigo de ocupacion: </strong>
    <p>{{$ocupacion -> codigo_ocupacion}}</p>

    <strong>Nombre de la ocupacion: </strong>
    <p>{{$ocupacion -> nombre_ocupacion}}</p>

    
    <strong>Descripcion de la ocupacion: </strong>
    <p>{{$ocupacion -> descripcion}}</p>

    <!-- Link que retorna una ruta la cual la cual es la del index -->
    <a href="{{route("index.ocupaciones")}}">Volver al index</a>
</body>
</html>