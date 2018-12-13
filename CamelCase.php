<?php

// Complete the camelcase function below.
function camelcase($s)
{
  $counter = 1;
  for ($i = 0; $i < strlen($s); $i++) {
    if (ctype_upper($s[$i]))
      $counter++;
  }
  return $counter;
}

echo camelcase('saveChangesInTheEditor');