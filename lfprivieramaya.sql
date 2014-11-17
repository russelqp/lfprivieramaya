-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2010 a las 18:09:53
-- Versión del servidor: 5.1.36
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lfprivieramaya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_semanal`
--

CREATE TABLE IF NOT EXISTS `imagen_semanal` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `thumb` varchar(30) NOT NULL,
  `detalles` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `imagen_semanal`
--

INSERT INTO `imagen_semanal` (`id`, `titulo`, `imagen`, `thumb`, `detalles`) VALUES
(1, 'Chilena en el partido vs Suecia', 'chilena.jpg', 'chilena.jpg', 'Una chilena, al minuto 12 del primer tercio del encuentro vs suecia, del jugador Pablo Escobar, desa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `cuerpo` longtext NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `thumb` varchar(30) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `resumen` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `subtitulo`, `cuerpo`, `imagen`, `thumb`, `autor`, `resumen`) VALUES
(1, 'Atractivo en la cancha', 'Las chicas porristas apoyando el evento de inaguración.', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam, justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam, justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti.</p> ', 'porristas01.jpg', 'porristas01.jpg', 'Admin', '<p>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam, justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam ante</p>');
