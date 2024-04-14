<form method="post">
    <label for="text">Текст:</label><br>
    <input type="text" id="text" name="text"><br>
    <label for="find">Знайти:</label><br>
    <input type="text" id="find" name="find"><br>
    <label for="replace">Замінити:</label><br>
    <input type="text" id="replace" name="replace"><br>
    <input type="submit" value="Замінити">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];
    $find = $_POST['find'];
    $replace = $_POST['replace'];
    $result = str_replace($find, $replace, $text);
    echo "Результат: " . $result;
}
?>


