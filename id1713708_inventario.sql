-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2017 at 12:55 AM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1713708_inventario`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `vista_icono` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `vista_icono`, `fecha`) VALUES
(15, 'Pelotas', 'icon-dribbble', '2017-05-27 21:51:31'),
(16, 'Belleza', 'icon-woman', '2017-05-27 21:55:05'),
(17, 'Computadores ', 'icon-display', '2017-05-28 04:25:19'),
(18, 'Celulares', 'icon-mobile', '2017-05-28 04:30:59'),
(19, 'Cocina', 'icon-mug', '2017-05-28 19:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `facturas`
--

CREATE TABLE `facturas` (
  `id` int(11) NOT NULL,
  `valor_total` int(11) NOT NULL,
  `cantidad_productos` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facturas`
--

INSERT INTO `facturas` (`id`, `valor_total`, `cantidad_productos`, `fecha_creacion`) VALUES
(245, 46000, 30, '2017-05-27 21:54:06'),
(246, 72000, 40, '2017-05-27 21:56:13'),
(247, 10000, 10, '2017-05-28 00:08:07'),
(248, 10000, 10, '2017-05-28 00:08:59'),
(249, 1000, 1, '2017-05-28 00:09:51'),
(250, 1000, 1, '2017-05-28 00:10:31'),
(251, 20000, 20, '2017-05-28 00:10:54'),
(252, 5000, 2, '2017-05-28 00:12:05'),
(253, 6000, 3, '2017-05-28 00:12:30'),
(254, 10000, 10, '2017-05-28 00:28:55'),
(255, 31000, 11, '2017-05-28 00:44:08'),
(256, 1000, 1, '2017-05-28 01:13:56'),
(257, 2000, 2, '2017-05-28 01:19:58'),
(258, 1000, 1, '2017-05-28 01:20:27'),
(259, 0, 0, '2017-05-28 02:14:36'),
(260, 0, 0, '2017-05-28 02:14:37'),
(261, 0, 0, '2017-05-28 02:14:39'),
(262, 10000, 5, '2017-05-28 02:21:20'),
(263, 1000, 1, '2017-05-28 02:27:32'),
(264, 5206000, 5, '2017-05-28 04:33:13'),
(265, 3000, 3, '2017-05-28 05:09:14'),
(266, 6000, 2, '2017-05-28 17:59:23'),
(267, 27000, 13, '2017-05-28 18:02:53'),
(268, 108000, 43, '2017-05-28 22:47:54'),
(269, 4000, 4, '2017-05-28 22:49:25'),
(270, 4000, 4, '2017-05-28 22:54:13'),
(271, 4000, 4, '2017-05-28 23:45:22'),
(272, 2000, 2, '2017-05-29 23:25:43'),
(273, 3000, 1, '2017-06-03 17:06:32'),
(274, 3000, 1, '2017-06-05 01:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `codigo` varchar(60) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad_kg` int(11) NOT NULL,
  `valor_compra` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `valor_por_mayor` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `notificacion` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo`, `nombre`, `cantidad`, `unidad_kg`, `valor_compra`, `valor`, `valor_por_mayor`, `id_categoria`, `notificacion`, `fecha_creacion`) VALUES
(30, 'uy756t', 'Pelotas lisas', 0, 1, 650, 1000, 800, 15, 10, '2017-05-30 00:47:51'),
(31, 'hn6743', 'Pelotas Beach', 99, 1, 2500, 3000, 2800, 15, 20, '2017-06-05 01:28:16'),
(32, 'hhfgb55', 'Cepillo ', 19, 1, 0, 2000, 1800, 16, 10, '2017-05-28 22:47:54'),
(33, 'c5619vb', 'mac book pro 13', 9, 1, 0, 2300000, 2200000, 17, 2, '2017-05-28 04:33:13'),
(34, 'mcurh67', 'mac book pro 15', 10, 1, 0, 3200000, 3100000, 17, 2, '2017-05-28 04:28:18'),
(35, 'i6sldpp', 'Iphone s6', 19, 1, 0, 2900000, 2700000, 18, 4, '2017-05-28 04:33:13'),
(36, 'sjmng7645', 'Samsung s8 ', 100, 1, 2800000, 2900000, 2870000, 18, 10, '2017-05-28 17:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valor_unitario` int(11) NOT NULL,
  `valor_venta` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`id_factura`, `id_producto`, `cantidad`, `valor_unitario`, `valor_venta`, `fecha`) VALUES
