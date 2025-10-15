<?php 
    if(isset($_POST["nombre"])){
        $nombre=$_POST["nombre"];
        setcookie("nombre", $nombre, time()+3600*24);
        $mensaje= 'Su nombre es: '. $nombre.'.';
    }else{
        if(isset($_COOKIE["nombre"])){
            $nombre=$_COOKIE["nombre"];
            $mensaje= 'Su nombre es: '. $nombre.'.';
        }else{
            $mensaje='No se ha cargado ningun nombre aun.';
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>FomrUsu</title>
</head>
<body>
    <form action="formularioUsuario.php" method="POST">
          <div class="form-group m-2">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
            </div>
            <button type="submit" class="btn btn-primary m-2">Cargar Datos</button>
    </form>
    <h2><?php echo $mensaje ?></h2>
</body>
</html>