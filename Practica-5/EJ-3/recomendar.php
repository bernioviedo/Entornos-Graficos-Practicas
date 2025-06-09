<?php
$tu_nombre = $_POST['tu_nombre'];
$correo_amigo = $_POST['correo_amigo'];

$asunto = "$tu_nombre te recomienda este sitio";
$mensaje = "Hola,\n\nTu amigo $tu_nombre te recomienda visitar este sitio:\nhttp://www.google.com";
$cabeceras = "From: xx@xx.com";

mail($correo_amigo, $asunto, $mensaje, $cabeceras);
echo "Recomendación enviada a $correo_amigo.";
