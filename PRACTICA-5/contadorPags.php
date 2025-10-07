<?php session_start();  
if (!isset($_SESSION["contador"])){  
$_SESSION["contador "] = 1;  
}else{  
$_SESSION["contador "]++;  
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Paginas.</title>
</head>
<body>
    <h2><?php echo "Has visitado " . $_SESSION["contador "] . " paginas"; ?></h2>
</body>
</html> 