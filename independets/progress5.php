<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);

    $errors = [];
    if (empty($name)) {
        $errors[] = "Имя обязательна";
    } 
    if (empty($date)) {
        $errors[] = "Дата обязательно";
    }
    if (empty($time)) { 
        $errors[] = "Врямя обязательна";
    }
    if (empty($errors)) {
        $name = htmlspecialchars($name);
        $date = htmlspecialchars($date);
        $time = htmlspecialchars($time);

        print('<h1>Данные обработаны</h1>');
        print("Дата: {$date}<br> Время {$time}");

    }
}

