<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$number = $_POST['number'];
$route = $_POST['route'];
$driver = $_POST['driver'];
$type = $_POST['type'];
$date = $_POST['date'];
$time = $_POST['time'];
$cost = $_POST['cost'];

mysqli_query($connect, "UPDATE `flights` SET `number` = '$number', `route` = '$route', `driver` = '$driver', `type` = '$type',
                     `date` = '$date',`time` = '$time', `cost` = '$cost' WHERE `flights`.`id` = '$id'");

header('Location: /');