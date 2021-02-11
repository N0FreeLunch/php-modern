<?php
abstract class ShopBiz {
  abstract function thanks();

  protected $sales = 0;
  protected function sell ($price) {
    if(is_numeric($price)) {
      echo "{$price}원 입니다.";
      $this->sales += $price;
    }

    $this -> thanks();
  }
}


class MyShop extends ShopBiz {
  public function thanks() {
    echo "감사합니다.","\n";
  }

  public function Selling ($unitPrice, $quantity) {
    $price = $unitPrice * $quantity;
    $this -> sell($price);
  }

  public function getSell() {
    echo "매상 합계는 {$this -> sell}원 입니다.";
  }
}

$myObj = new MyShop();
$myObj -> selling(240, 3);
$myObj -> Selling(400, 1);
$myObj->getSell();
 ?>
