<?php
session_start();

if (isset($_GET['lang'])) {
    $selected_lang = $_GET['lang'];
    setcookie('lang', $selected_lang, time() + (6 * 30 * 24 * 60 * 60));
} elseif (isset($_COOKIE['lang'])) {
    $selected_lang = $_COOKIE['lang'];
} else {
    $selected_lang = 'ukr';
}

if ($selected_lang === 'ukr') {
    $language_message = "Вибрана мова: Українська";
    $login_label = "Логін:";
    $password_label = "Пароль:";
    $confirm_password_label = "Пароль (ще раз):";
    $gender_label = "Стать:";
    $male_option = "Чоловік";
    $female_option = "Жінка";
    $city_label = "Місто:";
    $city_placeholder = "Оберіть місто";
    $football_label = "Футбол";
    $basketball_label = "Баскетбол";
    $volleyball_label = "Волейбол";
    $chess_label = "Шахи";
    $wot_label = "World of Tanks";
    $about_label = "Про себе:";
    $about_placeholder = "";
    $photo_label = "Фотографія:";
    $file_help = "Виберіть фотографію (необов'язково)";
} elseif ($selected_lang === 'eng') {
    $language_message = "Selected language: English";
    $login_label = "Login:";
    $password_label = "Password:";
    $confirm_password_label = "Confirm Password:";
    $gender_label = "Gender:";
    $male_option = "Male";
    $female_option = "Female";
    $city_label = "City:";
    $city_placeholder = "Select city";
    $football_label = "Football";
    $basketball_label = "Basketball";
    $volleyball_label = "Volleyball";
    $chess_label = "Chess";
    $wot_label = "World of Tanks";
    $about_label = "About yourself:";
    $about_placeholder = "";
    $photo_label = "Photo:";
    $file_help = "Choose a photo (optional)";
} elseif ($selected_lang === 'pol') {
    $language_message = "Wybrany język: Polski";
    $login_label = "Login:";
    $password_label = "Hasło:";
    $confirm_password_label = "Potwierdź hasło:";
    $gender_label = "Płeć:";
    $male_option = "Mężczyzna";
    $female_option = "Kobieta";
    $city_label = "Miasto:";
    $city_placeholder = "Wybierz miasto";
    $football_label = "Piłka nożna";
    $basketball_label = "Koszykówka";
    $volleyball_label = "Siatkówka";
    $chess_label = "Szachy";
    $wot_label = "World of Tanks";
    $about_label = "O sobie:";
    $about_placeholder = "";
    $photo_label = "Zdjęcie:";
    $file_help = "Wybierz zdjęcie (opcjonalnie)";
} elseif ($selected_lang === 'deu') {
    $language_message = "Ausgewählte Sprache: Deutsch";
    $login_label = "Anmeldung:";
    $password_label = "Passwort:";
    $confirm_password_label = "Passwort bestätigen:";
    $gender_label = "Geschlecht:";
    $male_option = "Männlich";
    $female_option = "Weiblich";
    $city_label = "Stadt:";
    $city_placeholder = "Stadt wählen";
    $football_label = "Fußball";
    $basketball_label = "Basketball";
    $volleyball_label = "Volleyball";
    $chess_label = "Schach";
    $wot_label = "World of Tanks";
    $about_label = "Über dich:";
    $about_placeholder = "";
    $photo_label = "Foto:";
    $file_help = "Wählen Sie ein Foto (optional)";
} elseif ($selected_lang === 'fra') {
    $language_message = "Langue sélectionnée: Français";
    $login_label = "Connexion:";
    $password_label = "Mot de passe:";
    $confirm_password_label = "Confirmez le mot de passe:";
    $gender_label = "Sexe:";
    $male_option = "Homme";
    $female_option = "Femme";
    $city_label = "Ville:";
    $city_placeholder = "Sélectionnez une ville";
    $football_label = "Football";
    $basketball_label = "Basket-ball";
    $volleyball_label = "Volley-ball";
    $chess_label = "Échecs";
    $wot_label = "World of Tanks";
    $about_label = "À propos de vous:";
    $about_placeholder = "";
    $photo_label = "Photo:";
    $file_help = "Choisissez une photo (facultatif)";
}

