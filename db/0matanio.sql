-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2021 a las 03:20:19
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
-- Estructura de tabla para la tabla `matanio`
--

CREATE TABLE `matanio` (
  `cod_matanio` bigint(20) UNSIGNED NOT NULL,
  `des_matanio` varchar(100) NOT NULL,
  `txt_matanio` text NOT NULL,
  `img_matanio` varchar(150) NOT NULL,
  `arch_matanio` varchar(150) NOT NULL,
  `cod_sis` int(11) NOT NULL,
  `cod_niv` int(11) NOT NULL,
  `cod_gra` int(11) NOT NULL,
  `vis_matanio` tinyint(4) NOT NULL DEFAULT 1,
  `cod_dis` int(11) NOT NULL,
  `tipo_cont` int(11) NOT NULL,
  `genes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `matanio`
--

INSERT INTO `matanio` (`cod_matanio`, `des_matanio`, `txt_matanio`, `img_matanio`, `arch_matanio`, `cod_sis`, `cod_niv`, `cod_gra`, `vis_matanio`, `cod_dis`, `tipo_cont`, `genes`) VALUES
(1, 'Criterios para el desarrollo de Procesos Formativos_Orientaciones Metodológicas', 'Criterios para el desarrollo de Procesos Formativos_Orientaciones Metodológicas', '', 'ales11bb34.pdf', 2, 0, 0, 1, 11, 1, ''),
(2, 'ORIENTACIONES 2021 EDUPER', 'ORIENTACIONES 2021 EDUPER', '', 'ales12pkai.pdf', 2, 0, 0, 1, 12, 1, ''),
(3, 'DOSIFICACIÓN DE CONTENIDOS ED ALTERNATIVA_EPA_ESA', 'DOSIFICACIÓN DE CONTENIDOS ED ALTERNATIVA_EPA_ESA', '', 'ales86yob.pdf', 2, 0, 0, 1, 8, 1, ''),
(4, 'GUÍA METODOLÓGICA Final', 'GUÍA METODOLÓGICA Final', '', 'ales80jom.pdf', 2, 0, 0, 1, 8, 1, ''),
(5, 'MOD INTEGRADO FUNDAMENTAL 21-01-2021', 'MOD INTEGRADO FUNDAMENTAL 21-01-2021', '', 'ales8y7lp.pdf', 2, 0, 0, 1, 8, 1, ''),
(6, 'MÓDULO 1', 'MÓDULO 1', '', 'ales8ur56.pdf', 2, 0, 0, 1, 8, 1, ''),
(7, 'MÓDULO 2', 'MÓDULO 2', '', 'ales8o7sn.pdf', 2, 0, 0, 1, 8, 1, ''),
(8, 'MÓDULO 3', 'MÓDULO 3', '', 'ales816yo.pdf', 2, 0, 0, 1, 8, 1, ''),
(9, 'MÓDULO 4', 'MÓDULO 4', '', 'ales8kyx1.pdf', 2, 0, 0, 1, 8, 1, ''),
(10, 'MÓDULO 7', 'MÓDULO 7', '', 'ales8whxn.pdf', 2, 0, 0, 1, 8, 1, ''),
(11, 'MÓDULO 8', 'MÓDULO 8', '', 'ales8sb8y.pdf', 2, 0, 0, 1, 8, 1, ''),
(12, 'MÓDULO 9', 'MÓDULO 9', '', 'ales8gqkg.pdf', 2, 0, 0, 1, 8, 1, ''),
(13, 'GUIA MATEMATICA APLICADOS MOD 1 VF', 'GUIA MATEMATICA APLICADOS MOD 1 VF', '', 'ales919oh.pdf', 2, 0, 0, 0, 9, 18, ''),
(14, 'MOD SOCIALES APRENDIZAJES APLICADOS MOD1 - 21-01-2021', 'MOD SOCIALES APRENDIZAJES APLICADOS MOD1 - 21-01-2021', '', 'ales9712z.pdf', 2, 0, 0, 0, 9, 18, ''),
(15, 'MOD COM Y LENGUAJE APREND COMPLEMENTARIOS', 'MOD COM Y LENGUAJE APREND COMPLEMENTARIOS', '', 'ales91wjc.pdf', 2, 0, 0, 0, 9, 17, ''),
(16, 'DOSIFICACIÓN DE CONTENIDOS ED ALTERNATIVA_EPA_ESA', 'DOSIFICACIÓN DE CONTENIDOS ED ALTERNATIVA_EPA_ESA', '', 'ales9wu1l.pdf', 2, 0, 0, 1, 9, 20, ''),
(17, '0. Priorizacion Curricular', '0. Priorizacion Curricular', '', 'ales6qv7y.pdf', 2, 0, 0, 1, 6, 11, 'ESPECIFICAS'),
(18, '1. Lineamientos curriculares EDUCACION ESPECIAL', '1. Lineamientos curriculares EDUCACION ESPECIAL', '', 'ales602jy.pdf', 2, 0, 0, 1, 6, 11, 'ESPECIFICAS'),
(19, '2. Programa para la atencion de estudiantes con dificultades en el aprendizaje', '2. Programa para la atencion de estudiantes con dificultades en el aprendizaje', '', 'ales698b4.pdf', 2, 0, 0, 1, 6, 11, 'ESPECIFICAS'),
(20, '3. GUIA-DE-ATENCION-DIFICULTADES-EN-EL-APRENDIZAJE-DE-LECTURA-Y-ESCRITURA', '3. GUIA-DE-ATENCION-DIFICULTADES-EN-EL-APRENDIZAJE-DE-LECTURA-Y-ESCRITURA', '', 'ales6nigp.pdf', 2, 0, 0, 1, 6, 11, 'ESPECIFICAS'),
(21, '4. GUIA-DEL-INSTRUMENTO-ATENCION-Y-MEMORIA', '4. GUIA-DEL-INSTRUMENTO-ATENCION-Y-MEMORIA', '', 'ales61dc1.pdf', 2, 0, 0, 1, 6, 11, 'ESPECIFICAS'),
(22, '5. GUIA-INSTRUMENTO-RAZONAMIENTO-LOGICO-MATEMATICO', '5. GUIA-INSTRUMENTO-RAZONAMIENTO-LOGICO-MATEMATICO', '', 'ales68jxv.pdf', 2, 0, 0, 1, 6, 11, 'ESPECIFICAS'),
(23, '6. GUIA-PARA-LA-FAMILIA-SOBRE-DIFICULTADES-EN-EL-APRENDIZAJE', '6. GUIA-PARA-LA-FAMILIA-SOBRE-DIFICULTADES-EN-EL-APRENDIZAJE', '', 'ales6x6fm.pdf', 2, 0, 0, 1, 6, 11, 'ESPECIFICAS'),
(24, '7. INSTRUMENTO-ATENCION-y-MEMORIA', '7. INSTRUMENTO-ATENCION-y-MEMORIA', '', 'ales6z3ij.pdf', 2, 0, 0, 1, 6, 11, 'ESPECIFICAS'),
(25, '8. INSTRUMENTO-DE-LECTO-ESCRITURA', '8. INSTRUMENTO-DE-LECTO-ESCRITURA', '', 'ales6xm9f.pdf', 2, 0, 0, 1, 6, 11, 'ESPECIFICAS'),
(26, '9. INSTRUMENTO-RAZONAMIENTO-MATEMATICO', '9. INSTRUMENTO-RAZONAMIENTO-MATEMATICO', '', 'ales67z95.pdf', 2, 0, 0, 1, 6, 11, 'ESPECIFICAS'),
(27, '1. Cartilla RUTINA LAVADO MANOS 21 X 32 CM', '1. Cartilla RUTINA LAVADO MANOS 21 X 32 CM', '', 'ales6jgdm.pdf', 2, 0, 0, 1, 6, 10, 'ESPECIFICAS'),
(28, '2. AFICHE 2 DESINFECCION', '2. AFICHE 2 DESINFECCION', '', 'ales6r0ca.pdf', 2, 0, 0, 1, 6, 10, 'ESPECIFICAS'),
(29, '3. PARTICIPACION DE LA FAMILIA - DIFICULTADES ESCRITURA', '3. PARTICIPACION DE LA FAMILIA - DIFICULTADES ESCRITURA', '', 'ales66jed.pdf', 2, 0, 0, 1, 6, 10, 'ESPECIFICAS'),
(30, '4. PARTICIPACION DE LA FAMILIA DIFICULTADES LECTURA', '4. PARTICIPACION DE LA FAMILIA DIFICULTADES LECTURA', '', 'ales6ep6u.pdf', 2, 0, 0, 1, 6, 10, 'ESPECIFICAS'),
(31, 'Curriculo Base del SEP diciembre de 2012', 'Curriculo Base del SEP diciembre de 2012', '', 'ales6wsa2.pdf', 2, 0, 0, 1, 6, 10, 'ESPECIFICAS'),
(32, 'GUA DE EDUCACION INCLUSIVA modalidad indirecta enero', 'GUA DE EDUCACION INCLUSIVA modalidad indirecta enero', '', 'ales6yi8u.pdf', 2, 0, 0, 1, 6, 10, 'ESPECIFICAS'),
(33, 'GUIA METODOLOGICA PARA PLANIFICACION CURRICULAR CENTROS EDUCACION ESPECIAL', 'GUIA METODOLOGICA PARA PLANIFICACION CURRICULAR CENTROS EDUCACION ESPECIAL', '', 'ales6jenb.pdf', 2, 0, 0, 1, 6, 10, 'ESPECIFICAS'),
(34, 'GUIA-PLANIFICACION-ESPECIAL', 'GUIA-PLANIFICACION-ESPECIAL', '', 'ales61b5o.pdf', 2, 0, 0, 1, 6, 10, 'ESPECIFICAS'),
(35, 'Ley 070  2010 Avelino Sinani -Elizardo-Perez', 'Ley 070  2010 Avelino Sinani -Elizardo-Perez', '', 'ales6ehve.pdf', 2, 0, 0, 1, 6, 10, 'ESPECIFICAS'),
(36, 'Ley 223. Personas con Discapacidad 2 de marzo 2012', 'Ley 223. Personas con Discapacidad 2 de marzo 2012', '', 'ales6sx8j.pdf', 2, 0, 0, 1, 6, 10, 'ESPECIFICAS'),
(37, 'PLANES-Y-PROGRAMAS-PRIMARIA', 'PLANES-Y-PROGRAMAS-PRIMARIA', '', 'ales6xmwt.pdf', 2, 0, 0, 1, 6, 10, 'ESPECIFICAS'),
(38, 'GUIA-DE-ATENCION-DIFICULTADES-EN-EL-APRENDIZAJE-DE-LECTURA-Y-ESCRITURA', 'GUIA-DE-ATENCION-DIFICULTADES-EN-EL-APRENDIZAJE-DE-LECTURA-Y-ESCRITURA', '', 'ales68b6i.pdf', 2, 0, 0, 1, 6, 11, 'GENERALES'),
(39, 'GUIA-DEL-INSTRUMENTO-ATENCION-Y-MEMORIA', 'GUIA-DEL-INSTRUMENTO-ATENCION-Y-MEMORIA', '', 'ales6pce3.pdf', 2, 0, 0, 1, 6, 11, 'GENERALES'),
(40, 'GUIA-INSTRUMENTO-RAZONAMIENTO-LOGICO-MATEMATICO', 'GUIA-INSTRUMENTO-RAZONAMIENTO-LOGICO-MATEMATICO', '', 'ales66d0z.pdf', 2, 0, 0, 1, 6, 11, 'GENERALES'),
(41, 'GUIA-PARA-LA-FAMILIA-SOBRE-DIFICULTADES-EN-EL-APRENDIZAJE', 'GUIA-PARA-LA-FAMILIA-SOBRE-DIFICULTADES-EN-EL-APRENDIZAJE', '', 'ales62rxl.pdf', 2, 0, 0, 1, 6, 11, 'GENERALES'),
(42, 'INSTRUMENTO-ATENCION-y-MEMORIA', 'INSTRUMENTO-ATENCION-y-MEMORIA', '', 'ales6l33i.pdf', 2, 0, 0, 1, 6, 11, 'GENERALES'),
(43, 'INSTRUMENTO-DE-LECTO-ESCRITURA', 'INSTRUMENTO-DE-LECTO-ESCRITURA', '', 'ales68yan.pdf', 2, 0, 0, 1, 6, 11, 'GENERALES'),
(44, 'INSTRUMENTO-RAZONAMIENTO-MATEMATICO', 'INSTRUMENTO-RAZONAMIENTO-MATEMATICO', '', 'ales66w1g.pdf', 2, 0, 0, 1, 6, 11, 'GENERALES'),
(45, 'Lineamientos curriculares EDUCACION ESPECIAL', 'Lineamientos curriculares EDUCACION ESPECIAL', '', 'ales6001b.pdf', 2, 0, 0, 1, 6, 11, 'GENERALES'),
(46, 'Priorizacion Curricular', 'Priorizacion Curricular', '', 'ales64dx8.pdf', 2, 0, 0, 1, 6, 11, 'GENERALES'),
(47, 'Programa para la atencion de estudiantes con dificultades en el aprendizaje', 'Programa para la atencion de estudiantes con dificultades en el aprendizaje', '', 'ales62rz6.pdf', 2, 0, 0, 1, 6, 11, 'GENERALES'),
(48, '1. Cartilla RUTINA LAVADO MANOS 21 X 32 CM', '1. Cartilla RUTINA LAVADO MANOS 21 X 32 CM', '', 'ales6g6pi.pdf', 2, 0, 0, 1, 6, 10, 'GENERALES'),
(49, '2. AFICHE 2 DESINFECCION', '2. AFICHE 2 DESINFECCION', '', 'ales6uf8w.pdf', 2, 0, 0, 1, 6, 10, 'GENERALES'),
(50, '3. PARTICIPACION DE LA FAMILIA - DIFICULTADES ESCRITURA', '3. PARTICIPACION DE LA FAMILIA - DIFICULTADES ESCRITURA', '', 'ales6mca6.pdf', 2, 0, 0, 1, 6, 10, 'GENERALES'),
(51, '4. PARTICIPACION DE LA FAMILIA DIFICULTADES LECTURA', '4. PARTICIPACION DE LA FAMILIA DIFICULTADES LECTURA', '', 'ales61dx5.pdf', 2, 0, 0, 1, 6, 10, 'GENERALES'),
(52, 'Curriculo Base del SEP diciembre de 2012', 'Curriculo Base del SEP diciembre de 2012', '', 'ales6zk7a.pdf', 2, 0, 0, 1, 6, 10, 'GENERALES'),
(53, 'GUA DE EDUCACION INCLUSIVA modalidad indirecta enero', 'GUA DE EDUCACION INCLUSIVA modalidad indirecta enero', '', 'ales6qt1x.pdf', 2, 0, 0, 1, 6, 10, 'GENERALES'),
(54, 'GUIA METODOLOGICA PARA PLANIFICACION CURRICULAR CENTROS EDUCACION ESPECIAL', 'GUIA METODOLOGICA PARA PLANIFICACION CURRICULAR CENTROS EDUCACION ESPECIAL', '', 'ales6rzy0.pdf', 2, 0, 0, 1, 6, 10, 'GENERALES'),
(55, 'GUIA-PLANIFICACION-ESPECIAL', 'GUIA-PLANIFICACION-ESPECIAL', '', 'ales6iivd.pdf', 2, 0, 0, 1, 6, 10, 'GENERALES'),
(56, 'Ley 070  2010 Avelino Sinani -Elizardo-Perez', 'Ley 070  2010 Avelino Sinani -Elizardo-Perez', '', 'ales66onp.pdf', 2, 0, 0, 1, 6, 10, 'GENERALES'),
(57, 'Ley 223. Personas con Discapacidad 2 de marzo 2012', 'Ley 223. Personas con Discapacidad 2 de marzo 2012', '', 'ales6jm37.pdf', 2, 0, 0, 1, 6, 10, 'GENERALES'),
(58, 'PLANES-Y-PROGRAMAS-PRIMARIA', 'PLANES-Y-PROGRAMAS-PRIMARIA', '', 'ales67bfg.pdf', 2, 0, 0, 1, 6, 10, 'GENERALES'),
(59, 'RM 001-especial', 'RM 001-especial', '', 'ales68rf5.pdf', 2, 0, 0, 1, 6, 10, 'GENERALES'),
(60, 'Curriculo priorizado Talento Extraordinario', 'Curriculo priorizado Talento Extraordinario', '', 'ales7rv4p.pdf', 2, 0, 0, 1, 7, 14, 'Generales y Específicas'),
(61, 'GUIA DE ACELERACIÓN', 'GUIA DE ACELERACIÓN', '', 'ales7vpf1.pdf', 2, 0, 0, 1, 7, 14, 'Generales y Específicas'),
(62, 'Priorizacion Curricular', 'Priorizacion Curricular', '', 'ales7pczg.pdf', 2, 0, 0, 1, 7, 14, 'Generales y Específicas'),
(63, '1. REGLAMENTO DE ATENCION A ESTUDIANTES CON TALENTO EXTRAORDINARIO RM-884-2018', '1. REGLAMENTO DE ATENCION A ESTUDIANTES CON TALENTO EXTRAORDINARIO RM-884-2018', '', 'ales7f6jb.pdf', 2, 0, 0, 1, 7, 15, 'Generales y Específicas'),
(64, '2. PROGRAMA DE ATENCION', '2. PROGRAMA DE ATENCION', '', 'ales7w9fp.pdf', 2, 0, 0, 1, 7, 15, 'Generales y Específicas'),
(65, '3. PROTOCOLO DETECCION talento ex PDF', '3. PROTOCOLO DETECCION talento ex PDF', '', 'ales73mv6.pdf', 2, 0, 0, 1, 7, 15, 'Generales y Específicas'),
(66, '4. DOCUMENTO DE ORIENTACION A PPFF', '4. DOCUMENTO DE ORIENTACION A PPFF', '', 'ales7wub8.pdf', 2, 0, 0, 1, 7, 15, 'Generales y Específicas'),
(67, '5. FORMATO DE INFORME PSICOPEDAGOGICO', '5. FORMATO DE INFORME PSICOPEDAGOGICO', '', 'ales75vwt.pdf', 2, 0, 0, 1, 7, 15, 'Generales y Específicas'),
(69, 'Priorizacion Curricular', 'Priorizacion Curricular', '', 'ales1568k.pdf', 2, 0, 0, 1, 1, 12, ''),
(70, '1. RM 01', '1. RM 01', '', 'ales17nqa.pdf', 2, 0, 0, 1, 1, 11, ''),
(71, '2. Lìniamientos Curriculares para Educación Especial', '2. Lìniamientos Curriculares para Educación Especial', '', 'ales1l3z8.pdf', 2, 0, 0, 1, 1, 11, ''),
(72, '3. Curriculo Especifico Auditiva', '3. Curriculo Especifico Auditiva', '', 'ales1r2yd.pdf', 2, 0, 0, 1, 1, 11, ''),
(73, '4. Guia educativa para la familia Auditiva', '4. Guia educativa para la familia Auditiva', '', 'ales1aosi.pdf', 2, 0, 0, 1, 1, 11, ''),
(74, '1. Cartilla RUTINA LAVADO MANOS 21 X 32 CM', '1. Cartilla RUTINA LAVADO MANOS 21 X 32 CM', '', 'ales1h5zv.pdf', 2, 0, 0, 1, 1, 13, ''),
(75, '2. AFICHE DESINFECCION DE MANOS', '2. AFICHE DESINFECCION DE MANOS', '', 'ales19nfs.pdf', 2, 0, 0, 1, 1, 13, ''),
(76, '3. APRENDIENDO JUGANDO  DELETREANDO LSB', '3. APRENDIENDO JUGANDO  DELETREANDO LSB', '', 'ales1a0y3.pdf', 2, 0, 0, 1, 1, 13, ''),
(77, '4. CARTILLA ACTIVIDADES LECTURA-ESCRITURA', '4. CARTILLA ACTIVIDADES LECTURA-ESCRITURA', '', 'ales1brm8.pdf', 2, 0, 0, 1, 1, 13, ''),
(78, '5. CUADERNILLO DE TRABAJO JUNTOS POR EL COVID', '5. CUADERNILLO DE TRABAJO JUNTOS POR EL COVID', '', 'ales1xmxj.pdf', 2, 0, 0, 1, 1, 13, ''),
(79, 'WhatsApp Video 2021-01-05 at 16.38.36', 'WhatsApp Video 2021-01-05 at 16.38.36', '', 'ales199ki.mp4', 2, 0, 0, 1, 1, 3, ''),
(80, 'Priorizacion Curricular', 'Priorizacion Curricular', '', 'ales28f8d.pdf', 2, 0, 0, 1, 2, 12, ''),
(81, '0. RM 01', '0. RM 01', '', 'ales23kq9.pdf', 2, 0, 0, 1, 2, 11, ''),
(82, '1. LINEAMIENTOS CURRICULARES Y METODOLÓGICOS', '1. LINEAMIENTOS CURRICULARES Y METODOLÓGICOS', '', 'ales23wn8.pdf', 2, 0, 0, 1, 2, 11, ''),
(83, '3. Guia-Educativa-para-familias-y-comunidades-con-discapacidad-intelectual', '3. Guia-Educativa-para-familias-y-comunidades-con-discapacidad-intelectual', '', 'ales2tbza.pdf', 2, 0, 0, 1, 2, 11, ''),
(84, '4. Guia-para-el-acompanamiento-familiar-a-procesos-educativos-inclusivos', '4. Guia-para-el-acompanamiento-familiar-a-procesos-educativos-inclusivos', '', 'ales2wyjt.pdf', 2, 0, 0, 1, 2, 11, ''),
(85, '5. Protocolo_de_aplicacion_del_instrumento', '5. Protocolo_de_aplicacion_del_instrumento', '', 'ales24k91.pdf', 2, 0, 0, 1, 2, 11, ''),
(86, '6. GUA DE EDUCACION INCLUSIVA modalidad indirecta enero', '6. GUA DE EDUCACION INCLUSIVA modalidad indirecta enero', '', 'ales2ph5r.pdf', 2, 0, 0, 1, 2, 11, ''),
(87, '7. Curriculo Base del SEP diciembre de 2012', '7. Curriculo Base del SEP diciembre de 2012', '', 'ales2a58v.pdf', 2, 0, 0, 1, 2, 11, ''),
(88, '1. Cartilla RUTINA LAVADO MANOS 21 X 32 CM', '1. Cartilla RUTINA LAVADO MANOS 21 X 32 CM', '', 'ales2o54g.pdf', 2, 0, 0, 1, 2, 13, ''),
(89, '2. AFICHE DESINFECCION DE MANOS', '2. AFICHE DESINFECCION DE MANOS', '', 'ales2mts4.pdf', 2, 0, 0, 1, 2, 13, ''),
(90, '3. CUADERNILLO DE TRABAJO JUNTOS POR EL COVID', '3. CUADERNILLO DE TRABAJO JUNTOS POR EL COVID', '', 'ales2fzlk.pdf', 2, 0, 0, 1, 2, 13, ''),
(91, '4. CARTILLA lecto ESCRITURA', '4. CARTILLA lecto ESCRITURA', '', 'ales2pfks.pdf', 2, 0, 0, 1, 2, 13, ''),
(92, 'Priorizacion Curricular', 'Priorizacion Curricular', '', 'ales35c2g.pdf', 2, 0, 0, 1, 3, 12, ''),
(93, '0. RM 01', '0. RM 01', '', 'ales3gggc.pdf', 2, 0, 0, 1, 3, 11, ''),
(94, '1. LINEAMIENTOS CURRICULARES Y METODOLÓGICOS', '1. LINEAMIENTOS CURRICULARES Y METODOLÓGICOS', '', 'ales3gwnr.pdf', 2, 0, 0, 1, 3, 11, ''),
(95, '2. CURRICULO ESPECÍFICO-DISCAPACIDAD-INTELECTUAL', '2. CURRICULO ESPECÍFICO-DISCAPACIDAD-INTELECTUAL', '', 'ales3mi3p.pdf', 2, 0, 0, 1, 3, 11, ''),
(96, '3. Guia-Educativa-para-familias-y-comunidades-con-discapacidad-intelectual', '3. Guia-Educativa-para-familias-y-comunidades-con-discapacidad-intelectual', '', 'ales3b5n2.pdf', 2, 0, 0, 1, 3, 11, ''),
(97, '4. Guia-para-el-acompanamiento-familiar-a-procesos-educativos-inclusivos', '4. Guia-para-el-acompanamiento-familiar-a-procesos-educativos-inclusivos', '', 'ales3jvww.pdf', 2, 0, 0, 1, 3, 11, ''),
(98, '5. Protocolo_de_aplicacion_del_instrumento', '5. Protocolo_de_aplicacion_del_instrumento', '', 'ales35l8s.pdf', 2, 0, 0, 1, 3, 11, ''),
(99, '6. GUA--DE-EDUCACION-INCLUSIVA-modalidad-indirecta-enero-140', '6. GUA--DE-EDUCACION-INCLUSIVA-modalidad-indirecta-enero-140', '', 'ales3aiza.pdf', 2, 0, 0, 1, 3, 11, ''),
(100, '1. Cartilla RUTINA LAVADO MANOS 21 X 32 CM', '1. Cartilla RUTINA LAVADO MANOS 21 X 32 CM', '', 'ales3f2qm.pdf', 2, 0, 0, 1, 3, 13, ''),
(101, '2. AFICHE DESINFECCION DE MANOS', '2. AFICHE DESINFECCION DE MANOS', '', 'ales3v5a8.pdf', 2, 0, 0, 1, 3, 13, ''),
(102, '3. CUADERNILLO DE TRABAJO JUNTOS POR EL COVID', '3. CUADERNILLO DE TRABAJO JUNTOS POR EL COVID', '', 'ales388up.pdf', 2, 0, 0, 1, 3, 13, ''),
(103, '4. CARTILLA lecto ESCRITURA', '4. CARTILLA lecto ESCRITURA', '', 'ales3a4ew.pdf', 2, 0, 0, 1, 3, 13, ''),
(104, 'Priorizacion Curricular', 'Priorizacion Curricular', '', 'ales42mbu.pdf', 2, 0, 0, 1, 4, 12, ''),
(105, '0. RM 01', '0. RM 01', '', 'ales4c4uz.pdf', 2, 0, 0, 1, 4, 11, ''),
(106, '1. LINEAMIENTOS CURRICULARES Y METODOLÓGICOS', '1. LINEAMIENTOS CURRICULARES Y METODOLÓGICOS', '', 'ales4o7s6.pdf', 2, 0, 0, 1, 4, 11, ''),
(107, '2. CURRICULO ESPECÍFICO-DISCAPACIDAD-INTELECTUAL', '2. CURRICULO ESPECÍFICO-DISCAPACIDAD-INTELECTUAL', '', 'ales4x1gm.pdf', 2, 0, 0, 1, 4, 11, ''),
(108, '3. Guia-Educativa-para-familias-y-comunidades-con-discapacidad-intelectual', '3. Guia-Educativa-para-familias-y-comunidades-con-discapacidad-intelectual', '', 'ales4htue.pdf', 2, 0, 0, 1, 4, 11, ''),
(109, '4. Guia-para-el-acompanamiento-familiar-a-procesos-educativos-inclusivos', '4. Guia-para-el-acompanamiento-familiar-a-procesos-educativos-inclusivos', '', 'ales4lz5p.pdf', 2, 0, 0, 1, 4, 11, ''),
(110, '5. Protocolo_de_aplicacion_del_instrumento', '5. Protocolo_de_aplicacion_del_instrumento', '', 'ales4rgha.pdf', 2, 0, 0, 1, 4, 11, ''),
(111, '6. Currculo-especfico-Visual', '6. Currculo-especfico-Visual', '', 'ales4ilfa.pdf', 2, 0, 0, 1, 4, 11, ''),
(112, '7. Curriculo Especifico Auditiva', '7. Curriculo Especifico Auditiva', '', 'ales41gl0.pdf', 2, 0, 0, 1, 4, 11, ''),
(113, '1. Cartilla RUTINA LAVADO MANOS 21 X 32 CM', '1. Cartilla RUTINA LAVADO MANOS 21 X 32 CM', '', 'ales4rzp1.pdf', 2, 0, 0, 1, 4, 13, ''),
(114, '2. AFICHE DESINFECCION DE MANOS', '2. AFICHE DESINFECCION DE MANOS', '', 'ales48nr4.pdf', 2, 0, 0, 1, 4, 13, ''),
(115, '3. CUADERNILLO DE TRABAJO JUNTOS POR EL COVID', '3. CUADERNILLO DE TRABAJO JUNTOS POR EL COVID', '', 'ales49z64.pdf', 2, 0, 0, 1, 4, 13, ''),
(116, '4. CARTILLA lecto ESCRITURA', '4. CARTILLA lecto ESCRITURA', '', 'ales41353.pdf', 2, 0, 0, 1, 4, 13, ''),
(117, 'Priorizacion Curricular', 'Priorizacion Curricular', '', 'ales5jods.pdf', 2, 0, 0, 1, 5, 12, ''),
(118, '1. RM 01', '1. RM 01', '', 'ales5d8gi.pdf', 2, 0, 0, 1, 5, 11, ''),
(119, '2. Lineamientos-curriculares-', '2. Lineamientos-curriculares-', '', 'ales5xrux.pdf', 2, 0, 0, 1, 5, 11, ''),
(120, '3. Curriculo Especifico Visual', '3. Curriculo Especifico Visual', '', 'ales5sp3y.pdf', 2, 0, 0, 1, 5, 11, ''),
(121, '4. GUIA-ESTUDIANTES-CIEGOS-', '4. GUIA-ESTUDIANTES-CIEGOS-', '', 'ales5bf4g.pdf', 2, 0, 0, 1, 5, 11, ''),
(122, '1. Cartilla 1ra PARTE', '1. Cartilla 1ra PARTE', '', 'ales13o4sj.pdf', 2, 0, 0, 1, 13, 1, ''),
(123, '2. Cartilla 2da PARTE', '2. Cartilla 2da PARTE', '', 'ales132dpn.pdf', 2, 0, 0, 1, 13, 1, ''),
(124, '3. CUADERNO ESCRITURA 02', '3. CUADERNO ESCRITURA 02', '', 'ales13uuw0.pdf', 2, 0, 0, 1, 13, 1, ''),
(125, 'Cartilla de Alfabetización en Guarani', 'Cartilla de Alfabetización en Guarani', '', 'ales1322m2.pdf', 2, 0, 0, 1, 13, 1, ''),
(126, 'CARTILLA KABINEÑA', 'CARTILLA KABINEÑA', '', 'ales13gx1b.pdf', 2, 0, 0, 1, 13, 1, ''),
(127, 'Cartilla mojeño ignaciano', 'Cartilla mojeño ignaciano', '', 'ales13rcqq.pdf', 2, 0, 0, 1, 13, 1, ''),
(128, 'Cartilla Tsimané', 'Cartilla Tsimané', '', 'ales13ldrn.pdf', 2, 0, 0, 1, 13, 1, ''),
(129, 'Cartilla yuracaré', 'Cartilla yuracaré', '', 'ales136ys8.pdf', 2, 0, 0, 1, 13, 1, ''),
(130, 'GUIA-DE-ALFABETIZACION-AL', 'GUIA-DE-ALFABETIZACION-AL', '', 'ales13dwym.pdf', 2, 0, 0, 1, 13, 1, ''),
(131, 'CURRICULO EPPJA Final', 'CURRICULO EPPJA Final', '', 'ales14rrsy.pdf', 2, 0, 0, 1, 14, 1, ''),
(132, 'GUÍA METODOLÓGICA Final', 'GUÍA METODOLÓGICA Final', '', 'ales14qs5f.pdf', 2, 0, 0, 1, 14, 1, ''),
(133, 'MÓDULO 1', 'MÓDULO 1', '', 'ales14cgnx.pdf', 2, 0, 0, 1, 14, 1, ''),
(134, 'MÓDULO 2', 'MÓDULO 2', '', 'ales14p9d7.pdf', 2, 0, 0, 1, 14, 1, ''),
(135, 'MÓDULO 3', 'MÓDULO 3', '', 'ales14kl4r.pdf', 2, 0, 0, 1, 14, 1, ''),
(136, 'MÓDULO 4', 'MÓDULO 4', '', 'ales146xcr.pdf', 2, 0, 0, 1, 14, 1, ''),
(137, 'MÓDULO 7', 'MÓDULO 7', '', 'ales14nwif.pdf', 2, 0, 0, 1, 14, 1, ''),
(138, 'MÓDULO 8', 'MÓDULO 8', '', 'ales141rmx.pdf', 2, 0, 0, 1, 14, 1, ''),
(139, 'MÓDULO 9', 'MÓDULO 9', '', 'ales149moa.pdf', 2, 0, 0, 1, 14, 1, ''),
(140, '01. DECRETO SUPREMO 2950 BOLIVIA', '01. DECRETO SUPREMO 2950 BOLIVIA', '', 'ales15x1g9.pdf', 2, 0, 0, 1, 15, 13, ''),
(141, '01. Educacion-sociocomuniaria-en-casa-para-personas con discapacidad', '01. Educacion-sociocomuniaria-en-casa-para-personas con discapacidad', '', 'ales15zl4k.pdf', 2, 0, 0, 1, 15, 13, ''),
(142, '01.1. Guia-familiar acompañamiento ed inclusivos', '01.1. Guia-familiar acompañamiento ed inclusivos', '', 'ales15zqaf.pdf', 2, 0, 0, 1, 15, 13, ''),
(143, '01.2. protocolo de apli del instrumento', '01.2. protocolo de apli del instrumento', '', 'ales15r5ss.pdf', 2, 0, 0, 1, 15, 13, ''),
(144, '10. GUA DE EDUCACION INCLUSIVA modalidad-indirecta', '10. GUA DE EDUCACION INCLUSIVA modalidad-indirecta', '', 'ales15mvdn.pdf', 2, 0, 0, 1, 15, 13, ''),
(145, '11. CURRICULO BASE EPJA 2012', '11. CURRICULO BASE EPJA 2012', '', 'ales1593wd.pdf', 2, 0, 0, 1, 15, 13, ''),
(146, '2. Lineamientos-curriculares-Educacion Especial', '02. Lineamientos-curriculares-Educacion Especial', '', 'ales153u1q.pdf', 2, 0, 0, 1, 15, 13, ''),
(147, '4. Currculo especfico Ciegos cT', '04. Currculo especfico Ciegos cT', '', 'ales15geof.pdf', 2, 0, 0, 1, 15, 13, ''),
(148, '4.1. GUIA-ESTUDIANTES-CIEGOS', '04.1. GUIA-ESTUDIANTES-CIEGOS', '', 'ales15ee7o.pdf', 2, 0, 0, 1, 15, 13, ''),
(149, '5. CURRICULO ES P SORDAS', '05. CURRICULO ES P SORDAS', '', 'ales15bbte.pdf', 2, 0, 0, 1, 15, 13, ''),
(150, '5.1.GUIA-PERSONAS-SORDAS', '05.1.GUIA-PERSONAS-SORDAS', '', 'ales156rzk.pdf', 2, 0, 0, 1, 15, 13, ''),
(151, '6. CURRICULO-DISCAPACIDAD-INTELECTUAL', '06. CURRICULO-DISCAPACIDAD-INTELECTUAL', '', 'ales15uo6c.pdf', 2, 0, 0, 1, 15, 13, ''),
(152, '6.1. Guia-Educativa-para-familias-y-comunidades-con-discapacidad-intelectual', '06.1. Guia-Educativa-para-familias-y-comunidades-con-discapacidad-intelectual', '', 'ales15kywb.pdf', 2, 0, 0, 1, 15, 13, ''),
(153, '7.1.jica1_DESARROLLO_HUMANO', '07.1.jica1_DESARROLLO_HUMANO', '', 'ales15gbl6.pdf', 2, 0, 0, 1, 15, 13, ''),
(154, '7.10. jica10_ORIENTACIÓN_Y_MOVILIDAD_ (OyM)', '07.10. jica10_ORIENTACIÓN_Y_MOVILIDAD_ (OyM)', '', 'ales155het.pdf', 2, 0, 0, 1, 15, 13, ''),
(155, '7.11. jica11_DISCAPACIDAD_AUDITIVA', '07.11. jica11_DISCAPACIDAD_AUDITIVA', '', 'ales155v6g.pdf', 2, 0, 0, 1, 15, 13, ''),
(156, '7.12. jica12_DISCAPACIDAD_FISICO-MOTORA', '07.12. jica12_DISCAPACIDAD_FISICO-MOTORA', '', 'ales15fgxj.pdf', 2, 0, 0, 1, 15, 13, ''),
(157, '7.2. jica2_TABLA_EVA_DES', '07.2. jica2_TABLA_EVA_DES', '', 'ales1532hd.pdf', 2, 0, 0, 1, 15, 13, ''),
(158, '7.3. jica3_FISIO_SIST-NERV', '07.3. jica3_FISIO_SIST-NERV', '', 'ales15b6ka.pdf', 2, 0, 0, 1, 15, 13, ''),
(159, '7.4. jica4_SITUACION_DISC', '07.4. jica4_SITUACION_DISC', '', 'ales155t7x.pdf', 2, 0, 0, 1, 15, 13, ''),
(160, '7.5. jica5_COMPRENSIÓN_DE_LA_DISCAPACIAD_INTELECTUAL', '07.5. jica5 COMPRENSIÓN_DE_LA_DISCAPACIAD_INTELECTUAL', '', 'ales157imv.pdf', 2, 0, 0, 1, 15, 13, ''),
(161, '7.6. jica6_COMPRESIÓN_DE_LA_DISCAPACIDAD_VISUAL', '07.6. jica6 COMPRESIÓN_DE_LA_DISCAPACIDAD_VISUAL', '', 'ales157pkq.pdf', 2, 0, 0, 1, 15, 13, ''),
(162, '7.7. jica7_ACTIVIDADES_DE_LA_VIDA_DIARIA_(AVD)', '07.7. jica7 ACTIVIDADES_DE_LA_VIDA_DIARIA_(AVD)', '', 'ales15f6qh.pdf', 2, 0, 0, 1, 15, 13, ''),
(163, '7.8. jica8_APRENDIZAJE_DEL_BRAILLE-ABACO', '07.8. jica8_APRENDIZAJE_DEL_BRAILLE-ABACO', '', 'ales15rbin.pdf', 2, 0, 0, 1, 15, 13, ''),
(164, '7.9. jica9_BAJA_VISIÓN', '07.9. jica9_BAJA_VISIÓN', '', 'ales15tw2b.pdf', 2, 0, 0, 1, 15, 13, ''),
(165, '8. PLANES-Y-PROGRAMAS-PRIMARIA', '08. PLANES-Y-PROGRAMAS-PRIMARIA', '', 'ales1527sb.pdf', 2, 0, 0, 1, 15, 13, ''),
(166, '9,4. SECUNDARIA vida tierra y territorio', '09,4. SECUNDARIA vida tierra y territorio', '', 'ales15t2pt.pdf', 2, 0, 0, 1, 15, 13, ''),
(167, '9.1. SECUNDARIA comunidad y sociedad', '09.1. SECUNDARIA comunidad y sociedad', '', 'ales15t140.pdf', 2, 0, 0, 1, 15, 13, ''),
(168, '9.2. SECUNDARIA  cosmos pensamiento', '09.2. SECUNDARIA  cosmos pensamiento', '', 'ales15sxgd.pdf', 2, 0, 0, 1, 15, 13, ''),
(169, '9.3. SECUNDARIA ciencia tecnologia y produccion', '09.3. SECUNDARIA ciencia tecnologia y produccion', '', 'ales15fgjl.pdf', 2, 0, 0, 1, 15, 13, ''),
(170, 'PRIMARIA Guía Bolivia Multicural y Diversa - Aprendizajes Elementales', 'PRIMARIA Guía Bolivia Multicural y Diversa - Aprendizajes Elementales', '', 'ales70000.pdf', 2, 0, 0, 1, 8, 1, ''),
(172, 'Guía Ciencias de la Naturaleza - Aprendizajes Aplicados', 'Guía Ciencias de la Naturaleza - Aprendizajes Aplicados', 'ales93lnr.png', 'ales93lnr.pdf', 2, 0, 0, 1, 9, 17, ''),
(173, 'Guía Ciencias Sociales - Aprendizajes Aplicados', 'Guía Ciencias Sociales - Aprendizajes Aplicados', 'ales9fb3t.png', 'ales9fb3t.pdf', 2, 0, 0, 1, 9, 17, ''),
(174, 'Guía Comunicación y Lenguaje - Aprendizajes Aplicados', 'Guía Comunicación y Lenguaje - Aprendizajes Aplicados', 'ales9pvon.png', 'ales9pvon.pdf', 2, 0, 0, 1, 9, 17, ''),
(175, 'Guía Matemática - Aprendizajes Aplicados', 'Guía Matemática - Aprendizajes Aplicados', 'ales969fi.png', 'ales969fi.pdf', 2, 0, 0, 1, 9, 17, ''),
(176, 'Guía Ciencias de la Naturaleza - Aprendizajes Complementarios', 'Guía Ciencias de la Naturaleza - Aprendizajes Complementarios', 'ales9wwzj.png', 'ales9wwzj.pdf', 2, 0, 0, 1, 9, 18, ''),
(177, 'Guía Ciencias Sociales - Aprendizajes Complementarios', 'Guía Ciencias Sociales - Aprendizajes Complementarios', 'ales9xrjm.png', 'ales9xrjm.pdf', 2, 0, 0, 1, 9, 18, ''),
(178, 'Guía Comunicación y Lenguaje - Aprendizajes Complementarios', 'Guía Comunicación y Lenguaje - Aprendizajes Complementarios', 'ales9pkzw.png', 'ales9pkzw.pdf', 2, 0, 0, 1, 9, 18, ''),
(179, 'Guía Matemática - Aprendizajes Complementarios', 'Guía Matemática - Aprendizajes Complementarios', 'ales9fndu.png', 'ales9fndu.pdf', 2, 0, 0, 1, 9, 18, ''),
(180, 'Guía Ciencias de la Naturaleza - Aprendizajes Especializados', 'Guía Ciencias de la Naturaleza - Aprendizajes Especializados', 'ales9k10z.png', 'ales9k10z.pdf', 2, 0, 0, 1, 9, 19, ''),
(181, 'Guía Ciencias Sociales - Aprendizajes Especializados', 'Guía Ciencias Sociales - Aprendizajes Especializados', 'ales90pvr.png', 'ales90pvr.pdf', 2, 0, 0, 1, 9, 19, ''),
(182, 'Guía Comunicación y Lenguaje - Aprendizajes Especializados', 'Guía Comunicación y Lenguaje - Aprendizajes Especializados', 'ales9jagx.png', 'ales9jagx.pdf', 2, 0, 0, 1, 9, 19, ''),
(183, 'Guía Matemática - Aprendizajes Especializados', 'Guía Matemática - Aprendizajes Especializados', 'ales9fw5e.png', 'ales9fw5e.pdf', 2, 0, 0, 1, 9, 19, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `matanio`
--
ALTER TABLE `matanio`
  ADD PRIMARY KEY (`cod_matanio`),
  ADD UNIQUE KEY `cod_matanio` (`cod_matanio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `matanio`
--
ALTER TABLE `matanio`
  MODIFY `cod_matanio` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
