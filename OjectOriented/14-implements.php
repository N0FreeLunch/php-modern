<?php
interface GameBook {
  function newGame($point);
  function play();
  function isAlive():bool;
}

class MyGame implements GameBook {
  public $hitPoint;

  function __construct($point = 50) {
    $this -> newGame($point);
  }

  public function newGame($point = 50) {
    $this -> hitPoint = $point;
  }

  public function play() {
    $num = random_int(0, 50);
    if($num%2 == 0) {
      echo "{$num} 포인트가 증가했습니다.","\n";
      $this -> hitPoint += $num;
    } else {
      echo "{$num} 포인트가 감소했습니다.","\n";
      $this -> hitPoint -= $num;
    }
    echo "현재 {$this -> hitPoint} 점", "\n";
  }

  public function isAlive():bool {
    return ($this -> hitPoint > 0);
  }

}

$myPlayer = new MyGame();
for ($i=0; $i<10; $i++) {
  $myPlayer -> play();
  if(!$myPlayer->isAlive()){
    break;
  }
}

echo "게임 종료", "\n";

 ?>
