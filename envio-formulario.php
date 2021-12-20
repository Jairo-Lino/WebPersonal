<?php
//estamos resibiendo los datos q se envian x formulario
$nombre_usuario=$_POST['nombre']; // $nombre_usuario son los variables
$email_usuario=$_POST['email'];
$consulta_usuario=$_POST['mensaje'];
// Creo 3 variables que me toman lo que se envía por POST de cada valor del formulario

$destino="jairodarwinlino@gmail.com"; // mail del destino

$asunto="Consulta enviada desde www.deluxewebpro.com"; // asunt correspondiente
// estos 3 lineas son los mensajes que llegaran al correo del administrador
$mensaje="Tu Nombre es: ".$nombre_usuario."\r\n"; // el punto q esta antes o despues de la variable es para concatenar y la \r\n es para salto de linea para q no este pegado
$mensaje.="Tu Email es: ".$email_usuario."\r\n";
$mensaje.="Consulta: ".$consulta_usuario."\r\n";

$remitente="From: algo@jonylif.com.ar"; // en remitente no se pondra nada esta es solo de prueba

mail($destino, $asunto, $mensaje, $remitente);


header("Location:index.php?i=ok");
// SI EL FORMULARIO SE ENVIO CORRECTAMENTE, PONEME EN LA URL DESPUES DEL INDEX.PHP UN SIGNO DE PREGUNTA, UNA LETRA I, Y UN IGUAL OK
?>
