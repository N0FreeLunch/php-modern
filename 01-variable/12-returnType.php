<?php
function twice(float $var):int {
  $var *= 2;
  return $var;
}

$num = 10.8;
$result = twice($num);
echo "{$num}의 2배는", $result;
 ?>
