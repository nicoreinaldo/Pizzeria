-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-11-2017 a las 21:50:37
-- Versión del servidor: 5.5.54-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pizzaok`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

CREATE TABLE IF NOT EXISTS `Cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Cliente`
--

INSERT INTO `Cliente` (`idCliente`, `nombre`, `direccion`) VALUES
(1, 'Julian', 'adasd845');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EstadoPedido`
--

CREATE TABLE IF NOT EXISTS `EstadoPedido` (
  `idEstadoPedido` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idEstadoPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedido`
--

CREATE TABLE IF NOT EXISTS `Pedido` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `idEstadoPedido` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `idCliente_idx` (`idCliente`),
  KEY `idEstadoPedido_idx` (`idEstadoPedido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Pedido`
--

INSERT INTO `Pedido` (`idPedido`, `idCliente`, `idEstadoPedido`, `fecha`) VALUES
(1, NULL, NULL, '2017-11-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pizza`
--

CREATE TABLE IF NOT EXISTS `Pizza` (
  `idPizza` int(11) NOT NULL AUTO_INCREMENT,
  `idTamanoPizza` int(11) DEFAULT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` varchar(45) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`idPizza`),
  KEY `idTamanoPizza_idx` (`idTamanoPizza`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Pizza`
--

INSERT INTO `Pizza` (`idPizza`, `idTamanoPizza`, `nombre`, `precio`, `descripcion`) VALUES
(1, 1, 'Muza', '45', 'asd'),
(2, 1, 'Muza2', '99', 'Muza 22222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PizzaPedido`
--

CREATE TABLE IF NOT EXISTS `PizzaPedido` (
  `idPizzaPedido` int(11) NOT NULL AUTO_INCREMENT,
  `idPizza` int(11) DEFAULT NULL,
  `idPedido` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPizzaPedido`),
  KEY `idPizza_idx` (`idPizza`),
  KEY `idPedido_idx` (`idPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TamanoPizza`
--

CREATE TABLE IF NOT EXISTS `TamanoPizza` (
  `idTamanoPizza` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `cantPorciones` int(3) NOT NULL,
  PRIMARY KEY (`idTamanoPizza`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `TamanoPizza`
--

INSERT INTO `TamanoPizza` (`idTamanoPizza`, `nombre`, `cantPorciones`) VALUES
(1, 'grande', 8);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Pedido`
--
ALTER TABLE `Pedido`
  ADD CONSTRAINT `idCliente` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idEstadoPedido` FOREIGN KEY (`idEstadoPedido`) REFERENCES `EstadoPedido` (`idEstadoPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Pizza`
--
ALTER TABLE `Pizza`
  ADD CONSTRAINT `idTamanoPizza` FOREIGN KEY (`idTamanoPizza`) REFERENCES `TamanoPizza` (`idTamanoPizza`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `PizzaPedido`
--
ALTER TABLE `PizzaPedido`
  ADD CONSTRAINT `idPedido` FOREIGN KEY (`idPedido`) REFERENCES `Pedido` (`idPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idPizza` FOREIGN KEY (`idPizza`) REFERENCES `Pizza` (`idPizza`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
