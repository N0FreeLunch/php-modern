<?php
function charge($grade, $days = 1){
  switch($grade) {
    case "A":
      $price = 15000 * $days;
      break;
    case "B":
      $price = 12000 * $days;
      break;
    default:
      $price = 8000 * $days;
      break;
  }
  return $price;
}

$price1 = charge("B", 2);
$price2 = charge("A");
echo "금액 1은 {$price1}원";
echo "<br>";
echo "금액 2는 {$price2}원";
 ?>
