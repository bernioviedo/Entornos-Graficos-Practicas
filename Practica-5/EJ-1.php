<?php
$destinatario = "xx@xx.com";
$asunto = "Correo en formato HTML";
$mensaje = "
<html>
<head>
  <title>Correo HTML</title>
</head>
<body>
  <h1>Hola</h1>
  <p>Este es un mensaje enviado desde PHP.</p>
</body>
</html>
";


mail($destinatario, $asunto, $mensaje,);
echo "Correo enviado.";
