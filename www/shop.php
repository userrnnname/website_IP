<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин</title>
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
    <div class="shop-container">
        <!-- FILTER SECTION -->
        <div class="filter-section">
            <div class="filter-header">
                <i class="fas fa-filter"></i>
                <span>ФИЛЬТР</span><img src="pic/filter.png" alt="Filter">
            </div>
            <!-- FILTER 1 CATEGORIES -->
            <div class="filter-category">
                <div class="category-header" onclick="toggleDropdown('more-filters')">
                    <span>Больше Фильтров</span>
                    <i class="fas fa-chevron-down"></i><img src="pic/showmorearrow.svg" alt="Show more">
                </div>
                <div id="more-filters" class="dropdown-content">
                    <div><input type="checkbox" name="clothes" value="everydayshirt"> Повседневные рубашки</div>
                    <div><input type="checkbox" name="clothes" value="officialshirt"> Официальные рубашки</div>
                    <div><input type="checkbox" name="clothes" value="coat"> Пальто</div>
                    <div><input type="checkbox" name="clothes" value="costume"> Костюмы</div>
                    <div><input type="checkbox" name="clothes" value="blazer"> Пиджаки</div>
                    <div><input type="checkbox" name="clothes" value="trousers"> Брюки</div>
                    <div><input type="checkbox" name="clothes" value="pants"> Бриджи</div>
                    <div><input type="checkbox" name="clothes" value="hoodie"> Худи</div>
                    <div><input type="checkbox" name="clothes" value="vest"> Жилеты</div>
                    <div class="hidden"><input type="checkbox" name="clothes" value="tshirt"> Футболки</div>
                    <div class="hidden"><input type="checkbox" name="clothes" value="dress"> Платья</div>
                    <div class="hidden"><input type="checkbox" name="clothes" value="headgear"> Головные уборы</div>
                </div>
            </div>
            <!-- FILTER 2 CATEGORIES -->
            <div class="filter-category">
                <div class="category-header" onclick="toggleDropdown('cloth')">
                    <span>Ткани</span>
                    <i class="fas fa-chevron-down"></i><img src="pic/showmorearrow.svg" alt="Show more">
                </div>
                <div id="cloth" class="dropdown-content">
                    <div><input type="checkbox" name="cloth" value="cotton"> Хлопок</div>
                    <div><input type="checkbox" name="cloth" value="flax"> Лён</div>
                    <div><input type="checkbox" name="cloth" value="footer"> Футер</div>
                    <div><input type="checkbox" name="cloth" value="fleece"> Флис</div>
                    <div><input type="checkbox" name="cloth" value="viscose"> Вискоза</div>
                    <div><input type="checkbox" name="cloth" value="nettle"> Крапива</div>
                    <div><input type="checkbox" name="cloth" value="leather"> Кожа</div>
                    <div><input type="checkbox" name="cloth" value="wool"> Шерсть</div>
                    <div class="hidden"><input type="checkbox" name="cloth" value="silk"> Шёлк</div>
                    <div class="hidden"><input type="checkbox" name="cloth" value="nylon"> Нейлон</div>
                </div>
            </div>
        </div>
        <!-- PRODUCT MENU -->
        <div class="product_menu">
            <div class="product_grid">
                <!-- PRODUCT CARDS INSERTED HERE -->
            </div>
        </div>
    </div>
    <!-- PAGINATION -->
    <div class="pagination">
        <button id="prevPage">
            <img src="pic/left-arrow.png" alt="Previous" class="arrow-icon">
        </button>
        <div class="page-numbers">
            <span class="page-number">1</span>
            <span class="page-number">2</span>
        </div>
        <button id="nextPage">
            <img src="pic/right-arrow.png" alt="Next" class="arrow-icon">
        </button>
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
<script src="js/shop.js"></script>
</body>
</html>