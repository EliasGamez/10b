-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2021 a las 23:20:13
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuestionarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ansiedad`
--

CREATE TABLE `ansiedad` (
  `Id_ansiedad` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Pregunta_1` int(11) NOT NULL,
  `Pregunta_2` int(11) NOT NULL,
  `Pregunta_3` int(11) NOT NULL,
  `Pregunta_4` int(11) NOT NULL,
  `Pregunta_5` int(11) NOT NULL,
  `Pregunta_6` int(11) NOT NULL,
  `Pregunta_7` int(11) NOT NULL,
  `Pregunta_8` int(11) NOT NULL,
  `Pregunta_9` int(11) NOT NULL,
  `Pregunta_10` int(11) NOT NULL,
  `Pregunta_11` int(11) NOT NULL,
  `Pregunta_12` int(11) NOT NULL,
  `Pregunta_13` int(11) NOT NULL,
  `Pregunta_14` int(11) NOT NULL,
  `Pregunta_15` int(11) NOT NULL,
  `Pregunta_16` int(11) NOT NULL,
  `Pregunta_17` int(11) NOT NULL,
  `Pregunta_18` int(11) NOT NULL,
  `Pregunta_19` int(11) NOT NULL,
  `Pregunta_20` int(11) NOT NULL,
  `Pregunta_21` int(11) NOT NULL,
  `Pregunta_22` int(11) NOT NULL,
  `Pregunta_23` int(11) NOT NULL,
  `Pregunta_24` int(11) NOT NULL,
  `Pregunta_25` int(11) NOT NULL,
  `Pregunta_26` int(11) NOT NULL,
  `Pregunta_27` int(11) NOT NULL,
  `Pregunta_28` int(11) NOT NULL,
  `Pregunta_29` int(11) NOT NULL,
  `Pregunta_30` int(11) NOT NULL,
  `Pregunta_31` int(11) NOT NULL,
  `Pregunta_32` int(11) NOT NULL,
  `Pregunta_33` int(11) NOT NULL,
  `Pregunta_34` int(11) NOT NULL,
  `Pregunta_35` int(11) NOT NULL,
  `Pregunta_36` int(11) NOT NULL,
  `Pregunta_37` int(11) NOT NULL,
  `Pregunta_38` int(11) NOT NULL,
  `Pregunta_39` int(11) NOT NULL,
  `Pregunta_40` int(11) NOT NULL,
  `Escala_estado` int(11) NOT NULL,
  `Escala_rasgo` int(11) NOT NULL,
  `Estado` varchar(10) NOT NULL,
  `Rasgo` varchar(10) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ansiedad_`
--

CREATE TABLE `ansiedad_` (
  `Escala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ansiedad_`
--

INSERT INTO `ansiedad_` (`Escala`) VALUES
('Estado'),
('Rasgo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canal_aprendizaje`
--

