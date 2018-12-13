<?php

// Complete the designerPdfViewer function below.
function designerPdfViewer($h, $word)
{
  if (strlen($word) <= 10) {
    $let = [];
    $j = 0;
    for ($i = 'a'; $i <= 'z'; $i++) {
      $let[$i] = $j++;
    }
    $f = [];
    for ($i = 0; $i < strlen($word); $i++) {
      $f[] = $h[$let[$word[$i]]];
    }
    rsort($f);
    return ($f[0] * strlen($word));

  }
}

echo designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 7], 'zaba');