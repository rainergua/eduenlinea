-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2021 a las 04:56:29
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
(79, 'Tercero De Primaria - Ciencias Sociales -Medios De', '', 'pri1-ehz3.mp4', 'Tercero De Primaria - Ciencias Sociales -Medios De Comunicación-106', '', 8, 1, 5, 16, 1),
(80, '6To Prim Marìa Lenguaje Tema Poema 17-2-21 65', '', 'pri1-0gpd.mp4', '6To Prim Marìa Lenguaje Tema Poema 17-2-21 65', '', 8, 1, 5, 16, 1),
(81, '6To Primaria Lenguaje Corregido-66', '', 'pri1-4i5r.mp4', '6To Primaria Lenguaje Corregido-66', '', 8, 1, 5, 16, 1),
(82, '8. Primaria - 6To - Maria - La Narracion - Martes ', '', 'pri1-x4vh.mp4', '8. Primaria - 6To - Maria - La Narracion - Martes 9-72', '', 8, 1, 5, 16, 1),
(83, 'Primaria - 6To - Maria - Leyenda - Miercoles 10 - ', '', 'pri1-bxk4.mp4', 'Primaria - 6To - Maria - Leyenda - Miercoles 10 - Master Ok-96', '', 8, 1, 5, 16, 1),
(84, '0. Operaciones Combinadas Sexto De Primaria-24', '', 'pri4-hce6.mp4', '0. Operaciones Combinadas Sexto De Primaria-24', '', 8, 1, 5, 16, 4),
(85, 'F. 6To  Ejer Operaciones Combinadas Prof Maria Mat', '', 'pri4-t2u2.mp4', 'F. 6To  Ejer Operaciones Combinadas Prof Maria Mate 12-2-21 Corregido Fin-88', '', 8, 1, 5, 16, 4),
(86, 'Sexto Primaria Fracciones-109', '', 'pri4-qzs4.mp4', 'Sexto Primaria Fracciones-109', '', 8, 1, 5, 16, 4);

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
  MODIFY `cod_codcam` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
