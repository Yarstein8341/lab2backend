<?php
$date1 = "23-01-2024";
$date2 = "07-03-2024";
$diff = abs(strtotime($date2) - strtotime($date1));
$days = floor($diff / (60*60*24));
echo "Кількість днів між датами: " . $days;
?>
