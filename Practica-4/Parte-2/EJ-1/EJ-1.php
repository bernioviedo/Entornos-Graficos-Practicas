<?php
$a = array(
  'color' => 'rojo',
  'sabor' => 'dulce',
  'forma' => 'redonda',
  'nombre' => 'manzana',
  4
);
echo $a['color'], '<br>';
echo $a['sabor'], '<br>';
echo $a['forma'], '<br>';
echo $a['nombre'], '<br>';

echo " <br>---------------------------------- <br>";
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;
echo $a['color'], '<br>';
echo $a['sabor'], '<br>';
echo $a['forma'], '<br>';
echo $a['nombre'], '<br>';
