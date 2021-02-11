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

trait KeiTool {
  public function hello() {
    echo "오랜만입니다.";
  }
}

class MyClass {
    use HobiTool, HanaTool, KeiTool {
      HanaTool::hello insteadof HobiTool,KeiTool;
    }
}

$myObj = new MyClass();
$myObj->hello();
echo "\n";
$myObj->weekday();

 ?>
