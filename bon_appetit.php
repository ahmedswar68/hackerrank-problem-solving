<?php

// Complete the bonAppetit function below.
function bonAppetit($bill, $k, $b)
{
  if (min($bill) >= 0 && max($bill) <= pow(10, 4)) {
    unset($bill[$k]);
    $rslt = (int)$b - (array_sum($bill) / 2);
    if ($rslt == 0) {
      echo 'Bon Appetit';
    } else {
      echo $rslt;
    }
  }
}

bonAppetit([3, 10, 2, 9], 1, 7);