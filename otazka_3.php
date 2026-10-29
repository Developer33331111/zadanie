<?php

class Counter {

  public $count = 0;

  public function checkMaxMinSum($array) {

    $this->count++;

    $minSum = null;

    $maxSum = null;

    for($i = 0; $i < count($array); $i++) {

      $array_count = $array;

      unset($array_count[$i]);

      $array_count = array_values($array_count);

      $sum = 0;

      for($j = 0; $j < count($array_count); $j++) {

        $sum += $array_count[$j];

      }

      if(($sum < $minSum) || ($minSum === null)) {

        $minSum = $sum;

      }

      if(($sum > $maxSum) || ($maxSum === null)) {

        $maxSum = $sum;

      }

    }

    $result = array($maxSum, $minSum);

    return $result;

  }

}

$array = array(1, 5, 8, 7, 9);

$counter = new Counter();

$result = $counter->checkMaxMinSum($array);

print_r($result);

?>
