-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2020 a las 12:42:11
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fichasmedicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_familiares`
--

CREATE TABLE `antecedentes_familiares` (
  `ID_antecedentes_familiares` int(11) NOT NULL,
  `Hipertension_f` tinyint(1) NOT NULL,
  `Tumorales_f` tinyint(1) NOT NULL,
  `Endocrinologicas_f` tinyint(1) NOT NULL,
  `Obesidad_f` tinyint(1) NOT NULL,
  `Diabetes_f` tinyint(1) NOT NULL,
  `Otros_f` varchar(100) NOT NULL,
  `ID_paciente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `antecedentes_familiares`
--

INSERT INTO `antecedentes_familiares` (`ID_antecedentes_familiares`, `Hipertension_f`, `Tumorales_f`, `Endocrinologicas_f`, `Obesidad_f`, `Diabetes_f`, `Otros_f`, `ID_paciente`) VALUES
(1, 1, 0, 0, 0, 0, 'funciona', 11),
(15, 1, 1, 1, 1, 0, 'hacelo cuevas', 15),
(16, 0, 1, 0, 1, 0, 'aaaaaaaaaaa', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_personales`
--

CREATE TABLE `antecedentes_personales` (
  `ID_antecedentes_personales` int(11) NOT NULL,
  `Hipertension_p` tinyint(1) NOT NULL,
  `Tabaquismo_p` tinyint(1) NOT NULL,
  `Drogas_p` tinyint(1) NOT NULL,
  `Sedentarismo_p` tinyint(1) NOT NULL,
  `Obesidad_p` tinyint(1) NOT NULL,
  `Diabetes_p` tinyint(1) NOT NULL,
  `Otros_p` varchar(100) NOT NULL,
  `ID_paciente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `antecedentes_personales`
--

INSERT INTO `antecedentes_personales` (`ID_antecedentes_personales`, `Hipertension_p`, `Tabaquismo_p`, `Drogas_p`, `Sedentarismo_p`, `Obesidad_p`, `Diabetes_p`, `Otros_p`, `ID_paciente`) VALUES
(1, 0, 1, 1, 1, 0, 0, 'Otros antecedentes personales', 11),
(14, 1, 1, 1, 1, 1, 0, 'por dios hacelo dwwdwd', 15),
(15, 1, 0, 0, 0, 1, 0, 'qqqqqqqqqqq', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `ID_especialidad` int(11) NOT NULL,
  `nombre_especialidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`ID_especialidad`, `nombre_especialidad`) VALUES
(1, 'Odontologo'),
(2, 'Dermatologo'),
(3, 'Pediatra'),
(4, 'Oftalmologo'),
(5, 'Ginecologo'),
(6, 'Psiquiatra'),
(7, 'Nutricionista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_detalle`
--

CREATE TABLE `ficha_detalle` (
  `ID_ficha_detalle` int(11) NOT NULL,
  `ID_especialidad` int(11) NOT NULL,
  `ID_ficha_medica` int(11) NOT NULL,
  `ID_medico` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `texto_consulta` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ficha_detalle`
--

INSERT INTO `ficha_detalle` (`ID_ficha_detalle`, `ID_especialidad`, `ID_ficha_medica`, `ID_medico`, `fecha`, `texto_consulta`) VALUES
(1, 1, 1, 4, '2020-02-02', 'El paciente presenta un cuadro de fiebre'),
(3, 2, 9, 4, '2020-02-07', 'estoy creando una consulta nueva'),
(4, 2, 9, 4, '2020-02-07', 'el paciente tiene un esguince de rodilla'),
(5, 7, 8, 5, '2020-02-07', 'infectado con ebola'),
(6, 2, 8, 4, '2020-02-07', ''),
(7, 1, 8, 9, '2020-02-07', 'el tipo esta muy bien'),
(8, 1, 8, 9, '2020-02-07', 'consulta consulta'),
(9, 1, 8, 8, '2020-02-07', 'el tipo esta muy bien'),
(10, 1, 8, 8, '2020-02-07', 'tabique fracturado'),
(11, 6, 8, 6, '2020-02-07', 'estoy creando una consulta nueva'),
(12, 6, 8, 6, '2020-02-07', 'infectado con ebola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_medica_base`
--

CREATE TABLE `ficha_medica_base` (
  `ID_ficha_medica` int(11) NOT NULL,
  `observaciones_ficha` longtext NOT NULL,
  `ID_paciente` int(11) NOT NULL,
  `ID_antecedentes_personales` int(11) NOT NULL,
  `obra_social` varchar(100) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `ID_antecedentes_familiares` int(100) NOT NULL,
  `alergias` varchar(100) NOT NULL,
  `altura` float NOT NULL,
  `peso` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ficha_medica_base`
--

INSERT INTO `ficha_medica_base` (`ID_ficha_medica`, `observaciones_ficha`, `ID_paciente`, `ID_antecedentes_personales`, `obra_social`, `domicilio`, `ID_antecedentes_familiares`, `alergias`, `altura`, `peso`) VALUES
(1, 'El paciente presento un cuadro de fiebre         ', 11, 1, 'Galeno', 'Echeverria 1962 4°A, CABA', 1, '', 1.68, 73.5),
(8, ' assssssssssssssssss                                  ', 15, 14, 'OSDE', 'Aguado 2205, San Fernando', 15, '', 1.69, 71),
(9, ' observo axxxxxxxxxxxx          ', 16, 15, 'Galeno', 'asasasa', 16, 'asdasdasd', 184, 185);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `ID_usuario` int(11) NOT NULL,
  `ruta_imagen` varchar(100) NOT NULL DEFAULT 'upload/user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`ID_usuario`, `ruta_imagen`) VALUES
(19, 'upload/user.png'),
(20, 'upload/user.png'),
(24, 'upload/user.png'),
(25, 'upload/user.png'),
(26, 'upload/user.png'),
(27, 'upload/user.png'),
(28, 'upload/user.png'),
(29, 'upload/user.png'),
(30, 'upload/user.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `ID_medico` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `ID_especialidad` int(11) NOT NULL,
  `numero_matricula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`ID_medico`, `ID_usuario`, `ID_especialidad`, `numero_matricula`) VALUES
(4, 20, 2, 12345678),
(5, 26, 7, 11111111),
(6, 27, 6, 12895625),
(7, 28, 5, 98765425),
(8, 29, 1, 65985425),
(9, 30, 1, 15151589);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `ID_paciente` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`ID_paciente`, `ID_usuario`) VALUES
(11, 19),
(15, 24),
(16, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_seguridad`
--

CREATE TABLE `pregunta_seguridad` (
  `ID_usuario` int(11) NOT NULL,
  `Pregunta` varchar(300) NOT NULL,
  `Respuesta` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pregunta_seguridad`
--

INSERT INTO `pregunta_seguridad` (`ID_usuario`, `Pregunta`, `Respuesta`) VALUES
(19, 'Club del cual es hincha', 'Racing'),
(20, 'Club del cual es hincha', 'Racing'),
(24, 'Club del cual es hincha', 'river'),
(25, 'Club del cual es hincha', 'river'),
(26, 'Lugar favorito para vacacionar', 'pinamar'),
(27, 'Cerveza favorita', 'ipa'),
(28, 'Nombre de su primera mascota', 'bono'),
(29, 'Lugar favorito para vacacionar', 'pinamar'),
(30, 'Cerveza favorita', 'amber');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `ID_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`ID_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'medico'),
(2, 'paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_usuario` int(11) NOT NULL,
  `DNI` int(8) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `ID_tipo_usuario` int(11) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `correo_electronico` varchar(40) NOT NULL,
  `fecha_nac` date NOT NULL,
  `sexo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_usuario`, `DNI`, `nombre`, `apellido`, `ID_tipo_usuario`, `contraseña`, `nombre_usuario`, `correo_electronico`, `fecha_nac`, `sexo`) VALUES
(19, 55555555, 'Paciente', 'Paciente', 2, 'd243800a7d0ba0f87081bcdd832bb05f', 'paciente', 'paciente@paciente.com', '2006-06-02', 'masculino'),
(20, 77777777, 'Medico', 'Medico', 1, '652044ac6e008761b3e6141748a99880', 'medico', 'medico@medico.com', '2003-10-28', 'femenino'),
(24, 40731378, 'Lucas', 'Migone', 2, '81dc9bdb52d04dc20036dbd8313ed055', 'lmigone', 'migonel55@gmail.com', '1997-11-04', 'masculino'),
(25, 14151612, 'Ariel', 'Ortega', 2, '81dc9bdb52d04dc20036dbd8313ed055', 'aortega', 'aortega@gmail.com', '1975-10-15', 'masculino'),
(26, 11111111, 'Carlos', 'Gonzalez', 1, '81dc9bdb52d04dc20036dbd8313ed055', 'cgonzalez', 'cgonza@gmail.com', '1989-08-13', 'masculino'),
(27, 12345678, 'Beto', 'Alonso', 1, '81dc9bdb52d04dc20036dbd8313ed055', 'balonso', 'balonso@sdsad.com', '1994-07-15', 'masculino'),
(28, 45698525, 'Ana', 'Perez', 1, '81dc9bdb52d04dc20036dbd8313ed055', 'aperez', 'aperez@gmail.com', '1989-07-14', 'femenino'),
(29, 12514865, 'Maria', 'Wilsterman', 1, '81dc9bdb52d04dc20036dbd8313ed055', 'mwilsterman', 'mwils@asass.com', '1976-10-13', 'femenino'),
(30, 26254791, 'Jorge', 'Ares', 1, '81dc9bdb52d04dc20036dbd8313ed055', 'jares', 'jares@dads.com', '1975-06-16', 'masculino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes_familiares`
--
ALTER TABLE `antecedentes_familiares`
  ADD PRIMARY KEY (`ID_antecedentes_familiares`),
  ADD KEY `ID_paciente` (`ID_paciente`);

--
-- Indices de la tabla `antecedentes_personales`
--
ALTER TABLE `antecedentes_personales`
  ADD PRIMARY KEY (`ID_antecedentes_personales`),
  ADD KEY `ID_paciente` (`ID_paciente`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`ID_especialidad`);

--
-- Indices de la tabla `ficha_detalle`
--
ALTER TABLE `ficha_detalle`
  ADD PRIMARY KEY (`ID_ficha_detalle`),
  ADD KEY `ID_especialidad` (`ID_especialidad`),
  ADD KEY `ID_medico` (`ID_medico`);

--
-- Indices de la tabla `ficha_medica_base`
--
ALTER TABLE `ficha_medica_base`
  ADD PRIMARY KEY (`ID_ficha_medica`),
  ADD KEY `antecedentes_familiares` (`ID_antecedentes_familiares`),
  ADD KEY `antecedentes_personales` (`ID_antecedentes_personales`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`ID_medico`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ID_paciente`),
  ADD KEY `ID_usuario` (`ID_usuario`);

--
-- Indices de la tabla `pregunta_seguridad`
--
ALTER TABLE `pregunta_seguridad`
  ADD PRIMARY KEY (`ID_usuario`),
  ADD KEY `ID_usuario` (`ID_usuario`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`ID_tipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedentes_familiares`
--
ALTER TABLE `antecedentes_familiares`
  MODIFY `ID_antecedentes_familiares` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `antecedentes_personales`
--
ALTER TABLE `antecedentes_personales`
  MODIFY `ID_antecedentes_personales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `ID_especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ficha_detalle`
--
ALTER TABLE `ficha_detalle`
  MODIFY `ID_ficha_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ficha_medica_base`
--
ALTER TABLE `ficha_medica_base`
  MODIFY `ID_ficha_medica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `ID_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ficha_detalle`
--
ALTER TABLE `ficha_detalle`
  ADD CONSTRAINT `ficha_detalle_ibfk_1` FOREIGN KEY (`ID_especialidad`) REFERENCES `especialidad` (`ID_especialidad`),
  ADD CONSTRAINT `ficha_detalle_ibfk_2` FOREIGN KEY (`ID_medico`) REFERENCES `medico` (`ID_medico`);

--
-- Filtros para la tabla `ficha_medica_base`
--
ALTER TABLE `ficha_medica_base`
  ADD CONSTRAINT `ficha_medica_base_ibfk_1` FOREIGN KEY (`ID_antecedentes_personales`) REFERENCES `antecedentes_personales` (`ID_antecedentes_personales`),
  ADD CONSTRAINT `ficha_medica_base_ibfk_2` FOREIGN KEY (`ID_antecedentes_familiares`) REFERENCES `antecedentes_familiares` (`ID_antecedentes_familiares`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`);

--
-- Filtros para la tabla `pregunta_seguridad`
--
ALTER TABLE `pregunta_seguridad`
  ADD CONSTRAINT `pregunta_seguridad_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
