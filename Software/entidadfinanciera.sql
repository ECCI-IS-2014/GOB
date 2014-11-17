-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2014 a las 13:22:43
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `entidadfinanciera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `numTarjeta` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `pin` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tipoMoneda` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fechaVencimiento` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phones`
--

CREATE TABLE IF NOT EXISTS `phones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `manufacturer` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `description` text COLLATE utf8_spanish_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `phones`
--

INSERT INTO `phones` (`id`, `name`, `manufacturer`, `description`, `created`, `modified`) VALUES
(1, 'iPhone 5s', 'Apple', 'The iPhone 5s may look a lot like its predecessor. But with a faster new processor, a fingerprint sensor, and an improved camera flash, it is a serious upgrade.', '2014-11-10 06:04:22', NULL),
(2, 'Nexus 5', 'Google', 'Running the latest version of Android, the Nexus 5 really shows off the best aspects of Googles mobile OS. There are few reasons not to pick the Nexus 5 as your next Android phone.', '2014-11-10 06:04:22', NULL),
(3, 'One', 'HTC', 'With its stellar design, great camera, and hardy processor, the HTC One is the phone to beat.', '2014-11-10 06:04:22', NULL),
(4, 'Galaxy S4', 'Samsung', 'The Samsung Galaxy S4 is a stellar Android phone held back by boring design and half-baked features.', '2014-11-10 06:04:22', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fecNacimiento` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `numTarjeta` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `tipoMoneda` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `saldo` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido1`, `apellido2`, `cedula`, `fecNacimiento`, `telefono`, `direccion`, `contrasenia`, `numTarjeta`, `pin`, `tipoMoneda`, `fechaVencimiento`, `saldo`) VALUES
(1, 'Rafa', 'Umaña', 'Cascante', '11492037767', '09/11/2014', '24100266', 'Acosta', '1234', 11111111, 1234, 'colon', '2014-11-10', 12000),
(2, 'YUO', 'QET', 'WERS', '2323', '09/11/2014', '23450002', 'Turrujal', '1234', 22222222, 4321, 'dolar', '2014-11-11', 89.8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
