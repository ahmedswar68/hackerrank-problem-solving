<?php

// Complete the marcsCakewalk function below.
function marcsCakewalk($calories)
{
  if (count($calories) >= 1 && count($calories) <= 40) {
    rsort($calories);
    $tot = 0;

    for ($i = 0; $i < count($calories); $i++) {
      if ($calories[$i] >= 1 && $calories[$i] <= 1000)
        $tot += $calories[$i] * pow(2, $i);
    }
    return $tot;
  }
}

marcsCakewalk([7, 4, 9, 6]);