<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `flights` WHERE `flights`.`id` = '$id'");

header('Location: / ');