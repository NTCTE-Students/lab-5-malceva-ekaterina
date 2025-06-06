<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = trim($_POST['password']);
    $password2 = trim($_POST['password2']);
    if ($password !== $password2) {
        echo('No');
    } else {
        $name = htmlspecialchars($_POST['name']);
        $password = htmlspecialchars($_POST['password']);
        $password2 = htmlspecialchars($_POST['password2']);
        print("Все работает");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
        Name: <input type="text" name="name" required>
        <br>
        Password: <input type="password" name="password" required>
        <br>
        Repit password: <input type="password" name="password2" required>
        <br>
        <input type="submit" value="Send">
    </form>
</body>
</html>