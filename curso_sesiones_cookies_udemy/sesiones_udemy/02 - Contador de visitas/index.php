<?php
include "../functions.php";
session_start();
$msj = "";
if(isset($_SESSION['contador'])){
    //Le sumamos uno al contador:
    $_SESSION['contador']++;
    $contador = $_SESSION['contador'];
    $msj .= "Se suma 1 al contador. <br>";
    $msj .= "Nos has visitado $contador veces <br>";
}else{
    //Si no existe lo creamos:
    $_SESSION['contador'] = 1;
    $msj .= "Se crea la variable de sesión contador. <br>";
    $msj .= "Esta es la  ".$_SESSION['contador']." vez que nos visitas<br>";
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
    <title>Sesiones 02 - Contador de visitas</title>
</head>
<header>
    <h1>Sesiones 02 - Contador de visitas</h1>
</header>
<body>
<div class="container">
    <h1>Contador de visitas con sesiones</h1>
    <div class="jumbotron">
        <p>Vamos a registrar cúantas páginas vista un usuario dentro de nuestra web </p>
        <p>Cada navegador será un usuario distinto.</p>
        <div style="background-color: lightpink">
            <?= $msj;?>
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
