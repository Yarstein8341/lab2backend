<?php
function createArray() {
    $length = rand(3, 7);
    $array = array();
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand(10, 20);
    }
    return $array;
}

function processArrays($array1, $array2) {
    $merged_array = array_merge($array1, $array2);
    $unique_array = array_unique($merged_array);
    sort($unique_array);
    return $unique_array;
}

$array1 = createArray();
$array2 = createArray();
$result = processArrays($array1, $array2);
print_r($result);
?>
