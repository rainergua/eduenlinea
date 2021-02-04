-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2021 a las 05:30:45
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contlinea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_contenido`
--

CREATE TABLE `tipo_contenido` (
  `cod_tipo` bigint(20) UNSIGNED NOT NULL,
  `tipo_cont` varchar(50) NOT NULL,
  `tipo_arch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_contenido`
--

INSERT INTO `tipo_contenido` (`cod_tipo`, `tipo_cont`, `tipo_arch`) VALUES
(1, 'Documentos de apoyo', '*.pdf, *.docx, *.xlsx'),
(2, 'Material de Area', '*.pdf, *.doc, *.docx'),
(3, 'Evaluación', '*.pdf, *.doc, *.txt'),
(4, 'Libros de texto', '*.pdf, *.docx, *.xlsx'),
(5, 'Curriculo', '*.pdf; *.docx'),
(6, 'Enlaces', 'Enlaces a sitios web'),
(7, 'Texto escolar externo', '*.html; link'),
(8, 'Videos', '*.mp4, *.avi, *.mov'),
(9, 'Contenido de Año de Escolaridad', '*.pdf, *.doc, *.docx'),
(10, 'Material de apoyo', '*.mp4,*.avi,*.pdf'),
(11, 'Documentos Trabajo', '*.pdf, *.doc'),
(12, 'Contenidos Priorizados', '*.pdf, *.doc'),
(13, 'Textos Educativos', '*.pdf, *.doc'),
(14, 'CURRÍCULO PRIORIZADO', '*.pdf, *.doc'),
(15, 'DOCUMENTOS DE TRABAJO', '*.pdf, *.doc'),
(16, 'TUTORIAS', '*.pdf, *.doc'),
(17, 'APRENDIZAJES COMPLEMENTARIOS', '*.pdf, *.doc'),
(18, 'APRENDIZAJES APLICADOS', '*.pdf, *.doc'),
(19, 'DOSIFICACION DE CONTENIDOS', '*.pdf, *.doc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tipo_contenido`
--
ALTER TABLE `tipo_contenido`
  ADD PRIMARY KEY (`cod_tipo`),
  ADD UNIQUE KEY `cod_tipo` (`cod_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
