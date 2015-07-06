-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2015 a las 06:39:34
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cake`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automaticdatalogs`
--

CREATE TABLE IF NOT EXISTS `automaticdatalogs` (
  `id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `recolection_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
  `id` int(11) NOT NULL,
  `data_type_id` int(11) NOT NULL,
  `csv_columns` int(11) NOT NULL,
  `habilitado` int(11) NOT NULL,
  `configuration_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `configs`
--

INSERT INTO `configs` (`id`, `data_type_id`, `csv_columns`, `habilitado`, `configuration_id`) VALUES
(1, 1, 4, 1, 1),
(2, 2, 5, 1, 1),
(3, 3, 6, 1, 1),
(4, 4, 7, 0, 1),
(5, 5, 8, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configurations`
--

CREATE TABLE IF NOT EXISTS `configurations` (
  `id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `configurations`
--

INSERT INTO `configurations` (`id`, `station_id`) VALUES
(1, 1),
(2, 2),
(3, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_types`
--

CREATE TABLE IF NOT EXISTS `data_types` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Sensor_id` int(11) NOT NULL,
  `Temporality` varchar(255) NOT NULL,
  `Id_Data_Type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `data_types`
--

INSERT INTO `data_types` (`Id`, `Name`, `Sensor_id`, `Temporality`, `Id_Data_Type`) VALUES
(1, 'Temp_C_Avg', 1, '', 12),
(2, 'Temp_C_Max', 1, '', 13),
(3, 'Temp_C_TMx', 1, '', 14),
(4, 'AirTemp_C_Min', 1, '', 15),
(5, 'AirTemp_C_TMn', 1, '', 16),
(6, 'RH_percent', 1, '', 17),
(7, 'Rain_mm_Tot', 21, '', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `features`
--

CREATE TABLE IF NOT EXISTS `features` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sensor_id` int(11) DEFAULT NULL,
  `ID_FEATURE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manualdatalogs`
--

CREATE TABLE IF NOT EXISTS `manualdatalogs` (
  `ID` int(10) unsigned NOT NULL,
  `RECOLECTION_DATE` date DEFAULT NULL,
  `STATION_ID` int(11) DEFAULT NULL,
  `TEMP` int(11) DEFAULT NULL,
  `MINTEMP` int(11) DEFAULT NULL,
  `MAXTEMP` int(11) DEFAULT NULL,
  `RELATIVE_HUMIDITY` int(11) DEFAULT NULL,
  `BAROMETRIC_PRESSURE` int(11) DEFAULT NULL,
  `RAINFALL` int(11) DEFAULT NULL,
  `RECOLECTOR` varchar(255) DEFAULT NULL,
  `COMMENTS` varchar(255) DEFAULT NULL,
  `ID_MANUALDATALOGS` int(11) DEFAULT NULL,
  `INSERTION_DATE` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `manualdatalogs`
--

INSERT INTO `manualdatalogs` (`ID`, `RECOLECTION_DATE`, `STATION_ID`, `TEMP`, `MINTEMP`, `MAXTEMP`, `RELATIVE_HUMIDITY`, `BAROMETRIC_PRESSURE`, `RAINFALL`, `RECOLECTOR`, `COMMENTS`, `ID_MANUALDATALOGS`, `INSERTION_DATE`) VALUES
(1, '2015-06-08', 8, 12, 10, 15, 14, 38, 34, 'Rafael', 'Mucha lluvia', 3, '2015-06-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sensors`
--

CREATE TABLE IF NOT EXISTS `sensors` (
  `id` int(10) unsigned NOT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `type_` varchar(255) DEFAULT NULL,
  `model_` varchar(255) DEFAULT NULL,
  `installation_date` date DEFAULT NULL,
  `removal_date` date DEFAULT NULL,
  `calibration_date` date DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `description` varchar(2550) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `coordinate_x` float DEFAULT NULL,
  `coordinate_y` int(11) DEFAULT NULL,
  `station_id` int(11) DEFAULT NULL,
  `ID_SENSOR` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sensors`
--

INSERT INTO `sensors` (`id`, `serial`, `price`, `type_`, `model_`, `installation_date`, `removal_date`, `calibration_date`, `brand`, `description`, `provider`, `coordinate_x`, `coordinate_y`, `station_id`, `ID_SENSOR`) VALUES
(1, 'Rafa500', 123456, 'hxbc', 'M-SRT', '2015-06-12', '2015-06-12', '2015-06-12', 'campbell', 'campbell', 'campbell case', NULL, NULL, 1, 1),
(21, 'SensorSRT', NULL, '', 'M-SRT', '2015-06-12', '2015-06-12', '2015-06-12', 'campbell', 'campbell', 'campbell case', NULL, NULL, 1, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stations`
--

CREATE TABLE IF NOT EXISTS `stations` (
  `id` int(10) unsigned NOT NULL,
  `station` int(11) DEFAULT NULL,
  `description` varchar(2550) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stations`
--

INSERT INTO `stations` (`id`, `station`, `description`) VALUES
(1, 2345, 'Palo Verde'),
(2, 2, 'Garita Laguna Palo Verde'),
(21, 2, 'Garita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valuesdatatypes`
--

CREATE TABLE IF NOT EXISTS `valuesdatatypes` (
  `Id` int(11) NOT NULL,
  `Data_type_Id` int(11) NOT NULL,
  `Automaticdatalog_id` int(11) NOT NULL,
  `Data_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `automaticdatalogs`
--
ALTER TABLE `automaticdatalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `manualdatalogs`
--
ALTER TABLE `manualdatalogs`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `valuesdatatypes`
--
ALTER TABLE `valuesdatatypes`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `automaticdatalogs`
--
ALTER TABLE `automaticdatalogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT de la tabla `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `data_types`
--
ALTER TABLE `data_types`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `manualdatalogs`
--
ALTER TABLE `manualdatalogs`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sensors`
--
ALTER TABLE `sensors`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `valuesdatatypes`
--
ALTER TABLE `valuesdatatypes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
