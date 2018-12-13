<?php

// Complete the breakingRecords function below.
function breakingRecords($scores)
{
  $highest=0;
  $lowest=0;

  $temp=$scores[0];
  $temp2=$scores[0];
  for ($i=0; $i < count($scores) ; $i++) {
    if ($temp<$scores[$i]) {
      $temp=$scores[$i];
      $highest++;
    }
    if ($temp2>$scores[$i]) {
      $temp2=$scores[$i];
      $lowest++;
    }
  }

  echo $highest, " ", $lowest;

}

//breakingRecords([10, 5, 20, 20, 4, 5, 2, 25, 1]);
breakingRecords([3, 4, 21, 36, 10, 28, 35, 5, 24, 42]);