$login_value = isset($_SESSION['login']) ? $_SESSION['login'] : '';
$gender_value = isset($_SESSION['gender']) ? $_SESSION['gender'] : '';
$city_value = isset($_SESSION['city']) ? $_SESSION['city'] : '';
$about_value = isset($_SESSION['about']) ? $_SESSION['about'] : '';
$games_value = isset($_SESSION['games']) ? $_SESSION['games'] : [];

?>

<!DOCTYPE html>
<html lang="<?php echo $selected_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
</head>
<body>

<form action="process_form.php" method="post" enctype="multipart/form-data">
    <label for="login"><?php echo $login_label; ?></label><br>
    <input type="text" id="login" name="login" value="<?php echo $login_value; ?>" required><br><br>
    
    <label for="password"><?php echo $password_label; ?></label><br>
    <input type="password" id="password" name="password" required><br><br>
    
    <label for="confirm_password"><?php echo $confirm_password_label; ?></label><br>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>
    
    <label><?php echo $gender_label; ?></label><br>
    <input type="radio" id="male" name="gender" value="male" <?php if($gender_value === 'male') echo 'checked'; ?> required>
    <label for="male"><?php echo $male_option; ?></label><br>
    <input type="radio" id="female" name="gender" value="female" <?php if($gender_value === 'female') echo 'checked'; ?> required>
    <label for="female"><?php echo $female_option; ?></label><br><br>
    
    <label for="city"><?php echo $city_label; ?></label><br>
    <select id="city" name="city" required>
        <option value="" disabled selected><?php echo $city_placeholder; ?></option>
        <option value="Київ" <?php if($city_value === 'Київ') echo 'selected'; ?>>Київ</option>
        <option value="Харків" <?php if($city_value === 'Харків') echo 'selected'; ?>>Харків</option>
        <option value="Львів" <?php if($city_value === 'Львів') echo 'selected'; ?>>Львів</option>
    </select><br><br>
    
    <label><?php echo "Улюблені ігри:"; ?></label><br>
    <input type="checkbox" id="football" name="games[]" value="football" <?php if(in_array('football', $games_value)) echo 'checked'; ?>>
    <label for="football"><?php echo $football_label; ?></label><br>
    <input type="checkbox" id="basketball" name="games[]" value="basketball" <?php if(in_array('basketball', $games_value)) echo 'checked'; ?>>
    <label for="basketball"><?php echo $basketball_label; ?></label><br>
    <input type="checkbox" id="volleyball" name="games[]" value="volleyball" <?php if(in_array('volleyball', $games_value)) echo 'checked'; ?>>
    <label for="volleyball"><?php echo $volleyball_label; ?></label><br>
    <input type="checkbox" id="chess" name="games[]" value="chess" <?php if(in_array('chess', $games_value)) echo 'checked'; ?>>
    <label for="chess"><?php echo $chess_label; ?></label><br>
    <input type="checkbox" id="wot" name="games[]" value="wot" <?php if(in_array('wot', $games_value)) echo 'checked'; ?>>
    <label for="wot"><?php echo $wot_label; ?></label><br><br>
    
    <label for="about"><?php echo $about_label; ?></label><br>
    <textarea id="about" name="about" rows="4" cols="50" placeholder="<?php echo $about_placeholder; ?>"><?php echo $about_value; ?></textarea><br><br>
    
    <label for="photo"><?php echo $photo_label; ?></label><br>
    <input type="file" id="photo" name="photo"><br>
    <small id="fileHelp"><?php echo $file_help; ?></small><br><br>
    
    <input type="submit" value="<?php echo "Зареєструватися"; ?>">
</form>

<a href="index.php?lang=ukr"><img src="ukr_icon.png" alt="Українська" title="Українська" width="20" height="20"></a>
<a href="index.php?lang=eng"><img src="eng_icon.png" alt="English" title="English" width="20" height="20"></a>
<a href="index.php?lang=pol"><img src="pol_icon.png" alt="Polski" title="Polski" width="20" height="20"></a>
<a href="index.php?lang=deu"><img src="deu_icon.png" alt="Deutsch" title="Deutsch" width="20" height="20"></a>
<a href="index.php?lang=fra"><img src="fra_icon.png" alt="Français" title="Français" width="20" height="20"></a>

<?php echo $language_message; ?>

</body>
</html>
