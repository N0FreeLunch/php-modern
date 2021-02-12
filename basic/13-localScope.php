<?php
$quantity = 2;

function price() {
  $price = 250 * $quantity;
  echo "{$price}원입니다.";
}

echo "{$quantity}개에";

price();

echo "<br>";

$tax = 0.1;
function taxPrice($unitPrice, $quantity) {
  $price = $unitPrice * $quantity * (1 + $tax);
  echo "{$pirce}원입니다.";
}

taxPrice(250, 4);
echo "<br>";
echo "부가세".$tax*100, "%";
 ?>
