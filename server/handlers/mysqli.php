<?php

function getUsers() {

    $DB = mysqli_connect("127.0.0.1", "root", "root", "website");

    if (!$DB) {
        die("Ошибка: Невозможно установить соединение с MySQL.");
    }

    $dataUsers = $DB->query('SELECT id, username, email, phone from users');

    $users = $dataUsers->fetch_all(MYSQLI_ASSOC);

//    var_dump($users);
    mysqli_close($DB);
    
    return $users;
}

function addUser($data) {

    $DB = mysqli_connect("127.0.0.1", "root", "root", "website");

    if (!$DB) {
        die("Ошибка: Невозможно установить соединение с MySQL.");
    }
    
    $sql = "INSERT INTO users (username, email, age, phone, `password`) ";
    
    $sql .= "VALUES('{$data['name']}', '{$data['email']}', '{$data['age']}', '{$data['phone']}', '{$data['password']}')";
    
    $resultQuery = $DB->query($sql);

    mysqli_close($DB);
    
    return $resultQuery;
    }
    
//    $user = [
//        'username' => 'vasa1',
//        'email' => 'vasa1@gmail.com',
//        'password' => '1111',
//        'age' => 27,
//        'phone' => '+380994563231'
//    ];
    
//addUser($user);