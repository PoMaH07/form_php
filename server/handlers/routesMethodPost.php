<?php

if ($method === 'POST'){ 

if ($route === '/registration') {
    $request = json_decode(file_get_contents('php://input'), true);
    valid($request);
    
    $isValid = valid ($request);
    
    
    if ($isValid) {
        $responceSuccess = [
            'result' => true,
            'message' => 'Registration Successful',
        ];

        $responceFail = [
            'result' => false,
            'message' => 'Data is not valid',
        ];

        $request['age'] = 25;

        $isSave = addUser($request);

        if($isSave) {
            echo json_encode($responceSuccess);
        } else {
            echo json_encode($responceFail);
        }

    } else {
        $responce = [
        'result' => false,
        'message' => $isValid,
    ];
        echo json_encode ($responce);
    }
  }
  if ($route === '/login') {
      
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $User = getUser($email);
      
      /*
        Функция снизу. Если Пользователя не существует, или пользователь имеет массив с пустыми данными.
        А так же, мы нашли пользователя, но пароль не совпадает, тогда переменнтая ошибка выдаёт ошибку,
        Которая вставляется в файл login.php. Если данные валидны, мы отдаем пользователю массив с данными
        Которые он ввёл.
       */
      
      if(empty($User) || empty($User[0]) || $password!== $User[0]['password']) {
          $error = 'User not found! Enter valid data please';
          include './views/header.php';
          include './views/login.php';
          include './views/footer.php';
          die;
      }
          $_SESSION['user'] = $User[0];
          $isAdmin = $User[0]['email'] === 'admin@gmail.com';
          
          if ($isAdmin) {
          header("location: /users");
          } else {
              header("location: /");
          }

      
      D($User);
      
  }
}

