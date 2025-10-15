<?php
    if(isset($_COOKIE["contador"])){
        $contador=$_COOKIE["contador"];
        $contador= $contador+1;
        setcookie("contador", $contador, time()+(3600*24));
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Caso1</title>
    </head>
    <body>
        <p><?php echo'Ha visitado esta pagina ' . $contador . ' veces.' ; ?></p>
    </body>
    </html>
<?php
    }else{
        $contador=1;
        setcookie("contador", $contador, time()+(3600*24));
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Caso2</title>
    </head>
    <body>
        <p>Bienvenido, esta es su primera vez en la pagina.</p>
    </body>
    </html>
<?php
    }
?>