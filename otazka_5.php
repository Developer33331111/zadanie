<?php

function secondMax($arr) {
    $max = $second = null;
    $maxKey = $secondKey = null;

    foreach($arr as $key => $value) {
        if(($max === null) || ($value > $max)) {
            $second = $max;
            $secondKey = $maxKey;
            $max = $value;
            $maxKey = $key;
        } elseif(($second === null) || ($value > $second)) {
            $second = $value;
            $secondKey = $key;
        }
    }

    return array($secondKey, $second);
}

$cookies = array(
                "chocolate" => "20",
                "vanilla" => "14",
                "strawberry" => "18",
                "raspberry" => "19",
                "bluebery" => "29"
);
print_r(secondMax($cookies));

?>
