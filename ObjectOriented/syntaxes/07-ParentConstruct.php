<?php
class Player {
  public $name;

  function __construct ($name = "이름 없음") {
    $this -> name = $name;
  }

  public function __toString() {
    return $this -> name;
  }

  public function who() {
    echo "{$this -> name}입니다.","\n";
  }
}

class Runner extends Player {
  public $age;
  function __construct($name, $age) {
    parent::__construct($name);
    $this -> age = $age;
  }

  public function play() {
    echo "{$this -> name}가 뛴다.!", "\n";
  }
}

$runner = new Runner("하니",23);

echo $runner -> play();
echo "<br>";

echo $runner;
echo "<br>";


echo $runner -> name;
echo "<br>";

echo $runner -> who();
echo "<br>";

 ?>
