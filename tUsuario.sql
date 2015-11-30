-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2015 a las 04:50:31
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tUsuario`
--

CREATE TABLE `tusuario` (
  `codUsuario` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` text COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Pais` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Calle` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Distrito` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Provincia` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Ciudad` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `CodPost` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tUsuario`
--

INSERT INTO `tUsuario` (`codUsuario`, `Pass`, `Nombre`, `Telefono`, `Pais`, `Calle`, `Distrito`, `Provincia`, `Ciudad`, `CodPost`, `email`) VALUES
('erick', '$2y$10$vaqo7L4fWW12CFnQ59I52udufS.VpA6utFbgtGttLLbUudo1.QFsi', 'Erick Bedoya Baca', 5447589, 'Peru', 'Naranjal', 'Rimac', 'Lima', 'Lima', '12', 'erick@gmail.com'),
('hans', '$2y$10$HGnpuwoxuRh.uhIVm8.cKOzF9HBp4nQGd930h6g89UeEC2ciybyg6', 'Hans hidalgo alta', 254566255, 'Peru', 'a', 'Rimac', 'Lima', 'a', 'a', 'hansh@gmail.com'),
('hans32', '$2y$10$FywmfoH6eaS8wZtDTyJhguIgv9EtxVhD/iJRCh7Hk79t2ySxheY1q', 'Hans Marco Fernadez', 1234552, 'Peru', 's', 'Rimac', 'Huaral', '21', 's', 'fernanda@gmail.com'),
('luis', '$2y$10$FKn5KE1dSEwTfmO21WllnuYD/yce89G9hwGTShv/1j3mGuWUj8ww.', 'Luis Belaunde Terry', 2334455, 'Peru', 'as', 'Rimac', 'Huaral', '21', 'a', 'ana@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tUsuario`
--
ALTER TABLE `tUsuario`
  ADD PRIMARY KEY (`codUsuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
