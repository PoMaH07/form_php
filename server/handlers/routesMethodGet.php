<?php

if ($method === 'GET'){

include './views/header.php';

if ($route === '/') {
    include './views/home.php';
}

if ($route === '/contacts') {
    include './views/contacts.php';
}

if ($route === '/registration') {
    include './views/registration.php';
}

if ($route === '/login') {
    include './views/login.php';
}

if ($route === '/users') {
    $users = getUsers ();
    include './views/users.php';
}
include './views/footer.php';
}