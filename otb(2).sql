-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2023 a las 07:19:47
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `otb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accion`
--

CREATE TABLE `accion` (
  `idAccion` int(11) NOT NULL,
  `tipoAccion` varchar(45) NOT NULL,
  `costo` varchar(45) NOT NULL,
  `nroMedidor` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `accion`
--

INSERT INTO `accion` (`idAccion`, `tipoAccion`, `costo`, `nroMedidor`, `estado`, `Usuario_idUsuario`) VALUES
(24, 'socio', '15', 30, 'activo', 34),
(25, 'socio', '15', 20, 'activo', 34),
(26, 'socio', '2', 22, 'activo', 47),
(27, 'socio', '12', 50, 'activo', 48);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `idHistorial` int(11) NOT NULL,
  `fechaReg` date NOT NULL,
  `observacion` varchar(45) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Pago_idPago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `idPago` int(11) NOT NULL,
  `tipoPago` varchar(45) NOT NULL,
  `monto` decimal(2,0) NOT NULL,
  `descuento` decimal(2,0) DEFAULT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `idUsuarioPago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`idPago`, `tipoPago`, `monto`, `descuento`, `fecha`, `descripcion`, `mes`, `year`, `estado`, `idUsuarioPago`) VALUES
(1, 'consumo', 18, 0, '2023-06-09', 'nn', '6', '2023', 'activo', 47),
(2, 'multa', 5, 0, '2023-06-09', 'nn', '6', '2023', 'activo', 47),
(3, 'consumo', 20, 0, '2023-06-09', 'nn', '6', '2023', 'activo', 48),
(4, 'consumo', 20, 0, '2023-06-09', 'nn', '6', '2023', 'activo', 48),
(5, 'consumo', 20, 0, '2023-06-09', 'nn', '6', '2023', 'activo', 48),
(6, 'consumo', 20, 0, '2023-06-09', 'nn', '6', '2023', 'activo', 48),
(7, 'consumo', 20, 0, '2023-06-09', 'nn', '6', '2023', 'activo', 48),
(8, 'consumo', 5, 0, '2023-06-09', 'nn', '6', '2023', 'activo', 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidoPat` varchar(45) NOT NULL,
  `apellidoMat` varchar(45) NOT NULL,
  `rol` varchar(25) NOT NULL,
  `celular` int(11) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `password`, `nombre`, `apellidoPat`, `apellidoMat`, `rol`, `celular`, `direccion`, `estado`) VALUES
(34, 'ocali', 'ocali', 'Oliver Omar', 'Calisalla', 'Ontiveros', 'socio', 77589636, 'hh', 'inactivo'),
(46, 'ocalera', 'ocalera', 'Oliver Alexis', 'Calera', 'Ontiveros', 'socio', 77589542, 'modificado', 'inactivo'),
(47, 'raulvera', '123', 'Raul', 'Vera', 'Portanda', 'socio', 77856955, 'nn', 'activo'),
(48, 'pcorrales', '123', 'Patricia', 'Corrales', 'Espinoza', 'socio', 77456863, 'nn', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accion`
--
ALTER TABLE `accion`
  ADD PRIMARY KEY (`idAccion`) USING BTREE,
  ADD KEY `fk_Accion_Usuario` (`Usuario_idUsuario`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`idHistorial`) USING BTREE,
  ADD KEY `fk_Historial_Usuario1` (`Usuario_idUsuario`),
  ADD KEY `fk_Historial_Pago1` (`Pago_idPago`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`idPago`),
  ADD KEY `FK_pago_usuario` (`idUsuarioPago`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accion`
--
ALTER TABLE `accion`
  MODIFY `idAccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `idPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `FK_pago_usuario` FOREIGN KEY (`idUsuarioPago`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
