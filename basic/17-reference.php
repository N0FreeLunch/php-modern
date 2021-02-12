<?php

function oneUp1(&$var1) {
  $var1 += 1;
}

$num1 = 5;
oneUp1($num1);
echo $num1;

echo "<br>";

function oneUp2($var2) {
  $var2 += 1;
}

$num2 = 5;
oneUp2($num2);
echo $num2;
 ?>
