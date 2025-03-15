<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ателье</title>
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
    <!-- HERO -->
    <div class="hero-home">
        <div class="hero-home-content">
            <p 1 class="hero-subtitle">БУДЬТЕ НА ВЫСОТЕ</p>
            <h1 class="hero-title">В ОСОБЕННЫЙ ДЕНЬ</h1>
            <div class="hero-button" id="new-arrivals-link">Новые Поступления</div>
        </div>
    </div>    
    <!-- PRODUCT -->
    <div class="product container">
        <h1 class="container-title" id="product-section">СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ</h1>
        <a href="shop.php" class="outline-button">Посмотреть все</a>
        <div class="product_cards"><!-- Product cards will be rendered here --></div> 
    </div>
    <!-- ORDER -->
    <div class="order container">
        <!-- ORDER TEXT -->
        <div class="order-content">
            <h1 class="order-title">Изготовление на заказ</h1>
            <a href="services.php" class="hero-button">УЗНАТЬ БОЛЬШЕ</a>
        </div>
    </div>
    <!-- COLLECTION -->
    <div class="collection-container">
        <!-- COLLECTION TITLE -->
        <h1 class="collection-title">АССОРТИМЕНТ ТОВАРОВ</h1>
        <!-- COLLECTION CARDS -->
        <div class="collection-cards">
            <!-- COLLECTION CARD 1 -->
            <div class="collection-card" style="background-image: url('pic/collection1.png');">
                <a href="shop.php" class="collection-button">Костюмы</a>
            </div>
            <!-- COLLECTION CARD 2 -->
            <div class="collection-card" style="background-image: url('pic/collection2.png');">
                <a href="shop.php" class="collection-button">Повседневная одежда</a>
            </div>
            <!-- COLLECTION CARD 3 -->
            <div class="collection-card" style="background-image: url('pic/collection3.png');">
                <a href="shop.php" class="collection-button">Пиджаки</a>
            </div>
            <!-- COLLECTION CARD 4 -->
            <div class="collection-card" style="background-image: url('pic/collection4.png');">
                <a href="shop.php" class="collection-button">Рубашки</a>
            </div>
            <!-- COLLECTION CARD 5 -->
            <div class="collection-card" style="background-image: url('pic/collection5.png');">
                <a href="shop.php" class="collection-button">Брюки и бриджи</a>
            </div>
            <!-- COLLECTION CARD 6 -->
            <div class="collection-card" style="background-image: url('pic/collection6.png');">
                <a href="shop.php" class="collection-button">Пальто</a>
            </div>
        </div>
    </div>
    <!-- SERVICE -->
    <div class="service-info-container">
        <!-- SERVICE CARD 1 -->
        <div class="service-card">
            <img src="pic/service_icon1.png" alt="Service Icon 1" class="service-icon">
            <h3 class="service-title">Качество</h3>
            <p class="service-description">Наш главный приоритет - разработка и пошив индивидуального костюма, который обеспечит идеальную посадку. Мы гарантируем комфорт, стиль и элегантность в любой ситуации и в любом месте.</p>
        </div>

        <!-- SERVICE CARD 2 -->
        <div class="service-card">
            <img src="pic/service_icon2.png" alt="Service Icon 2" class="service-icon">
            <h3 class="service-title">Персонализация</h3>
            <p class="service-description">При просмотре нашей галереи вы найдете огромное множество стилей на выбор. Каждая деталь будет отражать ваше собственное чувство стиля. Во время совместной работы вы получите возможность полностью контролировать процесс проектирования.</p>
        </div>

        <!-- SERVICE CARD 3 -->
        <div class="service-card">
            <img src="pic/service_icon3.png" alt="Service Icon 3" class="service-icon">
            <h3 class="service-title">Удобство</h3>
            <p class="service-description">Мы доставим к вам домой, в офис или на любую другую локацию эксклюзивную услугу по индивидуальному пошиву костюмов, чтобы свести к минимуму сбои в вашем плотном расписании.</p>
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
<script src="js/product_data.js"></script>
<script src="js/index.js"></script>
</body>
</html>