<?php
setcookie('nombre', $_COOKIE['nombre'], time()-4800);
/*setcookie('nombre', '' ); //Esto también funcionaría*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3 - ELiminar una Cookie </title>
</head>
<body>
<h2>Formulario de registro del nombre del visitante y Mostrar en pantalla el nombre + Boton para eliminar cookie</h2>
    <p>Las cookies se envian al navegador mediante encabezados http</p>
    <p>Por tanto, las operaciones de crear y eliminar cookies deben estar antes de cualquier otra cosa en la página.</p>
    <p>Incluso antes de un html o de un espacio en blanco.</p>
<!--Esta página nos comprobaba si había una cookie con el nombre Nombre-->
<a href="cookie1c.php">Verificar eliminación de cookie</a>

</body>
</html>
