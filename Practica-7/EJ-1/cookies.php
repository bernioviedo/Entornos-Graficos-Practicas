<?php
if (isset($_POST['tema'])) {
  $tema = $_POST['tema'];
  setcookie('tema', $tema, time() + (30 * 24 * 60 * 60));
} elseif (isset($_COOKIE['tema'])) {
  $tema = $_COOKIE['tema'];
} else {
  $tema = 'light';
}

$cssRuta = "estilos/" . $tema . ".css";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Estilos</title>
  <link rel="stylesheet" href="<?php echo $cssRuta; ?>">
</head>

<body>
  <p>Elige un estilo visual para la página:</p>

  <form method="post">
    <select name="tema">
      <option value="light" <?php if ($tema == 'light') echo 'selected'; ?>>Claro</option>
      <option value="dark" <?php if ($tema == 'dark') echo 'selected'; ?>>Oscuro</option>
    </select>
    <button type="submit">Aplicar Estilo</button>
  </form>
</body>

</html>