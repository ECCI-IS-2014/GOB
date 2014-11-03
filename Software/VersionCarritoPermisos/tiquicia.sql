-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2014 a las 17:12:41
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tiquicia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `category` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `type` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `price` double NOT NULL,
  `weight` double NOT NULL,
  `unit` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `keywords` varchar(2000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `volumen` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `type`, `price`, `weight`, `unit`, `filename`, `dir`, `keywords`, `volumen`, `stock`, `created`, `updated`) VALUES
(39, 's4', 'Otros', 'Celular samsung galaxy s4, memora 2 RAM , 32gb internas', 200000, 500, 'gramos', 'Tulips.jpg', 'img\\uploads\\product\\filename', 's4', '20', 5, '2014-10-29 05:54:06', '2014-10-29 05:54:06'),
(40, 'note3', 'Otros', 'Note 3, Samsung galaxy, el mejor celular, 3RAM 128gb internas', 3000001, 800, 'gramos', 'note3.jpg', 'img\\uploads\\product\\filename', 'note3', '30', 5, '2014-10-29 05:55:07', '2014-10-29 05:55:07'),
(41, 'comment', 'Otros', 'celular salvatandas, tactil y con teclado, barato', 50001, 350, 'gramos', 'comment.jpg', 'img\\uploads\\product\\filename', 'comment salvatandas', '15', 8, '2014-10-29 05:56:05', '2014-10-29 05:56:05'),
(42, 'prub', 'Volleyball', 'ace de pruebaaa', 500, 56, 'gramos', 'ace2.jpg', 'img\\uploads\\product\\filename', 'ace', '12', 5, '2014-10-29 07:41:08', '2014-10-29 07:41:08');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `identification`, `birth_date`, `username`, `role`) VALUES
(12, 'Dayner', 'Rafael', 'UmaÃ±a', 'darafael.5959@gmail.com', '$2a$10$UbbzG2FJ4MG6nqqaOsi/7e/mXEcKYKLKhfuDUfnTii4L/IVGjGqIO', '1111111', '1992-02-07', 'rafael', 'admin'),
(13, 'Douglas', 'Castillo', 'Chavarria', 'sdfsdf@zds', '$2a$10$pN/1Nylv84bgPbHDEC3hOuuec975frbY5m1nuQp2u/3LKQI0Wrqk6', '115430824', '1994-08-05', 'd', 'admin'),
(14, 'Alejandro', 'Cordoba', 'Soto', 'alejandro06cs@hotmail.com', '$2a$10$CM3ippor6lGX38nFsK0MceTW9uO59Cfa65irbwnWI4suYACz29bG2', '115080718', '1994-08-06', 'coba', 'customer');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
