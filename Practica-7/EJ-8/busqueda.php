<?php
session_start();

if (isset($_POST['buscar'])) {
  $termino = trim($_POST['buscar']);
  setcookie("ultima_busqueda", $termino, time() + (86400 * 30)); // 30 días
  $_SESSION['termino'] = $termino;
} else {
  $termino = isset($_SESSION['termino']) ? $_SESSION['termino'] : '';
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Buscador de canciones</title>
</head>

<body>

  <h1>Buscador de canciones</h1>

  <form method="post" action="index.php">
    <input type="text" name="buscar" value="<?php echo htmlspecialchars($termino); ?>" placeholder="Ingrese una canción">
    <input type="submit" value="Buscar">
  </form>

  <?php
  if (!empty($termino)) {

    $conexion = new mysqli("localhost", "root", "", "prueba");

    if ($conexion->connect_error) {
      die("Error de conexión: " . $conexion->connect_error);
    }

    $stmt = $conexion->prepare("SELECT * FROM buscador WHERE canciones LIKE ?");
    $busqueda = "%" . $termino . "%";
    $stmt->bind_param("s", $busqueda);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
      echo "<h2>Resultados:</h2><ul>";
      while ($fila = $resultado->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($fila['canciones']) . "</li>";
      }
      echo "</ul>";
    } else {
      echo "<p>No se encontraron canciones.</p>";
    }

    $stmt->close();
    $conexion->close();
  }
  ?>

  <?php

  if (isset($_COOKIE['ultima_busqueda'])) {
    echo "<p>Última búsqueda: " . htmlspecialchars($_COOKIE['ultima_busqueda']) . "</p>";
  }
  ?>

</body>

</html>