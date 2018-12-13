<?php

// Complete the plusMinus function below.
function plusMinus($arr)
{
  $zeros = 0;
  $positive = 0;
  $negative = 0;
  foreach ($arr as $v) {
    if ($v >= -100 && $v <= 100) {
      if ($v == 0) {
        $zeros += 1;
      }
      if ($v > 0) {
        $positive += 1;
      }
      if ($v < 0) {
        $negative += 1;
      }
    }
  }

  echo number_format($positive / count($arr), 6) . PHP_EOL;
  echo number_format($negative / count($arr), 6) . PHP_EOL;
  echo number_format($zeros / count($arr), 6) . PHP_EOL;
}

plusMinus([-4, 3, -9, 0, 4, 1]);