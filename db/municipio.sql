-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2021 a las 03:11:21
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
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `cod_muni` bigint(20) UNSIGNED NOT NULL,
  `cod_dep` int(11) NOT NULL,
  `municipio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`cod_muni`, `cod_dep`, `municipio`) VALUES
(1, 1, 'Achacachi'),
(2, 1, 'ACHICA ARRIBA'),
(3, 1, 'Achocalla'),
(4, 1, 'Apolo'),
(5, 1, 'Caquiaviri'),
(6, 1, 'Caranavi'),
(7, 1, 'Chulumani'),
(8, 1, 'Chuma'),
(9, 1, 'Colquencha'),
(10, 1, 'Comanche'),
(11, 1, 'COROCORO'),
(12, 1, 'El Alto'),
(13, 1, 'Escoma '),
(14, 1, 'HUATAJATA'),
(15, 1, 'Ixiamas'),
(16, 1, 'LA ASUNTA'),
(17, 1, 'LA PAZ'),
(18, 1, 'Mecapaca'),
(19, 1, 'Palos Blancos'),
(20, 1, 'Papel Pampa'),
(21, 1, 'Patacamaya'),
(22, 1, 'PM de Carabuco'),
(23, 1, 'Santiago de Callapa'),
(24, 1, 'Sica Sica'),
(25, 1, 'SORATA'),
(26, 1, 'TAJANI'),
(27, 1, 'Tipuani'),
(28, 2, 'CARACOLLO'),
(29, 2, 'Challapata'),
(30, 2, 'Corque'),
(31, 2, 'Huanuni'),
(32, 2, 'Oruro'),
(33, 2, 'Salinas de G. mendoza'),
(34, 2, 'San Pedro de Totora'),
(35, 2, 'Santiago de Huari'),
(36, 2, 'Toledo '),
(37, 3, 'Betanzos'),
(38, 3, 'CAIZA \"D\"'),
(39, 3, 'Colquechaca'),
(40, 3, 'Cotagaita'),
(41, 3, 'LLALLAGUA'),
(42, 3, 'Ocuri'),
(43, 3, 'Pocoata'),
(44, 3, 'PORCO'),
(45, 3, 'Potosí'),
(46, 3, 'Ravelo'),
(47, 3, 'San Pedro de Buena Vista'),
(48, 3, 'Torotoro'),
(49, 3, 'Tupiza'),
(50, 3, 'Uncía'),
(51, 3, 'Uyuni'),
(52, 3, 'VILLAZÒN'),
(53, 3, 'Vitichi'),
(54, 3, 'YOCALLA'),
(55, 4, 'Aiquile'),
(56, 4, 'Cercado'),
(57, 4, 'Colcapirhua'),
(58, 4, 'Independencia'),
(59, 4, 'Mizque'),
(60, 4, 'Punata'),
(61, 4, 'Quillacollo'),
(62, 4, 'Sacaba'),
(63, 4, 'Shinahota'),
(64, 4, 'Tarata'),
(65, 4, 'Villa Tunari'),
(66, 5, 'Vinto'),
(67, 5, 'Camargo'),
(68, 5, 'Monteagudo'),
(69, 5, 'San Pablo de Huacareta'),
(70, 5, 'Sucre'),
(71, 5, 'Tomina'),
(72, 6, 'Villa Charcas'),
(73, 6, 'Bermejo'),
(74, 6, 'Carapari'),
(75, 6, 'Cercado'),
(76, 6, 'Cercado '),
(77, 6, 'El Puente '),
(78, 6, 'Entre Rios'),
(79, 6, 'PADCAYA'),
(80, 6, 'San Lorenzo'),
(81, 6, 'TARIJA'),
(82, 6, 'URIONDO'),
(83, 6, 'Villa Montes'),
(84, 6, 'Yacuiba'),
(85, 7, 'YUNCHARA'),
(86, 7, 'Andrés Ibañez'),
(87, 7, 'Ascencion de Guarayos '),
(88, 7, 'Cabezas'),
(89, 7, 'Camiri'),
(90, 7, 'Charagua'),
(91, 7, 'Comarapa'),
(92, 7, 'El Torno'),
(93, 7, 'La Guardia'),
(94, 7, 'Mairana'),
(95, 7, 'Montero'),
(96, 7, 'Okinawa'),
(97, 7, 'Pailón'),
(98, 7, 'Portachuelo'),
(99, 7, 'PUERTO SUAREZ '),
(100, 7, 'san Julian'),
(101, 7, 'San José de Chiquitos'),
(102, 7, 'San Matias '),
(103, 7, 'San Pedro'),
(104, 7, 'Santa Cruz de la Sierra'),
(105, 7, 'Satélite Norte'),
(106, 7, 'Yapacaní '),
(107, 7, 'Santa Rosa del Sara'),
(108, 7, 'Warnes'),
(109, 8, 'Trinidad'),
(110, 8, 'San Borja'),
(111, 9, 'Cobija');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD UNIQUE KEY `cod_muni` (`cod_muni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `cod_muni` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
