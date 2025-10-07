<?php
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: $nombre <$email>\r\n";

$to="tomasvigistaim@gmail.com";
$subject="Comentarios de una pagina."
$nombre= $_REQUEST['nombre'];
$email= $_REQUEST['email'];
$mensaje= $_REQUEST['mensaje']
$cuerpo = "
<html>
  <body>
    <h2>Nuevo mensaje de contacto</h2>
    <p><strong>Nombre:</strong> $nombre</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Mensaje:</strong><br>$mensaje</p>
  </body>
</html>";
if (mail($to, $subject, $cuerpo, $headers)) {
    echo "<h2>El mensaje fue enviado con éxito.</h2>";
} else {
    echo "<h2>Hubo un error al enviar el mensaje.</h2>";
}
?>