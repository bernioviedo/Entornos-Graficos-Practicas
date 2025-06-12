<html>

<head>
  <title>Alta Ciudad</title>
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
  $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));;
  //$vCantUsuarios = mysqli_result($vResultado, 0);

  $vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, metro)
values ('$vNomCit','$vPais', '$vHabitantes', '$vSuperficie', '$vMetro')";
  mysqli_query($link, $vSql) or die(mysqli_error($link));
  echo ("La ciudad fue Registrada<br>");
  echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
  // Liberar conjunto de resultados
  mysqli_free_result($vResultado);

  // Cerrar la conexion
  mysqli_close($link);
  ?></body>

</html>