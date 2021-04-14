<?php
include "../functions.php";
mostrar_warnings();
session_start();
if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $_SESSION['nombre'] = $nombre;
    Header("Location:leer_sesion.php");
    exit;
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport"
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Sesiones 01 </title>
</head>
<header>
    <h1>Sesiones 01 - Guardar el nombre del usuario</h1>
</header>
<body>
<div class="container">
    <h1>Guardar el nombre del usuario en una variable de sesión</h1>
    <div class="jumbotron">
        <p>El nombre se recoge de un formulario, por ejemplo: </p>
        <div style="background-color: lightpink">
            <form method="post" action="index.php">
                <label for="nombre">Escribe tu nombre: <input type="text" name="nombre" placeholder="Tu nombre aquí"></label>
                <input type="submit" name="submit" class="fadeIn fourth" value="Guardar Nombre">
            </form>
        </div>

    </div>
</div>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<!-- Footer -->
<footer class="page-footer font-small">
    <div class="footer-copyright text-center py-3">© 2021 Copyright
        Isabel González Anzano
    </div>
</footer>
<!-- Footer -->


