<?php

$hayCookie = false;
//Nos llega la información en una matriz
if(isset($_POST['submit'])){
    //recogemos los elementos del formulario:
    $usuario = array($_POST['nombre'],$_POST['apellido'],$_POST['Medad'],$_POST['edad'],$_POST['password'],$_POST['ciudad']);
    //Creamos una cookie para cada elemento de la matriz: - no hay porque pasarlos todos
    setcookie('usuario[nombre]',$usuario[0],time()+365*24*606*60);
    setcookie('usuario[apellido]',$usuario[1],time()+365*24*606*60);
    setcookie('usuario[Medad]',$usuario[2],time()+365*24*606*60);
    setcookie('usuario[edad]',$usuario[3],time()+365*24*606*60);
    setcookie('usuario[password]',$usuario[4],time()+365*24*606*60);
    setcookie('usuario[ciudad]',$usuario[5],time()+365*24*606*60);

    $hayCookie = true;
}else{
    $hayCookie = false;
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
    <title>Cookie y arrays</title>
</head>
<header>
    <h1>Cookie definida como un array</h1>
</header>
<body>
<div class="container">
    <h1>Una matriz con un montón de valores y los convertimos en cookies</h1>
    <div class="jumbotron">
        <p> Login con cookies </p>
        <div style="background-color: lightpink">

            <form method="post" action="index.php">

                <label for="nombre">Introduce tu nombre</label>
                <input type="text" placeholder="Isabel" name="nombre"><br>

                <label for="apellido">Introduce tu apellido</label>
                <input type="text" placeholder="Gonzalez" name="apellido"><br>

                <label for="Medad">¿Eres mayor de edad?</label>
                <label><input type="radio" name="Medad" value="si" checked> Sí</label>
                <label><input type="radio" name="Medad" value="no"> No</label><br>

                <label for="edad">¿Cuántos años tienes?</label>
                <input type="number" name="edad"><br>

                <label for="pass">Introduce tu contraseña</label>
                <input type="password" name="password"><br>

                <label for="ciudad">Escoge tu ciudad</label>
                <select name="ciudad" id="color">
                    <option value="huesca"> Huesca </option>
                    <option value="zaragoza"> Zaragoza </option>
                    <option value="teruel"> Teruel </option>
                </select><br>
                <input type="submit" name="submit" class="fadeIn fourth" value="Enviar información">
            </form>
            <?php
            if($hayCookie == true){
                echo  " <hr/>";
                echo "<br/>El nombre es: ".$_COOKIE['usuario']['nombre'];
                echo "<br/>El apellido es: ".$_COOKIE['usuario']['apellido'];
                echo "<br/>¿Es mayor de edad?: ".$_COOKIE['usuario']['Medad'];
                echo "<br/>Tienes: ".$_COOKIE['usuario']['edad']." años";
                echo "<br/>Tu contraseña es: ".$_COOKIE['usuario']['password'];
                echo "<br/>Eres de: ".$_COOKIE['usuario']['ciudad'];
            }



            ?>
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
