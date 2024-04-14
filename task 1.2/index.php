<?php
$cities = "Манчестер Неаполь Дортмунд Лондон Порту";
$cities_array = explode(" ", $cities);

function ukrainian_sort($a, $b) {
    $alphabet = array('А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Е', 'Є', 'Ж', 'З', 'И', 'І', 'Ї', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ь', 'Ю', 'Я');

    $a_first_char = mb_substr($a, 0, 1, 'UTF-8');
    $b_first_char = mb_substr($b, 0, 1, 'UTF-8');

    $a_index = array_search($a_first_char, $alphabet);
    $b_index = array_search($b_first_char, $alphabet);

    if ($a_index === false || $b_index === false) {
        return strcoll(mb_strtolower($a, 'UTF-8'), mb_strtolower($b, 'UTF-8'));
    }

    return $a_index - $b_index;
}

usort($cities_array, 'ukrainian_sort');

echo implode(" ", $cities_array);
?>
