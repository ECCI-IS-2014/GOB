-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2014 a las 02:03:04
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tiquiciashop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
`id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `palabraclave` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
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
`id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `price` double NOT NULL,
  `weight` double NOT NULL,
  `filename` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `price`, `weight`, `filename`, `dir`, `created`) VALUES
(21, 'Avengers', 'caro', 1000000, 89, 'Avengers_Assemble.jpg', 'img\\uploads\\product\\filename', '2014-10-13 01:01:53');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `identification`, `birth_date`, `username`, `role`) VALUES
(7, 'Daniel', 'Mora', 'Madrigal', 'mora@mora', '$2a$10$kYCZCRFoN75WWgxWzkhux.NLHJMqDNO.vp.wQogU8e9N.VrwFWsGW', '1111', '2014-10-16', 'mora', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `keywords`
--
ALTER TABLE `keywords`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`,`identification`,`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `keywords`
--
ALTER TABLE `keywords`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
