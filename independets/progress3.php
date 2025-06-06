<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $password = TRIM($_POST['password']);
    $errors = [];
    if (empty($errors)) {
        $name = htmlspecialchars($name);
        $password = htmlspecialchars($password);
        print('<h1>Данные обработаны</h1>');
        print("Имя: {$name}<br>");
        print("ПАроль: {$password}<br>");
    }
}
