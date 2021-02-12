<?php
function hello($who) {
  echo "{$who}씨, 안녕하세요!";
}

function bye($who) {
  echo "{$who}씨, 잘가요";
}

$msg = "bye";
if(function_exists($msg)) {
  $msg("승현");
}
 ?>
