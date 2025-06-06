<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    print('<h1>Данные получены</h1>');
    print("Имя: {$name}<br>");
    print("Электронная почта: {$email}<br>");
}