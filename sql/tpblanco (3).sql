-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2022 a las 04:50:00
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
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nusuario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Comentario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nusuario`, `Comentario`) VALUES
(3, 'BLANQUITO', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAA'),
(4, 'BLANQUITO', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAA'),
(5, 'BLANQUITO', 'Esta opinión ahora es Ilegal, en este momento un camión policial será enviado a su domicilio'),
(6, 'BLANQUITO', 'Tu opinión ahora es Ilegal, en este momento un camión policial será enviado a su domicilio'),
(7, 'BLANQUITO', 'Tu opinión ahora es Ilegal, en este momento un camión policial será enviado a su domicilio'),
(8, 'Lucardini ', 'Esta opinión ahora es Ilegal, en este momento un camión policial será enviado a su domicilio');

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
(19, 28, 7779562, 'Usable'),
(20, 29, 5020512, 'Usable'),
(21, 30, 221162, 'Usable');

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
(28, 'blanquito', 'bien', 123193287, 89, '$2y$10$mP1/JFW0WCpJfglpD3bNLuPqSQ14aEXq..toGgcQC5MInRHPXcZh6', 'BLANQUITO', 'kashdajkshd@gmail.com', 'Campecino'),
(29, 'Pablin ', 'Ficcelin', 921873163, 19, '$2y$10$h1WURG7Yasp7qjwZ6LdBFuPv6OlCrM61bPCZVDQ4eZ528Rrqbksy2', 'pablin ', 'pablo@gmail.com', 'Campecino'),
(30, 'Ibai', 'Lucardi-Fierro', 44895273, 26, '$2y$10$g.N6ke5APol.xkye4csFZul3daDTVYng77TabdwpYxkacS6f.tfJS', 'IBAI ', 'ibaigoadd@gmail.com', 'Campecino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
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
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
