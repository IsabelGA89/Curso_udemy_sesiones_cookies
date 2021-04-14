<?php
    if(isset($_COOKIE['visita'])){
        echo "Ya has visitado la página con anterioridad <br/>";
        echo "¡Que alegría verte de nuevo por aquí";
    }else{
        setcookie('visita',true, time()+31536000);
        echo "Bienvenido a mi página por primera vez <br/>";
        echo "Hemos establecido la cookie y durará un año";
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detectar Nuevas Visitas</title>
</head>
<body>

</body>
</html>
