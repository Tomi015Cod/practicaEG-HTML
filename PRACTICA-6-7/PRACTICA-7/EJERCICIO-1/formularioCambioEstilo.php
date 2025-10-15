<?php
if (isset($_POST["estilo"])) {
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time()+(86400*90)); 
} else {
    if (isset($_COOKIE["estilo"])) {
        $estilo = $_COOKIE["estilo"];
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de estilo</title>
    <?php
    if (isset($estilo)) {
        echo '<link rel="stylesheet" type="text/css" href="' . $estilo . '.css">';
    }
    ?>
</head>
<body>
    <form method="post"> 
        <p>Elige el color de fondo que deseas:</p>
        <select name="estilo">
            <option name="verde">Verde</option>
            <option name="rojo">Rojo</option>
            <option name="negro">Negro</option>
        </select>
        <input type="submit" value="Actualizar estilo">
    </form>
</body>
</html>