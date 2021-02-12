<?php
$tax = 0.1;
function taxPrice($unitPrice, $quantity) {
  global $tax;
  $price = $unitPrice * $quantity * (1 + $tax);
  echo "{$price}원입니다.";
}

taxPrice(250, 4);
echo "<br>";
echo "부가세 ".$tax * 100, "%";
 ?>
