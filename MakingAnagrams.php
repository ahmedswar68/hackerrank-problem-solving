<?php

// Complete the makeAnagram function below.
function makeAnagram($a, $b)
{
  $b_array = [];
  for ($i = 0; $i < strlen($b); $i++) {
    $b_array[] = $b[$i];
  }
  for ($i = 0; $i < strlen($a); $i++) {
    if (in_array($a[$i], $b_array)) {

    }

  }

}

echo makeAnagram($a, $b);