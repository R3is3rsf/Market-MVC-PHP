-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2023 a las 16:22:30
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Consolas'),
(2, 'Laptops'),
(3, 'PC Desktop'),
(4, 'Accesories'),
(5, 'Software'),
(6, 'TV'),
(7, 'Roku');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `line_orders`
--

CREATE TABLE `line_orders` (
  `id` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `units` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `province` text NOT NULL,
  `location` text NOT NULL,
  `address` text NOT NULL,
  `totalprice` float(20,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `hour` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `stock` int(255) NOT NULL,
  `offter` int(2) DEFAULT NULL,
  `date` date NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `stock`, `offter`, `date`, `image`) VALUES
(1, 1, 'PS3', 'Consola de video juegos de Play Station', 250.00, 100, 1, '2023-04-04', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` text NOT NULL,
  `rol` int(2) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `rol`, `image`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com', 'password', 1, NULL),
(2, 'Roberto', 'Perez', 'robertoperez@gmail.com', 'password', 2, NULL),
(3, 'Jose', 'Cuevas', 'jocu@gmail.com', '$2y$04$PZaVgIqAhwzQluct08GuO.VhvVx8wo2ZDD5oOw2ruvIxnYvmYAlGO', 2, NULL),
(4, 'Jey', 'Zubi', 'jey@gmail.com', '$2y$04$9jwRfgcGAo.n2ou571MGa.ZO0ZbXJAjyExzf/7rsS1lCOmQsERJj6', 2, NULL),
(5, 'Rojo', 'Pecu', 'rcu@hotmail.com', '$2y$04$IVMwgcEiC/Z.6WjCIRSANe2r5gvjGSt/kkk0FRfTBglq0U/izm59G', 2, NULL),
(6, 'Another', 'Register', 'test@outlook.es', '$2y$04$.SczlndeMvtOQaONhlBhP.cDbo7dZWVxNv.0XVDSddvEm1VFRslcO', 2, NULL),
(7, 'Another', 'Register', 'other@gmail.com', '$2y$04$iWhtl2xiS9RiwxsL7nc9O.2rlp9LMGasaQVkAbRs/0wSAffFCh3Gi', 2, NULL),
(8, 'Pedro', 'Gonzales', 'Pego@gmail.com', '$2y$04$Mckcwgspfrv2dZYP6b14/OXkwSKn6y.kGUqk65imEO5ZbLVftQSC2', 2, NULL),
(9, '', 'dsdsds', 'rcddu@hotmail.com', '$2y$04$PZyodG7yqjfntCtB9sZsB.qJpAhSH43rtYprfTioWk2UlaSnukO/C', 2, NULL),
(10, '444', 'Register', 'jocu4@gmail.com', '$2y$04$.P9X8q0ddYftudOeFPJgFecmqHQTBUBzHucjT8d2tr4Ki.IsN08h.', 2, NULL),
(11, 'Roberto', 'Perez', 'robertoperez297@gmail.com', '$2y$04$wu6eL1C/I8Il5d2Dq5ts5eDXRQFAcDaq14ONxiAGnySGh6ZR/f2WW', 1, NULL),
(12, 'Jeruddy', 'Zubiria', 'ruddy_1589@gmail.com', '$2y$04$wu8sWX/bQ0i5a8gEgyjVierKdmvDYb5R.1D1JhHfi7nRuJF1O/1mm', 2, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `line_orders`
--
ALTER TABLE `line_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_id` (`order_id`),
  ADD KEY `fk_product_id` (`product_id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pk_user_id` (`user_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `line_orders`
--
ALTER TABLE `line_orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `line_orders`
--
ALTER TABLE `line_orders`
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `pk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
