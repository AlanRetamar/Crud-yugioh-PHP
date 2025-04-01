-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-10-2023 a las 00:42:21
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpappweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `administrator`
--

INSERT INTO `administrator` (`id`, `usuario`, `pass`) VALUES
(1, 'alan1234', 'alan99');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `usuario`, `clave`, `nombre`, `apellido`, `mail`) VALUES
(1, '42113612', '42113612', 'Alan', 'Retamar', 'alan99@gmail.com'),
(2, '355666', '355666', 'Franco', 'Retamar', 'fran@99gmail.com'),
(3, '456777', '456777', 'Gabriel', 'Barraza', 'gabi@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `stock` int NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `imagen` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `descripcion`, `stock`, `precio`, `imagen`) VALUES
(1, 'mago oscuro', 15, '1500', 0x6d61676f6f736375726f2e706e67),
(2, 'dragon de ojos azules', 12, '2000', 0x647261676f6e626c616e636f64656f6a6f73617a756c65732e706e67),
(3, 'dragon negro de ojos rojos', 20, '1400', 0x647261676f6e6e6567726f64656f6a6f73726f6a6f732e706e67),
(4, 'exodia', 23, '1000', 0x65786f6469612e706e67),
(5, 'maga oscura', 10, '500', 0x6d6167616f73637572612e706e67),
(6, 'neo dragon de ojos azules', 4, '3000', 0x6e656f647261676f6e64656f6a6f73617a756c65732e706e67),
(7, 'paladin oscuro', 5, '1500', 0x70616c6164696e6f736375726f2e706e67),
(8, 'slifer el dragon del cielo', 2, '2000', 0x736c69666572656c647261676f6e64656c6369656c6f2e706e67),
(9, 'dragon alado de ra', 10, '3000', 0x647261676f6e616c61646f646572612e706e67),
(10, 'obelisco el atormentador', 4, '3000', 0x6f62656c6973636f656c61746f726d656e7461646f722e706e67);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
