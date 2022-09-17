-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3305
-- Tiempo de generación: 17-09-2022 a las 10:33:53
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cafeteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`category_id`, `name_category`) VALUES
(12, 'BEBIDAS CALIENTES'),
(3, 'CAPPUCCINOS'),
(2, 'ESPRESSOS'),
(1, 'TINTOS'),
(11, 'TINTOS PERICOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_reference` varchar(200) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_weight` int(11) NOT NULL,
  `categories_fk_id` int(11) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_reference`, `product_price`, `product_weight`, `categories_fk_id`, `product_stock`, `product_create_date`) VALUES
(1, 'AMERICANO', 'cafe_001', 1300, 1, 1, 20, '2022-09-17 01:30:57'),
(2, 'DEL CAMPO', 'cafe_002', 1800, 1, 1, 23, '2022-09-17 01:31:29'),
(3, 'VIENESSE', 'cafe_003', 2000, 1, 1, 9, '2022-09-17 01:31:53'),
(4, 'NUESTRA TIERRA', 'cafe_004', 2500, 1, 1, 11, '2022-09-17 01:32:56'),
(5, 'CORTO', 'cafe_005', 3000, 1, 2, 2, '2022-09-17 01:33:25'),
(6, 'DOBLE', 'cafe_006', 5000, 1, 2, 17, '2022-09-17 01:33:54'),
(7, 'CHOCOLATE', 'cafe_007', 2500, 1, 12, 40, '2022-09-17 01:35:04'),
(8, 'TÉ EN LECHE', 'cafe_008', 2000, 1, 12, 25, '2022-09-17 01:35:39'),
(9, 'TÉ EN AGUA', 'cafe_009', 1500, 1, 12, 60, '2022-09-17 01:36:13'),
(10, 'SENCILLO', 'cafe_010', 6000, 2, 3, 0, '2022-09-17 01:37:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `sales_amount` int(11) NOT NULL,
  `sales_create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`sales_id`, `product_id`, `price`, `sales_amount`, `sales_create_date`) VALUES
(1, 5, 3000, 1, '2022-09-17 06:58:02'),
(2, 1, 1300, 10, '2022-09-17 07:16:52'),
(3, 3, 2000, 21, '2022-09-17 07:17:49'),
(4, 1, 1300, 10, '2022-09-17 07:18:35'),
(5, 5, 3000, 2, '2022-09-17 07:26:34'),
(6, 1, 1300, 10, '2022-09-17 07:31:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `name_category` (`name_category`) USING BTREE;

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `categories_fk_id` (`categories_fk_id`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categories_fk_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
