<?php
$link = mysqli_connect("127.0.0.1", "root", "root", "website");

if (!$link) {
    die ("Ошибка: Невозможно установить соединение с MySQL.");
}

$users = $link -> query('SELECT * from users WHERE  age > 50');

var_dump($users);

mysqli_close($link);