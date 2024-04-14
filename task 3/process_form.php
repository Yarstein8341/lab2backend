<?php
session_start();

if(isset($_POST['login'], $_POST['password'], $_POST['confirm_password'], $_POST['gender'], $_POST['city'], $_POST['about'])) {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['about'] = $_POST['about'];
    $_SESSION['games'] = isset($_POST['games']) ? $_POST['games'] : [];

    if ($_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $temp_name = $_FILES['photo']['tmp_name'];
        $target_dir = 'uploads/';
        $target_file = $target_dir . basename($_FILES['photo']['name']);
        move_uploaded_file($temp_name, $target_file);
        $_SESSION['photo'] = $target_file;
    }
}

header('Location: display_data.php');
?>
