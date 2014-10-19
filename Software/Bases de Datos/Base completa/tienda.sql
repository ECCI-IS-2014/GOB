-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2014 a las 20:19:19
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
-- Estructura de tabla para la tabla `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) NOT NULL,
  `palabraclave` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `keywords`
--

INSERT INTO `keywords` (`id`, `product_id`, `palabraclave`) VALUES
(1, 1, ''),
(2, 1, ''),
(3, 1, ''),
(4, 11, ''),
(5, 1, 'bola'),
(6, 1, 'Futbol'),
(7, 1, 'Brazuka'),
(8, 1, 'Adidas'),
(9, 1, 'BalonPie'),
(10, 21, 'asdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `category` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `price` float NOT NULL,
  `weight` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `keywords` varchar(2000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `volumen` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `type`, `price`, `weight`, `filename`, `dir`, `created`, `keywords`, `volumen`) VALUES
(3, 'Balon Barcelona', 'Futbol', 'Balon del FCBarcelona', 13000, '15', 'bolaBarca.jpg', 'img\\uploads\\product\\filename', '2014-10-16 15:56:23', 'futbol', NULL),
(4, 'Balon Champions', 'Futbol', 'Champions League', 12000, '2', 'balon_champions.jpg', 'img\\uploads\\product\\filename', '2014-10-16 15:57:40', 'champions futbol', NULL),
(5, 'Balon Baloncesto', 'Baloncesto', 'Baloncesto', 10000, '2', 'balon_basket2.jpg', 'img\\uploads\\product\\filename', '2014-10-16 15:59:03', 'baloncesto', NULL),
(6, 'Pelota Beisbol', 'Baseball', 'pelota beisbol', 8500, '1', 'images.jpg', 'img\\uploads\\product\\filename', '2014-10-16 16:00:03', 'baseball', NULL),
(7, 'Raquetas tenis de mesa', 'Tennis_de_mesa', 'kit raquetas', 14000, '1', 'kit_raquetas.jpg', 'img\\uploads\\product\\filename', '2014-10-16 16:01:34', 'raquetas', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `middle_name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `identification` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `birth_date` date NOT NULL,
  `username` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `role` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`identification`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `identification`, `birth_date`, `username`, `role`) VALUES
(8, 'Dayner', 'UmaÃ±a', 'Cascante', 'darafael.5959@gmail.com', '$2a$10$XwHBTbKiillkiFgphKdiKOvZrughBZHIxWPJRR95kLJGp6/AWLiuu', '1111111', '1994-02-07', 'rafa', 'admin'),
(9, 'ale', 'cordoba', 'soto', 'alejandro06cs@hotmail.com', '$2a$10$DeBUu7s6aqyRFecvFMVXyupN3hYQqZSlhe3op7/Wmp85y9kz/LI.K', '115', '1994-10-16', 'alejandrosc', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
