-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 17 2016 г., 17:07
-- Версия сервера: 10.1.8-MariaDB
-- Версия PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yourtech`
--

-- --------------------------------------------------------

--
-- Структура таблицы `laptops`
--

CREATE TABLE `laptops` (
  `product_id` int(200) NOT NULL,
  `product` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `laptops`
--

INSERT INTO `laptops` (`product_id`, `product`, `price`, `photo`) VALUES
(28, 'SONY VAIO s200', '119990', 'len1.jpg'),
(29, 'Asus ROG-501X', '429990', 'asus1.jpg'),
(32, 'MacBook Pro 13 Retina', '560000', 'mac1.jpg'),
(33, 'Dell Insperion L5', '119990', 'len1.jpg'),
(35, 'MacBook Pro 13', '560000', 'mac1.jpg'),
(36, 'Asus X555LB-XO487T', '179990', 'asus2.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `unumber` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `username`, `unumber`, `email`, `password`) VALUES
(37, 'admin', '9846532', 'admin@mail.ru', '202cb962ac59075b964b07152d234b70'),
(38, 'Timur', '87713518561', 'borgalinov@gmail.com', '350c9d901b7f1c73a481e240ec1b7c0b'),
(39, 'admin', '87018314707', 'admin@mail.ru', '202cb962ac59075b964b07152d234b70'),
(40, 'maksat', '8645132', 'maks@mail.ru', '65ded5353c5ee48d0b7d48c591b8f430'),
(41, 'nurlan', '84562', 'nurla@mail.ru', '65ded5353c5ee48d0b7d48c591b8f430'),
(42, 'zangar', '85296', 'zangar@mail.ru', '202cb962ac59075b964b07152d234b70');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `laptops`
--
ALTER TABLE `laptops`
  MODIFY `product_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
