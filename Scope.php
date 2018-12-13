<?php

class Difference
{
  private $elements=[];
  public $maximumDifference;
  function __construct($arr)
  {
    $this->elements = $arr;
  }

  function computeDifference()
  {
    $new_arr = [];
    for ($i = 0; $i < count($this->elements); $i++) {
      for ($j = 0; $j < count($this->elements); $j++) {
        $diff = $this->elements[$i] - $this->elements[$j];
        $new_arr[] = $diff > 0 ? $diff : -$diff;
      }
    }
    $this->maximumDifference= max($new_arr);
  }
}
