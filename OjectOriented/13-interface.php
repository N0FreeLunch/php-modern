<?php
interface WorldRule {
  function hello();
}

class MyClass implements WorldRule {
  public function hello() {
    echo "안녕하세요!","\n";
  }

  public function thanks() {
    echo "고맙습니다.","\n";
  }
}

$myClass = new MyClass();

echo $myClass -> hello();

echo $myClass -> thanks();

 ?>
