<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php if(isset($_SESSION["nombre"])){echo 'El nombre recuperado es: '.$_SESSION["nombre"];}else{echo 'No se ha recuperado ningun nombre.';} ?></h3>
</body>
</html>