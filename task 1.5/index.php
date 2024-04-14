<?php
function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    $password = '';
    $max = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[mt_rand(0, $max)];
    }
    return $password;
}

function checkPasswordStrength($password) {
    $uppercase = preg_match('/[A-Z]/', $password);
    $lowercase = preg_match('/[a-z]/', $password);
    $number = preg_match('/[0-9]/', $password);
    $specialChars = preg_match('/[!@#$%^&*()-_=+]/', $password);

    if ($uppercase && $lowercase && $number && $specialChars && strlen($password) >= 8) {
        return true;
    }
    return false;
}

$password = generatePassword(10);
echo "Згенерований пароль: " . $password . "<br>";
if (checkPasswordStrength($password)) {
    echo "Пароль є достатньо міцним!";
} else {
    echo "Пароль не є достатньо міцним!";
}
?>
