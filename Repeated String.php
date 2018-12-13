<?php

// Complete the repeatedString function below.
function repeatedString($s, $n)
{
  if ((strlen($s) > 0 && strlen($s) <= 100) && ($n >= 1 && $n <= pow(10, 12))) {
    if (substr_count($s, 'a') < 1)
      return 0;
    $cnt = 0;
    for ($i = 0; $i < strlen($s); $i++)
      if ($s[$i] == 'a')
        $cnt++;
    $p = floor($n / strlen($s));
    $p *= $cnt;
    if ($n % strlen($s)) {
      $r = $n % strlen($s);
      for ($i = 0; $i < $r; $i++) if ($s[$i] == 'a') $p++;
    }
    return $p;
  }

}

//echo "<br>" . repeatedString('', 10000);
echo "<br>" . repeatedString('aba', 10);
echo "<br>" . repeatedString('absaa', 999999999999);
echo "<br>" . repeatedString('ab', 1000000000001);
echo "<br>" . repeatedString('ab', 1000000000000);
