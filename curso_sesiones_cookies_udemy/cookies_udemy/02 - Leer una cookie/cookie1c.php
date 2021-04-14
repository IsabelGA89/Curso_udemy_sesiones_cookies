<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2 - Leer una Cookie </title>
</head>
<body>
<h2>Formulario de registro del nombre del visitante y Mostrar en pantalla el nombre</h2>
    <?php
    //Leera y mostrará en pantalla el nombre de la cookie

    if(isset($_COOKIE['nombre'])){
        $nombre = $_COOKIE['nombre'];
        echo "La cookie tiene el valor: $nombre";
    } else{
        echo "La cookie no existe o ha caducado.";
    }

    ?>
</body>
</html>
