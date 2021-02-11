<?php
$age = 25;
if($age <= 15):
  echo "15세 이하 요금은 500원입니다.<br>";
elseif($age <= 18):
  echo "16세 이상 성인은 2,500원입니다.<br>";
else:
 echo "19세 이상 성인은 2,500원입니다<br>";
endif;
 ?>
