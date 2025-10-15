<?php
    session_start();
    if(isset($_POST["mail"])){
        $mail=$_POST["mail"];
        include("conexion.php");
        $busq= $conn->prepare("SELECT * FROM alumnos WHERE mail = ?");
        $busq->bind_param("s", $mail);
        $busq->execute();
        $result = $busq->get_result();
        if($result->num_rows === 0){
            $mensaje= "No se encontro mail dentro de la DB.";
        }else{
        $fila=$result->fetch_assoc();
        $_SESSION["nombre"]=$fila['nombre'];
        $mensaje= "Su nombre es: ". $_SESSION["nombre"];
        }
    }else{
        $mensaje="No se ingreso un mail como para saber su nombre.";
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
    <form action="formularioBSUSUA.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="mail">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre:</label>
            <h4><?php echo $mensaje ?></h4>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <p><a href="pagina2.php">Ir a la pagina 2.</a></p>
    <p><a href="bienvenida.php">Ir a la pagina 3.</a></p>
</body>
</html>