<?php
echo "Apartado a: <br>";
echo "<br>";
$i = 1;
while ($i <= 10) {
  print $i++;
}
echo " <br>---------------------------------- <br>";
$i = 1;
while ($i <= 10):
  print $i;
  $i++;
endwhile;
echo " <br>---------------------------------- <br>";
$i = 0;
do {
  print ++$i;
} while ($i < 10);

echo " <br>---------------------------------- <br>";
echo "<br>";



echo "Apartado b: <br>";
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
  print $i;
}
echo " <br>---------------------------------- <br>";
for ($i = 1; $i <= 10; print $i, $i++);
echo " <br>---------------------------------- <br>";
for ($i = 1;; $i++) {
  if ($i > 10) {
    break;
  }
  print $i;
}
echo " <br>---------------------------------- <br>";
$i = 1;
for (;;) {
  if ($i > 10) {
    break;
  }
  print $i;
  $i++;
}
echo " <br>---------------------------------- <br>";
echo "<br>";



echo "Apartado c: <br>";
echo "<br>";
$i = 2;
if ($i == 0) {
  print "i equals 0";
} elseif ($i == 1) {
  print "i equals 1";
} elseif ($i == 2) {
  print "i equals 2";
}
echo " <br>---------------------------------- <br>";
switch ($i) {
  case 0:
    print "i equals 0";
    break;
  case 1:
    print "i equals 1";
    break;
  case 2:
    print "i equals 2";
    break;
}
