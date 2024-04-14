<?php

function createArray() {
    $array1 = [];
    $array2 = [];
    
    for ($i = 0; $i < 8; $i++) {
        $array1[] = rand(1, 10);
        $array2[] = chr(rand(97, 122));
    }
    
    return [$array1, $array2];
}

function removeDuplicatesAndSort($array) {
    $uniqueElements = array_unique($array);
    sort($uniqueElements);
    return $uniqueElements;
}

list($array1, $array2) = createArray();
echo "Масив 1 до вилучення повторюваних елементів та сортування: ";
print_r($array1);
echo "\n";

$result1 = removeDuplicatesAndSort($array1);
echo "Масив 1 після вилучення повторюваних елементів та сортування: ";
print_r($result1);
echo "\n";

echo "\nМасив 2 до вилучення повторюваних елементів та сортування: ";
print_r($array2);
echo "\n";

$result2 = removeDuplicatesAndSort($array2);
echo "Масив 2 після вилучення повторюваних елементів та сортування: ";
print_r($result2);
echo "\n";
?>
