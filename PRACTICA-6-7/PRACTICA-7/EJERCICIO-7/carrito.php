<?php
session_start();

// Si el carrito no existe, lo inicializamos
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="mb-4 text-center">🛒 Tu carrito</h1>

    <?php if (empty($_SESSION['carrito'])): ?>
        <div class="alert alert-warning text-center">Tu carrito está vacío.</div>
        <div class="text-center">
            <a href="index.php" class="btn btn-primary">Volver a la tienda</a>
        </div>
    <?php else: ?>
        <table class="table table-bordered table-striped align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Producto</th>
                    <th></th>
                </tr>
            </thead>
                <tbody>
                <?php
                $total = 0;
                foreach ($_SESSION['carrito'] as $item): 
                    $subtotal = $item['precio'] * $item['cantidad'];
                    $total += $subtotal;
                ?>
                    <tr>
                        <td><?= htmlspecialchars($item['descripcion']) ?></td>
                        <td>$<?= number_format($item['precio'], 2) ?></td>
                        <td><?= $item['cantidad'] ?></td>
                        <td>$<?= number_format($subtotal, 2) ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot class="table-dark">
                    <tr>
                        <th colspan="3">Total</th>
                        <th>$<?= number_format($total, 2) ?></th>
                    </tr>
                </tfoot>
        </table>

        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-outline-primary">Seguir comprando</a>
            <a href="" class="btn btn-success">Finalizar compra</a>
        </div>
    <?php endif; ?>
</div>
</body>
</html>