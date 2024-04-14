<?php
$path = "D:\\WebServers\\home\\testsite\\www\\myfile.txt";
$file_name_with_extension = basename($path);
$file_name_without_extension = pathinfo($file_name_with_extension, PATHINFO_FILENAME);
echo "Ім'я файлу без розширення: " . $file_name_without_extension;
?>
