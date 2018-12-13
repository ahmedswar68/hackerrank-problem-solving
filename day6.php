<?php
$array = str_split($S);
$even = '';
$odd = '';
for ($i = 1; $i <= $T; $i++) {
  for ($j = 0; $j < count($array); $j++) {
    if ($j % 2 == 0) {
      $even .= $array[$j];
    } else {
      $odd .= $array[$j];
    }
  }
  $odd .='  ';
  $even .='  ';
}
echo "$even<br>$odd";