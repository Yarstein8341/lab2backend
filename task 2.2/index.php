<?php
function generateName($components) {
    $animal_types = array('кішка', 'собака', 'хом’ячок', 'корова');
    $name = '';
    foreach ($components as $component) {
        $name .= $component[rand(0, count($component) - 1)];
    }
    return $name . ' ' . $animal_types[rand(0, count($animal_types) - 1)];
}

$components = array(
    array('Ба', 'Бе', 'Бі', 'Бо', 'Бу'),
    array('р', 'л', 'м', 'н', 'т'),
    array('а')
);

echo generateName($components);
?>
