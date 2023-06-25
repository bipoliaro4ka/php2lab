<?php

    require_once 'config/connect.php';

    $flight_id = $_GET['id'];
    $flight = mysqli_query($connect, "SELECT * FROM `flights` WHERE `id` = '$flight_id'");
    $flight = mysqli_fetch_assoc($flight);

?>
<!doctype >
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body class="body">
<h3>Изменить рейс</h3>
<form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?= $flight['id'] ?>">
    <p>Номер автобуса</p>
    <input type="number" name = "number" value="<?= $flight['number'] ?>">
    <p>Маршрут</p>
    <input type="number" name = "route" value="<?= $flight['route'] ?>">
    <p>Водитель</p>
    <input type="text" name = "type" value="<?= $flight['driver'] ?>">
    <p>Тип автобуса</p>
    <input type="text" name = "type" value="<?= $flight['type'] ?>">
    <p>Дата</p>
    <input type="date" name = "date" value="<?= $flight['date'] ?>">
    <p>Время</p>
    <input type="time" name = "time" value="<?= $flight['time'] ?>">
    <p>Стоимость</p>
    <input type="number" name = "cost" value="<?= $flight['cost'] ?>"><br>
    <button type="submit">Изменить</button>

</form>
</body>
</html>