<?php

function countUp1() {
  $count += 1;
  return $count;
}

function countUp2() {
  static $count = 0;
  $count += 1;
  return $count;
}

for ($i=0; $i < 10; $i++) {
  $num = countUp1();
  echo "{$num}번째";
}

echo "<br>";

for ($i=0; $i < 10; $i++) {
  $num = countUp2();
  echo "{$num}번째";
}
 ?>
