<?php
session_start();
include("conexion2.php");

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if (isset($_GET['agregar'])) {
    $id = $_GET['agregar'];

    $stmt = $conn->prepare("SELECT id, descripcion, precio FROM producto WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $producto = $result->fetch_assoc();

    if ($producto) {
        if (isset($_SESSION['carrito'][$id])) {
            $_SESSION['carrito'][$id]['cantidad']++;
        } else {

            $_SESSION['carrito'][$id] = [
                'id' => $producto['id'],
                'descripcion' => $producto['descripcion'],
                'precio' => $producto['precio'],
                'cantidad' => 1
            ];
        }
    }

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Simple</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="mb-4 text-center">🛍️ Tienda Simple</h1>
    <div class="row g-4">
        <?php 
            $busq= $conn->prepare("SELECT * FROM producto");
            $busq->execute();
            $result=$busq->get_result();
        while($fila=$result->fetch_assoc()){?>
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $fila["descripcion"]?></h5>
                        <p class="card-text"><?php echo'Nombre: '. $fila["id"] ?></p>
                        <p class="card-text"><?php echo'Precio: '. $fila["precio"] ?></p>
                        <a href="?agregar=<?= $fila["id"] ?>" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="text-center mt-5">
        <a href="carrito.php" class="btn btn-success btn-lg">🛒 Ver carrito</a>
    </div>
</div>
</body>
</html>
