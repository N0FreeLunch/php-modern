<?php
  trait DateTool {
    public function ymdString($date) {
      $dateString = $date -> format("Y년 m월 d일");
      return $dateString;
    }

    public function addYmdString($date, $days) {
      $date -> add(new DateInterval("P{$days}D"));
      return $this->ymdString($date);
    }
  }

  class Milk {
    use DateTool;
    public $theDate;
    public $limitDate;

    function __construct() {
      $now = new DateTime();
      $this->theDate = $this->ymdString($now);
      $this->limitDate = $this->addYmdString($now ,10);
    }
  }

  $milk = new Milk();
  echo $milk -> theDate;
  echo "<br>";

  echo $milk -> limitDate;
  echo "<br>";

 ?>
