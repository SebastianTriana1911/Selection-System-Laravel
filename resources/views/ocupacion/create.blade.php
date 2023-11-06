<!-- Se extiende o importa la plantilla que contiene la carpeta layouts -->
@extends("layouts.app")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    @section ("content")

        <!-- Se crea un formulario que enviara los registros por el metodo post y lo recibira 
        una ruta que tambien contiene dicho metodo y lo que hara esta ruta es asignarle a una
        variable todos los campos diligenciados y lo salva con el metodo save() para subirlo 
        a la bd -->
        <form action="{{route("store.ocupaciones")}}" method="POST">
            
            <!-- Esta directiva blade es obligatoria utilizarla al crear un formulario con 
            metodo POST -->
            @csrf

            <label for="codigo_ocupacion">
                <strong>Codigo ocupacion: </strong> <br>
                <input id="codigo_ocupacion" type="number" name="codigo_ocupacion" min="0" />
            </label>

            <br> <br>
            
            <label for="nombre_ocupacion">
                <strong>Nombre de la ocupacion: </strong> <br>
                <input id="nombre_ocupacion" type="text" name="nombre_ocupacion" />
            </label>
            
            <br> <br>
            
            <label for="descripcion">
                <strong>Descripcion: </strong> <br>
                <textarea id="descripcion" name="descripcion"></textarea>
            </label>
            
            <br>
            
            <input type="submit" value="Enviar formulario"/>
        </form>

        <!-- Link que retorna una ruta la cual la cual es la del index -->
        <a href="{{ route("index.ocupaciones") }}">Volver al index</a>

    @endsection
</body>
</html>