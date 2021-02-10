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

$player1 = new Player();

echo $player1;
echo "<br>";

echo $player1 -> who();
echo "<br>";

$player2 = new Player("tom");

echo $player2;
echo "<br>";

echo $player2-> who();
echo "<br>";

 ?>