CREATE TABLE `canal_aprendizaje` (
  `Id_canal` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Pregunta_1` int(11) NOT NULL,
  `Pregunta_2` int(11) NOT NULL,
  `Pregunta_3` int(11) NOT NULL,
  `Pregunta_4` int(11) NOT NULL,
  `Pregunta_5` int(11) NOT NULL,
  `Pregunta_6` int(11) NOT NULL,
  `Pregunta_7` int(11) NOT NULL,
  `Pregunta_8` int(11) NOT NULL,
  `Pregunta_9` int(11) NOT NULL,
  `Pregunta_10` int(11) NOT NULL,
  `Pregunta_11` int(11) NOT NULL,
  `Pregunta_12` int(11) NOT NULL,
  `Pregunta_13` int(11) NOT NULL,
  `Pregunta_14` int(11) NOT NULL,
  `Pregunta_15` int(11) NOT NULL,
  `Pregunta_16` int(11) NOT NULL,
  `Pregunta_17` int(11) NOT NULL,
  `Pregunta_18` int(11) NOT NULL,
  `Pregunta_19` int(11) NOT NULL,
  `Pregunta_20` int(11) NOT NULL,
  `Pregunta_21` int(11) NOT NULL,
  `Pregunta_22` int(11) NOT NULL,
  `Pregunta_23` int(11) NOT NULL,
  `Pregunta_24` int(11) NOT NULL,
  `Pregunta_25` int(11) NOT NULL,
  `Pregunta_26` int(11) NOT NULL,
  `Pregunta_27` int(11) NOT NULL,
  `Pregunta_28` int(11) NOT NULL,
  `Pregunta_29` int(11) NOT NULL,
  `Pregunta_30` int(11) NOT NULL,
  `Pregunta_31` int(11) NOT NULL,
  `Pregunta_32` int(11) NOT NULL,
  `Pregunta_33` int(11) NOT NULL,
  `Pregunta_34` int(11) NOT NULL,
  `Pregunta_35` int(11) NOT NULL,
  `Pregunta_37` int(11) NOT NULL,
  `Cal_visual` int(11) NOT NULL,
  `Cal_audi` int(11) NOT NULL,
  `Cal_kines` int(11) NOT NULL,
  `Visual` float NOT NULL,
  `Audi` float NOT NULL,
  `Kines` float NOT NULL,
  `Fecha` date NOT NULL,
  `Nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canal_aprendizaje_`
--

CREATE TABLE `canal_aprendizaje_` (
  `Categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `canal_aprendizaje_`
--

INSERT INTO `canal_aprendizaje_` (`Categoria`) VALUES
('Visual'),
('Auditivo'),
(' Kinestésico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depresion`
--

CREATE TABLE `depresion` (
  `Id_depresion` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Pregunta_1` int(11) NOT NULL,
  `Pregunta_2` int(11) NOT NULL,
  `Pregunta_3` int(11) NOT NULL,
  `Pregunta_4` int(11) NOT NULL,
  `Pregunta_5` int(11) NOT NULL,
  `Pregunta_6` int(11) NOT NULL,
  `Pregunta_7` int(11) NOT NULL,
  `Pregunta_8` int(11) NOT NULL,
  `Pregunta_9` int(11) NOT NULL,
  `Pregunta_10` int(11) NOT NULL,
  `Pregunta_11` int(11) NOT NULL,
  `Pregunta_12` int(11) NOT NULL,
  `Pregunta_13` int(11) NOT NULL,
  `Pregunta_14` int(11) NOT NULL,
  `Pregunta_15` int(11) NOT NULL,
  `Pregunta_16` int(11) NOT NULL,
  `Pregunta_17` int(11) NOT NULL,
  `Pregunta_18` int(11) NOT NULL,
  `Pregunta_19` int(11) NOT NULL,
  `Pregunta_20` int(11) NOT NULL,
  `Pregunta_21` int(11) NOT NULL,
  `Rango` varchar(10) NOT NULL,
  `Rango_numerico` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilo_aprendizaje`
--

CREATE TABLE `estilo_aprendizaje` (
  `Id_estilo_aprendizaje` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Pregunta_1` int(11) NOT NULL,
  `Pregunta_2` int(11) NOT NULL,
  `Pregunta_3` int(11) NOT NULL,
  `Pregunta_4` int(11) NOT NULL,
  `Pregunta_5` int(11) NOT NULL,
  `Pregunta_6` int(11) NOT NULL,
  `Pregunta_7` int(11) NOT NULL,
  `Pregunta_8` int(11) NOT NULL,
  `Pregunta_9` int(11) NOT NULL,
  `Pregunta_10` int(11) NOT NULL,
  `Pregunta_11` int(11) NOT NULL,
  `Pregunta_12` int(11) NOT NULL,
  `Pregunta_13` int(11) NOT NULL,
  `Pregunta_14` int(11) NOT NULL,
  `Pregunta_15` int(11) NOT NULL,
  `Pregunta_16` int(11) NOT NULL,
  `Pregunta_17` int(11) NOT NULL,
  `Pregunta_18` int(11) NOT NULL,
  `Pregunta_19` int(11) NOT NULL,
  `Pregunta_20` int(11) NOT NULL,
  `Pregunta_21` int(11) NOT NULL,
  `Pregunta_22` int(11) NOT NULL,
  `Pregunta_23` int(11) NOT NULL,
  `Pregunta_24` int(11) NOT NULL,
  `Pregunta_25` int(11) NOT NULL,
  `Pregunta_26` int(11) NOT NULL,
  `Pregunta_27` int(11) NOT NULL,
  `Pregunta_28` int(11) NOT NULL,
  `Pregunta_29` int(11) NOT NULL,
  `Pregunta_30` int(11) NOT NULL,
  `Pregunta_31` int(11) NOT NULL,
  `Pregunta_32` int(11) NOT NULL,
  `Pregunta_33` int(11) NOT NULL,
  `Pregunta_34` int(11) NOT NULL,
  `Pregunta_35` int(11) NOT NULL,
  `Pregunta_36` int(11) NOT NULL,
  `Pregunta_37` int(11) NOT NULL,
  `Pregunta_38` int(11) NOT NULL,
  `Pregunta_39` int(11) NOT NULL,
  `Pregunta_40` int(11) NOT NULL,
  `Pregunta_41` int(11) NOT NULL,
  `Pregunta_42` int(11) NOT NULL,
  `Pregunta_43` int(11) NOT NULL,
  `Pregunta_44` int(11) NOT NULL,
  `Activo` int(11) NOT NULL,
  `Reflexivo` int(11) NOT NULL,
  `Teorico` int(11) NOT NULL,
  `Pragmatico` int(11) NOT NULL,
  `Porcentaje_activo` float NOT NULL,
  `Porcentaje_reflex` float NOT NULL,
  `Porcentaje_teo` float NOT NULL,
  `Porcentaje_prag` float NOT NULL,
  `Fecha` date NOT NULL,
  `Nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilo_aprendizaje_`
--

CREATE TABLE `estilo_aprendizaje_` (
  `Estilo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estilo_aprendizaje_`
--

INSERT INTO `estilo_aprendizaje_` (`Estilo`) VALUES
('Activo'),
('Reflexivo'),
('Teórico'),
('Pragmático');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivacion_aprendizaje`
--

CREATE TABLE `motivacion_aprendizaje` (
  `Id_motivacion_aprendizaje` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Pregunta_1` int(11) NOT NULL,
  `Pregunta_2` int(11) NOT NULL,
  `Pregunta_3` int(11) NOT NULL,
  `Pregunta_4` int(11) NOT NULL,
  `Pregunta_5` int(11) NOT NULL,
  `Pregunta_6` int(11) NOT NULL,
  `Pregunta_7` int(11) NOT NULL,
  `Pregunta_8` int(11) NOT NULL,
  `Pregunta_9` int(11) NOT NULL,
  `Pregunta_10` int(11) NOT NULL,
  `Pregunta_11` int(11) NOT NULL,
  `Pregunta_12` int(11) NOT NULL,
  `Pregunta_13` int(11) NOT NULL,
  `Pregunta_14` int(11) NOT NULL,
  `Pregunta_15` int(11) NOT NULL,
  `Pregunta_16` int(11) NOT NULL,
  `Pregunta_17` int(11) NOT NULL,
  `Pregunta_18` int(11) NOT NULL,
  `Pregunta_19` int(11) NOT NULL,
  `Pregunta_20` int(11) NOT NULL,
  `Pregunta_21` int(11) NOT NULL,
  `Pregunta_22` int(11) NOT NULL,
  `Pregunta_23` int(11) NOT NULL,
  `Motivacion_profunda` int(11) NOT NULL,
  `Motivacion_rendimiento` int(11) NOT NULL,
  `Motivacion_superficial` int(11) NOT NULL,
  `Cantidad_profunda` varchar(20) NOT NULL,
  `Cantidad_ren` varchar(20) NOT NULL,
  `Cantidad_super` varchar(20) NOT NULL,
  `Fecha` date NOT NULL,
  `Nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivacion_aprendizaje_`
--

CREATE TABLE `motivacion_aprendizaje_` (
  `Subescala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `motivacion_aprendizaje_`
--

INSERT INTO `motivacion_aprendizaje_` (`Subescala`) VALUES
('Motivación profunda'),
('Motivación de rendimiento'),
('Motivación superficial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `Id_observaciones` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Observacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Matricula` varchar(50) NOT NULL,
  `Contraseña` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Apellido_paterno` varchar(30) NOT NULL,
  `Apellido_materno` varchar(30) NOT NULL,
  `Carreras` varchar(20) NOT NULL,
  `Grado` varchar(20) NOT NULL,
  `Nivel` varchar(30) NOT NULL,
  `Rol` varchar(30) NOT NULL,
  `Estatus_alumno` int(11) NOT NULL,
  `Crear` int(11) NOT NULL,
  `Visualizar` int(11) NOT NULL,
  `Cuestionario` int(11) NOT NULL,
  `Activar` int(11) NOT NULL,
  `Cuestionario_1` int(11) NOT NULL,
  `Cuestionario_2` int(11) NOT NULL,
  `Cuestionario_3` int(11) NOT NULL,
  `Cuestionario_4` int(11) NOT NULL,
  `Cuestionario_5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `Nombre`, `Telefono`, `Matricula`, `Contraseña`, `Correo`, `Sexo`, `Apellido_paterno`, `Apellido_materno`, `Carreras`, `Grado`, `Nivel`, `Rol`, `Estatus_alumno`, `Crear`, `Visualizar`, `Cuestionario`, `Activar`, `Cuestionario_1`, `Cuestionario_2`, `Cuestionario_3`, `Cuestionario_4`, `Cuestionario_5`) VALUES
(1, 'Jessica', '7774563108', 'jessi@gmail.com', '12345', 'jessi@gmail.com', 'Femenino', 'Fernández', 'Pérez', '0', '0', '0', 'Docente', 0, 1, 1, 1, 1, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ansiedad`
--
ALTER TABLE `ansiedad`
  ADD PRIMARY KEY (`Id_ansiedad`);

--
-- Indices de la tabla `canal_aprendizaje`
--
ALTER TABLE `canal_aprendizaje`
  ADD PRIMARY KEY (`Id_canal`);

--
-- Indices de la tabla `depresion`
--
ALTER TABLE `depresion`
  ADD PRIMARY KEY (`Id_depresion`);

--
-- Indices de la tabla `estilo_aprendizaje`
--
ALTER TABLE `estilo_aprendizaje`
  ADD PRIMARY KEY (`Id_estilo_aprendizaje`);

--
-- Indices de la tabla `motivacion_aprendizaje`
--
ALTER TABLE `motivacion_aprendizaje`
  ADD PRIMARY KEY (`Id_motivacion_aprendizaje`);

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`Id_observaciones`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ansiedad`
--
ALTER TABLE `ansiedad`
  MODIFY `Id_ansiedad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `canal_aprendizaje`
--
ALTER TABLE `canal_aprendizaje`
  MODIFY `Id_canal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `depresion`
--
ALTER TABLE `depresion`
  MODIFY `Id_depresion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estilo_aprendizaje`
--
ALTER TABLE `estilo_aprendizaje`
  MODIFY `Id_estilo_aprendizaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `motivacion_aprendizaje`
--
ALTER TABLE `motivacion_aprendizaje`
  MODIFY `Id_motivacion_aprendizaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `Id_observaciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
