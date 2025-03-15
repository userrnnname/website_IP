<?php
session_start();
require 'php/config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- HEADER & NAV -->
    <header class="nav-header">
        <!-- LOGO -->
        <div class="logo">
            <img src="pic/logo.png" alt="Website Logo">
        </div>
        <!-- NAV -->
        <nav class="nav-links">
            <ul>
                <li><a href="index.php">ТОВАРЫ</a></li>
                <li><a href="shop.php">МАГАЗИН</a></li>
                <li><a href="services.php">УСЛУГИ</a></li>
                <li><a href="contact.php">КОНТАКТЫ</a></li>
            </ul>
        </nav>
        <!-- ICONS -->
        <div class="icons">
            <a href="profile.php"><img src="pic/icon-user.png" alt="Icon User" class="icon-user"></a>
            <a href="cart.php"><img src="pic/icon-cart.png" alt="Icon Cart" class="icon-cart"></a>
        </div>
    </header>
    <!-- PROFILE -->
    <div class="profile-container">
        <h1>Добро пожаловать, <?php echo $user['username']; ?>! Наслаждайтесь покупками!</h1>
        <p>E-mail: <?php echo $user['email']; ?></p>
        <p>Дата регистрации: <?php echo $user['registration_date']; ?></p>
        <a href="logout.php" class="outline-button">Выйти</a>
    </div>
    <!-- FOOTER -->
    <footer>
        <div class="column">
            <h2>© 2025 АТЕЛЬЕ</h2>
            <ul>
                <li>Креативность и индивидуальность - наша цель.</li>
            </ul>
        </div>
        <div class="column">
            <h3>Расположение</h3>
            <ul>
                <li>ул. Вишневая, 12, Казань.</li>
                <li>Пн-Сб 10:00 - 21:00</li>
                <li>Вс Выходной</li>
            </ul>
        </div>
        <div class="column">
            <h3>О нас</h3>
            <ul>
                <li><a href="info.php">FAQ</a></li>
                <li><a href="info.php">Сервисы</a></li>
                <li><a href="info.php">Контакты</a></li>
            </ul>
        </div>
        <div class="column">
            <h3>Пошив</h3>
            <ul>
                <li><a href="services.php">Изготовление на заказ</a></li>
                <li><a href="services.php">Изготовление по меркам</a></li>
            </ul>
        </div>
        <div class="column">
            <h3>Заказы</h3>
            <ul>
                <li><a href="info.php">Возвраты</a></li>
                <li><a href="info.php">Условия и положения</a></li>
                <li><a href="info.php">Политика конфиденциальности</a></li>
                <li><a href="info.php">Специальные предложения</a></li>
                <li><a href="info.php">Политика возврата</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>