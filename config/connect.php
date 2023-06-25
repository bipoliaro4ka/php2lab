<?php


$connect = mysqli_connect('localhost', 'root', '', 'Сar_ticket_office');

if (!$connect) {
    echo 'Error';
}