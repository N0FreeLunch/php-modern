<?php
abstract class SopBiz {
  abstract function thank();

  protected $sales = 0;
  protected function sell ($price) {
    if(is_numeric($price)) {
      echo "{$price}원 입니다.";
      $this->sales += $price;
    }

    $this -> thanks();
  }
}
 ?>
