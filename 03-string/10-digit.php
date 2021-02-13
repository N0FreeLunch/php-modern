<?php
$a =7;
$b = 2380;
printf('번호는 %3d입니다.', $a);
echo "<br>";
printf('번호는 %03d입니다.', $a);
echo "<br>";
printf('번호는 %030d입니다.', $a);
echo "<br>";
printf("청구액은 %'*6d원", $b);
echo "<br>";
printf("청구액은 %'*7d원", $b);
echo "<br>";
printf("청구액은 %'*8d원", $b);
echo "<br>";
printf("청구액은 %'@6d원", $b);
echo "<br>";
printf("청구액은 %'@7d원", $b);
echo "<br>";
printf("청구액은 %'@8d원", $b);
echo "<br>";
printf("청구액은 %*8d원", $b);

echo "<br>";
echo "<br>";

$year = 1987;
$month = 3;
$day = 9;
printf('%04d-%02d-%02d', $year, $month, $day);
 ?>
