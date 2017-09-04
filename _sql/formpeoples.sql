-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Хост: ag248566.mysql.ukraine.com.ua
-- Время создания: Июн 05 2017 г., 20:35
-- Версия сервера: 5.7.16-10-log
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ag248566_laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `formpeoples`
--

CREATE TABLE IF NOT EXISTS `formpeoples` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `code` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100 ;

--
-- Дамп данных таблицы `formpeoples`
--

INSERT INTO `formpeoples` (`id`, `name`, `last_name`, `code`, `email`, `address`) VALUES
(1, 'Александр', 'Коськин', 1234567, '25one@ukr.net', '117/54, ул.Пухова, г.Чернигов, Украина, 14032'),
(58, 'Alexander', 'Koskin', 7645321, '25onealex@gmail.com', '117/54 Pukhova Str., city of Chernigov, Ukraine, 14032'),
(69, 'sdfr', 'sdfsdf', 12, 'ttt@mail.eu', 'sdfsdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
