<?php
class Staff {
  public $name;
  public $age;

  public function hello() {
    echo "안녕하세요!","\n";
  }

  public function hello1 () {
    echo "안녕하세요, {$name}입니다.", "\n";
  }

  public function hello2 () {
    echo "안녕하세요, {$this->name}입니다.! ", "\n";
  }

  public function hello3 () {
    if(is_null($this->name)) {
      echo "안녕하세요.", "\n";
    }else {
      echo "안녕하세요, {$this->name}입니다.!", "\n";
    }
  }

}

$hana = new Staff();
$hobi = new Staff();

$hana -> name = "하나";
$hana-> age = 21;

$hana -> name = "호비";
$hobi -> age = 35;

print_r($hana);
echo "<br>";

print_r($hobi);
echo "<br>";

$hana -> hello();
echo "<br>";

$hobi -> hello();
echo "<br>";

$hobi -> hello1();
echo "<br>";

$hobi -> hello2();
echo "<br>";

$hobi -> hello3();
echo "<br>";

 ?>
