-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2021 a las 05:30:27
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
-- Estructura de tabla para la tabla `material_area`
--

CREATE TABLE `material_area` (
  `cod_mat` bigint(20) UNSIGNED NOT NULL,
  `des_mat` varchar(100) NOT NULL,
  `img_mat` varchar(50) NOT NULL,
  `arch_mat` varchar(50) NOT NULL,
  `txt_mat` text NOT NULL,
  `lnk_mat` varchar(300) NOT NULL,
  `ext_mat` varchar(10) NOT NULL,
  `cod_tipo` int(11) NOT NULL,
  `cod_sis` int(11) NOT NULL,
  `cod_niv` int(11) NOT NULL,
  `cod_gra` int(11) NOT NULL,
  `cod_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `material_area`
--

INSERT INTO `material_area` (`cod_mat`, `des_mat`, `img_mat`, `arch_mat`, `txt_mat`, `lnk_mat`, `ext_mat`, `cod_tipo`, `cod_sis`, `cod_niv`, `cod_gra`, `cod_area`) VALUES
(1, '1RO ARTES PLÁSTICAS', '', 'sec291-kuuk.pdf', '1RO ARTES PLÁSTICAS', '', '', 2, 1, 6, 17, 291),
(2, '1RO CIENCIAS NATURALES', '', 'sec9-47si.pdf', '1RO CIENCIAS NATURALES', '', '', 2, 1, 6, 17, 9),
(3, '1RO CIENCIAS SOCIALES', '', 'sec10-bku1.pdf', '1RO CIENCIAS SOCIALES', '', '', 2, 1, 6, 17, 10),
(4, '1RO EDUCACIÓN FÍSICA DEPORTES', '', 'sec249-f5ot.pdf', '1RO EDUCACIÓN FÍSICA DEPORTES', '', '', 2, 1, 6, 17, 249),
(5, '1RO COMUNICACIÓN Y LENGUAJES', '', 'sec8-7tfe.pdf', '1RO COMUNICACIÓN Y LENGUAJES', '', '', 2, 1, 6, 17, 8),
(6, '1RO LENGUA EXTRANJERA', '', 'sec292-tqy4.pdf', '1RO LENGUA EXTRANJERA', '', '', 2, 1, 6, 17, 292),
(7, '1RO MATEMÁTICA', '', 'sec5-fwkj.pdf', '1RO MATEMÁTICA', '', '', 2, 1, 6, 17, 5),
(8, '1RO EDUCACIÓN MUSICAL', '', 'sec255-p7pq.pdf', '1RO EDUCACIÓN MUSICAL', '', '', 2, 1, 6, 17, 255),
(9, '1RO COSMOS, FILOSOFÍA Y SICOLOGÍA', '', 'sec293-6or8.pdf', '1RO COSMOS, FILOSOFÍA Y SICOLOGÍA', '', '', 2, 1, 6, 17, 293),
(10, '1RO VALORES ESPIRITUALIDADES Y RELIGIONES', '', 'sec294-cgki.pdf', '1RO VALORES ESPIRITUALIDADES Y RELIGIONES', '', '', 2, 1, 6, 17, 294),
(11, '1RO TECNICA TECNOLÓGICA', '', 'sec318-dp5q.pdf', '1RO TECNICA TECNOLÓGICA', '', '', 2, 1, 6, 17, 318),
(12, '2do año ARTES PLASTICAS Y VISUALES', '', 'sec296-k1b9.pdf', '2do año ARTES PLASTICAS Y VISUALES', '', '', 2, 1, 6, 18, 296),
(13, '2do año CIENCIAS NATURALES', '', 'sec68-rxtt.pdf', '2do año CIENCIAS NATURALES', '', '', 2, 1, 6, 18, 68),
(14, '2do año CIENCIAS SOCIALES', '', 'sec69-27r9.pdf', '2do año CIENCIAS SOCIALES', '', '', 2, 1, 6, 18, 69),
(15, '2do año EDUCACION FISICA', '', 'sec250-vop2.pdf', '2do año EDUCACION FISICA', '', '', 2, 1, 6, 18, 250),
(16, '2do año COMUNICACION Y LENGUAJE', '', 'sec67-xtw7.pdf', '2do año COMUNICACION Y LENGUAJE', '', '', 2, 1, 6, 18, 67),
(17, '2do año LENGUA EXTRANJERA', '', 'sec297-14lb.pdf', '2do año LENGUA EXTRANJERA', '', '', 2, 1, 6, 18, 297),
(18, '2do año MATEMATICAS', '', 'sec64-oci7.pdf', '2do año MATEMATICAS', '', '', 2, 1, 6, 18, 64),
(19, '2do año EDUCACION MUSICAL', '', 'sec256-mx9k.pdf', '2do año EDUCACION MUSICAL', '', '', 2, 1, 6, 18, 256),
(20, '2do año COSMOVISIONES FILOSOFIA Y SICOLOGIA', '', 'sec298-k0cw.pdf', '2do año COSMOVISIONES FILOSOFIA Y SICOLOGIA', '', '', 2, 1, 6, 18, 298),
(21, '2do año VALORES ESPIRITUALIDADES Y RELIGIONES', '', 'sec299-hets.pdf', '2do año VALORES ESPIRITUALIDADES Y RELIGIONES', '', '', 2, 1, 6, 18, 299),
(22, '2do año TECNICA TECNOLOGICA GENERAL', '', 'sec319-fk32.pdf', '2do año TECNICA TECNOLOGICA GENERAL', '', '', 2, 1, 6, 18, 319),
(23, '3RO ARTES PLÁSTICAS', '', 'sec300-ui7d.pdf', '3RO ARTES PLÁSTICAS', '', '', 2, 1, 6, 19, 300),
(24, '3RO BIOLOGÍA', '', 'sec75-sje7.pdf', '3RO BIOLOGÍA', '', '', 2, 1, 6, 19, 75),
(25, '3RO CIENCIAS SOCIALES', '', 'sec76-zbbo.pdf', '3RO CIENCIAS SOCIALES', '', '', 2, 1, 6, 19, 76),
(26, '3RO EDUCACIÓN FÍSICA Y DEPORTES', '', 'sec251-zoob.pdf', '3RO EDUCACIÓN FÍSICA Y DEPORTES', '', '', 2, 1, 6, 19, 251),
(27, '3RO COSMOVISIONES FILOSOFÍA', '', 'sec261-bucb.pdf', '3RO COSMOVISIONES FILOSOFÍA', '', '', 2, 1, 6, 19, 261),
(28, '3RO COMUNICACIÓN LENGUAJES', '', 'sec74-s5iy.pdf', '3RO COMUNICACIÓN LENGUAJES', '', '', 2, 1, 6, 19, 74),
(29, '3RO LENGUA EXTRANJERA', '', 'sec301-fuia.pdf', '3RO LENGUA EXTRANJERA', '', '', 2, 1, 6, 19, 301),
(30, '3RO MATEMÁTICA', '', 'sec71-chy9.pdf', '3RO MATEMÁTICA', '', '', 2, 1, 6, 19, 71),
(31, '3RO EDUCACIÓN MUSICAL', '', 'sec257-pgeh.pdf', '3RO EDUCACIÓN MUSICAL', '', '', 2, 1, 6, 19, 257),
(32, '3RO QUÍMICA', '', 'sec73-bp4e.pdf', '3RO QUÍMICA', '', '', 2, 1, 6, 19, 73),
(33, '3RO VALORES', '', 'sec302-ik8w.pdf', '3RO VALORES', '', '', 2, 1, 6, 19, 302),
(34, '3RO TÉCNICA TECNOLÓGICA', '', 'sec309-vu85.pdf', '3RO TÉCNICA TECNOLÓGICA', '', '', 2, 1, 6, 19, 309),
(35, '9. 4to ARTES PLASTICAS_189-210', '', 'sec304-rw0n.pdf', '9. 4to ARTES PLASTICAS_189-210', '', '', 2, 1, 6, 20, 304),
(36, '1. 4to BIOLOGIA-GEOGAFIA_7-30', '', 'sec81-7af1.pdf', '1. 4to BIOLOGIA-GEOGAFIA_7-30', '', '', 2, 1, 6, 20, 81),
(37, '6. 4to CIENCIAS SOCIALES_137-156', '', 'sec82-xtkl.pdf', '6. 4to CIENCIAS SOCIALES_137-156', '', '', 2, 1, 6, 20, 82),
(38, '7. 4to EDUCACION FISICA_157-166', '', 'sec252-77zu.pdf', '7. 4to EDUCACION FISICA_157-166', '', '', 2, 1, 6, 20, 252),
(39, '10. 4to COSMOVISIONES FILOSOFIA Y SICOLOGIA_211-242', '', 'sec262-zltf.pdf', '10. 4to COSMOVISIONES FILOSOFIA Y SICOLOGIA_211-242', '', '', 2, 1, 6, 20, 262),
(40, '3. 4to FISICA_31-54', '', 'sec78-1cja.pdf', '3. 4to FISICA_31-54', '', '', 2, 1, 6, 20, 78),
(41, '4.4to_LENGUAJE_93-112', '', 'sec80-s5s7.pdf', '4.4to_LENGUAJE_93-112', '', '', 2, 1, 6, 20, 80),
(42, '5. 4to LENGUA EXTRANJERA_113-136', '', 'sec305-f1sk.pdf', '5. 4to LENGUA EXTRANJERA_113-136', '', '', 2, 1, 6, 20, 305),
(43, '12. 4to MATEMATICA_257-290', '', 'sec77-yt50.pdf', '12. 4to MATEMATICA_257-290', '', '', 2, 1, 6, 20, 77),
(44, '8. 4to EDUCACION MUSICAL_167-188', '', 'sec258-jk03.pdf', '8. 4to EDUCACION MUSICAL_167-188', '', '', 2, 1, 6, 20, 258),
(45, '2. 4to QUIMICA_55-92', '', 'sec79-rusc.pdf', '2. 4to QUIMICA_55-92', '', '', 2, 1, 6, 20, 79),
(46, '11. 4to VALORES ESPIRITUALIDADES Y RELIGIONES_243-256', '', 'sec306-hf4j.pdf', '11. 4to VALORES ESPIRITUALIDADES Y RELIGIONES_243-256', '', '', 2, 1, 6, 20, 306),
(47, '13. 4to TECNICA TECNOLOGIA_291-315', '', 'sec320-6gck.pdf', '13. 4to TECNICA TECNOLOGIA_291-315', '', '', 2, 1, 6, 20, 320),
(48, '5TO ARTES', '', 'sec310-cvbp.pdf', '5TO ARTES', '', '', 2, 1, 6, 21, 310),
(49, '5TO BIOLOGÍA', '', 'sec93-b4l7.pdf', '5TO BIOLOGÍA', '', '', 2, 1, 6, 21, 93),
(50, '5TO CIENCIAS SOCIALES', '', 'sec94-chae.pdf', '5TO CIENCIAS SOCIALES', '', '', 2, 1, 6, 21, 94),
(51, '5TO EDUCACION FISICA Y DEPORTES', '', 'sec253-a0zu.pdf', '5TO EDUCACION FISICA Y DEPORTES', '', '', 2, 1, 6, 21, 253),
(52, '5TO COSMOVISIONES', '', 'sec263-msr5.pdf', '5TO COSMOVISIONES', '', '', 2, 1, 6, 21, 263),
(53, '5TO FÍSICA', '', 'sec90-0gyn.pdf', '5TO FÍSICA', '', '', 2, 1, 6, 21, 90),
(54, '5TO COMUNICACIÓN LENGUAJES', '', 'sec92-i3ms.pdf', '5TO COMUNICACIÓN LENGUAJES', '', '', 2, 1, 6, 21, 92),
(55, '5TO LENGUA EXTRANJERA', '', 'sec311-otld.pdf', '5TO LENGUA EXTRANJERA', '', '', 2, 1, 6, 21, 311),
(56, '5TO MATEMÁTICA', '', 'sec89-8x9u.pdf', '5TO MATEMÁTICA', '', '', 2, 1, 6, 21, 89),
(57, '5TO EDUCACIÓN MUSICAL', '', 'sec259-98si.pdf', '5TO EDUCACIÓN MUSICAL', '', '', 2, 1, 6, 21, 259),
(58, '5TO QUÍMICA', '', 'sec91-vkh4.pdf', '5TO QUÍMICA', '', '', 2, 1, 6, 21, 91),
(59, '5TO VALORES', '', 'sec312-u97a.pdf', '5TO VALORES', '', '', 2, 1, 6, 21, 312),
(60, '5TO TT ESPECIALIZADA', '', 'sec313-vzos.pdf', '5TO TT ESPECIALIZADA', '', '', 2, 1, 6, 21, 313),
(61, '9_6TO ARTES PLASTICAS_182-198', '', 'sec314-6ucq.pdf', '9_6TO ARTES PLASTICAS_182-198', '', '', 2, 1, 6, 22, 314),
(62, '1_6TO BILOGIA9-27', '', 'sec99-5xa6.pdf', '1_6TO BILOGIA9-27', '', '', 2, 1, 6, 22, 99),
(63, '6_6TO CIENCIAS SOCIALES_107-157', '', 'sec100-vk2y.pdf', '6_6TO CIENCIAS SOCIALES_107-157', '', '', 2, 1, 6, 22, 100),
(64, '7_6TO EDUCACION FÌSICA_158-171', '', 'sec254-pct5.pdf', '7_6TO EDUCACION FÌSICA_158-171', '', '', 2, 1, 6, 22, 254),
(65, '10_6TO COSMOVICIONES FILOSOFÌA Y SICOLOGÌA', '', 'sec264-iy3x.pdf', '10_6TO COSMOVICIONES FILOSOFÌA Y SICOLOGÌA', '', '', 2, 1, 6, 22, 264),
(66, '2_6TO FÌSICA_28-47', '', 'sec96-y53v.pdf', '2_6TO FÌSICA_28-47', '', '', 2, 1, 6, 22, 96),
(67, '4-6TO COMUNICACION Y LENGUAJES_63-89', '', 'sec98-r43r.pdf', '4-6TO COMUNICACION Y LENGUAJES_63-89', '', '', 2, 1, 6, 22, 98),
(68, '5_6TO LENGUA EXTRANGERA_90-106', '', 'sec315-ol60.pdf', '5_6TO LENGUA EXTRANGERA_90-106', '', '', 2, 1, 6, 22, 315),
(69, '12_6TO MATEMÀTICA_235-end', '', 'sec95-8j6z.pdf', '12_6TO MATEMÀTICA_235-end', '', '', 2, 1, 6, 22, 95),
(70, '8_6TO EDUCACIÒN MUSICAL_172-181', '', 'sec260-czzo.pdf', '8_6TO EDUCACIÒN MUSICAL_172-181', '', '', 2, 1, 6, 22, 260),
(71, '3_6TO QUÌMICA_48-62', '', 'sec97-v2wf.pdf', '3_6TO QUÌMICA_48-62', '', '', 2, 1, 6, 22, 97),
(72, '11_6TO VALORES ESPIRITUALIDADES Y RELIONES_224-234', '', 'sec316-83ru.pdf', '11_6TO VALORES ESPIRITUALIDADES Y RELIONES_224-234', '', '', 2, 1, 6, 22, 316),
(137, '1RO CIENCIAS NATURALES', '', 'sec9-cp2q.pdf', '1RO CIENCIAS NATURALES', '', '', 3, 1, 6, 17, 9),
(138, '1RO CIENCIAS  SOCIALES', '', 'sec10-kxs7.pdf', '1RO CIENCIAS  SOCIALES', '', '', 3, 1, 6, 17, 10),
(139, '1RO EDUCACIÓN FÍSICA', '', 'sec249-xnw6.pdf', '1RO EDUCACIÓN FÍSICA', '', '', 3, 1, 6, 17, 249),
(140, '1RO  COMUNICACIÓN Y LENGUAJES', '', 'sec8-kn2u.pdf', '1RO  COMUNICACIÓN Y LENGUAJES', '', '', 3, 1, 6, 17, 8),
(141, '9. 1Ro De Secundaria Comunicacion-25', '', 'sec8-4azm.mp4', '9. 1Ro De Secundaria Comunicacion-25', '', '', 8, 1, 6, 17, 8),
(142, '1RO LENGUA EXTRANJERA', '', 'sec292-17z0.pdf', '1RO LENGUA EXTRANJERA', '', '', 3, 1, 6, 17, 292),
(143, '1ro  MATEMÁTICA', '', 'sec5-3hv6.pdf', '1ro  MATEMÁTICA', '', '', 3, 1, 6, 17, 5),
(144, '9. Primero De Secundaria', '', 'sec5-8p1o.mp4', '9. Primero De Secundaria', '', '', 8, 1, 6, 17, 5),
(145, '1RO EDUCACIÓN MUSICAL', '', 'sec255-yr8d.pdf', '1RO EDUCACIÓN MUSICAL', '', '', 3, 1, 6, 17, 255),
(146, '1RO TÉCNICA TECNOLÓGICA GENERAL', '', 'sec318-6omq.pdf', '1RO TÉCNICA TECNOLÓGICA GENERAL', '', '', 3, 1, 6, 17, 318),
(147, '2DO CIENCIAS NATURALES', '', 'sec68-wd60.pdf', '2DO CIENCIAS NATURALES', '', '', 3, 1, 6, 18, 68),
(148, '2DO CIENCIAS SOCIALES', '', 'sec69-f4yy.pdf', '2DO CIENCIAS SOCIALES', '', '', 3, 1, 6, 18, 69),
(149, '2DO EDUCACIÓN FÍSICA', '', 'sec250-vmiw.pdf', '2DO EDUCACIÓN FÍSICA', '', '', 3, 1, 6, 18, 250),
(150, '10.  2Do De Secundaria Lenguaje Prof Ingrid', '', 'sec67-alre.mp4', '10.  2Do De Secundaria Lenguaje Prof Ingrid', '', '', 8, 1, 6, 18, 67),
(151, '2DO COMUNICACIÓN Y LENGUAJES', '', 'sec67-hria.pdf', '2DO COMUNICACIÓN Y LENGUAJES', '', '', 3, 1, 6, 18, 67),
(152, '2DO LENGUA EXTRANJERA', '', 'sec297-4fg1.pdf', '2DO LENGUA EXTRANJERA', '', '', 3, 1, 6, 18, 297),
(153, '10. 0102 Segundo De Secundaria', '', 'sec64-u63o.mp4', '10. 0102 Segundo De Secundaria', '', '', 8, 1, 6, 18, 64),
(154, '2DO MATEMÁTICA', '', 'sec64-g11b.pdf', '2DO MATEMÁTICA', '', '', 3, 1, 6, 18, 64),
(155, '2DO EDUCACIÓN MUSICAL', '', 'sec256-rfo9.pdf', '2DO EDUCACIÓN MUSICAL', '', '', 3, 1, 6, 18, 256),
(156, '2DO TÉCNICA TECNOLÓGICA GENERAL', '', 'sec319-735o.pdf', '2DO TÉCNICA TECNOLÓGICA GENERAL', '', '', 3, 1, 6, 18, 319),
(157, '3RO CIENCIAS NATURALES', '', 'sec75-k0v9.pdf', '3RO CIENCIAS NATURALES', '', '', 3, 1, 6, 19, 75),
(158, '3RO CS. SOCIALES', '', 'sec76-4isv.pdf', '3RO CS. SOCIALES', '', '', 3, 1, 6, 19, 76),
(159, '3RO EDUCACIÓN FÍSICA', '', 'sec251-z6fa.pdf', '3RO EDUCACIÓN FÍSICA', '', '', 3, 1, 6, 19, 251),
(160, '3RO FÍSICA', '', 'sec72-4ypk.pdf', '3RO FÍSICA', '', '', 3, 1, 6, 19, 72),
(161, '11. Tercer Año Lenguaje Prof Marcela-14', '', 'sec74-szy8.mp4', '11. Tercer Año Lenguaje Prof Marcela-14', '', '', 8, 1, 6, 19, 74),
(162, '3RO COMUNICACIÓN Y LENGUAJES', '', 'sec74-nmqs.pdf', '3RO COMUNICACIÓN Y LENGUAJES', '', '', 3, 1, 6, 19, 74),
(163, '3RO LENGUA EXTRANGERA', '', 'sec301-0xm9.pdf', '3RO LENGUA EXTRANGERA', '', '', 3, 1, 6, 19, 301),
(164, '11. 2901 Tercero De Secundaria Programa', '', 'sec71-bnec.mp4', '11. 2901 Tercero De Secundaria Programa', '', '', 8, 1, 6, 19, 71),
(165, '3RO MATEMÁTICA', '', 'sec71-evvj.pdf', '3RO MATEMÁTICA', '', '', 3, 1, 6, 19, 71),
(166, '3RO EDUCACIÓN MUSICAL', '', 'sec257-3uil.pdf', '3RO EDUCACIÓN MUSICAL', '', '', 3, 1, 6, 19, 257),
(167, '3ro QUÍMICA', '', 'sec73-vnhu.pdf', '3ro QUÍMICA', '', '', 3, 1, 6, 19, 73),
(168, '3RO TÉCNICA TECNOLÓGICA GRAL.', '', 'sec309-4l03.pdf', '3RO TÉCNICA TECNOLÓGICA GRAL.', '', '', 3, 1, 6, 19, 309),
(169, '4TO BIOLOGÍA-GEOGRAFÍA F', '', 'sec81-m3ke.pdf', '4TO BIOLOGÍA-GEOGRAFÍA F', '', '', 3, 1, 6, 20, 81),
(170, '4TO CS SOCIALES', '', 'sec82-heo5.pdf', '4TO CS SOCIALES', '', '', 3, 1, 6, 20, 82),
(171, '4TO EDUCACIÓN FÍSICA', '', 'sec252-on5b.pdf', '4TO EDUCACIÓN FÍSICA', '', '', 3, 1, 6, 20, 252),
(172, '12. Secundaria - 4To Año - Vectores', '', 'sec78-ogko.mp4', '12. Secundaria - 4To Año - Vectores', '', '', 8, 1, 6, 20, 78),
(173, '4TO FÍSICA', '', 'sec78-9yro.pdf', '4TO FÍSICA', '', '', 3, 1, 6, 20, 78),
(174, '4TO COMUNICACIÓN Y LENGUEJES', '', 'sec80-kqud.pdf', '4TO COMUNICACIÓN Y LENGUEJES', '', '', 3, 1, 6, 20, 80),
(175, '4to LENGUA EXTRANJERA', '', 'sec305-74is.pdf', '4to LENGUA EXTRANJERA', '', '', 3, 1, 6, 20, 305),
(176, '12. Cuarto De Secundaria 18', '', 'sec77-oh8h.mp4', '12. Cuarto De Secundaria 18', '', '', 8, 1, 6, 20, 77),
(177, '4TO MATEMÁTICA', '', 'sec77-urp6.pdf', '4TO MATEMÁTICA', '', '', 3, 1, 6, 20, 77),
(178, '4TO EDUCACIÓN MUSICAL', '', 'sec258-z06y.pdf', '4TO EDUCACIÓN MUSICAL', '', '', 3, 1, 6, 20, 258),
(179, '4TO QUÍMICA', '', 'sec79-ansa.pdf', '4TO QUÍMICA', '', '', 3, 1, 6, 20, 79),
(180, '4TO TTG', '', 'sec320-ijlo.pdf', '4TO TTG', '', '', 3, 1, 6, 20, 320),
(181, '5TO BIOLOGÍA-GEOGRAFÍA', '', 'sec93-hv88.pdf', '5TO BIOLOGÍA-GEOGRAFÍA', '', '', 3, 1, 6, 21, 93),
(182, '5TO CS SOCIALES', '', 'sec94-o3uz.pdf', '5TO CS SOCIALES', '', '', 3, 1, 6, 21, 94),
(183, '5TO EDUCACIÓN FÍSICA', '', 'sec253-nn6u.pdf', '5TO EDUCACIÓN FÍSICA', '', '', 3, 1, 6, 21, 253),
(184, '13. 5To Año Física Cinemática-16', '', 'sec90-kmhd.mp4', '13. 5To Año Física Cinemática-16', '', '', 8, 1, 6, 21, 90),
(185, '5TO FÍSICA', '', 'sec90-b4w7.pdf', '5TO FÍSICA', '', '', 3, 1, 6, 21, 90),
(186, '5TO COMUNICACIÓN Y LENGUAJES', '', 'sec92-lws5.pdf', '5TO COMUNICACIÓN Y LENGUAJES', '', '', 3, 1, 6, 21, 92),
(187, '5TO LENGUA EXTRANJERA', '', 'sec311-7oq3.pdf', '5TO LENGUA EXTRANJERA', '', '', 3, 1, 6, 21, 311),
(188, '13. Mate Quinto De Secundaria Ecuaciones', '', 'sec89-b6hq.mp4', '13. Mate Quinto De Secundaria Ecuaciones', '', '', 8, 1, 6, 21, 89),
(189, '5TO MATEMÁTICA', '', 'sec89-1uu0.pdf', '5TO MATEMÁTICA', '', '', 3, 1, 6, 21, 89),
(190, '5TO EDUCACIÓN MUSICAL', '', 'sec259-gaqq.pdf', '5TO EDUCACIÓN MUSICAL', '', '', 3, 1, 6, 21, 259),
(191, '5TO QUÍMICA', '', 'sec91-4jxr.pdf', '5TO QUÍMICA', '', '', 3, 1, 6, 21, 91),
(192, '5TO TÉCNICA TECNOLÓGICA GRAL', '', 'sec313-7xny.pdf', '5TO TÉCNICA TECNOLÓGICA GRAL', '', '', 3, 1, 6, 21, 313),
(193, '6TO BIOLOGÍA GEOGRAFÍA', '', 'sec99-q4ph.pdf', '6TO BIOLOGÍA GEOGRAFÍA', '', '', 3, 1, 6, 22, 99),
(194, '6TO CIENCIAS SOCIALES', '', 'sec100-lwgi.pdf', '6TO CIENCIAS SOCIALES', '', '', 3, 1, 6, 22, 100),
(195, '6TO  EDUCACIÓN FÍSICA', '', 'sec254-zdcv.pdf', '6TO  EDUCACIÓN FÍSICA', '', '', 3, 1, 6, 22, 254),
(196, '14. Fisica Sexto Año Secun Prof Elizabeth-17', '', 'sec96-05ad.mp4', '14. Fisica Sexto Año Secun Prof Elizabeth-17', '', '', 8, 1, 6, 22, 96),
(197, '6TO COMUNICACIÓN Y LENGUAJES', '', 'sec98-bdd4.pdf', '6TO COMUNICACIÓN Y LENGUAJES', '', '', 3, 1, 6, 22, 98),
(198, '6TO LENGUA EXTRANJERA', '', 'sec315-nuvq.pdf', '6TO LENGUA EXTRANJERA', '', '', 3, 1, 6, 22, 315),
(199, '14. Mate Sexto De Secundaria 20', '', 'sec95-q8ou.mp4', '14. Mate Sexto De Secundaria 20', '', '', 8, 1, 6, 22, 95),
(200, '6TO-EDUCACIÓN MUSICAL', '', 'sec260-ur3x.pdf', '6TO-EDUCACIÓN MUSICAL', '', '', 3, 1, 6, 22, 260);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `material_area`
--
ALTER TABLE `material_area`
  ADD PRIMARY KEY (`cod_mat`),
  ADD UNIQUE KEY `cod_mat` (`cod_mat`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `material_area`
--
ALTER TABLE `material_area`
  MODIFY `cod_mat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
