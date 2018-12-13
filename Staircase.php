<?php
function staircase($n)
{
  if ($n > 0 && $n <= 100)
    for ($i = 0; $i < $n; $i++) {
      for ($j = 0; $j <= $n - $i - 2; $j++) {
        print(" ");
      }
      for ($j = $n - $i - 1; $j < $n; $j++) {
        print("#");
      }
      echo PHP_EOL;
    }
}

staircase(4);