<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    $password2 = trim($_POST['password2']);

    $errors = [];

    if ($password !== $password2) {  
        $errors[] = 'пароли должны совпадлать';
    } 
    if (empty($errors)) {
        $name = htmlspecialchars($_POST['name']);
        $password = htmlspecialchars($_POST['password']);
        $password2 = htmlspecialchars($_POST['password2']);
        print("WORK");
    } else {
        foreach ($errors as $error) {
            print("<p style='color: red;'>{$error}</p>");
        }
    }
}