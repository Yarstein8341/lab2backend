<?php

include 'Function/func.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST['x'];
    $y = $_POST['y'];

    $sin_result = my_sin($x);
    $cos_result = my_cos($x);
    $tg_result = my_tg($x);
    $pow_result = my_pow($x, $y);
    $factorial_result = my_factorial($x);

    echo '<table border="1">';
    echo '<tr style="background-color: yellow;">';
    echo '<td>sin(x)</td><td>cos(x)</td><td>tg(x)</td><td>x<sup>'.strtoupper('y').'</sup></td><td>x!</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>'.$sin_result.'</td><td>'.$cos_result.'</td><td>'.$tg_result.'</td><td>'.$pow_result.'</td><td>'.$factorial_result.'</td>';
    echo '</tr>';
    echo '</table>';
}

?>
