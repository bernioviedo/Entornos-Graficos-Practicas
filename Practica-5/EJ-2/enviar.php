<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje_usuario = $_POST['mensaje'];

$destinatario = "xx@xx.com";
$asunto = "Consulta desde el sitio web";
$mensaje = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje_usuario";
$cabecera = "From: $email";

mail($destinatario, $asunto, $mensaje, $cabecera);
echo "Gracias por tu consulta.";
