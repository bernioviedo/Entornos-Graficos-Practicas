<head>
  <title>Modificacion</title>
</head>

<body>
  <?php
  include("conexion.php");
  //Captura datos desde el Form anterior
  $vNomCit = $_POST['ciudad'];
  $vPais = $_POST['pais'];
  $vHabitantes = $_POST['habitantes'];
  $vSuperficie = $_POST['superficie'];
  $vMetro = $_POST['metro'];
  //Arma la instrucción SQL y luego la ejecuta
  $vSql = "UPDATE ciudades set pais='$vPais', habitantes='$vHabitantes', superficie='$vSuperficie', metro='$vMetro' where ciudad='$vCiudad'";
  mysqli_query($link, $vSql) or die(mysqli_error($link));
  echo ("La ciudad fue modificada<br>");
  echo ("<A href= 'menu.html'>Volver al Menu del ABM</A>");
  // Cerrar la conexion
  mysqli_close($link);
  ?>
</body>

</html>