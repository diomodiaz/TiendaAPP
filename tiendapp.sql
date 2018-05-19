-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2018 a las 02:32:58
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `comentar` varchar(1000) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_posteo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `comentar`, `id_usuario`, `id_posteo`) VALUES
(1, 'Me gusta el lenguaje', 1, 4),
(16, 'Holaa', 2, 4),
(17, 'Excelente producto', 5, 5),
(18, 'Aaaaaaa', 1, 7),
(19, 'Esto es un comentario', 7, 4),
(20, 'PowerPoint', 1, 4),
(24, 'Jaja', 1, 8),
(25, 'Buena Imagen', 5, 6),
(26, 'Captura de pantalla', 1, 7),
(27, 'Esto es PowerPoint', 1, 8),
(28, 'Buen lenguaje', 2, 9),
(29, 'Informatica', 2, 10),
(30, 'Hoooolaaaa', 2, 10),
(31, 'Java es lo mejor', 7, 9),
(32, 'Me gusta Java', 7, 9),
(33, 'El futuro', 1, 10),
(34, 'Muy buena historia', 6, 11),
(35, 'Me gusta el logo', 6, 8),
(36, 'CSS3 Es buenisimo', 8, 12),
(37, 'Linux es lo mejor', 8, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `megusta`
--

CREATE TABLE `megusta` (
  `id_megusta` int(11) NOT NULL,
  `megusta` varchar(20) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_posteo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posteo`
--

CREATE TABLE `posteo` (
  `id_posteo` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `descripcion` varchar(70) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `archivo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posteo`
--

INSERT INTO `posteo` (`id_posteo`, `titulo`, `descripcion`, `id_usuario`, `archivo`) VALUES
(4, 'PHP', 'Lenguaje de ProgramaciÃ³n', 1, 'php.jpg'),
(5, 'Jabon', 'Asepxia, libre de granitos!', 2, 'jabon.jpeg'),
(6, 'df', 'gfd', 5, 'lorem.png'),
(7, 'df', 'gfd', 7, 'Captura de pantalla (1).png'),
(8, 'gdgdgd', 'SADGFASDGFSADF', 1, 'PowerPoint2_35733.png'),
(9, 'Java', 'Java es un lenguaje de programacion', 2, 'java.jpg'),
(10, 'Informatica', 'Esto es el futuro', 2, 'informatica.jpg'),
(11, 'Historia', 'Haciendo un poco de historia', 1, 'historiaa.png'),
(12, 'Programacion Web', 'Esto es para programar en Web', 6, 'html.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `cedula` int(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `cedula`, `nombre`, `apellido`, `telefono`, `correo`, `username`, `password`) VALUES
(1, 123456789, 'Juan', 'Perez', '3123224532', 'jup@gmail.com', 'jup', '123'),
(2, 987654321, 'Manuel', 'Ortiz', '312465433', 'manu@hotmail.com', 'man', '321'),
(5, 1110577845, 'Luis Fernando', 'Diaz Vera', '3145667423', 'luisfer@gmail.com', 'luisfer', '12345'),
(6, 182846394, 'Martin', 'Vargas', '823492', 'martin@hotmail.com', 'martin', '12345'),
(7, 918273645, 'Victor', 'Lopez', '3163224564', 'victor@gmail.com', 'victor', '12345'),
(8, 2147483647, 'Carlos', 'Forero', '23452435', 'carls@gmail.com', 'carlos', '12345'),
(9, 0, '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_posteo` (`id_posteo`);

--
-- Indices de la tabla `megusta`
--
ALTER TABLE `megusta`
  ADD PRIMARY KEY (`id_megusta`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_posteo` (`id_posteo`);

--
-- Indices de la tabla `posteo`
--
ALTER TABLE `posteo`
  ADD PRIMARY KEY (`id_posteo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `megusta`
--
ALTER TABLE `megusta`
  MODIFY `id_megusta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `posteo`
--
ALTER TABLE `posteo`
  MODIFY `id_posteo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_posteo`) REFERENCES `posteo` (`id_posteo`);

--
-- Filtros para la tabla `megusta`
--
ALTER TABLE `megusta`
  ADD CONSTRAINT `megusta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `megusta_ibfk_2` FOREIGN KEY (`id_posteo`) REFERENCES `posteo` (`id_posteo`);

--
-- Filtros para la tabla `posteo`
--
ALTER TABLE `posteo`
  ADD CONSTRAINT `posteo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
