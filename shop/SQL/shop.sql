-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 фев 2021 в 08:33
-- Версия на сървъра: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Структура на таблица `shop_stock`
--

CREATE TABLE `shop_stock` (
  `name_product` varchar(225) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `tag` varchar(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `shop_stock`
--

INSERT INTO `shop_stock` (`name_product`, `quantity`, `price`, `tag`, `category`, `description`, `picture`) VALUES
('pc1', 123, 123, 'pc', 'computers', 'pc1', ''),
('lap1', 32, 123456, 'lap', 'computers', 'lap1', ''),
('monitor1', 4, 21389, 'full_HD', 'monitors', 'monitor1', ''),
('monitor2', 41, 5321, '4k', 'monitors', 'monitor2', ''),
('mouse1', 42, 123414, 'mouse', 'accessories', 'mouse1', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
