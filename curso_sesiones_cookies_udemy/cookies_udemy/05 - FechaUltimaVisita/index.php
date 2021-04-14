<?php
//Fecha en que entra el usuario
$fecha = date("d/m/Y | H:i:s");
//Creamos la cookie por 1 año
setcookie('fVisita',$fecha, time()+31536000);
if(isset($_COOKIE['fVisita'])){
    $fUltimaVisita = $_COOKIE['fVisita'];
    echo "Hola de nuevo,tu última visita fue el: $fUltimaVisita <br/>";
}else{
    echo "Esta es tu primera visita a nuestra página";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fecha de la Última Visita</title>
</head>
<body>
</body>
</html>
