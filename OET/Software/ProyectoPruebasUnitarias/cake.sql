-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2015 at 05:23 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE IF NOT EXISTS `data_types` (
`id` int(10) unsigned NOT NULL,
  `data_type` int(11) DEFAULT NULL,
  `description` varchar(2550) COLLATE utf8_spanish_ci DEFAULT NULL,
  `temporality` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `data_type`, `description`, `temporality`) VALUES
(1, 3, 'Maximo', 'Mucha');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE IF NOT EXISTS `features` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sensor_id` int(11) DEFAULT NULL,
  `ID_FEATURE` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `sensor_id`, `ID_FEATURE`) VALUES
(1, 'Temperatura', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `manualdatalogs`
--

CREATE TABLE IF NOT EXISTS `manualdatalogs` (
`id` int(10) unsigned NOT NULL,
  `recolection_date` date DEFAULT NULL,
  `station_id` int(11) DEFAULT NULL,
  `temp` int(11) DEFAULT NULL,
  `mintemp` int(11) DEFAULT NULL,
  `maxtemp` int(11) NOT NULL,
  `relative_humidity` int(11) DEFAULT NULL,
  `barometric_pressure` int(11) DEFAULT NULL,
  `rainfall` int(11) DEFAULT NULL,
  `recolector` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comments` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ID_MANUALDATALOGS` int(11) DEFAULT NULL,
  `insertion_date` date DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manualdatalogs`
--

INSERT INTO `manualdatalogs` (`id`, `recolection_date`, `station_id`, `temp`, `mintemp`, `maxtemp`, `relative_humidity`, `barometric_pressure`, `rainfall`, `recolector`, `comments`, `ID_MANUALDATALOGS`, `insertion_date`) VALUES
(1, '2015-05-25', 1, 5, 5, 5, 10, 50, 25, 'juan', 'bien', 12, '2015-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `sensors`
--

CREATE TABLE IF NOT EXISTS `sensors` (
`id` int(10) unsigned NOT NULL,
  `serial` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `type_` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `model_` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `installation_date` date DEFAULT NULL,
  `removal_date` date DEFAULT NULL,
  `calibration_date` date DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `description` varchar(2550) COLLATE utf8_spanish_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `coordinate_x` float DEFAULT NULL,
  `coordinate_y` int(11) DEFAULT NULL,
  `station_id` int(11) DEFAULT NULL,
  `ID_SENSOR` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sensors`
--

INSERT INTO `sensors` (`id`, `serial`, `price`, `type_`, `model_`, `installation_date`, `removal_date`, `calibration_date`, `brand`, `description`, `provider`, `coordinate_x`, `coordinate_y`, `station_id`, `ID_SENSOR`) VALUES
(1, 'rj45', 8978, 'Temperatura', 'M-SRT', '2015-05-12', '2015-05-31', '2015-05-29', 'campbell', 'campbell', 'campbell case', NULL, NULL, NULL, 23),
(3, 'Rafa500', 123456, 'humedad', 'M-SRTHH', '2015-05-25', '2015-05-25', '2015-05-25', 'campbell', 'campbell', 'campbell case', NULL, NULL, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE IF NOT EXISTS `stations` (
`id` int(10) unsigned NOT NULL,
  `station` int(11) DEFAULT NULL,
  `description` varchar(2550) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `station`, `description`) VALUES
(1, 1, 'Palo Verde');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manualdatalogs`
--
ALTER TABLE `manualdatalogs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensors`
--
ALTER TABLE `sensors`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `manualdatalogs`
--
ALTER TABLE `manualdatalogs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sensors`
--
ALTER TABLE `sensors`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
