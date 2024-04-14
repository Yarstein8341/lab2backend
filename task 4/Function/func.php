<?php

// Власні функції
function my_sin($x) {
    return sin($x);
}

function my_cos($x) {
    return cos($x);
}

function my_tan($x) {
    return tan($x);
}

function my_tg($x) {
    return my_tan($x); // тангенс
}

function my_pow($x, $y) {
    return pow($x, $y); // x в степені y
}

function my_factorial($x) {
    if ($x === 0) return 1;
    $result = 1;
    for ($i = 1; $i <= $x; $i++) {
        $result *= $i;
    }
    return $result;
}

?>
