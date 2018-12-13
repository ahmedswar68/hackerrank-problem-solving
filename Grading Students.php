<?php

/*
 * Complete the gradingStudents function below.
 */
function gradingStudents($grades)
{
  foreach ($grades as $k => $grade) {
    if ($grade >= 0 && $grade <= 100) {
      if ($grade > 37) {
        $rounded= (round(($grade+5/2)/5)*5);
        if(($rounded-$grade)<3){
          $grades[$k]=$rounded;
        }
      }
    }
  }
  return $grades;
}

echo "<pre>";print_r(gradingStudents([37,38,44,67,68,99]));die;