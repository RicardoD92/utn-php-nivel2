-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2022 a las 03:25:17
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `duchi_ricardo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `heroes`
--

CREATE TABLE `heroes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `clase` varchar(40) NOT NULL,
  `imagen` varchar(40) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `heroes`
--

INSERT INTO `heroes` (`id`, `nombre`, `clase`, `imagen`, `descripcion`) VALUES
(1, 'OGRE MAGI', 'INTELIGENCIA', 'ogre.jpg', 'Con una probabilidad de multiplicar el impacto de cada hechizo que lanza, un poco de suerte es todo lo que Ogre Magi necesita para convertir a sus enemigos en cenizas, o incrementar el poder de sus aliados. Por supuesto, es difícil confiar en la suerte...'),
(2, 'AXE', 'fuerza', 'axe.jpg', 'Uno tras otro, Axe extermina a sus enemigos. Al frente de su equipo, los encierra en la batalla y luego contrarresta sus ataques con un mortal giro de su arma. Golpeando con su hoja selectiva a través de un enemigo debilitado, siempre va a la carga.'),
(4, 'ABADDON', 'FUERZA', 'abaddon.jpg', 'Capaz de transformar los ataques enemigos en una cura para él mismo, Abaddon puede sobrevivir casi cualquier enfrentamiento. Con su habilidad para poner escudos sobre sus aliados y lanzar la espiral de doble filo a aliados o enemigos, siempre está listo para marchar a la batalla.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
