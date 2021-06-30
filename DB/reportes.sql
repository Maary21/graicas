-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-03-2020 a las 11:22:25
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `reportes`
--
CREATE DATABASE `reportes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `reportes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empleado` varchar(100) NOT NULL,
  `venta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `empleado`, `venta`, `fecha`) VALUES
(1, 'maria', 2500, '2020-03-19'),
(2, 'pedro', 5600, '2019-07-19'),
(3, 'juan', 5600, '2019-07-19'),
(4, 'lorena', 1200, '2018-03-25'),
(5, 'jose', 25800, '2020-03-13'),
(6, 'maria', 30000, '2019-03-11'),
(7, 'jose', 35000, '2020-05-11'),
(8, 'lorena', 5000, '2018-05-11'),
(9, 'maria', 15000, '2018-10-04'),
(10, 'jose', 25000, '2018-03-11'),
(11, 'juan', 5000, '2018-07-11'),
(12, 'pedro', 1000, '2018-07-11'),
(13, 'lorena', 45000, '2019-07-11'),
(14, 'jose', 4500, '2019-07-11'),
(15, 'lorena', 15000, '2020-07-11'),
(16, 'pedro', 25500, '2020-07-11'),
(17, 'juan', 475500, '2020-07-11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
