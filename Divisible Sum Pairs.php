<?php
//https://www.hackerrank.com/challenges/divisible-sum-pairs/problem

function divisibleSumPairs($n, $k, $ar)
{
  if ($n >= 2 && $n <= 100 && $k >= 1 && $k <= 100) {
    $counter = 0;
    for ($i = 0; $i < $n; $i++) {
      $val = $ar[$i];
      if ($val >= 1 && $val <= 100)
        for ($j = $i + 1; $j < $n; $j++) {
          if ((($val + $ar[$j]) == $k) || (($val + $ar[$j]) % $k == 0)) {
            $counter++;
          }
        }
    }
    return $counter;
  }
}

echo divisibleSumPairs(6, 3, [1, 3, 2, 6, 1, 2]) . '<br>';