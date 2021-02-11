<?php
function team($name, ...$members) {
  print_r($name);
  print_r($members);
};

$team = team("퍼스트팀","루니","포그바","로호");
$team2 = team("리저브팀","튀앙제브","슈바인슈타이거");
echo $team1;
echo "<br>";
echo $team2;

 ?>
