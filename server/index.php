<?php

$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// echo '<pre>';
//     var_dump($method);
// echo '</pre>';

// die;

if ($method === 'GET'){

include './views/header.php';

if ($route === '/') {
    include './views/home.php';
}

if ($route === '/contacts') {
    include './views/contacts.php';
}

if ($route === '/login' && $method === 'GET') {
    include './views/login.php';
}

include './views/footer.php';
}

if ($method === 'POST'){ 

if ($route === '/login') {
    $request = json_decode(file_get_contents('php://input'), true);
    valid($request);
    // echo 'hello';
    }
}

function valid($data) {
    $errors = [];

    if(!preg_match('/^[A-ZА-Я0-9\-\.\ ]{2,15}$/i', $data['name'])) {
        $errors['name'] = 'Name is not Valid';
    }
    if(!preg_match('/^[a-z0-9.\-_]{1,15}@[a-z0-9.\-_]{1,25}\.[a-z]{1,10}$/i', $data['email'])) {
        $errors['email'] = 'Email is not Valid';
    }
    if(!preg_match('/^(\+380|80|0|380){1,4}[0-9]{3,15}$/', $data['phone'])) {
        $errors['phone'] = 'Phone is not Valid';
    }
    if(!preg_match('/^[A-ZА-Я0-9\-\.\ ]{2,15}$/i', $data['password'])) {
        $errors['password'] = 'Password is not Valid';
    }

    if(!(gettype($data['subscribe']) === 'boolean')) {
        $errors['subscribe'] = 'Subscribe is not Valid';
    }
    var_dump($data);
    
    if ($errors) {
        return $errors;
    }
    return true;
}