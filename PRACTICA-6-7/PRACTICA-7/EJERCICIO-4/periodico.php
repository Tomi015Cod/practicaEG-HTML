<?php
    if(isset($_POST["tipo"])){
        $tipo=$_POST["tipo"];
        setcookie("tipo", $tipo, time()+(3600*24*24));
    }else{
        if(isset($_COOKIE["tipo"])){
            $tipo=$_COOKIE["tipo"];
        }else{$tipo="---";}
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Periodico</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h1 class="text-center mb-4">Periódico Online</h1>
            
            <h3 class="text-primary text-center">
                <?php echo "Noticia tipo: " . $tipo; ?>
            </h3>

            <hr>

            <form method="post" class="text-center">
                <label class="form-label fw-bold mb-3">Elegí el tipo de titular que querés ver:</label>

                <div class="d-flex justify-content-center gap-4 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipo" id="politica" value="politica" >
                        <label class="form-check-label" for="politica">Noticia política</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipo" id="economica" value="economica" >
                        <label class="form-check-label" for="economica">Noticia económica</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipo" id="deportiva" value="deportiva" >
                        <label class="form-check-label" for="deportiva">Noticia deportiva</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar titular</button>
            </form>

        </div>
    </div>
</body>
</html>