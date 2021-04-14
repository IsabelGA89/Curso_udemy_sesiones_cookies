<?php
if(isset($_POST['color'])){
    $color = $_POST['color'];
    setcookie('color',$color,time()+365*24*60*60);
}else{
    //si nadie ha utilizado el formulario miramos si hay cookie color o no
    if(isset($_COOKIE['color'])){
        $color = $_COOKIE['color'];
    }else{
        //por defecto el fondo será blanco.
        $color = 'white';
    }
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
    <title>Preferencias con cookies</title>
</head>
<header>
    <h1>Elegir el color de la página</h1>
</header>
<body <?php
echo "style='background-color:$color'";
?>>
<div class="container">
    <h1>Preferencias - elegir el color de la página</h1>
    <div class="jumbotron">
        <p>Parametros guardados en cookies que alteran el css de la página. </p>
        <div style="background-color: lightpink">
            <form method="post" action="index.php">
                <label for="color">Escoge tu color de fondo</label>
                <select name="color" id="color">
                    <option value="red"> Rojo </option>
                    <option value="#f7adfd"> Rosa </option>
                    <option value="#f7adfd"> Lila </option>
                    <option value="#898ac0"> Azul </option>
                    <option value="green"> Verde </option>
                    <option value="black"> Negro </option>
                    <option value="white"> Blanco </option>
                    <option value="#800040"> Burdeos </option>
                </select>
                <input type="submit" name="submit" class="fadeIn fourth" value="Establecer color">
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
