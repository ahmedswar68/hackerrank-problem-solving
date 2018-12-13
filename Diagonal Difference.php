<?php
function diagonalDifference($arr)
{
  $val1 = 0;
  $val2 = 0;
  foreach ($arr as $k => $v) {
    $val1 += $arr[$k][$k];
    $val2 += $arr[$k][count($arr)-$k-1];
  }
  return abs($val1-$val2);
}

$arr = array(
  array(-1,1,-7,-8),
  array(-10,-8,-5,-2),
  array(0,9,7,-1),
  array(4,4,-2,1),
);

echo diagonalDifference($arr);
