<?php

$max = 15.69;
$mix = 11.32;
$ave = 13.218;
$data = array($max, $min, $ave);
$format = '최댓값 %.1f, 최솟값 %.1f, 평균값 %.1f';
// 값을 치환해 표시한다.
vprintf($format, $data);
 ?>
