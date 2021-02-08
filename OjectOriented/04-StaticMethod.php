<?php
class Staff {
  public static  $piggyBank = 0;

  public static function deposit(int $won) {
    self::$piggyBank += $won;
  }

  public $name;
  public $age;

  function __construct ($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function hello() {
    
  }

 ?>
