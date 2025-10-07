<?php 
$destinatario = "tomasvigistaim@gmail.com";  
$asunto = "Ejercicio 1";  
$cuerpo = '  
<html>  
<head>  
<title>Envio de mail</title>  
</head>  
<body>  
<h1>Hola!</h1>  
<p>  
<b>Este es el ejercicio 1 de la practica 5 PHP.</b>. 
y
y
y
y
y
</p>  
</body>  
</html>  
';  
$headers = "MIME-Version: 1.0\r\n";  
$headers .= "Content-type: text/html; charset = iso-8859-1\r\n";
$headers .= "From: NN <nn@nn.com>\r\n";  
$headers .= "Reply-To:ss@ss.com\r\n";  
$headers .= "Cc:yy@yy.com\r\n";
$headers .= "Bcc: zz@zz.com, pp@pp.com\r\n";  
mail($destinatario,$asunto,$cuerpo,$headers);
?>  
