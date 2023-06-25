<?php

require_once '../config/connect.php';

$number = $_POST['number'];
$route = $_POST['route'];
$driver = $_POST['driver'];
$type = $_POST['type'];
$date = $_POST['date'];
$time = $_POST['time'];
$cost = $_POST['cost'];

mysqli_query($connect, "INSERT INTO `flights`(`id`,`number`, `route`, `driver`, `type`, `date`, `time`, `cost`) VALUES
                (NULL, '$number', '$route', '$driver', '$type', '$date', '$time', '$cost')");

header('Location: /');