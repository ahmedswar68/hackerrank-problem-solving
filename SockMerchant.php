<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $ar)
{
  if ($n >= 1 && $n <= 100) {
    $new_array = array_count_values($ar);
    $counter = 0;
    foreach ($new_array as $k => $v) {
      if ($v == 2) {
        echo "$k<br>";
        $counter++;
      } elseif ($v > 2) {
        if ($v % 2 == 0)
          $counter += ($v / 2);
        else
          $counter += ($v - 1) / 2;
      }
    }
    return $counter;
  }
}

$ar = array(10, 20, 20, 10, 10, 30, 50, 10, 20);
echo sockMerchant(9, $ar);