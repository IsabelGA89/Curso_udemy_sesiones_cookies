<?php
//Si la cookie existe
if(isset($_COOKIE['contador'])){
    //Le sumamos una unidad
    setcookie('contador',$_COOKIE['contador']+1, time()+365*24*60*60 );
    $contadorActual = $_COOKIE['contador'];
    echo "Hola de nuevo, has visitado esta página: $contadorActual veces<br/>";
}else{
    //Sino la creas y muestra mensaje
    setcookie('contador',1,time()+31536000);
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
    <title>Contador de visitas</title>
</head>
<body>
<h1>Contador de visitas</h1>
</body>
</html>
