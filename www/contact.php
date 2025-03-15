<?php
session_start(); // Start the session to access user data
require 'php/config.php'; // Include the database configuration file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // If user is logged in, fetch their details from the database
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT username, email, phone FROM users WHERE id = :user_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $name = $row['username'];
            $email = $row['email'];
            $phone = $row['phone'];
        }
    }

    // Insert the message into the database
    $sql = "INSERT INTO messages (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':message', $message, PDO::PARAM_STR);

    // Execute the query
    $stmt->execute();

    // Redirect back to the contact page
    header('Location: contact.php');
    exit; // Stop further execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
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
    <div class="contact-container">
        <div class="contact-blocks">
            <!-- CONTACT BLOCK 1 -->
            <div class="contact-block">
                <img src="pic/contact_image.png" alt="Service Image" class="contact-image">
            </div>
            <!-- CONTACT BLOCK 2 -->
            <div class="contact-block">
                <h3 class="contact-title1">ОСТАВИТЬ ЗАПРОС</h3>
                <p class="ser-description">Там, где стили сочетаются с удобством... Ваш портной приедет к вам домой, в офис или на любую другую локацию. Наш опыт обеспечивает полный контроль над процессом проектирования уникальной одежды, созданной специально для вас.</p>
            </div>
        </div>
        <!-- CONTACT BLOCK 3 -->
        <div class="contact-message-block">
            <h3 class="contact-title2">Отправить сообщение</h3>
            <form action="contact.php" method="POST">
                <div class="form-container">
                    <input type="text" id="name" name="name" placeholder="Имя">
                    <input type="email" id="email" name="email" placeholder="E-mail">
                    <input type="tel" id="phone" name="phone" placeholder="Номер телефона">
                    <textarea id="message" name="message" placeholder="Сообщение"></textarea>
                </div>
                <button type="submit" name="submit" class="submit-button">Отправить</button>
            </form>
        </div>
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