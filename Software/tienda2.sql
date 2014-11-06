-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2014 a las 06:20:12
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(12, 'agregar'),
(2, 'Baloncesto'),
(1, 'Futbol'),
(8, 'Otros'),
(15, 'pba'),
(3, 'Tenis de Mesa'),
(6, 'Volleyball');

--
-- Disparadores `categories`
--
DELIMITER //
CREATE TRIGGER `borrarCategory` BEFORE DELETE ON `categories`
 FOR EACH ROW update products 
set category_id = 8, subcategory_id=11, subsubcategory_id = 12
where category_id = OLD.id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `category` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `subcategory` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `subsubcategory` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `type` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `price` double NOT NULL,
  `weight` double NOT NULL,
  `unit` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `keywords` varchar(2000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `volumen` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1',
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `subcategory`, `subsubcategory`, `type`, `price`, `weight`, `unit`, `filename`, `dir`, `keywords`, `volumen`, `created`, `updated`, `stock`, `state`, `category_id`, `subcategory_id`, `subsubcategory_id`) VALUES
(40, 'F50actualiza', NULL, NULL, NULL, 'Tacos f50 Adidas, azul con verde actualiza', 25000111, 15111, NULL, 'DAYUM.jpg', 'img\\uploads\\product\\filename', 'f50 adidas actualiza', NULL, '2014-10-30 11:48:35', '2014-11-05 23:15:52', 1011111, 1, 8, 11, 12),
(41, 'Battle Adidas', NULL, NULL, NULL, 'Tacos Battle, azul blanco y negro', 24000, 2, NULL, 'adizero.jpg', 'img\\uploads\\product\\filename', 'battle', NULL, '2014-10-30 11:50:48', '2014-11-05 21:46:09', 0, 0, 1, 2, 2),
(42, 'Tacos Nike', NULL, NULL, NULL, 'tacos nike, altos naranja', 32000, 2, 'Kilogramos', 'nike.jpg', 'img\\uploads\\product\\filename', 'nike tacos', NULL, '2014-10-30 11:51:58', '2014-11-05 21:29:50', 0, 1, 1, 2, 3),
(43, 'Balon de Volleyball MVA300', NULL, NULL, NULL, 'balon de volleyball mikasa', 20000, 2, 'Kilogramos', 'mikasa.jpg', 'img\\uploads\\product\\filename', 'volleyball mikasa', NULL, '2014-10-30 11:55:48', '2014-11-05 21:30:18', 0, 1, 6, 1, 10),
(51, 'Mercurial ', NULL, NULL, NULL, 'Tacos mercurial oscuros, negro con azul', 100, 30, 'gramos', 'mercurial-0.jpg', 'img\\uploads\\product\\filename', 'nike mercurial', NULL, '2014-11-02 23:01:39', '2014-11-05 23:09:27', 0, 1, 1, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
`id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`) VALUES
(1, 'Balones'),
(11, 'Otros'),
(4, 'Raquetas'),
(2, 'Tacos'),
(3, 'Tenis');

--
-- Disparadores `subcategories`
--
DELIMITER //
CREATE TRIGGER `borrarSubcategory` BEFORE DELETE ON `subcategories`
 FOR EACH ROW update products
set subcategory_id = 11, subsubcategory_id = 12
where subcategory_id = OLD.id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subsubcategories`
--

CREATE TABLE IF NOT EXISTS `subsubcategories` (
`id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `subsubcategories`
--

INSERT INTO `subsubcategories` (`id`, `name`) VALUES
(2, 'Adidas'),
(14, 'agragar'),
(15, 'agregar'),
(1, 'Barcelona'),
(4, 'Butterfly'),
(10, 'Mikasa'),
(3, 'Nike'),
(12, 'Otros');

--
-- Disparadores `subsubcategories`
--
DELIMITER //
CREATE TRIGGER `borrarSubsubcategory` BEFORE DELETE ON `subsubcategories`
 FOR EACH ROW update products
set subsubcategory_id = 12
where subsubcategory_id = OLD.id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` bigint(20) NOT NULL,
  `first_name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `middle_name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `identification` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `birth_date` date NOT NULL,
  `username` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `role` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `identification`, `birth_date`, `username`, `role`) VALUES
(12, 'Dayner', 'Rafael', 'UmaÃ±a', 'darafael.5959@gmail.com', '$2a$10$UbbzG2FJ4MG6nqqaOsi/7e/mXEcKYKLKhfuDUfnTii4L/IVGjGqIO', '1111111', '1992-02-07', 'rafael', 'admin'),
(13, 'Douglas', 'Castillo', 'Chavarria', 'sdfsdf@zds', '$2a$10$pN/1Nylv84bgPbHDEC3hOuuec975frbY5m1nuQp2u/3LKQI0Wrqk6', '115430824', '1994-08-05', 'd', 'admin'),
(14, 'Alejandro', 'Cordoba', 'Soto', 'alejandro06cs@hotmail.com', '$2a$10$uKz38t2nTXa.i25ReNeL7Oq347aN7PReM6vOE6hdSOhEgMr1jfOay', '115080718', '2014-10-30', 'coba', 'customer'),
(16, 'nuevo', 'nuevo', 'nuevo', 'ada@sad', '$2a$10$Lcj68ALsqxWpjeoV/NMVEuhL8N7U4Ty938xPytS4qKIWHZGqpz8V6', '123456', '1994-01-10', 'nuevo', 'customer'),
(17, 'Alejandro', 'Reyes', 'Granados', 'ale@gmail', '$2a$10$AcRcVbRWfos3363ueAyWsOH1actihLgAkpKAqhOxSccym.vDiPhpO', '115310700', '1994-01-17', 'aler', 'customer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishes`
--

CREATE TABLE IF NOT EXISTS `wishes` (
`id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `wishes`
--

INSERT INTO `wishes` (`id`, `product_id`, `user_id`, `created`) VALUES
(3, 40, 16, '2014-11-02 19:59:17'),
(6, 42, 17, '2014-11-02 20:05:10'),
(7, 40, 17, '2014-11-05 02:42:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`), ADD KEY `category_id` (`category_id`), ADD KEY `subcategory_id` (`subcategory_id`), ADD KEY `subsubcategory_id` (`subsubcategory_id`);

--
-- Indices de la tabla `subcategories`
--
ALTER TABLE `subcategories`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `subsubcategories`
--
ALTER TABLE `subsubcategories`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`,`identification`,`username`);

--
-- Indices de la tabla `wishes`
--
ALTER TABLE `wishes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `subcategories`
--
ALTER TABLE `subcategories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `subsubcategories`
--
ALTER TABLE `subsubcategories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `wishes`
--
ALTER TABLE `wishes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
