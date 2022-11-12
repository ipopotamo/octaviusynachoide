-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2022 a las 03:41:33
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpblanco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion`
--

CREATE TABLE `funcion` (
  `id` int(11) NOT NULL,
  `idr` int(11) NOT NULL,
  `funcion` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `descf` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `idt` int(11) NOT NULL,
  `rol` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `idt`, `rol`) VALUES
(1, 1, 'ADMIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `idu` int(11) NOT NULL,
  `tag` int(11) NOT NULL,
  `estado` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `idu`, `tag`, `estado`) VALUES
(1, 0, 2147483647, '0'),
(2, 0, 2147483647, 'Usable'),
(3, 15, 2147483647, 'Usable'),
(4, 16, 2147483647, 'Usable'),
(5, 17, 2147483647, 'Usable'),
(7, 19, 2147483647, 'Usable');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `contrasena` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `nusuario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `dni`, `edad`, `contrasena`, `nusuario`, `email`, `estado`) VALUES
(1, 'ignacio', 'Barbieri', 33648400, 28, 'poroelegante', 'ipopotamo', 'kekepipo@gmail.com', 'admin'),
(2, 'Octavio', 'Lucardi-Fierro', 83810239, 9000, '$2y$10$79jKkvzqmDIxCjGKcyXPSOVRrZvFYwLlV8FQM1g7VK2wkPqdklW2i', 'Lucardini ', 'lucardini@gmail.com', 'admin'),
(8, 'Ibai', 'Llanos', 321231131, 34, '$2y$10$NT45oTSbMLIlQz023X1Ri.hDW5Cj5yArLWWmYR53Jzu2mpyEiUHqu', 'IBAIGOD ', 'ibaigod@gmail.com', 'Campecino'),
(9, 'Ibai', 'Llanos', 321231131, 34, '$2y$10$P55KcI4Y7g8ijSUipx1ure8qszUmJm/ax/9P8xEi8BOP9SyqtTeB.', 'IBAIGOD ', 'ibaigod@gmail.com', 'Campecino'),
(14, 'Kratos', 'De Esparta', 1, 1000, '$2y$10$eTYxiCqWpoZNrLMoz.kH1eBj4/7sE15xE.bR3BAUSQCPIhS3iXuUW', 'Boy ', 'kratos_laloquitadelFornite@gmail.com', 'Campecino'),
(17, 'maria', 'Llanos', 44895273, 28, '$2y$10$JtTuixcmA6DS.eGve3wvn.qV.B.sv3B6qCLz9XiWjCG1leNBQ3Ham', 'kkck@gmail.com ', 'octaviolf2016@gmail.com', 'Campecino'),
(19, 'Dios', 'del universo', 0, 1, '$2y$10$0ggmAl0vR/KlUlXJagBqjuHSRDcR7EGyB2TY6e3rV8HVw5uosQV8e', 'yo ', 'Diosito@gmail.com', 'Campecino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `funcion`
--
ALTER TABLE `funcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
