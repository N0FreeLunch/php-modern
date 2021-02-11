<?php

trait HobiTool {
  public function hello() {
    echo "헬로";
  }

  public function weekday() {
    $week = ["일","월","화","수","목","금","토"];
    $now = new DateTime();
    $w = (int)$now->format('w');
    $weekday = $week[$w];
    echo "오늘은 ",$weekday,"요일입니다.";
  }
}

trait HanaTool {
  public function hello() {
    echo "안녕히계세요";
  }
}

class MyClass {
  use HobiTool, HanaTool {
      HobiTool::hello as hobiHello;
      HanaTool::hello as hanaHello;
      HanaTool::hello insteadof HobiTool;
  }
}

$myObj = new MyClass();
$myObj->hello();
echo "\n";

$myObj->hobiHello();
echo "\n";

$myObj->hanaHello();
echo "\n";
 ?>
