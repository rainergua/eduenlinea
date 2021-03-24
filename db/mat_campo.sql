-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2021 a las 04:21:29
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
-- Estructura de tabla para la tabla `mat_campo`
--

CREATE TABLE `mat_campo` (
  `cod_codcam` bigint(20) UNSIGNED NOT NULL,
  `des_concam` varchar(50) NOT NULL,
  `img_concam` varchar(50) NOT NULL,
  `arch_concam` varchar(50) NOT NULL,
  `txt_concam` text NOT NULL,
  `lnk_concam` text NOT NULL,
  `cod_tipo` int(11) NOT NULL,
  `cod_sis` int(11) NOT NULL,
  `cod_niv` int(11) NOT NULL,
  `cod_gra` int(11) NOT NULL,
  `cod_cam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mat_campo`
--

INSERT INTO `mat_campo` (`cod_codcam`, `des_concam`, `img_concam`, `arch_concam`, `txt_concam`, `lnk_concam`, `cod_tipo`, `cod_sis`, `cod_niv`, `cod_gra`, `cod_cam`) VALUES
(1, '1º LA MATEMÁTICA EN LA VIDA COTIDIANA DE NUESTRA C', '', 'pri4-kvoz.pdf', '1º LA MATEMÁTICA EN LA VIDA COTIDIANA DE NUESTRA COMUNIDAD (CIENCIA, TECNOLOGÍA Y PRODUCCIÓN)', '', 2, 1, 5, 11, 4),
(2, '1º VIDA ARMÓNICA EN COMUNIDAD (COSMOS Y PENSAMIENT', '', 'pri2-qn6j.pdf', '1º VIDA ARMÓNICA EN COMUNIDAD (COSMOS Y PENSAMIENTO)', '', 2, 1, 5, 11, 2),
(3, '1º VIVIMOS EN COMUNIDAD (COMUNIDAD Y SOCIEDAD)', '', 'pri1-3o6z.pdf', '1º VIVIMOS EN COMUNIDAD (COMUNIDAD Y SOCIEDAD)', '', 2, 1, 5, 11, 1),
(4, '1º CONOCIENDO LA MARAVILLA DE LA VIDA EN NUESTRA C', '', 'pri3-gc25.pdf', '1º CONOCIENDO LA MARAVILLA DE LA VIDA EN NUESTRA COMUNIDAD (VIDA, TIERRA Y TERRITORIO)', '', 2, 1, 5, 11, 3),
(5, '2º LA MATEMÁTICA EN LA VIDA COTIDIANA DE NUESTRA C', '', 'pri4-2ry5.pdf', '2º LA MATEMÁTICA EN LA VIDA COTIDIANA DE NUESTRA COMUNIDAD (CIENCIA, TECNOLOGÍA Y PRODUCCIÓN)', '', 2, 1, 5, 12, 4),
(6, '2 VIDA ARMÓNICA EN COMUNIDAD (COSMOS Y PENSAMIENTO', '', 'pri2-42lp.pdf', '2 VIDA ARMÓNICA EN COMUNIDAD (COSMOS Y PENSAMIENTO)', '', 2, 1, 5, 12, 2),
(7, '2º VIVIMOS EN COMUNIDAD (COMUNIDAD Y SOCIEDAD)', '', 'pri1-119g.pdf', '2º VIVIMOS EN COMUNIDAD (COMUNIDAD Y SOCIEDAD)', '', 2, 1, 5, 12, 1),
(8, '2º CONOCIENDO LA MARAVILLA DE LA VIDA EN NUESTRA C', '', 'pri3-ovs3.pdf', '2º CONOCIENDO LA MARAVILLA DE LA VIDA EN NUESTRA COMUNIDAD (VIDA, TIERRA Y TERRITORIO)', '', 2, 1, 5, 12, 3),
(9, '3º LA MATEMÁTICA EN LA VIDA COTIDIANA DE NUESTRA C', '', 'pri4-0z55.pdf', '3º LA MATEMÁTICA EN LA VIDA COTIDIANA DE NUESTRA COMUNIDAD (CIENCIA, TECNOLOGÍA Y PRODUCCIÓN)', '', 2, 1, 5, 13, 4),
(10, '3º VIDA ARMÓNICA EN COMUNIDAD (COSMOS Y PENSAMIENT', '', 'pri2-zdtk.pdf', '3º VIDA ARMÓNICA EN COMUNIDAD (COSMOS Y PENSAMIENTO)', '', 2, 1, 5, 13, 2),
(11, '3º VIVIMOS EN COMUNIDAD (COMUNIDAD Y SOCIEDAD)', '', 'pri1-swrd.pdf', '3º VIVIMOS EN COMUNIDAD (COMUNIDAD Y SOCIEDAD)', '', 2, 1, 5, 13, 1),
(12, '3º CONOCIENDO LA MARAVILLA DE LA VIDA EN NUESTRA C', '', 'pri3-xtt0.pdf', '3º CONOCIENDO LA MARAVILLA DE LA VIDA EN NUESTRA COMUNIDAD (VIDA, TIERRA Y TERRITORIO)', '', 2, 1, 5, 13, 3),
(13, '4º LA MATEMÁTICA EN LA VIDA COTIDIANA DE NUESTRA C', '', 'pri4-ktfh.pdf', '4º LA MATEMÁTICA EN LA VIDA COTIDIANA DE NUESTRA COMUNIDAD (CIENCIA, TECNOLOGÍA Y PRODUCCIÓN)', '', 2, 1, 5, 14, 4),
(14, '4º VIDA ARMÓNICA EN COMUNIDAD (COSMOS Y PENSAMIENT', '', 'pri2-yle0.pdf', '4º VIDA ARMÓNICA EN COMUNIDAD (COSMOS Y PENSAMIENTO)', '', 2, 1, 5, 14, 2),
(15, '4º VIVIMOS EN COMUNIDAD (COMUNIDAD Y SOCIEDAD)', '', 'pri1-r8a1.pdf', '4º VIVIMOS EN COMUNIDAD (COMUNIDAD Y SOCIEDAD)', '', 2, 1, 5, 14, 1),
(16, '4º CONOCIENDO LA MARAVILLA DE LA VIDA EN NUESTRA C', '', 'pri3-8i5o.pdf', '4º CONOCIENDO LA MARAVILLA DE LA VIDA EN NUESTRA COMUNIDAD (VIDA, TIERRA Y TERRITORIO)', '', 2, 1, 5, 14, 3),
(17, '5º LA MATEMÁTICA EN LA VIDA COTIDIANA DE NUESTRA C', '', 'pri4-998v.pdf', '5º LA MATEMÁTICA EN LA VIDA COTIDIANA DE NUESTRA COMUNIDAD (CIENCIA, TECNOLOGÍA Y PRODUCCIÓN)', '', 2, 1, 5, 15, 4),
(18, '5º VIDA ARMÓNICA EN COMUNIDAD (COSMOS Y PENSAMIENT', '', 'pri2-g640.pdf', '5º VIDA ARMÓNICA EN COMUNIDAD (COSMOS Y PENSAMIENTO)', '', 2, 1, 5, 15, 2),
(19, '5º VIVIMOS EN COMUNIDAD (COMUNIDAD Y SOCIEDAD)', '', 'pri1-1atz.pdf', '5º VIVIMOS EN COMUNIDAD (COMUNIDAD Y SOCIEDAD)', '', 2, 1, 5, 15, 1),
(20, '5º CONOCIENDO LA MARAVILLA DE LA VIDA EN NUESTRA C', '', 'pri3-3hb4.pdf', '5º CONOCIENDO LA MARAVILLA DE LA VIDA EN NUESTRA COMUNIDAD (VIDA, TIERRA Y TERRITORIO)', '', 2, 1, 5, 15, 3),
(21, '6º LA MATEMÁTICA EN LA VIDA COTIDIANA DE NUESTRA C', '', 'pri4-ustf.pdf', '6º LA MATEMÁTICA EN LA VIDA COTIDIANA DE NUESTRA COMUNIDAD (CIENCIA, TECNOLOGÍA Y PRODUCCIÓN)', '', 2, 1, 5, 16, 4),
(22, '6º VIDA ARMÓNICA EN COMUNIDAD (COSMOS Y PENSAMIENT', '', 'pri2-jbmo.pdf', '6º VIDA ARMÓNICA EN COMUNIDAD (COSMOS Y PENSAMIENTO)', '', 2, 1, 5, 16, 2),
(23, '6º VIVIMOS EN COMUNIDAD (COMUNIDAD Y SOCIEDAD)', '', 'pri1-m1op.pdf', '6º VIVIMOS EN COMUNIDAD (COMUNIDAD Y SOCIEDAD)', '', 2, 1, 5, 16, 1),
(24, '6º CONOCIENDO LA MARAVILLA DE LA VIDA EN NUESTRA C', '', 'pri3-z82g.pdf', '6º CONOCIENDO LA MARAVILLA DE LA VIDA EN NUESTRA COMUNIDAD (VIDA, TIERRA Y TERRITORIO)', '', 2, 1, 5, 16, 3),
(25, '3. Primer Año, Nivel Primario, Prof Lisbeth Machac', '', 'pri3-59x3.mp4', '3. Primer Año, Nivel Primario, Prof Lisbeth Machaca - Lavado De Manos-19', '', 8, 1, 5, 11, 3),
(26, '3. Prof. Elizabeht 1Ro De Primaria Final-22', '', 'pri3-kgpw.mp4', '3. Prof. Elizabeht 1Ro De Primaria Final-22', '', 8, 1, 5, 11, 3),
(27, 'A. Primaria - 1Ro - Lisbeth - Habitos De Hiigiene ', '', 'pri3-91if.mp4', 'A. Primaria - 1Ro - Lisbeth - Habitos De Hiigiene - Jueves 11-76', '', 8, 1, 5, 11, 3),
(28, 'Primaria-1Ro-Lisbeth-Sentidos-Lunes 8-99', '', 'pri3-ui3h.mp4', 'Primaria-1Ro-Lisbeth-Sentidos-Lunes 8-99', '', 8, 1, 5, 11, 3),
(29, '1 Primaria Prof  Lisbeth Sociales Ritmos 17-2-21-1', '', 'pri1-urno.mp4', '1 Primaria Prof  Lisbeth Sociales Ritmos 17-2-21-10', '', 8, 1, 5, 11, 1),
(30, '3. Com Y Leng 1 Primaria-Lizbeth Medios De Aprendi', '', 'pri1-8tps.mp4', '3. Com Y Leng 1 Primaria-Lizbeth Medios De Aprendisaje Miercoles10-02-21-42', '', 8, 1, 5, 11, 1),
(31, '3. Primaria - 1Ro - Lisbeth - Las Vocales - Martes', '', 'pri1-aeob.mp4', '3. Primaria - 1Ro - Lisbeth - Las Vocales - Martes 9-38', '', 8, 1, 5, 11, 1),
(32, 'A. 1Ro Prof Lisbeth Leguajes Consonantes M 12-2-21', '', 'pri1-ym73.mp4', 'A. 1Ro Prof Lisbeth Leguajes Consonantes M 12-2-21 1-74', '', 8, 1, 5, 11, 1),
(33, '01 - Prim 1 - Mate - Orden Numeros - Juev 18-4', '', 'pri4-e04u.mp4', '01 - Prim 1 - Mate - Orden Numeros - Juev 18-4', '', 8, 1, 5, 11, 4),
(34, '1. Primaria - 1Er Año - Lizbeht - Los Numeros - Vi', '', 'pri4-bouj.mp4', '1. Primaria - 1Er Año - Lizbeht - Los Numeros - Viernes 5 Master-13', '', 8, 1, 5, 11, 4),
(35, '01 - Prim 2 - C Nat - El Cuerpo - Juev 18-5', '', 'pri3-0q9x.mp4', '01 - Prim 2 - C Nat - El Cuerpo - Juev 18-5', '', 8, 1, 5, 12, 3),
(36, '4. 2Do De Primaria Prof Elba Alimento Vs Chatarra-', '', 'pri3-viqr.mp4', '4. 2Do De Primaria Prof Elba Alimento Vs Chatarra-45', '', 8, 1, 5, 12, 3),
(37, '4. Primaria - 2Do Año - Elba - El Origen De Los Al', '', 'pri3-i97k.mp4', '4. Primaria - 2Do Año - Elba - El Origen De Los Alimentos-20', '', 8, 1, 5, 12, 3),
(38, '4. Sociales 2Do Prim - Elba - Buenas Acciones En L', '', 'pri1-dorw.mp4', '4. Sociales 2Do Prim - Elba - Buenas Acciones En La Comunidad.- Mierco 10-2-21-47', '', 8, 1, 5, 12, 1),
(39, '2Do Prim Elba Silabas Inverdas Lengu-34', '', 'pri1-k54m.mp4', '2Do Prim Elba Silabas Inverdas Lengu-34', '', 8, 1, 5, 12, 1),
(40, '4. Primario Segundo - Repaso De Las Vocales - Elva', '', 'pri1-93dz.mp4', '4. Primario Segundo - Repaso De Las Vocales - Elva Peralta-46', '', 8, 1, 5, 12, 1),
(41, 'B. Primaria - 2Do - Elba - Repaso Silabas Mrps Ok-', '', 'pri1-n6wc.mp4', 'B. Primaria - 2Do - Elba - Repaso Silabas Mrps Ok-78', '', 8, 1, 5, 12, 1),
(42, 'Comunicacion Y Len 2 Prim Elba P 8-2-21-107', '', 'pri1-qh6d.mp4', 'Comunicacion Y Len 2 Prim Elba P 8-2-21-107', '', 8, 1, 5, 12, 1),
(43, '4. Primaria 2Do Año Contenido 02-23', '', 'pri4-h41y.mp4', '4. Primaria 2Do Año Contenido 02-23', '', 8, 1, 5, 12, 4),
(44, 'Primaria - 2Do - Elba - Comparacion De Numeros- Ma', '', 'pri4-z7za.mp4', 'Primaria - 2Do - Elba - Comparacion De Numeros- Master - Ok-91', '', 8, 1, 5, 12, 4),
(45, 'Primaria - 2Do - Elba - Comparacion De Numeros--92', '', 'pri4-1udd.mp4', 'Primaria - 2Do - Elba - Comparacion De Numeros--92', '', 8, 1, 5, 12, 4),
(46, '5. Primaria Tercero Ciencias Naturales 9 Febrero C', '', 'pri3-8u6m.mp4', '5. Primaria Tercero Ciencias Naturales 9 Febrero Corregido-53', '', 8, 1, 5, 13, 3),
(47, 'Primaria 3Ro Elba Cuidado De La Madre Tierra Maste', '', 'pri3-0gon.mp4', 'Primaria 3Ro Elba Cuidado De La Madre Tierra Master-97', '', 8, 1, 5, 13, 3),
(48, '5. Tercero De Primaria Las Instituciones De Mi Com', '', 'pri1-pgpc.mp4', '5. Tercero De Primaria Las Instituciones De Mi Comunidad - Claudia Quisberth-55', '', 8, 1, 5, 13, 1),
(49, '00 Primaria - 3Er Año - Claudia - Los Signos De In', '', 'pri1-vjps.mp4', '00 Primaria - 3Er Año - Claudia - Los Signos De Interrogacion Y Admiracion - Master 1-21', '', 8, 1, 5, 13, 1),
(50, '00. Primaria - 3Er Año - Claudia - La Leyenda - Ma', '', 'pri1-pn89.mp4', '00. Primaria - 3Er Año - Claudia - La Leyenda - Master-24', '', 8, 1, 5, 13, 1),
(51, '01 - Prim 3 - Leng - Textos Instructivos - Juev 18', '', 'pri1-gwgn.mp4', '01 - Prim 3 - Leng - Textos Instructivos - Juev 18-6', '', 8, 1, 5, 13, 1),
(52, 'Primaria Tercero Lenguaje La Comunicación Y Sus El', '', 'pri1-894i.mp4', 'Primaria Tercero Lenguaje La Comunicación Y Sus Elementos 17 Febrero-98', '', 8, 1, 5, 13, 1),
(53, 'C. 3Ro Primaria Prof Elba-Adicion Y Terminos Emisi', '', 'pri4-l6fs.mp4', 'C. 3Ro Primaria Prof Elba-Adicion Y Terminos Emision 11-2-21 Ok-79', '', 8, 1, 5, 13, 4),
(54, 'C. 3To Prim Prof Caludia Mate Propiedad De La Adic', '', 'pri4-yiew.mp4', 'C. 3To Prim Prof Caludia Mate Propiedad De La Adicion 12-2-21-80', '', 8, 1, 5, 13, 4),
(55, '6. Ciencias Nat 4To Prima-Profe Miriam Pants Medic', '', 'pri3-51d8.mp4', '6. Ciencias Nat 4To Prima-Profe Miriam Pants Medic-64', '', 8, 1, 5, 14, 3),
(56, '6. Primaria Cuarto Ciencias Naturales 9 Febrero 2-', '', 'pri3-9gfw.mp4', '6. Primaria Cuarto Ciencias Naturales 9 Febrero 2-63', '', 8, 1, 5, 14, 3),
(57, '01 - Prim 4 - C Soc - Derechos De La Mujer - Juev ', '', 'pri1-8a8k.mp4', '01 - Prim 4 - C Soc - Derechos De La Mujer - Juev 18-7', '', 8, 1, 5, 14, 1),
(58, 'D. Primaria - 4To - C Soc - Democracia - Mirian - ', '', 'pri1-hl6c.mp4', 'D. Primaria - 4To - C Soc - Democracia - Mirian - Jueves 11-82', '', 8, 1, 5, 14, 1),
(59, '6. Primaria - 4To Año - Mirian - La Noticia - Mast', '', 'pri1-m7p4.mp4', '6. Primaria - 4To Año - Mirian - La Noticia - Master-22', '', 8, 1, 5, 14, 1),
(60, 'Primaria - 4To - Legn - Sujeto Predicado - Mierc 1', '', 'pri1-eqqt.mp4', 'Primaria - 4To - Legn - Sujeto Predicado - Mierc 17-93', '', 8, 1, 5, 14, 1),
(61, '0. Primaria - 4To Año - Mirian - Numeros Ordinales', '', 'pri4-fdp1.mp4', '0. Primaria - 4To Año - Mirian - Numeros Ordinales - Master-25', '', 8, 1, 5, 14, 4),
(62, '6. Primaria - 4To Año - Mirian - Las Fracciones - ', '', 'pri4-9e24.mp4', '6. Primaria - 4To Año - Mirian - Las Fracciones - Viernes 5 Master-62', '', 8, 1, 5, 14, 4),
(63, 'D. Primaria - 4To - Mate - Suma Terminos - Viernes', '', 'pri4-5uiv.mp4', 'D. Primaria - 4To - Mate - Suma Terminos - Viernes 12-83', '', 8, 1, 5, 14, 4),
(64, 'Mate 4To Prim Miriam Z 8-2-21 Corregido-108', '', 'pri4-v6nr.mp4', 'Mate 4To Prim Miriam Z 8-2-21 Corregido-108', '', 8, 1, 5, 14, 4),
(65, '5To De Prim Prof Jimena Pisos Ecologicos Corregido', '', 'pri3-iy0a.mp4', '5To De Prim Prof Jimena Pisos Ecologicos Corregido-59', '', 8, 1, 5, 15, 3),
(66, '7. Video 5To De Primaria.Prof. Jimena. Transporte-', '', 'pri1-rlon.mp4', '7. Video 5To De Primaria.Prof. Jimena. Transporte-26', '', 8, 1, 5, 15, 1),
(67, '7. Primaria - 5To Año - Jimena - Dialogo - Master-', '', 'pri1-d3bf.mp4', '7. Primaria - 5To Año - Jimena - Dialogo - Master-70', '', 8, 1, 5, 15, 1),
(68, 'E. Primaria - 5To - Jimena - Sustantivos Articulos', '', 'pri1-hetm.mp4', 'E. Primaria - 5To - Jimena - Sustantivos Articulos - Lunes 8 - Master  Final-85', '', 8, 1, 5, 15, 1),
(69, 'E. Primaria Quinto Lenguaje 11 Febrero-86', '', 'pri1-e5cx.mp4', 'E. Primaria Quinto Lenguaje 11 Febrero-86', '', 8, 1, 5, 15, 1),
(70, 'Primaria - 5To - Com Leng - La Receta - Mierc 17-9', '', 'pri1-i4mi.mp4', 'Primaria - 5To - Com Leng - La Receta - Mierc 17-94', '', 8, 1, 5, 15, 1),
(71, 'Primaria - 5To - Jimena - Sustantivos Articulos - ', '', 'pri1-ze9c.mp4', 'Primaria - 5To - Jimena - Sustantivos Articulos - Lunes 8 - Master  Final-95', '', 8, 1, 5, 15, 1),
(72, '00 Video 5To De Primaria.Prof Jimena. Operaciones ', '', 'pri4-lt08.mp4', '00 Video 5To De Primaria.Prof Jimena. Operaciones Mat.--23', '', 8, 1, 5, 15, 4),
(73, '00. Prim 5 Mate - Propiesdades Multimplicacion', '', 'pri4-k15h.mp4', '00. Prim 5 Mate - Propiesdades Multimplicacion', '', 8, 1, 5, 15, 4),
(74, '01 - Prim 5 - Mate - La Division Y Su Prueba - Jue', '', 'pri4-qv2f.mp4', '01 - Prim 5 - Mate - La Division Y Su Prueba - Juev 18-8', '', 8, 1, 5, 15, 4),
(75, '00 Video Prof. Maria. Sexto De Primaria.Cambio Cli', '', 'pri3-bmhi.mp4', '00 Video Prof. Maria. Sexto De Primaria.Cambio Climático -27', '', 8, 1, 5, 16, 3),
(76, '01 - Prim 6 - C Naturales - Pisos Eco - Juev 18-9', '', 'pri3-kioj.mp4', '01 - Prim 6 - C Naturales - Pisos Eco - Juev 18-9', '', 8, 1, 5, 16, 3),
(77, '8. Primaria - 6To Año - Maria - Nuestra Raices - M', '', 'pri1-dvsu.mp4', '8. Primaria - 6To Año - Maria - Nuestra Raices - Master-73', '', 8, 1, 5, 16, 1),
(78, 'F. 6To Prim-Prof Jhovana 11-2-21 Corregido-89', '', 'pri1-kikl.mp4', 'F. 6To Prim-Prof Jhovana 11-2-21 Corregido-89', '', 8, 1, 5, 16, 1),
(79, 'Tercero De Primaria - Ciencias Sociales -Medios De', '', 'pri1-ehz3.mp4', 'Tercero De Primaria - Ciencias Sociales -Medios De Comunicación-106', '', 8, 1, 5, 13, 1),
(80, '6To Prim Marìa Lenguaje Tema Poema 17-2-21 65', '', 'pri1-0gpd.mp4', '6To Prim Marìa Lenguaje Tema Poema 17-2-21 65', '', 8, 1, 5, 16, 1),
(81, '6To Primaria Lenguaje Corregido-66', '', 'pri1-4i5r.mp4', '6To Primaria Lenguaje Corregido-66', '', 8, 1, 5, 16, 1),
(82, '8. Primaria - 6To - Maria - La Narracion - Martes ', '', 'pri1-x4vh.mp4', '8. Primaria - 6To - Maria - La Narracion - Martes 9-72', '', 8, 1, 5, 16, 1),
(83, 'Primaria - 6To - Maria - Leyenda - Miercoles 10 - ', '', 'pri1-bxk4.mp4', 'Primaria - 6To - Maria - Leyenda - Miercoles 10 - Master Ok-96', '', 8, 1, 5, 16, 1),
(84, '0. Operaciones Combinadas Sexto De Primaria-24', '', 'pri4-hce6.mp4', '0. Operaciones Combinadas Sexto De Primaria-24', '', 8, 1, 5, 16, 4),
(85, 'F. 6To  Ejer Operaciones Combinadas Prof Maria Mat', '', 'pri4-t2u2.mp4', 'F. 6To  Ejer Operaciones Combinadas Prof Maria Mate 12-2-21 Corregido Fin-88', '', 8, 1, 5, 16, 4),
(86, 'Sexto Primaria Fracciones-109', '', 'pri4-qzs4.mp4', 'Sexto Primaria Fracciones-109', '', 8, 1, 5, 16, 4),
(87, '22-02-21- 1 Primaria', '', 'pri3-vqeh.mp4', '22-02-21- 1 Primaria', '', 8, 1, 5, 11, 3),
(88, '24-02-21- 1 Primaria-17', '', 'pri1-5ov8.mp4', '24-02-21- 1 Primaria-17', '', 8, 1, 5, 11, 1),
(89, '19-02-21- 1 Primaria', '', 'pri1-289l.mp4', '19-02-21- 1 Primaria', '', 8, 1, 5, 11, 1),
(90, '23-02-21- 1 Primaria-3', '', 'pri1-fst9.mp4', '23-02-21- 1 Primaria-3', '', 8, 1, 5, 11, 1),
(91, '19-02-21- 2 Primaria', '', 'pri1-86se.mp4', '19-02-21- 2 Primaria', '', 8, 1, 5, 12, 1),
(92, '24-02-21- 2 Primaria-19', '', 'pri1-ewct.mp4', '24-02-21- 2 Primaria-19', '', 8, 1, 5, 12, 1),
(93, '23-02-21- 2 Primaria-6', '', 'pri1-9rsi.mp4', '23-02-21- 2 Primaria-6', '', 8, 1, 5, 12, 1),
(94, '22-02-21- 2 Primaria', '', 'pri4-1bzm.mp4', '22-02-21- 2 Primaria', '', 8, 1, 5, 12, 4),
(95, '22-02-21- 3 Primaria', '', 'pri3-ufv8.mp4', '22-02-21- 3 Primaria', '', 8, 1, 5, 13, 3),
(96, '23-02-21- 3 Primaria-8', '', 'pri1-rw7p.mp4', '23-02-21- 3 Primaria-8', '', 8, 1, 5, 13, 1),
(97, '24-02-21- 3 Primaria-20', '', 'pri1-e9p2.mp4', '24-02-21- 3 Primaria-20', '', 8, 1, 5, 13, 1),
(98, '19-02-21- 3 Primaria', '', 'pri4-mx4u.mp4', '19-02-21- 3 Primaria', '', 8, 1, 5, 13, 4),
(99, '23-02-21- 4 Primaria-10', '', 'pri3-jlar.mp4', '23-02-21- 4 Primaria-10', '', 8, 1, 5, 14, 3),
(100, '24-02-21- 4 Primaria-21', '', 'pri1-za9b.mp4', '24-02-21- 4 Primaria-21', '', 8, 1, 5, 14, 1),
(101, '19-02-21- 4 Primaria', '', 'pri4-m8b2.mp4', '19-02-21- 4 Primaria', '', 8, 1, 5, 14, 4),
(102, '22-02-21- 4 Primaria', '', 'pri4-16fq.mp4', '22-02-21- 4 Primaria', '', 8, 1, 5, 14, 4),
(103, '22-02-21- 5 Primaria', '', 'pri3-lbbf.mp4', '22-02-21- 5 Primaria', '', 8, 1, 5, 15, 3),
(104, '19-02-21- 5 Primaria', '', 'pri1-vb4i.mp4', '19-02-21- 5 Primaria', '', 8, 1, 5, 15, 1),
(105, '24-02-21- 5 Primaria-24', '', 'pri1-p62d.mp4', '24-02-21- 5 Primaria-24', '', 8, 1, 5, 15, 1),
(106, '23-02-21- 5 Primaria-12', '', 'pri4-grna.mp4', '23-02-21- 5 Primaria-12', '', 8, 1, 5, 15, 4),
(107, '23-02-21- 6 Primaria-14', '', 'pri3-ze0k.mp4', '23-02-21- 6 Primaria-14', '', 8, 1, 5, 16, 3),
(108, '24-02-21- 6 Primaria-27', '', 'pri1-rsvr.mp4', '24-02-21- 6 Primaria-27', '', 8, 1, 5, 16, 1),
(109, '19-02-21- 6 Primaria', '', 'pri4-amzw.mp4', '19-02-21- 6 Primaria', '', 8, 1, 5, 16, 4),
(110, '22-02-21- 6 Primaria', '', 'pri4-btdg.mp4', '22-02-21- 6 Primaria', '', 8, 1, 5, 16, 4),
(111, '01-03-21- 1 Primaria-2', '', 'pri3-zdbr.mp4', '01-03-21- 1 Primaria-2', '', 8, 1, 5, 11, 3),
(112, '03-03-21- 1 Primaria-29', '', 'pri1-nma1.mp4', '03-03-21- 1 Primaria-29', '', 8, 1, 5, 11, 1),
(113, '02-03-21- 1 Primaria-15', '', 'pri1-291v.mp4', '02-03-21- 1 Primaria-15', '', 8, 1, 5, 11, 1),
(114, '05-03-21- 1 Primaria-57', '', 'pri1-rnb3.mp4', '05-03-21- 1 Primaria-57', '', 8, 1, 5, 11, 1),
(115, '04-03-21- 1 Primaria-43', '', 'pri4-e96l.mp4', '04-03-21- 1 Primaria-43', '', 8, 1, 5, 11, 4),
(116, '04-03-21- 2 Primaria-46', '', 'pri3-h1y5.mp4', '04-03-21- 2 Primaria-46', '', 8, 1, 5, 12, 3),
(117, '02-03-21- 2 Primaria-18', '', 'pri1-56cb.mp4', '02-03-21- 2 Primaria-18', '', 8, 1, 5, 12, 1),
(118, '01-03-21- 2 Primaria-5', '', 'pri1-wzaq.mp4', '01-03-21- 2 Primaria-5', '', 8, 1, 5, 12, 1),
(119, '05-03-21- 2 Primaria-60', '', 'pri1-hb6o.mp4', '05-03-21- 2 Primaria-60', '', 8, 1, 5, 12, 1),
(120, '03-03-21- 2 Primaria-31', '', 'pri4-majr.mp4', '03-03-21- 2 Primaria-31', '', 8, 1, 5, 12, 4),
(121, '03-03-21- 3 Primaria-32', '', 'pri3-czfk.mp4', '03-03-21- 3 Primaria-32', '', 8, 1, 5, 13, 3),
(122, '01-03-21- 3 Primaria-7', '', 'pri1-2w6n.mp4', '01-03-21- 3 Primaria-7', '', 8, 1, 5, 13, 1),
(123, '04-03-21- 3 Primaria-48', '', 'pri1-2rtb.mp4', '04-03-21- 3 Primaria-48', '', 8, 1, 5, 13, 1),
(124, '05-03-21- 3 Primaria-62', '', 'pri1-7inr.mp4', '05-03-21- 3 Primaria-62', '', 8, 1, 5, 13, 1),
(125, '02-03-21- 3 Primaria-20', '', 'pri4-2v0c.mp4', '02-03-21- 3 Primaria-20', '', 8, 1, 5, 13, 4),
(126, '03-03-21- 4 Primaria-33', '', 'pri1-dsvi.mp4', '03-03-21- 4 Primaria-33', '', 8, 1, 5, 14, 1),
(127, '01-03-21- 4 Primaria-9', '', 'pri1-d8ai.mp4', '01-03-21- 4 Primaria-9', '', 8, 1, 5, 14, 1),
(128, '02-03-21- 4 Primaria-22', '', 'pri1-1lcs.mp4', '02-03-21- 4 Primaria-22', '', 8, 1, 5, 14, 1),
(129, '04-03-21- 4 Primaria-52', '', 'pri4-d9eg.mp4', '04-03-21- 4 Primaria-52', '', 8, 1, 5, 14, 4),
(130, '05-03-21- 4 Primaria-64', '', 'pri4-rfpc.mp4', '05-03-21- 4 Primaria-64', '', 8, 1, 5, 14, 4),
(131, '03-03-21- 5 Primaria-36', '', 'pri3-d1rx.mp4', '03-03-21- 5 Primaria-36', '', 8, 1, 5, 15, 3),
(132, '02-03-21- 5 Primaria-24', '', 'pri1-gfy1.mp4', '02-03-21- 5 Primaria-24', '', 8, 1, 5, 15, 1),
(133, '04-03-21- 5 Primaria-54', '', 'pri4-nf1y.mp4', '04-03-21- 5 Primaria-54', '', 8, 1, 5, 15, 4),
(134, '05-03-21- 5 Primaria-66', '', 'pri4-tbmq.mp4', '05-03-21- 5 Primaria-66', '', 8, 1, 5, 15, 4),
(135, '03-03-21- 6 Primaria-39', '', 'pri3-b7o8.mp4', '03-03-21- 6 Primaria-39', '', 8, 1, 5, 16, 3),
(136, '04-03-21- 6 Primaria-55', '', 'pri1-mpia.mp4', '04-03-21- 6 Primaria-55', '', 8, 1, 5, 16, 1),
(137, '02-03-21- 6 Primaria-26', '', 'pri1-6pj0.mp4', '02-03-21- 6 Primaria-26', '', 8, 1, 5, 16, 1),
(138, '05-03-21- 6 Primaria-68', '', 'pri1-4zqe.mp4', '05-03-21- 6 Primaria-68', '', 8, 1, 5, 16, 1),
(139, '01-03-21- 6 Primaria-12', '', 'pri4-ngxo.mp4', '01-03-21- 6 Primaria-12', '', 8, 1, 5, 16, 4),
(140, '08-03-21- 1 Primaria – Ciencias Nat-2', '', 'pri3-qpvy.mp4', '08-03-21- 1 Primaria – Ciencias Nat-2', '', 8, 1, 5, 11, 3),
(141, '15-03-21- 1 Primaria – Ciencias Naturales-71', '', 'pri3-zwwa.mp4', '15-03-21- 1 Primaria – Ciencias Naturales-71', '', 8, 1, 5, 11, 3),
(142, '18-03-21- 1 Primaria – Ciencias Naturales-113', '', 'pri3-btfj.mp4', '18-03-21- 1 Primaria – Ciencias Naturales-113', '', 8, 1, 5, 11, 3),
(143, '10-03-21- 1 Primaria – Ciencias Soc-30', '', 'pri1-bige.mp4', '10-03-21- 1 Primaria – Ciencias Soc-30', '', 8, 1, 5, 11, 1),
(144, '16-03-21- 1 Primaria – Ciencias Socia-85', '', 'pri1-led8.mp4', '16-03-21- 1 Primaria – Ciencias Socia-85', '', 8, 1, 5, 11, 1),
(145, '09-03-21- 1 Primaria C Len-16', '', 'pri1-rsm2.mp4', '09-03-21- 1 Primaria C Len-16', '', 8, 1, 5, 11, 1),
(146, '12-03-21- 1 Primaria – Clen-57', '', 'pri1-1g9u.mp4', '12-03-21- 1 Primaria – Clen-57', '', 8, 1, 5, 11, 1),
(147, '19-03-21- 1 Primaria – Comunicación Y Lenguaje-127', '', 'pri1-u5us.mp4', '19-03-21- 1 Primaria – Comunicación Y Lenguaje-127', '', 8, 1, 5, 11, 1),
(148, '11-03-21- 1 Primaria – Matemática-44', '', 'pri4-7dnt.mp4', '11-03-21- 1 Primaria – Matemática-44', '', 8, 1, 5, 11, 4),
(149, '17-03-21- 1 Primaria – Matemáti-99', '', 'pri4-3qpc.mp4', '17-03-21- 1 Primaria – Matemáti-99', '', 8, 1, 5, 11, 4),
(150, '22-03-21- 1 Primaria – Matemática', '', 'pri4-wevc.mp4', '22-03-21- 1 Primaria – Matemática', '', 8, 1, 5, 11, 4),
(151, '17-03-21- 2 Primaria – Ciencias Naturale-101', '', 'pri3-jx0y.mp4', '17-03-21- 2 Primaria – Ciencias Naturale-101', '', 8, 1, 5, 12, 3),
(152, '08-03-21- 2 Primaria – Ciencias Sociale-5', '', 'pri1-g3pc.mp4', '08-03-21- 2 Primaria – Ciencias Sociale-5', '', 8, 1, 5, 12, 1),
(153, '19-03-21- 2 Primaria – Ciencias Sociales-130', '', 'pri1-00ls.mp4', '19-03-21- 2 Primaria – Ciencias Sociales-130', '', 8, 1, 5, 12, 1),
(154, '09-03-21- 2 Primaria – Comunicación Y Lenguajes-19', '', 'pri1-ah8g.mp4', '09-03-21- 2 Primaria – Comunicación Y Lenguajes-19', '', 8, 1, 5, 12, 1),
(155, '11-03-21- 2 Primaria – Comunicación Y Lenguaj-47', '', 'pri1-gwcv.mp4', '11-03-21- 2 Primaria – Comunicación Y Lenguaj-47', '', 8, 1, 5, 12, 1),
(156, '15-03-21- 2 Primaria – Comunicación Y Lenguaj-74', '', 'pri1-goe7.mp4', '15-03-21- 2 Primaria – Comunicación Y Lenguaj-74', '', 8, 1, 5, 12, 1),
(157, '18-03-21- 2 Primaria – Comunicación Y Leng-116', '', 'pri1-4z39.mp4', '18-03-21- 2 Primaria – Comunicación Y Leng-116', '', 8, 1, 5, 12, 1),
(158, '22-03-21- 2 Primaria – Comunicación y Lenguaj', '', 'pri1-e5fi.mp4', '22-03-21- 2 Primaria – Comunicación y Lenguaj', '', 8, 1, 5, 12, 1),
(159, '10-03-21- 2 Primaria –Cnat-32', '', 'pri4-jp49.mp4', '10-03-21- 2 Primaria –Cnat-32', '', 8, 1, 5, 12, 4),
(160, '12-03-21- 2 Primaria – Matemática-60', '', 'pri4-6fb9.mp4', '12-03-21- 2 Primaria – Matemática-60', '', 8, 1, 5, 12, 4),
(161, '16-03-21- 2 Primaria – Matemática-88', '', 'pri4-nwxs.mp4', '16-03-21- 2 Primaria – Matemática-88', '', 8, 1, 5, 12, 4),
(162, '09-03-21- 3 Primaria – Ciencias Naturales-21', '', 'pri3-kqg1.mp4', '09-03-21- 3 Primaria – Ciencias Naturales-21', '', 8, 1, 5, 13, 3),
(163, '16-03-21- 3 Primaria – Ciencias Natural-90', '', 'pri3-no9a.mp4', '16-03-21- 3 Primaria – Ciencias Natural-90', '', 8, 1, 5, 13, 3),
(164, '19-03-21- 3 Primaria – Ciencias Sociale-132', '', 'pri1-vo0l.mp4', '19-03-21- 3 Primaria – Ciencias Sociale-132', '', 8, 1, 5, 13, 1),
(165, '22-03-21- 3 Primaria – Ciencias Sociales', '', 'pri1-k9n1.mp4', '22-03-21- 3 Primaria – Ciencias Sociales', '', 8, 1, 5, 13, 1),
(166, '08-03-21- 3 Primaria – Comunicación Y Lenguajes-7', '', 'pri1-8n5z.mp4', '08-03-21- 3 Primaria – Comunicación Y Lenguajes-7', '', 8, 1, 5, 13, 1),
(167, '10-03-21- 3 Primaria – Comunicación Y Len-33', '', 'pri1-lr35.mp4', '10-03-21- 3 Primaria – Comunicación Y Len-33', '', 8, 1, 5, 13, 1),
(168, '12-03-21- 3 Primaria – Comunicación Y Lenguaje-62', '', 'pri1-9bx2.mp4', '12-03-21- 3 Primaria – Comunicación Y Lenguaje-62', '', 8, 1, 5, 13, 1),
(169, '15-03-21- 3 Primaria – Comunicación Y Lenguajes-76', '', 'pri1-nun5.mp4', '15-03-21- 3 Primaria – Comunicación Y Lenguajes-76', '', 8, 1, 5, 13, 1),
(170, '17-03-21- 3 Primaria – Comunicación Y Lenguaj-102', '', 'pri1-x5qd.mp4', '17-03-21- 3 Primaria – Comunicación Y Lenguaj-102', '', 8, 1, 5, 13, 1),
(171, '11-03-21- 3 Primaria – Matemática-49', '', 'pri4-fxab.mp4', '11-03-21- 3 Primaria – Matemática-49', '', 8, 1, 5, 13, 4),
(172, '18-03-21- 3 Primaria – Matemática-118', '', 'pri4-awkx.mp4', '18-03-21- 3 Primaria – Matemática-118', '', 8, 1, 5, 13, 4),
(173, '09-03-21- 4 Primaria – Ciencias Naturales-23', '', 'pri3-8jkh.mp4', '09-03-21- 4 Primaria – Ciencias Naturales-23', '', 8, 1, 5, 14, 3),
(174, '16-03-21- 4 Primaria – Ciencias Naturales-92', '', 'pri3-u3tk.mp4', '16-03-21- 4 Primaria – Ciencias Naturales-92', '', 8, 1, 5, 14, 3),
(175, '19-03-21- 4 Primaria – Ciencias Naturales-134', '', 'pri3-ukox.mp4', '19-03-21- 4 Primaria – Ciencias Naturales-134', '', 8, 1, 5, 14, 3),
(176, '10-03-21- 4 Primaria – Ciencias Sociale-34', '', 'pri1-fiuo.mp4', '10-03-21- 4 Primaria – Ciencias Sociale-34', '', 8, 1, 5, 14, 1),
(177, '18-03-21- 4 Primaria – Ciencias Sociales-122', '', 'pri1-rztc.mp4', '18-03-21- 4 Primaria – Ciencias Sociales-122', '', 8, 1, 5, 14, 1),
(178, '08-03-21- 4 Primaria – Comunicación Y Lenguaj-9', '', 'pri1-fm92.mp4', '08-03-21- 4 Primaria – Comunicación Y Lenguaj-9', '', 8, 1, 5, 14, 1),
(179, '17-03-21- 4 Primaria – Comunicación Y Lenguajes-10', '', 'pri1-out3.mp4', '17-03-21- 4 Primaria – Comunicación Y Lenguajes-103', '', 8, 1, 5, 14, 1),
(180, '11-03-21- 4 Primaria – Matemática-53', '', 'pri4-m39r.mp4', '11-03-21- 4 Primaria – Matemática-53', '', 8, 1, 5, 14, 4),
(181, '12-03-21- 4 Primaria – Matemática-64', '', 'pri4-jb9c.mp4', '12-03-21- 4 Primaria – Matemática-64', '', 8, 1, 5, 14, 4),
(182, '15-03-21- 4 Primaria – Matemática-78', '', 'pri4-9z6c.mp4', '15-03-21- 4 Primaria – Matemática-78', '', 8, 1, 5, 14, 4),
(183, '22-03-21- 4 Primaria – Matemática', '', 'pri4-h7gx.mp4', '22-03-21- 4 Primaria – Matemática', '', 8, 1, 5, 14, 4),
(184, '08-03-21- 5 Primaria – Ciencias Naturales-11', '', 'pri3-qv66.mp4', '08-03-21- 5 Primaria – Ciencias Naturales-11', '', 8, 1, 5, 15, 3),
(185, '10-03-21- 5 Primaria – Ciencias Naturales-37', '', 'pri3-rf1f.mp4', '10-03-21- 5 Primaria – Ciencias Naturales-37', '', 8, 1, 5, 15, 3),
(186, '18-03-21- 5 Primaria – Ciencias Natural-124', '', 'pri3-ubhk.mp4', '18-03-21- 5 Primaria – Ciencias Natural-124', '', 8, 1, 5, 15, 3),
(187, '17-03-21- 5 Primaria – Ciencias Sociales-106', '', 'pri1-5y8b.mp4', '17-03-21- 5 Primaria – Ciencias Sociales-106', '', 8, 1, 5, 15, 1),
(188, '12-03-21- 5 Primaria – Comunicación Y Lenguaje-66', '', 'pri1-yh52.mp4', '12-03-21- 5 Primaria – Comunicación Y Lenguaje-66', '', 8, 1, 5, 15, 1),
(189, '09-03-21- 5 Primaria – Matemática-25', '', 'pri4-n1mf.mp4', '09-03-21- 5 Primaria – Matemática-25', '', 8, 1, 5, 15, 4),
(190, '11-03-21- 5 Primaria – Matemática-55', '', 'pri4-khjd.mp4', '11-03-21- 5 Primaria – Matemática-55', '', 8, 1, 5, 15, 4),
(191, '15-03-21- 5 Primaria – Matemática-80', '', 'pri4-0ayu.mp4', '15-03-21- 5 Primaria – Matemática-80', '', 8, 1, 5, 15, 4),
(192, '16-03-21- 5 Primaria – Matemática-94', '', 'pri4-3597.mp4', '16-03-21- 5 Primaria – Matemática-94', '', 8, 1, 5, 15, 4),
(193, '19-03-21- 5 Primaria – Matemática-136', '', 'pri4-k0xh.mp4', '19-03-21- 5 Primaria – Matemática-136', '', 8, 1, 5, 15, 4),
(194, '22-03-21- 5 Primaria – Matemática', '', 'pri4-h0ax.mp4', '22-03-21- 5 Primaria – Matemática', '', 8, 1, 5, 15, 4),
(195, '10-03-21- 6 Primaria – Ciencias Natural-40', '', 'pri3-rfnw.mp4', '10-03-21- 6 Primaria – Ciencias Natural-40', '', 8, 1, 5, 16, 3),
(196, '12-03-21- 6 Primaria – Ciencias Naturales-68', '', 'pri3-yh44.mp4', '12-03-21- 6 Primaria – Ciencias Naturales-68', '', 8, 1, 5, 16, 3),
(197, '16-03-21- 6 Primaria – Ciencias Naturales-96', '', 'pri3-l2yn.mp4', '16-03-21- 6 Primaria – Ciencias Naturales-96', '', 8, 1, 5, 16, 3),
(198, '11-03-21- 6 Primaria – Ciencias Sociale-56', '', 'pri1-cwla.mp4', '11-03-21- 6 Primaria – Ciencias Sociale-56', '', 8, 1, 5, 16, 1),
(199, '18-03-21- 6 Primaria – Ciencias Sociale-125', '', 'pri1-a3l1.mp4', '18-03-21- 6 Primaria – Ciencias Sociale-125', '', 8, 1, 5, 16, 1),
(200, '09-03-21- 6 Primaria – Comunicación Y Lenguajes-27', '', 'pri1-ai3l.mp4', '09-03-21- 6 Primaria – Comunicación Y Lenguajes-27', '', 8, 1, 5, 16, 1),
(201, '17-03-21- 6 Primaria – Comunicación Y Lenguajes-10', '', 'pri1-b0vq.mp4', '17-03-21- 6 Primaria – Comunicación Y Lenguajes-109', '', 8, 1, 5, 16, 1),
(202, '08-03-21- 6 Primaria – Matemática-13', '', 'pri4-w1dh.mp4', '08-03-21- 6 Primaria – Matemática-13', '', 8, 1, 5, 16, 4),
(203, '15-03-21- 6 Primaria – Matemática-82', '', 'pri4-6ha6.mp4', '15-03-21- 6 Primaria – Matemática-82', '', 8, 1, 5, 16, 4),
(204, '19-03-21- 6 Primaria – Matemática-138', '', 'pri4-eqme.mp4', '19-03-21- 6 Primaria – Matemática-138', '', 8, 1, 5, 16, 4),
(205, '22-03-21- 6 Primaria – Matemática', '', 'pri4-cvax.mp4', '22-03-21- 6 Primaria – Matemática', '', 8, 1, 5, 16, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mat_campo`
--
ALTER TABLE `mat_campo`
  ADD UNIQUE KEY `cod_codcam` (`cod_codcam`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mat_campo`
--
ALTER TABLE `mat_campo`
  MODIFY `cod_codcam` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
