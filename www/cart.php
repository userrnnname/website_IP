<?php
session_start();
require 'php/config.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch cart items for the logged-in user
$stmt = $conn->prepare("
    SELECT products.id, products.name, products.price, cart.quantity 
    FROM cart 
    JOIN products ON cart.product_id = products.id 
    WHERE cart.user_id = ?
");

$stmt->execute([$user_id]);
$cart_items = $stmt->fetchAll();

// Initialize total price
$total_price = 0;

// Calculate total price if cart is not empty
if (!empty($cart_items)) {
    foreach ($cart_items as $item) {
        $total_price += $item['price'] * $item['quantity'];
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
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
    <!-- CART -->
    <div class="cart-container">
        <h1>Ваша корзина</h1>
        <?php if (empty($cart_items)): ?>
            <p>Ваша корзина пустая</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Продукт</th>
                        <th>Цена</th>
                        <th>Количество</th>
                        <th>Итого</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart_items as $item): ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['price']; ?></td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td><?php echo $item['price'] * $item['quantity']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3"><strong>Итого</strong></td>
                        <td><strong><?php echo $total_price; ?></strong></td>
                    </tr>
                </tbody>
            </table>
        <?php endif; ?>
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