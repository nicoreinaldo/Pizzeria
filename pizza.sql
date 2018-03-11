-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-03-2018 a las 12:48:52
-- Versión del servidor: 5.7.21-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

CREATE TABLE `Cliente` (
  `id_fos` int(11) DEFAULT NULL,
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Cliente`
--

INSERT INTO `Cliente` (`id_fos`, `idCliente`, `nombre`, `direccion`) VALUES
(2, 1, 'nicolas', 'psj stephenson 2851'),
(8, 30, 'Juli', 'puerredon 111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EstadoPedido`
--

CREATE TABLE `EstadoPedido` (
  `idEstadoPedido` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `EstadoPedido`
--

INSERT INTO `EstadoPedido` (`idEstadoPedido`, `nombre`) VALUES
(1, 'proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(2, 'nico', 'nico', 'nicoreinaldo@hotmail.com', 'nicoreinaldo@hotmail.com', 1, NULL, '$2y$13$r6u3fy0RnYj5Tned748BS..xyRO3jfMp4IkUzlqTyHL3lR590w3t6', '2018-03-10 18:08:12', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}'),
(8, 'Juli', 'juli', 'julian@hotmail.com', 'julian@hotmail.com', 1, NULL, '$2y$13$DIzxVEIv2BA33ClQrcITOeB9uxyMDFBQqqYmmSaTL0utpUY5LBH9u', '2018-03-10 19:39:32', NULL, NULL, 'a:0:{}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedido`
--

CREATE TABLE `Pedido` (
  `idPedido` int(11) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idEstadoPedido` int(11) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Pedido`
--

INSERT INTO `Pedido` (`idPedido`, `idCliente`, `idEstadoPedido`, `fecha`) VALUES
(1, 1, 1, '2018-02-25'),
(2, 2, 2, '2018-02-25'),
(3, 2, 2, '2018-02-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pizza`
--

CREATE TABLE `Pizza` (
  `idPizza` int(11) NOT NULL,
  `idTamanoPizza` int(11) DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Pizza`
--

INSERT INTO `Pizza` (`idPizza`, `idTamanoPizza`, `nombre`, `precio`, `descripcion`) VALUES
(1, NULL, 'Muzzarella', '110', 'Queso Muzarella');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PizzaPedido`
--

CREATE TABLE `PizzaPedido` (
  `idPizzaPedido` int(11) NOT NULL,
  `idPizza` int(11) DEFAULT NULL,
  `idPedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `PizzaPedido`
--

INSERT INTO `PizzaPedido` (`idPizzaPedido`, `idPizza`, `idPedido`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TamanoPizza`
--

CREATE TABLE `TamanoPizza` (
  `idTamanoPizza` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cantPorciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `TamanoPizza`
--

INSERT INTO `TamanoPizza` (`idTamanoPizza`, `nombre`, `cantPorciones`) VALUES
(1, 'grande', 12),
(2, 'media', 6),
(3, 'chica', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `UNIQ_3BA1A2B96D6D134` (`id_fos`);

--
-- Indices de la tabla `EstadoPedido`
--
ALTER TABLE `EstadoPedido`
  ADD PRIMARY KEY (`idEstadoPedido`);

--
-- Indices de la tabla `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Indices de la tabla `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `Pedido`
--
ALTER TABLE `Pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `idCliente_idx` (`idCliente`),
  ADD KEY `idEstadoPedido_idx` (`idEstadoPedido`);

--
-- Indices de la tabla `Pizza`
--
ALTER TABLE `Pizza`
  ADD PRIMARY KEY (`idPizza`),
  ADD KEY `idTamanoPizza_idx` (`idTamanoPizza`);

--
-- Indices de la tabla `PizzaPedido`
--
ALTER TABLE `PizzaPedido`
  ADD PRIMARY KEY (`idPizzaPedido`),
  ADD KEY `idPizza_idx` (`idPizza`),
  ADD KEY `idPedido_idx` (`idPedido`);

--
-- Indices de la tabla `TamanoPizza`
--
ALTER TABLE `TamanoPizza`
  ADD PRIMARY KEY (`idTamanoPizza`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `EstadoPedido`
--
ALTER TABLE `EstadoPedido`
  MODIFY `idEstadoPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `Pedido`
--
ALTER TABLE `Pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `Pizza`
--
ALTER TABLE `Pizza`
  MODIFY `idPizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `PizzaPedido`
--
ALTER TABLE `PizzaPedido`
  MODIFY `idPizzaPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `TamanoPizza`
--
ALTER TABLE `TamanoPizza`
  MODIFY `idTamanoPizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Cliente`
--
ALTER TABLE `Cliente`
  ADD CONSTRAINT `FK_3BA1A2B96D6D134` FOREIGN KEY (`id_fos`) REFERENCES `fos_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
