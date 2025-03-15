-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 15 2025 г., 06:27
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `atelier`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(1, 2, 2, 1),
(2, 2, 3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'ry', 'godzilla@gmail.com', '89287428457', ',f,f,f,', '2025-02-12 16:11:31'),
(2, 'ry', 'godzilla@gmail.com', '89287428457', ',f,f,f,', '2025-02-12 16:17:49'),
(3, 'ry', 'godzilla@gmail.com', '89287428457', ',f,f,f,', '2025-02-12 16:17:53'),
(4, 'ry', 'godzilla@gmail.com', '89287428457', ',f,f,f,', '2025-02-12 16:22:25'),
(5, 'Лисюкова Елизавета Алексеевна', 'bobo@aaa.ru', '89172810454', 'г4556', '2025-02-12 16:26:41'),
(6, 'Лисюкова Елизавета Алексеевна', 'bobo@aaa.ru', '89172810454', 'г4556', '2025-02-12 16:27:16'),
(7, 'kerasin', 'kumis@gmail.com', '89172810454', 'hftht', '2025-02-12 16:28:44'),
(8, 'kerasin', 'kumis@gmail.com', '89172810454', 'hftht', '2025-02-12 16:33:09'),
(9, 'kerasin', 'kumis@gmail.com', '89172810454', 'gre', '2025-02-12 16:33:19'),
(10, 'kerasin', 'kumis@gmail.com', '89172810454', 'erh', '2025-02-12 16:34:19'),
(11, 'kerasin', 'kumis@gmail.com', '89172810454', '76', '2025-02-12 16:36:18'),
(12, 'kerasin', 'kumis@gmail.com', '89172810454', '76', '2025-02-12 16:37:24'),
(13, 'kerasin', 'kumis@gmail.com', '89172810454', '76', '2025-02-12 16:37:27'),
(14, 'kerasin', 'kumis@gmail.com', '89172810454', '56', '2025-02-12 16:37:41'),
(15, 'kerasin', 'kumis@gmail.com', '89172810454', '56', '2025-02-12 16:40:33'),
(16, 'kerasin', 'kumis@gmail.com', '89172810454', 'e4t4', '2025-02-12 16:40:58'),
(17, 'trh', 'godzilla@gmail.com', '654654654654', '45', '2025-02-12 17:02:08'),
(18, 'ger', 'bobjk@mama.com', '89175450454', 'dfbd', '2025-02-12 17:05:53'),
(19, 'kerasin', 'kumis@gmail.com', '89172810454', '', '2025-02-13 06:09:09');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `fabric` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `category`, `fabric`) VALUES
(1, 'Дорожное худи', 3699.00, 'pic/product1.png', 'hoodie', 'cotton'),
(2, 'Терракотовая рубашка', 5299.00, 'pic/product2.png', 'everydayshirt', 'fleece'),
(3, 'Красный жакет', 4599.00, 'pic/product3.png', 'blazer', 'nylon'),
(4, 'Клетчатая рубашка', 7499.00, 'pic/product4.png', 'everydayshirt', 'nettle'),
(5, 'Бурая рубашка', 8899.00, 'pic/product5.png', 'officialshirt', 'fleece'),
(6, 'Болотный пиджак', 9499.00, 'pic/product6.png', 'blazer', 'viscose'),
(7, 'Зеленые брюки', 7999.00, 'pic/product7.png', 'trousers', 'footer'),
(8, 'Бордовая жилетка', 9699.00, 'pic/product8.png', 'vest', 'viscose'),
(9, 'Бежевые брюки', 6899.00, 'pic/product9.png', 'trousers', 'fleece'),
(10, 'Клетчатый пиджак умбра', 13299.00, 'pic/product10.png', 'blazer', 'wool'),
(11, 'Серые брюки', 10799.00, 'pic/product11.png', 'pants', 'nettle'),
(12, 'Коралловый пиджак', 12299.00, 'pic/product12.png', 'blazer', 'wool'),
(13, 'Клетчатый пиджак серый', 11799.00, 'pic/product13.png', 'blazer', 'nylon'),
(14, 'Белое платье', 30999.00, 'pic/product14.png', 'dress', 'silk'),
(15, 'Шляпа', 1899.00, 'pic/product15.png', 'headgear', 'wool'),
(16, 'Кремовая футболка', 2199.00, 'pic/product16.png', 'tshirt', 'cotton'),
(17, 'Чёрный костюм', 28899.00, 'pic/product17.png', 'costume', 'nettle'),
(18, 'Белый костюм', 32499.00, 'pic/product18.png', 'costume', 'flax'),
(19, 'Шляпка женская', 8499.00, 'pic/product19.png', 'headgear', 'nylon'),
(20, 'Кожаное пальто', 55599.00, 'pic/product20.png', 'coat', 'leather');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `registration_date`) VALUES
(2, 'kerasin', 'kumis@gmail.com', '89172810454', '$2y$10$U7JhXhvajbYKn/vi7kCpGeAo37GyYfp2XC4tWXhlJmeBigbZx1UUW', '2025-02-12 08:27:41');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
