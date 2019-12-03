<?php

if ($method === 'POST'){ 

if ($route === '/login') {
    $request = json_decode(file_get_contents('php://input'), true);
    valid($request);
    
    $isValid = valid ($request);
    
    
    if ($isValid) {
    $responce = [
        'result' => true,
        'message' => 'Registration Successful',
    ];
        echo json_encode ($responce);
    } else {
        $responce = [
        'result' => false,
        'message' => $isValid,
    ];
        echo json_encode ($responce);
    }
  }
}

