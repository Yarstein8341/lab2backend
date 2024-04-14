<?php
function sortUsers($users, $byAge = true) {
    if ($byAge) {
        asort($users);
    } else {
        ksort($users);
    }
    return $users;
}

$users = array(
    "Ярослав" => 20,
    "Володимир" => 22,
    "Андрій" => 17,
    "Олександр" => 25
);

$sorted_by_age = sortUsers($users);
echo "Сортування за віком: ";
print_r($sorted_by_age);

$sorted_by_name = sortUsers($users, false);
echo "Сортування за ім'ям: ";
print_r($sorted_by_name);
?>
