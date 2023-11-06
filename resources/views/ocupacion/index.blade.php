<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estos son las ocupaciones que hay</h1>

    <!-- Se itera todos los registros de la bd por medio de un bucle foreach ya que dichos
    regitros vienen en arrays -->
    @foreach ($ocupacion as $nombre)

        <li>

            <!-- Al clickiar uno de los nombres de la ocupacion se llevara a la ruta que contiene
            todos los registros de dicha ocupacion -->
            <a href="{{route("show.ocupaciones", $nombre -> id)}}">{{$nombre -> nombre_ocupacion}}</a>
        </li>

    @endforeach
    
    <!-- Link que lleva a la ruta del formulario para crear un nuevo registro-->
    <a href="{{route("create.ocupaciones")}}">Crear un formulario</a>
</body>
</html>