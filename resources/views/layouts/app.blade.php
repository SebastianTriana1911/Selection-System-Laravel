<!-- Carpeta layouts con la plantilla HTML que se hereda en el reto de vistas -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <nav>
        <h1>Formulario</h1>
    </nav>

    <!-- Con la propiedad yield se podra modificar el contenido -->
    @yield("content")
</body>
</html>