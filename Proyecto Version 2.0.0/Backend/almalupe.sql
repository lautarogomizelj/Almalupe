-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-04-2023 a las 04:13:19
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almalupe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_categoria`
--

CREATE TABLE `fotos_categoria` (
  `id` int(11) NOT NULL,
  `nombre_archivo` varchar(100) NOT NULL,
  `titulo_archivo` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre_archivo` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `precio` varchar(100) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  `destacado` int(10) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `descuento` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_archivo`, `titulo`, `precio`, `stock`, `destacado`, `categoria`, `descuento`) VALUES
(1, '3.jpg', 'Pantalon', '4500', '3', 1, 'Pantalones', 25),
(2, 'fotoNueva1.jpeg', 'Bluza ', '2500', '2', 1, 'Bluzas', 0),
(3, '1.jpeg', 'Remera \"Los Angeles\"', '2450', '1', 1, 'Remeras', 50),
(4, '4.jpg', 'fgh', '3434', '4', 1, 'sdfg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `password1` varchar(200) NOT NULL,
  `birth_date` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `rol_id` varchar(10) DEFAULT NULL,
  `fecha_reg` varchar(50) DEFAULT NULL,
  `ult_conexion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `username`, `password1`, `birth_date`, `sex`, `rol_id`, `fecha_reg`, `ult_conexion`) VALUES
(14, 'lautigomi@gmail.com', 'lauti', 'e7c266330b73ed9b525411d1236fad70', NULL, NULL, NULL, '05/04/2023 12:26:42', '05/04/2023 12:26:42'),
(15, NULL, 'admin', 'e00cf25ad42683b3df678c61f42c6bda', NULL, NULL, '777', NULL, '05/04/2023 15:56:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos_categoria`
--
ALTER TABLE `fotos_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
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
-- AUTO_INCREMENT de la tabla `fotos_categoria`
--
ALTER TABLE `fotos_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
