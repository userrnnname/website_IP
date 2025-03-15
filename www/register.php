<?php
require 'php/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, phone, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([$username, $email, $phone, $password]);

    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зарегистрироваться</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="register-login">
        <div class="register-login-form">
            <!-- REGISTER -->
            <h1>Зарегистрироваться</h1>
            <form method="POST" action="register.php">
                <input type="text" name="username" placeholder="Имя" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="text" name="phone" placeholder="Номер телефона" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <button type="submit" class="submit-button">Зарегистрироваться</button>
            </form>
            <p>Уже есть профиль? <a href="login.php">Войдите</a>.</p>
        </div>
    </div>
</body>
</html>