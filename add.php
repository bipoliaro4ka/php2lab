<?php

require_once 'config/connect.php';


?>
<!doctype >
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body class="body">
<h3>Добавить рейс</h3>
<form action="vendor/create.php" method="post">
    <p>Номер автобуса</p>
    <input type="number" name = "number">
    <p>Маршрут</p>
    <input type="number" name = "route">
    <p>Водитель</p>
    <input type="text" = "driver"></input>
    <p>Тип автобуса</p>
    <input type="text" name = "type">
    <p>Дата</p>
    <input type="date" name = "date">
    <p>Время</p>
    <input type="time" name = "time">
    <p>Стоимость</p>
    <input type="number" name = "cost"><br>
    <button type="submit">Добавить</button>
</form>
</body>
</html>