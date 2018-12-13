<?php

// Complete the birthdayCakeCandles function below.
function birthdayCakeCandles($ar)
{
  $max = max($ar);
  $new = array_count_values($ar);
  return $new[$max];
}

$result = birthdayCakeCandles([3, 2, 1, 3]);