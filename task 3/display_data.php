<?php
session_start();
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дані з форми</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>

<h2>Дані з форми</h2>

<table>
    <tr>
        <th>Поле</th>
        <th>Значення</th>
    </tr>
    <tr>
        <td>Логін</td>
        <td><?php echo isset($_SESSION['login']) ? $_SESSION['login'] : ''; ?></td>
    </tr>
    <tr>
        <td>Стать</td>
        <td><?php echo isset($_SESSION['gender']) ? $_SESSION['gender'] : ''; ?></td>
    </tr>
    <tr>
        <td>Місто</td>
        <td><?php echo isset($_SESSION['city']) ? $_SESSION['city'] : ''; ?></td>
    </tr>
    <tr>
        <td>Про себе</td>
        <td><?php echo isset($_SESSION['about']) ? $_SESSION['about'] : ''; ?></td>
    </tr>
    <tr>
        <td>Улюблені ігри</td>
        <td><?php echo isset($_SESSION['games']) ? implode(', ', $_SESSION['games']) : ''; ?></td>
    </tr>
    <tr>
        <td>Фотографія</td>
        <td><?php echo isset($_SESSION['photo']) ? '<img src="' . $_SESSION['photo'] . '" width="100">' : ''; ?></td>
    </tr>
</table>

</body>
</html>
