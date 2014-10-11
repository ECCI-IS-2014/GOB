-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2014 a las 21:39:43
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `price` double NOT NULL,
  `weight` double NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `price`, `weight`, `created`) VALUES
(1, 'balon', 'deportivo', 50000, 34, '0000-00-00 00:00:00'),
(6, 'balon', 'deportivo', 89000, 7, '0000-00-00 00:00:00'),
(8, 'medias', 'deportivo', 3498, 1, '2014-10-09 19:31:37'),
(11, 'tacos', 'futbol', 39000, 6778, '2014-10-09 20:01:12'),
(12, 'fff', 'asa', 19, 8, '2014-10-10 01:41:29'),
(13, 'ropa', 'deportivo', 5, 90, '2014-10-10 20:39:57'),
(14, 'd', 'efd', 30000000000001, 2, '2014-10-11 02:15:08'),
(15, 's', 's', 2, 1, '2014-10-11 02:33:56'),
(16, 'Compu Deportiva', 'TecnolÃ³gica', 560000, 34, '2014-10-11 10:15:32'),
(17, 'ddd', 'dddd', 34343, 53, '2014-10-11 10:17:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
