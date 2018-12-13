<?php

// Complete the countingValleys function below.
function countingValleys($n, $s)
{
  if ($n >= 2 && $n <= pow(10, 6)) {
    $bellowSeaLevel = false;
    $currentLevel = 0;
    $valley = 0;
    for ($i = 0; $i < strlen($s); $i++) {
      if ($s[$i] == 'D')
        $currentLevel--;
      else
        $currentLevel++;
      if (!$bellowSeaLevel && $currentLevel < 0) {
        $valley++;
        $bellowSeaLevel = true;
      }

      if ($currentLevel >= 0)
        $bellowSeaLevel = false;
    }
    return $valley;
  }
}

echo countingValleys(8, 'UDDDUDUU');