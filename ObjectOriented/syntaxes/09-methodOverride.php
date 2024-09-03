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

  public function who() {
    echo "{$this -> name}, {$this -> age}세입니다.!","\n";
  }
}

$runner = new Runner("하니", 28);
echo $runner -> who();
 ?>
