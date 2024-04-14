<?php
function findDuplicates($array) {
    $counted_values = array_count_values($array);
    foreach ($counted_values as $key => $value) {
        if ($value > 1) {
            echo "Елемент '{$key}' повторюється {$value} " . getEnding($value) . PHP_EOL;
        }
    }
}

function getEnding($number) {
    $number = $number % 100;
    if ($number >= 11 && $number <= 19) {
        return 'разів';
    } else {
        $last_digit = $number % 10;
        switch ($last_digit) {
            case 1: return 'раз';
            case 2:
            case 3:
            case 4: return 'рази';
            default: return 'разів';
        }
    }
}

$array = array(1, 2, 3, 4, 5, 2, 3, 4);
findDuplicates($array);
?>
