-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-05-2023 a las 07:34:24
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id20640104_salvandoalcanon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `idcontac` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mensaje` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`idcontac`, `nombre`, `email`, `mensaje`) VALUES
(1, 'Victor', 'victor.lopez@unach.mx', 'dddddddddddddddddddddddd'),
(2, 'Victor', 'victor.lopez@unach.mx', 'dddddddddddddddddddddddd'),
(3, 'samuel aguilar', 'sh9442283@gmail.com', 'hola'),
(4, 'Victor', 'victor.lopez@unach.mx', '11'),
(5, 'Beatriz', 'Beatriz_canche1211@outlook.com', 'Su pagina no funciona'),
(6, 'Cristian', 'Cristianadrian200711@gmail.com', 'Va mas o menos'),
(7, 'Victor2', 'ema@mail.com', 'Pruba'),
(8, 'samuel aguilar', 'sh9442283@gmail.com', 'jsaefhaiuoctheah'),
(9, 'Victor', 'ema@mail.com', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resul`
--

CREATE TABLE `resul` (
  `idresul` int(11) NOT NULL,
  `resultado` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resul`
--

INSERT INTO `resul` (`idresul`, `resultado`, `idusuario`) VALUES
(3, 5, 1),
(4, 2, 1),
(5, 5, 1),
(6, 6, 1),
(7, 0, 1),
(10, 8, 23),
(11, 8, 23),
(12, 8, 3),
(13, 2, 24),
(14, 6, 25),
(15, 7, 27),
(16, 0, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_usuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `contrasena`, `tipo_usuario`) VALUES
(1, 'Teba202323', 'teba.perez@email.com', '$2y$10$G1Tiv1P6sFjoomQO6VU.4uED6pxUtsuV4cX413amHAg066i7CmgrK', ''),
(2, 'Victorlopez123', 'victor.lopez68@unach.mx', '$2y$10$lsvE8kiL3woheCe/NSntpur1hlmw.46XJ4VE9cTmiTA9l8ZL1Wsua', ''),
(3, 'samuel.aguilar71@unach.mx', 'samuel.aguilar71@unach.mx', '$2y$10$rwEjPbSfwzyALI2RlzOZLusqaRBj68QB56g0UBio9HfaADJDHi7sG', 'admin'),
(4, 'hermilo.montoya84@unach.mx', 'hermilo.montoya84@unach.mx', '$2y$10$8Idf.r4hfNtJfBO8ea0qWu4fkjktPLlK9aR/PzAYOjcJufT5cWpd2', ''),
(5, 'victor.lopez68@unach.mx', 'victor.lopez68@unach.mx', '$2y$10$mbvkGoax0Y1Rwnfd7gU6hO/5hrdt8VuK10if8r7hs.4fqHDfdpiem', ''),
(6, 'rigoberto perez', 'prueba@gmail.com', '$2y$10$NK0W3oT3cmjCjTWNABUbs./PEzH51ZiJkbd22Z2IcNXhUHJUgf6J.', ''),
(7, 'prueba unach', 'prueba@gmail.com', '$2y$10$jojdE6Gepm65aGmGinXfoOqDXve4yfEa0C/KOO1vPIWURsqcHhbXu', ''),
(10, 'Thony_Ponny', 'mikeolivares27@gmail.com', '$2y$10$kVPwyCmxGk2EAmrvV3MxX.8PGDE8GAeoY0w1SE3T.ABlb8UsE22Ne', ''),
(21, 'Victor', 'victor.lopez@unach.mx', '$2y$10$XixS67eWzKeGKWvogtwreOsaxAis1vIs.e3ep8GLJWK9a04is6JsW', 'admin'),
(22, 'Lucho', 'victor.lopez@unach.mx', '$2y$10$Jkjc4cr3oP95gtKnvhtQaOs5d0zw8p4BWxJcuAUn0Cl5EwnX4gP42', 'normal'),
(23, 'Checo', 'sergio.lara10@unach.mx', '$2y$10$Uo63yo8frfrZovn.JQDGS.HxCgZc14QkPfRHh16H7B.pzwUtFcava', 'normal'),
(24, 'samuel', 'sam.aguilar@gmail.com', '$2y$10$GAcqfCp7n8uPed3VvqImCOb4/.Q.FxIREZskAlRwYMVJ6TwiT41si', 'admin'),
(25, 'Thony01', 'olivares-zavala@live.com', '$2y$10$SCHup9yuUWiYIJvGOk2Nxu1q05nkj8oV9pKkRl86ahWDLUiRgyJOm', 'admin'),
(26, 'rigoberto', 'prueba@gmail.com', '$2y$10$KbTC3k9yjOr.pXV0VDzuDeW.f9thFHOWycrXtySNrATvbkRTLczrW', 'normal'),
(27, 'Beatriz', 'Beatriz_canche1211@outlook.com', '$2y$10$1KQmdzb/SxiBJFtbSXuQBeGj8lj1kcx7GP8llh7shv/wySK.lFBam', 'normal'),
(28, 'Abad', 'damian.gomez12@unach.mx', '$2y$10$s.zTaIML5rAQbyvmcKBFJOdh0LDEaj7GtWNPo8YueUHycoLusVcQ.', 'normal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`idcontac`);

--
-- Indices de la tabla `resul`
--
ALTER TABLE `resul`
  ADD PRIMARY KEY (`idresul`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idcontac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `resul`
--
ALTER TABLE `resul`
  MODIFY `idresul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `resul`
--
ALTER TABLE `resul`
  ADD CONSTRAINT `resul_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
