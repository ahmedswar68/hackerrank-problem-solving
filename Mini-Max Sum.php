<?php
//https://www.hackerrank.com/challenges/mini-max-sum/problem
function miniMaxSum($arr)
{
  $new = [];
  for ($i = 0; $i < count($arr); $i++) {
    $val = $arr[$i];
    if ($val >= 1 && $val <= pow(10, 9)) {

      unset($arr[$i]);
      $new[] = array_sum($arr);
      $arr[$i] = $val;

    }
  }
  echo min($new) . ' ' . max($new);
}

miniMaxSum([1, 2, 3, 4, 5]);
echo "<br>";
miniMaxSum([1, 3, 5, 7, 9]);