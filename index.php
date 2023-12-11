<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/API1-bien/backend/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/API1-bien/backend/css/estilos.css">
    <title>Minitecnologia</title>
    <link rel="shortcut icon" href="http://localhost/API1-bien/frontend/assets/img/fav.ico" type="image/jpeg">
</head>
<body>
    <?php
    require_once 'backend/class/database.php';
    require_once 'backend/class/autoload.php';

    include 'frontend/views/inicio.html';
    include 'frontend/views/agregar-categoria.html';
    include 'frontend/views/agregar-producto.html';

    ?>

</body>
</html>