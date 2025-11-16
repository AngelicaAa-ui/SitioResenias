-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2025 a las 00:12:32
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `contrasena`) VALUES
(1, 'Camila', '', 'roblesCam@gmail.com', '$2y$10$NRAao9vmebZG6C.7iUhaL..kzzYCshSQ1RvkWCGr8F4sm9wySxiUq'),
(2, 'juan', '', 'juanOcho@gmail.com', '$2y$10$hH5IWVPoMBJUDFE4OTC9uuumsKLvm3wZd5KQH2FGIxqKJrQitc0/2'),
(3, 'Angelica', 'Agudelo', 'amagudelo@gmail.com', '$2y$10$5JQx8pqOrG84i0UCdPTFi.7TciIKyF4ItESjudM0CDAqeEuffZwZ.'),
(4, 'Luna', 'García', 'luna@gmail.com', '$2y$10$bs/n7uxJOjx0Zdx.eqtNreCIh6uay5zA3PeLBv.vAvTtmB9Q0Kkke'),
(5, 'Nora', 'Lopez', 'nora@gmail.com', '$2y$10$RGVJD70.Uz.gndKPb72v7uSqLehtJb1TD/ARIkY5pRlulf./h6tcO'),
(24, 'Mary', 'Suares', 'maryy@gmail.com', '$2y$10$tQCuuDBXDM2sDNfjfacIKOPNNIntS/NDk118PFfhywhdQmGpztnbq');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
