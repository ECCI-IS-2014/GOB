-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2014 a las 18:00:26
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `middle_name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `identification` int(9) NOT NULL,
  `birth_date` date NOT NULL,
  `username` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `role` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`identification`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `identification`, `birth_date`, `username`, `role`) VALUES
(1, 'Daniel', 'Boanerges', 'Mora', 'dan182mora@gmail.com', '$2a$10$t/4VXR8e6JzzZkCR/3qM0.eXHWAncyrUk', 115240499, '1994-12-22', 'Danielmoram', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
