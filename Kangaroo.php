<?php

// Complete the kangaroo function below.
function kangaroo($x1, $v1, $x2, $v2)
{
  if ($v1 >= 1 && $v1 <= 10000 && $v2 >= 1 && $v2 <= 10000)
    if ($x1 >= 0 && $x2 <= 10000) {
      if ($v2 >= $v1) {
        return "NO";
      } else if (($x2 - $x1) % ($v1 - $v2) == 0) {
        return "YES";
      } else {
        return "NO";
      }
    }
}

echo kangaroo(0, 3, 4, 2) . '<br>';
echo kangaroo(0, 7, 5, 5) . '<br>';
echo kangaroo(0, 7, -5, 5) . '<br>';