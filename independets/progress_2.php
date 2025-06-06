<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mess = trim($_POST['mess']);
    $errors = [];

    if (empty($name)) {
        $errors[] = 'Имя обязательно';
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors[] = "В имене допускается использовать только символы латинского алфавита и пробел";
    }
    
    if (empty($email)) {
        $errors[] = "Электронная почта обязательна";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "У электронной почты некорректный формат";
    }

    if (empty($mess)) {
        $errors[] = "Введите сообщение";
    } 
    if (empty($errors)) {
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $mess = htmlspecialchars($mess);
        print('<h1>Данные обработаны</h1>');
        print("Имя: {$name}<br>");
        print("Электронная почта: {$email}<br>");
        print("Сообщение {$mess}");
    } else {
        foreach ($errors as $error) {
            print("<p style='color: red;'>{$error}</p>");
        }
    }
}