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

class Soccer extends Player {
  public function play() {
    echo "{$this -> name}가 슛!","\n";
  }
}

$soccer = new Soccer("슛돌이");
echo $soccer -> play();
echo "<br>";

echo $soccer;
echo "<br>";

echo $soccer -> who();
echo "<br>";
 ?>
