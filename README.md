-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 12:35:08
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cervezas_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cervezas`
--

CREATE TABLE `cervezas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `graduacion_alcoholica` int(11) NOT NULL CHECK (`graduacion_alcoholica` > 0),
  `pais` varchar(60) NOT NULL,
  `precio` int(11) NOT NULL CHECK (`precio` > 0),
  `ruta_imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cervezas`
--

INSERT INTO `cervezas` (`id`, `nombre`, `tipo`, `graduacion_alcoholica`, `pais`, `precio`, `ruta_imagen`) VALUES
(22, 'Ambar', '', 6, 'España', 2, 'ambar.jpg'),
(23, 'CIBELES', '', 6, 'España', 4, 'cibele.jpg'),
(24, 'LADRON DE MANZANAS', '', 4, 'España', 3, 'ladron.jpg'),
(27, 'CORONA', 'Rubia', 2, 'España', 2, '../img/corona.png'),
(28, 'ÁGUILA', '', 5, 'España', 3, 'aguilas.png'),
(30, 'AMSTEL', '', 5, 'España', 2, 'amstel.jpg'),
(31, 'MAHOU', '', 5, 'España', 3, 'mahous.png'),
(32, 'SAN MIGUEL', '', 4, 'España', 3, 'miguel.png'),
(33, 'ESTRELLA GALICIA', 'De trigo', 7, 'España', 2, '../img/estrella.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cervezas`
--
ALTER TABLE `cervezas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cervezas`
--
ALTER TABLE `cervezas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
