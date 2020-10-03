-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql5016.site4now.net
-- Tiempo de generaciÃ³n: 03-10-2020 a las 10:52:22
-- VersiÃ³n del servidor: 5.6.26-log
-- VersiÃ³n de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_a68046_proyec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_pc` int(11) NOT NULL,
  `procesador` varchar(40) DEFAULT NULL,
  `ram` varchar(40) DEFAULT NULL,
  `disco_duro` varchar(40) DEFAULT NULL,
  `teclado` varchar(40) DEFAULT NULL,
  `mouse` varchar(40) DEFAULT NULL,
  `pantalla` varchar(40) DEFAULT NULL,
  `observacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparacion`
--

CREATE TABLE `reparacion` (
  `id_repa` int(11) NOT NULL,
  `id_reporte` int(11) DEFAULT NULL,
  `observacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reporte` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_pc` int(11) DEFAULT NULL,
  `id_repa` int(11) DEFAULT NULL,
  `fecha_reporte` date DEFAULT NULL,
  `observacion` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `tipo_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `password`, `email`, `tipo_usuario`) VALUES
(34, 'ju al', '1006210763', 'info@compubuga.edu.co', 1),
(123, 'carlos ramiro', '12345', 'kelemodda-8267@yopmail.com', 0),
(10062, 'carlos ramiro', '12345', 'kelemodda-8267@yopmail.com', 2),
(123444, 'pepe ramiro', '234344', 'kelemodda-8267@yopmail.com', 2),
(1006462, 'perez', '1234568', 'juan.alegrias.22@gmail.com', 0),
(1006210763, 'h l', '123456', 'kelemodda-8267@yopmail.com', 2),
(1006462304, 'juan', '123456789', 'juan.alegrias.22@gmail.com', 0),
(2147483647, 'jun reboyedo', '123456', 'masternx777@homail.com', 0);

--
-- Ãndices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_pc`);

--
-- Indices de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD PRIMARY KEY (`id_repa`),
  ADD KEY `cod_reportes` (`id_reporte`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reporte`),
  ADD KEY `cod_usuario` (`id_usuario`),
  ADD KEY `cod_reparacion` (`id_repa`),
  ADD KEY `cod_pc` (`id_pc`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_pc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  MODIFY `id_repa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD CONSTRAINT `reparacion_ibfk_1` FOREIGN KEY (`id_reporte`) REFERENCES `reportes` (`id_reporte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_ibfk_2` FOREIGN KEY (`id_repa`) REFERENCES `reparacion` (`id_repa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_ibfk_3` FOREIGN KEY (`id_pc`) REFERENCES `equipos` (`id_pc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
