<?php

function myFunc() {
    $allArgs = func_get_args();
    $total = array_sum($allArgs);
    $numArgs = func_num_args();
    if($numArgs > 0) {
      $average = $total / $numArgs;
      $lastValue = func_get_arg($numArgs - 1);
    } else {
      $lastValue = $average = $total = "(데이터 없음)";
    }
    echo "합계", $total, "\n";
    echo "평균", $average, "\n";
    echo "마지막 점수", $lastValue, "\n";
}

myFunc(43, 67, 55, 75);
 ?>
