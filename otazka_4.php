<?php

$array = array(
 0 => array(11,2,4),
 1 => array(4,5,6),
 2 => array(10,8,-12)
);

function getDiagonalSum($arr) {

  $sum_1 = 0;

  $sum_2 = 0;

  for($i = 0; $i < count($arr); $i++) {

    $sum_1 += $arr[$i][$i];

    $sum_2 += $arr[(count($arr)-1)-$i][$i];

  }

  $sum = abs($sum_1 - $sum_2);

  return $sum;

}

echo getDiagonalSum($array);

?>
