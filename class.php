<?php
$T = [4, -1, 10, 16, 18];
for ($i = 0; $i < count($T); $i++) {
  $age = $T[$i];
  $p = new Person($age);
  $p->amIOld();
  for ($j = 0; $j < 3; $j++) {
    $p->yearPasses();
  }
  $p->amIOld();
  echo "\n";

}

class Person
{
  public $age;

  public function __construct($initialAge)
  {
    // Add some more code to run some checks on initialAge
    if ($initialAge >= -5 && $initialAge <= 30) {
      if ($initialAge < 0) {
        $this->age = 0;
        echo "Age is not valid, setting age to 0.<br>";
        echo "\n";
      } else {
        $this->age = $initialAge;
      }
    }
  }

  public function amIOld()
  {
    // Do some computations in here and print out the correct statement to the console
    if ($this->age < 13) {
      echo "You are young.<br>";
      echo "\n";
    } elseif ($this->age >= 13 && $this->age < 18) {
      echo "You are a teenager.<br>";
      echo "\n";
    } else {
      echo "You are old.<br>";
      echo "\n";
    }
  }

  public function yearPasses($n)
  {
    // Increment the age of the person in here
    $this->age += 1;
    if ($n >= 2 && $n <= 20)
      for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = ".$i*$n;
        echo "\n";
      }
  }


}