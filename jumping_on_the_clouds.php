<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c)
{
  $n = count($c);
  if ($n >= 2 && $n <= 100) {
    array_walk($c, 'intval');
    $i = 0;
    $jumps = 0;
    while ($i < $n - 1) {
      if ($c[$i + 2] == 0)
        $i += 2;
      else
        $i++;
      $jumps++;
    }
    return $jumps;
  }
}

echo jumpingOnClouds([0, 0, 0, 0, 1, 0]);