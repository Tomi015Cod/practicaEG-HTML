<?php
    session_start();
    if(isset($_POST["nombre"])){
        if(isset($_POST["apellido"])){
            $nombre=$_POST["nombre"];$apellido=$_POST["apellido"];
            setcookie("nombre", $nombre, time()+3600*24);
            setcookie("apellido", $apellido, time()+3600*24);
            $_SESSION["nombre"]=$nombre;
            $_SESSION["apellido"]=$apellido;
            $mensaje= $nombre .' y '. $apellido;
        }
    }else{
        $mensaje="---";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>NyA</title>
</head>
<body>
    <form action="pag1.php" method="POST">
          <div class="form-group m-2">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
            </div>

            <div class="form-group m-2">
                <label>Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Ingresa tu nombre">
            </div>
            <button type="submit" class="btn btn-primary m-2">Cargar Datos</button>
    </form>
    <h2><?php echo $mensaje ?></h2>
    <p><a href="pag2.php">Ir a la pagina 2.</a></p>
</body>
</html>