<?php
session_start();

$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["email"] = $_POST["email"];

$nombre = $_POST["nombre"];
$asunto = "$nombre te recomienda visitar este sitio";
$emailAmigo = $_POST["email-amigo"];
$mensaje = $_POST["recomendacion"];

if (mail($emailAmigo, $asunto, $mensaje)) {
    echo "<h3>El mensaje fue enviado con éxito a $amigo.</h3>";
} else {
    echo "<h3>Error al enviar el mensaje.</h3>";
}
?>