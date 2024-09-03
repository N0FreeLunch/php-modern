<?php

class Staff {
  public $name;
  public $age;

  function __construct($name, $age) {
    $this -> name = $name;
    $this -> age = $age;
  }

  public function hello () {
    if(is_null($this->name)) {
      echo "안녕하세요.", "\n";
    }else {
      echo "안녕하세요, {$this->name}입니다.!", "\n";
    }
  }

}

$kei = new Staff("케이", 27);

echo $kei -> name;
echo "<br>";

echo $kei -> age;
echo "<br>";

$kei -> hello();

 ?>
