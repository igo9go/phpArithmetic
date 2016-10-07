<?php
//6 1 5 9 4 7 2 8 3
$array = [6, 3, 1, 7, 5, 8, 9, 2, 4];

$result = array();
foreach ($array as $key => $val) {
    if (count($array) > 0) {
        $result[] = array_shift($array);
        array_push($array, $array[0]);
    }
}

print_r($result);