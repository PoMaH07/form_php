<?php

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
    
    if ($errors) {
        return $errors;
    }
    return true;
}

