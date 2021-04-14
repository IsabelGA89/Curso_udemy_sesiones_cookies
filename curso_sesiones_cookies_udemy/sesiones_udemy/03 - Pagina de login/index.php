<!doctype html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport"
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Sesiones 03 - Login</title>
</head>
<header>
    <h1>Login Page</h1>
</header>
<body>
<div class="container">
    <h1>Login con contraseña y usuario</h1>
    <div class="jumbotron">
        <h2>Sistema de acceso para usuarios registados</h2>
        <p> Vamos a tener 3 páginas: </p>
        <ul>
            <li>Login: con un formulario para recoger la información.</li>
            <li>Permiso: página para los usuarios con permiso, una página privada, que verificará si tenemos una sesión abierta.</li>
            <li>Salir: cerrará la sesión cuando pulsemos el botón cerrar sesión.</li>
        </ul>
        <div style="background-color: lightpink">
            <?php
            if($_GET['error'] == "si"){
                echo " <div class='alert alert-danger' style='color:red; padding: 5px;margin:5px;'>Tu usuario y password son incorrectos, inténtalo de nuevo </div> <br/>";
            }
            if($_GET['error'] == "fuera"){
            echo "<div class='alert alert-danger' style='color:red; padding: 5px;margin:5px;'>¡No puedes entrar directamente al contenido privado! Introduce usuario y contraseña</div> <br/>";
            }
            ?>
            <form action="permiso.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre de usuario </label>
                    <input name="usuario" type="text" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña </label>
                    <input type="password" name="password" placeholder="Contraseña">
                </div>
                <br/ >
                <input class="btn btn-primary" type="submit" value="Login">
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
