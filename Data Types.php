<?php

$i = 4;
$d = 4.0;
$s = "HackerRank ";

$x=intval(fgets($handle));
$y=floatval(fgets($handle));
$z=fgets($handle);
// Read and save an integer, double, and String to your variables.

// Print the sum of both integer variables on a new line.
echo $x+$i;
echo PHP_EOL;
// Print the sum of the double variables on a new line.
echo number_format($d + $y, 1);
echo PHP_EOL;
// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
echo $s.$z;

//echo PHP_EOL;
//echo "<br>";
//echo $y+$d;
//echo "<br>";// Concatenate and print the String variables on a new line
//// The 's' variable above should be printed first.
//echo $s.''.$z;