(245, 30, 20, 0, 16000, '2017-05-27 21:54:06'),
(245, 31, 10, 0, 30000, '2017-05-27 21:54:06'),
(246, 32, 40, 0, 72000, '2017-05-27 21:56:13'),
(247, 30, 10, 0, 10000, '2017-05-28 00:08:07'),
(248, 30, 10, 0, 10000, '2017-05-28 00:08:59'),
(249, 30, 1, 0, 1000, '2017-05-28 00:09:51'),
(250, 30, 1, 0, 1000, '2017-05-28 00:10:31'),
(251, 30, 20, 0, 20000, '2017-05-28 00:10:54'),
(252, 31, 1, 0, 3000, '2017-05-28 00:12:05'),
(252, 32, 1, 0, 2000, '2017-05-28 00:12:05'),
(253, 30, 1, 0, 1000, '2017-05-28 00:12:30'),
(253, 31, 1, 0, 3000, '2017-05-28 00:12:30'),
(253, 32, 1, 0, 2000, '2017-05-28 00:12:30'),
(254, 30, 10, 0, 10000, '2017-05-28 00:28:56'),
(255, 30, 1, 0, 1000, '2017-05-28 00:44:09'),
(255, 31, 10, 0, 30000, '2017-05-28 00:44:09'),
(256, 30, 1, 0, 1000, '2017-05-28 01:13:56'),
(257, 30, 2, 0, 2000, '2017-05-28 01:19:58'),
(258, 30, 1, 0, 1000, '2017-05-28 01:20:27'),
(262, 32, 5, 0, 10000, '2017-05-28 02:21:20'),
(263, 30, 1, 0, 1000, '2017-05-28 02:27:32'),
(264, 32, 3, 0, 6000, '2017-05-28 04:33:13'),
(264, 33, 1, 0, 2300000, '2017-05-28 04:33:13'),
(264, 35, 1, 0, 2900000, '2017-05-28 04:33:13'),
(265, 30, 3, 0, 3000, '2017-05-28 05:09:14'),
(267, 31, 3, 3000, 9000, '2017-05-28 18:02:53'),
(267, 32, 10, 1800, 18000, '2017-05-28 18:02:53'),
(268, 31, 22, 3000, 66000, '2017-05-28 22:47:54'),
(268, 32, 21, 2000, 42000, '2017-05-28 22:47:54'),
(269, 30, 4, 1000, 4000, '2017-05-28 22:49:25'),
(270, 30, 4, 1000, 4000, '2017-05-28 22:54:13'),
(271, 30, 4, 1000, 4000, '2017-05-28 23:45:22'),
(272, 30, 2, 1000, 2000, '2017-05-29 23:25:43'),
(273, 31, 1, 3000, 3000, '2017-06-03 17:06:32'),
(274, 31, 1, 3000, 3000, '2017-06-05 01:28:16');

--
-- Triggers `ventas`
--
DELIMITER $$
CREATE TRIGGER `VENTAS_AI` BEFORE INSERT ON `ventas` FOR EACH ROW UPDATE productos SET cantidad = cantidad - NEW.cantidad WHERE id_producto = NEW.id_producto
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`);

--
-- Indexes for table `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fecha_creacion` (`fecha_creacion`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `productos_ibfk_1` (`id_categoria`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_factura`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;
--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
