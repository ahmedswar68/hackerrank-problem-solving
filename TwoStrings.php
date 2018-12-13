<?php

// Complete the designerPdfViewer function below.
function twoStrings($s1, $s2)
{
    $array1 = [];
    $array2 = [];
    for ($i = 0; $i < strlen($s1); $i++) {
      $array1[] = $s1[$i];
    }
    for ($i = 0; $i < strlen($s2); $i++) {
      $array2[] = $s2[$i];
    }
    $t=array_intersect($array1, $array2);
    return !empty($t)?'YES':'NO';
}

echo twoStrings('hello', 'world');
echo twoStrings('hi', 'world');