<?php
//Guardamos la variable
$nombre = $_POST['nombre'];

//Creamos la cookie nombre y fecha de duración
setcookie('nombre',$nombre, time()+4800);


?>