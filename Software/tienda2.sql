-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2014 a las 17:47:08
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
-- Estructura de tabla para la tabla `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `country`, `address`, `city`) VALUES
(2, 21, 'Costa Rica', 'El Roble, Alajuela', 'AJ'),
(4, 21, 'USA', 'Pennsylvannia street', 'PA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=184 ;

--
-- Volcado de datos para la tabla `bills`
--

INSERT INTO `bills` (`id`, `user_id`, `date`, `status`) VALUES
(175, 21, '2014-11-26 16:16:18', 'Entregado a casillero'),
(176, 21, '2014-11-26 16:16:22', 'Entregado a casillero'),
(177, 21, '2014-11-26 16:16:35', 'Entregado a casillero'),
(178, 21, '2014-11-26 16:16:45', 'Entregado a casillero'),
(179, 21, '2014-11-26 16:16:46', 'Entregado a casillero'),
(180, 21, '2014-11-27 15:39:42', 'Entregado a casillero'),
(181, 21, '2014-11-27 15:39:42', 'Entregado a casillero'),
(182, 21, '2014-11-27 15:40:18', 'Entregado a casillero'),
(183, 21, '2014-11-27 15:40:18', 'Entregado a casillero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `number` bigint(16) NOT NULL,
  `sec_code` int(3) NOT NULL,
  `expire_date` date NOT NULL,
  `type` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cards`
--

INSERT INTO `cards` (`id`, `user_id`, `number`, `sec_code`, `expire_date`, `type`) VALUES
(1, 17, 4380989804590046, 123, '2044-05-10', 'Visa'),
(2, 17, 4018283728917198, 554, '2033-03-16', 'AmericanExpress'),
(6, 18, 4018283728917197, 224, '2029-09-28', 'Visa'),
(7, 21, 4358478545879898, 123, '2014-05-26', 'Visa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `filename`, `dir`) VALUES
(17, 'Baloncesto', 'Baloncesto-2.png', 'img\\uploads\\category\\filename'),
(18, 'FÃºtbol', 'futbol.jpg', 'img\\uploads\\category\\filename'),
(19, 'Tenis de Mesa', 'tenis_de_mesa-0.png', 'img\\uploads\\category\\filename'),
(20, 'Volleyball', 'volleyball-0.png', 'img\\uploads\\category\\filename'),
(21, 'Otros', 'Otros-0.jpg', 'img\\uploads\\category\\filename');

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

INSERT INTO `products` (`id`, `name`, `type`, `price`, `weight`, `unit`, `filename`, `dir`, `keywords`, `volumen`, `created`, `updated`, `stock`, `state`, `category_id`, `subcategory_id`, `subsubcategory_id`) VALUES
(41, 'Battle Adidas', 'Tacos Battle, azul blanco y negro', 48, 12, 'Kilogramos', 'adizero.jpg', 'img\\uploads\\product\\filename', 'battle', '25', '2014-10-30 11:50:48', '2014-11-05 21:46:09', 0, 0, 1, 2, 2),
(42, 'Tacos Nike', 'tacos nike, altos naranja', 64, 8, 'Kilogramos', 'nike.jpg', 'img\\uploads\\product\\filename', 'nike tacos', '15', '2014-10-30 11:51:58', '2014-11-07 18:02:44', 10, 1, 1, 2, 3),
(43, 'Balon de Volleyball MVA300', 'balon de volleyball mikasa', 35, 9, 'Kilogramos', 'mikasa.jpg', 'img\\uploads\\product\\filename', 'volleyball mikasa', '20', '2014-10-30 11:55:48', '2014-11-07 18:02:03', 12, 1, 6, 1, 1),
(51, 'Mercurial ', 'Tacos mercurial oscuros, negro con azul', 100, 30, 'gramos', 'mercurial-0.jpg', 'img\\uploads\\product\\filename', 'nike mercurial', '23', '2014-11-02 23:01:39', '2014-11-05 23:09:27', 0, 1, 1, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sells`
--

CREATE TABLE IF NOT EXISTS `sells` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=57 ;

--
-- Volcado de datos para la tabla `sells`
--

INSERT INTO `sells` (`id`, `product_id`, `product_name`, `price`, `quantity`, `bill_id`) VALUES
(48, 42, 'Tacos Nike', 32000, 1, 156),
(49, 42, 'Tacos Nike', 32000, 1, 160),
(50, 42, 'Tacos Nike', 32000, 1, 164),
(51, 42, 'Tacos Nike', 32000, 1, 165),
(52, 42, 'Tacos Nike', 32000, 1, 165),
(53, 42, 'Tacos Nike', 32000, 1, 171),
(54, 42, 'Tacos Nike', 32000, 1, 172),
(55, 42, 'Tacos Nike', 32000, 1, 179),
(56, 42, 'Tacos Nike', 32000, 1, 182);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
`id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

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
  `country` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `city` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fact_address` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `identification` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `birth_date` date NOT NULL,
  `username` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `role` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `country`, `city`, `fact_address`, `password`, `identification`, `birth_date`, `username`, `role`) VALUES
(12, 'Dayner', 'Rafael', 'UmaÃ±a', 'darafael.5959@gmail.com', '', '', 'Acosta', '$2a$10$UbbzG2FJ4MG6nqqaOsi/7e/mXEcKYKLKhfuDUfnTii4L/IVGjGqIO', '1111111', '1992-02-07', 'rafael', 'admin'),
(13, 'Douglas', 'Castillo', 'Chavarria', 'sdfsdf@zds', '', '', 'Piedades de Santa Ana', '$2a$10$pN/1Nylv84bgPbHDEC3hOuuec975frbY5m1nuQp2u/3LKQI0Wrqk6', '115430824', '1994-08-05', 'd', 'admin'),
(21, 'Alejandro', 'Reyes', 'Granados', 'asdh@ajsf', '', '', 'San Jose', '$2a$10$nYpKNlnE9tbvHAvI6n/ZOuUgzu1jUN5/9SsT1lJZQcoKPVJ6Ooq.2', '115310700', '2014-11-27', 'aler', 'customer'),
(23, 'Alejandro', 'Cordoba', 'Soto', 'alejandro06cs@hotmail.com', 'Costa Rica', 'AJ', 'Colorado', '$2a$10$5/VP2P6cUw51jLpDfjvo8eztFe9yU7JW569yMJ5ckRQdZuZ4A.yH2', '115080718', '2014-11-27', 'coba', 'customer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishes`
--

CREATE TABLE IF NOT EXISTS `wishes` (
`id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `wishes`
--

INSERT INTO `wishes` (`id`, `product_id`, `user_id`, `created`) VALUES
(3, 40, 16, '2014-11-02 19:59:17'),
(8, 42, 17, '2014-11-10 16:48:04'),
(9, 43, 17, '2014-11-11 19:05:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addresses`
--
ALTER TABLE `addresses`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bills`
--
ALTER TABLE `bills`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cards`
--
ALTER TABLE `cards`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `number` (`number`);

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
-- Indices de la tabla `sells`
--
ALTER TABLE `sells`
 ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `addresses`
--
ALTER TABLE `addresses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `bills`
--
ALTER TABLE `bills`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT de la tabla `cards`
--
ALTER TABLE `cards`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `sells`
--
ALTER TABLE `sells`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT de la tabla `subcategories`
--
ALTER TABLE `subcategories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `subsubcategories`
--
ALTER TABLE `subsubcategories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `wishes`
--
ALTER TABLE `wishes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
