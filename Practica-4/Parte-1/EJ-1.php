<?php
function doble($i)
{
  return $i * 2;
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo " ";
echo gettype($b);
echo " ";
echo gettype($c);
echo " ";
echo gettype($d);
echo " ";
if (is_int($d)) {
  $d += 4;
}
if (is_string($a)) {
  echo "Cadena: $a";
}
echo " ";
$d = $a ? ++$d : $d * 3;
$f = doble($d++);
$g = $f += 10;
echo " ";
echo $a, " ", $b, " ", $c, " ", $d, " ", $f, " ", $g;
