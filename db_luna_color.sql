-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2020 a las 02:12:54
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_luna_color`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bitacora`
--

CREATE TABLE IF NOT EXISTS `tbl_bitacora` (
`id_bitacora` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_objeto` int(11) NOT NULL,
  `fecha` datetime DEFAULT CURRENT_TIMESTAMP,
  `accion` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `creado_por` varchar(15) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=298 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_bitacora`
--

INSERT INTO `tbl_bitacora` (`id_bitacora`, `id_usuario`, `id_objeto`, `fecha`, `accion`, `descripcion`, `creado_por`, `fecha_creacion`) VALUES
(120, 1, 5, '2020-10-27 17:20:55', 'Salió', 'Salió de login', 'ADMIN', '2020-10-27 17:20:55'),
(121, 1, 5, '2020-10-27 17:20:55', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-10-27 17:20:55'),
(122, 1, 1, '2020-10-27 17:21:09', 'Eliminar', 'Elimino un usuario', 'ADMIN', '2020-10-27 17:21:09'),
(123, 1, 1, '2020-10-27 17:24:41', 'Actualizar', 'Editó un usuario', 'ADMIN', '2020-10-27 17:24:41'),
(124, 1, 1, '2020-10-27 17:25:10', 'Actualizar', 'Editó un usuario', 'ADMIN', '2020-10-27 17:25:10'),
(125, 1, 1, '2020-10-27 17:25:30', 'Actualizar', 'Editó un usuario', 'ADMIN', '2020-10-27 17:25:30'),
(126, 1, 1, '2020-10-27 17:25:51', 'Eliminar', 'Elimino un usuario', 'ADMIN', '2020-10-27 17:25:51'),
(127, 1, 1, '2020-10-27 17:27:29', 'Eliminar', 'Elimino un usuario', 'ADMIN', '2020-10-27 17:27:29'),
(128, 1, 1, '2020-10-27 17:28:13', 'Insertar', 'Insertó un usuario', 'ADMIN', '2020-10-27 17:28:13'),
(129, 1, 1, '2020-10-27 17:28:27', 'Salida', 'Salió del sistema', 'ADMIN', '2020-10-27 17:28:27'),
(130, 91, 5, '2020-10-27 17:28:32', 'Salió', 'Salió de login', 'ZOE', '2020-10-27 17:28:32'),
(131, 91, 6, '2020-10-27 17:28:33', 'Entró', 'Preguntas Primer Ingreso', 'ZOE', '2020-10-27 17:28:33'),
(132, 91, 6, '2020-10-27 17:28:42', 'Insertó', 'Insertó preguntas primer ingreso', 'ZOE', '2020-10-27 17:28:42'),
(133, 91, 6, '2020-10-27 17:28:42', 'Actualizó', 'Actualizó preguntas constestadas', 'ZOE', '2020-10-27 17:28:42'),
(134, 91, 6, '2020-10-27 17:29:10', 'Insertó', 'Insertó preguntas primer ingreso', 'ZOE', '2020-10-27 17:29:10'),
(135, 91, 6, '2020-10-27 17:29:10', 'Actualizó', 'Actualizó preguntas constestadas', 'ZOE', '2020-10-27 17:29:10'),
(136, 91, 6, '2020-10-27 17:29:17', 'Insertó', 'Insertó preguntas primer ingreso', 'ZOE', '2020-10-27 17:29:17'),
(137, 91, 6, '2020-10-27 17:29:18', 'Actualizó', 'Actualizó preguntas constestadas', 'ZOE', '2020-10-27 17:29:18'),
(138, 91, 6, '2020-10-27 17:29:19', 'Entró', 'Confirmar contraseña en Preguntas primer ingreso', 'ZOE', '2020-10-27 17:29:19'),
(139, 91, 6, '2020-10-27 17:29:39', 'Salió', 'Salió de Primer ingreso/Confirmar contraseña', 'ZOE', '2020-10-27 17:29:39'),
(140, 91, 5, '2020-10-27 17:29:39', 'Entró', 'Entró a login', 'ZOE', '2020-10-27 17:29:39'),
(141, 91, 6, '2020-10-27 17:29:56', 'Actualizó', 'Actualizó contraseña', 'ZOE', '2020-10-27 17:29:56'),
(142, 91, 6, '2020-10-27 17:29:56', 'Actualizó', 'Actualizó Primer ingreso a usuario: Activo', 'ZOE', '2020-10-27 17:29:56'),
(143, 91, 6, '2020-10-27 17:29:56', 'Insertó', 'Insertó contraseña a historial de contraseñas', 'ZOE', '2020-10-27 17:29:56'),
(144, 91, 6, '2020-10-27 17:29:56', 'Salió', 'Salió de Primer ingreso/Confirmar contraseña', 'ZOE', '2020-10-27 17:29:56'),
(145, 91, 5, '2020-10-27 17:29:56', 'Entró', 'Entró a login', 'ZOE', '2020-10-27 17:29:56'),
(146, 1, 5, '2020-10-27 17:30:05', 'Salió', 'Salió de login', 'ADMIN', '2020-10-27 17:30:05'),
(147, 1, 5, '2020-10-27 17:30:05', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-10-27 17:30:05'),
(148, 1, 1, '2020-10-27 17:30:15', 'Eliminar', 'Elimino un usuario', 'ADMIN', '2020-10-27 17:30:15'),
(149, 1, 1, '2020-10-27 17:30:42', 'Eliminar', 'Elimino un usuario', 'ADMIN', '2020-10-27 17:30:42'),
(150, 1, 1, '2020-10-27 17:31:27', 'Eliminar', 'Elimino un usuario', 'ADMIN', '2020-10-27 17:31:27'),
(151, 1, 1, '2020-10-27 17:32:00', 'Eliminar', 'Elimino un usuario', 'ADMIN', '2020-10-27 17:32:00'),
(152, 1, 5, '2020-10-27 17:34:34', 'Salió', 'Salió de login', 'ADMIN', '2020-10-27 17:34:34'),
(153, 1, 5, '2020-10-27 17:34:34', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-10-27 17:34:34'),
(154, 1, 1, '2020-10-27 17:34:42', 'Eliminar', 'Elimino un usuario', 'ADMIN', '2020-10-27 17:34:42'),
(155, 1, 1, '2020-10-27 17:36:06', 'Insertar', 'Insertó un usuario', 'ADMIN', '2020-10-27 17:36:06'),
(156, 1, 1, '2020-10-27 17:36:43', 'Eliminar', 'Elimino un usuario', 'ADMIN', '2020-10-27 17:36:43'),
(157, 1, 1, '2020-10-27 17:49:48', 'Insertar', 'Insertó un usuario', 'ADMIN', '2020-10-27 17:49:48'),
(158, 1, 5, '2020-10-30 14:39:05', 'Actualizó', 'Actualizó Intentos/contraseña', 'ADMIN', '2020-10-30 14:39:05'),
(159, 94, 7, '2020-10-30 14:44:59', 'Entró', 'Entró en Auto registro', 'VALERIA', '2020-10-30 14:44:59'),
(160, 94, 7, '2020-10-30 14:44:59', 'Insertó', 'Un usuario se Autoregistro', 'VALERIA', '2020-10-30 14:44:59'),
(161, 94, 7, '2020-10-30 14:44:59', 'Salió', 'Salió del Autoregistro', 'VALERIA', '2020-10-30 14:44:59'),
(162, 94, 5, '2020-10-30 14:45:00', 'Entró', 'Entró al login', 'VALERIA', '2020-10-30 14:45:00'),
(163, 1, 5, '2020-10-30 14:46:17', 'Salió', 'Salió de login', 'ADMIN', '2020-10-30 14:46:17'),
(164, 1, 5, '2020-10-30 14:46:17', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-10-30 14:46:17'),
(169, 1, 1, '2020-10-30 14:47:56', 'Salida', 'Salió del sistema', 'ADMIN', '2020-10-30 14:47:56'),
(170, 1, 5, '2020-10-30 14:48:05', 'Salió', 'Salió de login', 'ADMIN', '2020-10-30 14:48:05'),
(171, 1, 5, '2020-10-30 14:48:05', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-10-30 14:48:05'),
(174, 1, 1, '2020-10-30 15:32:14', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:32:14'),
(175, 1, 1, '2020-10-30 15:32:14', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:32:14'),
(176, 1, 1, '2020-10-30 15:35:01', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:35:01'),
(177, 1, 1, '2020-10-30 15:35:02', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:35:02'),
(178, 1, 1, '2020-10-30 15:37:31', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:37:31'),
(179, 1, 1, '2020-10-30 15:37:31', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:37:31'),
(180, 1, 1, '2020-10-30 15:45:36', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:45:36'),
(181, 1, 1, '2020-10-30 15:45:36', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:45:36'),
(182, 1, 1, '2020-10-30 15:47:10', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:47:10'),
(183, 1, 1, '2020-10-30 15:47:11', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:47:11'),
(184, 1, 1, '2020-10-30 15:47:32', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:47:32'),
(185, 1, 1, '2020-10-30 15:47:32', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:47:32'),
(186, 1, 1, '2020-10-30 15:55:03', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:55:03'),
(187, 1, 1, '2020-10-30 15:55:04', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 15:55:04'),
(188, 1, 5, '2020-10-30 16:05:20', 'Salió', 'Salió de login', 'ADMIN', '2020-10-30 16:05:20'),
(189, 1, 5, '2020-10-30 16:05:21', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-10-30 16:05:21'),
(192, 1, 1, '2020-10-30 16:06:44', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:06:44'),
(193, 1, 1, '2020-10-30 16:06:44', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:06:44'),
(194, 1, 1, '2020-10-30 16:41:28', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:41:28'),
(195, 1, 1, '2020-10-30 16:41:31', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:41:31'),
(196, 1, 1, '2020-10-30 16:44:38', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:44:38'),
(197, 1, 1, '2020-10-30 16:44:38', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:44:38'),
(198, 1, 1, '2020-10-30 16:44:54', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:44:54'),
(199, 1, 1, '2020-10-30 16:44:54', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:44:54'),
(200, 1, 1, '2020-10-30 16:45:12', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:45:12'),
(201, 1, 1, '2020-10-30 16:45:12', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:45:12'),
(202, 1, 1, '2020-10-30 16:45:23', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:45:23'),
(203, 1, 1, '2020-10-30 16:45:23', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:45:23'),
(204, 1, 1, '2020-10-30 16:46:35', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:46:35'),
(205, 1, 1, '2020-10-30 16:46:35', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:46:35'),
(206, 1, 1, '2020-10-30 16:47:01', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:47:01'),
(207, 1, 1, '2020-10-30 16:47:01', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:47:01'),
(208, 1, 1, '2020-10-30 16:48:38', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:48:38'),
(209, 1, 1, '2020-10-30 16:48:38', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:48:38'),
(210, 1, 1, '2020-10-30 16:48:52', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:48:52'),
(211, 1, 1, '2020-10-30 16:48:52', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:48:52'),
(212, 1, 1, '2020-10-30 16:49:04', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:49:04'),
(213, 1, 1, '2020-10-30 16:49:04', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:49:04'),
(214, 1, 1, '2020-10-30 16:49:21', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:49:21'),
(215, 1, 1, '2020-10-30 16:49:22', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:49:22'),
(216, 1, 1, '2020-10-30 16:49:42', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:49:42'),
(217, 1, 1, '2020-10-30 16:49:42', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:49:42'),
(218, 1, 1, '2020-10-30 16:49:53', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:49:53'),
(219, 1, 1, '2020-10-30 16:49:53', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:49:53'),
(220, 1, 1, '2020-10-30 16:50:01', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:50:01'),
(221, 1, 1, '2020-10-30 16:50:01', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:50:01'),
(222, 1, 1, '2020-10-30 16:50:29', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:50:29'),
(223, 1, 1, '2020-10-30 16:50:29', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:50:29'),
(224, 1, 1, '2020-10-30 16:51:08', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:51:08'),
(225, 1, 1, '2020-10-30 16:51:08', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 16:51:08'),
(226, 1, 1, '2020-10-30 17:38:48', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 17:38:48'),
(227, 1, 1, '2020-10-30 17:38:48', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 17:38:48'),
(228, 1, 5, '2020-10-30 18:08:48', 'Salió', 'Salió de login', 'ADMIN', '2020-10-30 18:08:48'),
(229, 1, 5, '2020-10-30 18:08:48', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-10-30 18:08:48'),
(232, 1, 1, '2020-10-30 18:11:45', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:11:45'),
(233, 1, 1, '2020-10-30 18:11:45', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:11:45'),
(234, 1, 1, '2020-10-30 18:27:35', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:27:35'),
(235, 1, 1, '2020-10-30 18:27:35', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:27:35'),
(236, 1, 1, '2020-10-30 18:27:47', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:27:47'),
(237, 1, 1, '2020-10-30 18:27:47', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:27:47'),
(238, 1, 1, '2020-10-30 18:27:56', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:27:56'),
(239, 1, 1, '2020-10-30 18:27:56', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:27:56'),
(240, 1, 1, '2020-10-30 18:28:56', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:28:56'),
(241, 1, 1, '2020-10-30 18:28:56', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:28:56'),
(242, 1, 1, '2020-10-30 18:43:16', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:43:16'),
(243, 1, 1, '2020-10-30 18:43:16', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:43:16'),
(244, 1, 1, '2020-10-30 18:43:25', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:43:25'),
(245, 1, 1, '2020-10-30 18:43:25', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 18:43:25'),
(246, 1, 1, '2020-10-30 20:36:51', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-30 20:36:51'),
(247, 1, 1, '2020-10-30 20:36:51', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-30 20:36:51'),
(248, 1, 1, '2020-10-30 22:28:36', 'Salida', 'Salió del sistema', 'ADMIN', '2020-10-30 22:28:36'),
(249, 1, 5, '2020-10-30 22:28:43', 'Salió', 'Salió de login', 'ADMIN', '2020-10-30 22:28:43'),
(250, 1, 5, '2020-10-30 22:28:43', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-10-30 22:28:43'),
(253, 1, 5, '2020-10-31 15:32:32', 'Salió', 'Salió de login', 'ADMIN', '2020-10-31 15:32:32'),
(254, 1, 5, '2020-10-31 15:32:32', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-10-31 15:32:32'),
(257, 1, 1, '2020-10-31 16:01:07', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-31 16:01:07'),
(258, 1, 1, '2020-10-31 16:01:07', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-31 16:01:07'),
(259, 1, 5, '2020-10-31 21:24:53', 'Salió', 'Salió de login', 'ADMIN', '2020-10-31 21:24:53'),
(260, 1, 5, '2020-10-31 21:24:54', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-10-31 21:24:54'),
(263, 1, 1, '2020-10-31 21:26:54', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-31 21:26:54'),
(264, 1, 1, '2020-10-31 21:26:54', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-31 21:26:54'),
(265, 1, 1, '2020-10-31 21:30:53', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-31 21:30:53'),
(266, 1, 1, '2020-10-31 21:30:53', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-31 21:30:53'),
(267, 1, 1, '2020-10-31 21:35:34', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-10-31 21:35:34'),
(268, 1, 1, '2020-10-31 21:35:36', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-10-31 21:35:36'),
(269, 1, 1, '2020-10-31 21:36:32', 'Insertar', 'Insertó un usuario', 'ADMIN', '2020-10-31 21:36:32'),
(270, 1, 1, '2020-10-31 21:40:48', 'Insertar', 'Insertó un usuario', 'ADMIN', '2020-10-31 21:40:48'),
(271, 1, 1, '2020-10-31 21:46:20', 'Salida', 'Salió del sistema', 'ADMIN', '2020-10-31 21:46:20'),
(272, 1, 5, '2020-11-01 00:15:55', 'Salió', 'Salió de login', 'ADMIN', '2020-11-01 00:15:55'),
(273, 1, 5, '2020-11-01 00:15:56', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-11-01 00:15:56'),
(276, 1, 5, '2020-11-01 00:24:48', 'Salió', 'Salió de login', 'ADMIN', '2020-11-01 00:24:48'),
(277, 1, 5, '2020-11-01 00:24:48', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-11-01 00:24:48'),
(280, 1, 5, '2020-11-01 00:42:12', 'Salió', 'Salió de login', 'ADMIN', '2020-11-01 00:42:12'),
(281, 1, 5, '2020-11-01 00:42:12', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-11-01 00:42:12'),
(284, 1, 1, '2020-11-01 00:46:33', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-11-01 00:46:33'),
(285, 1, 1, '2020-11-01 00:46:33', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-11-01 00:46:33'),
(286, 1, 5, '2020-11-01 16:08:37', 'Salió', 'Salió de login', 'ADMIN', '2020-11-01 16:08:37'),
(287, 1, 5, '2020-11-01 16:08:38', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-11-01 16:08:38'),
(290, 1, 1, '2020-11-01 16:10:09', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-11-01 16:10:09'),
(291, 1, 1, '2020-11-01 16:10:09', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-11-01 16:10:09'),
(292, 1, 1, '2020-11-01 16:12:07', 'Entró', 'Entró a Mantenimiento de Usuario', 'ADMIN', '2020-11-01 16:12:07'),
(293, 1, 1, '2020-11-01 16:12:07', 'Salió', 'Salió de Mantenimiento de Usuario', 'ADMIN', '2020-11-01 16:12:07'),
(294, 1, 5, '2020-11-01 16:57:31', 'Salió', 'Salió de login', 'ADMIN', '2020-11-01 16:57:31'),
(295, 1, 5, '2020-11-01 16:57:31', 'Entrada', 'Entró al Sistema', 'ADMIN', '2020-11-01 16:57:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE IF NOT EXISTS `tbl_clientes` (
`id_cliente` int(11) NOT NULL,
  `id_tipo_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) DEFAULT NULL,
  `nombre_empresa` varchar(50) DEFAULT NULL,
  `razon_social` varchar(30) DEFAULT NULL,
  `denominacion` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_compras`
--

CREATE TABLE IF NOT EXISTS `tbl_compras` (
`id_compra` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_materia_prima` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total_compra` decimal(8,2) DEFAULT NULL,
  `fecha_compra` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comprobante_entrega`
--

CREATE TABLE IF NOT EXISTS `tbl_comprobante_entrega` (
`id_comprobante_entrega` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `fecha_entrega` datetime DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contactos_clientes`
--

CREATE TABLE IF NOT EXISTS `tbl_contactos_clientes` (
`id_contacto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_tipo_contacto` int(11) NOT NULL,
  `valor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contactos_proveedores`
--

CREATE TABLE IF NOT EXISTS `tbl_contactos_proveedores` (
`id_contacto_proveedor` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_tipo_contacto_proveedor` int(11) NOT NULL,
  `valor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle_factura`
--

CREATE TABLE IF NOT EXISTS `tbl_detalle_factura` (
`id_detalle_factura` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `id_detalle_pedido` int(11) NOT NULL,
  `comentario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle_pedido`
--

CREATE TABLE IF NOT EXISTS `tbl_detalle_pedido` (
`id_detalle_pedido` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `comentario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE IF NOT EXISTS `tbl_documentos` (
`id_documento` int(11) NOT NULL,
  `id_tipo_documento` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `valor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_pedido`
--

CREATE TABLE IF NOT EXISTS `tbl_estado_pedido` (
`id_estado_pedido` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_estado_usuarios` (
`id_estado_usuario` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_estado_usuarios`
--

INSERT INTO `tbl_estado_usuarios` (`id_estado_usuario`, `descripcion`) VALUES
(1, 'Inactivo'),
(2, 'Activo'),
(3, 'Nuevo'),
(4, 'Bloqueado'),
(5, 'ARNuevo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_facturas`
--

CREATE TABLE IF NOT EXISTS `tbl_facturas` (
`id_factura` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_tipo_pago` int(11) NOT NULL,
  `fecha_factura` date DEFAULT NULL,
  `descuento` decimal(5,2) DEFAULT NULL,
  `importe_gravado` decimal(5,2) DEFAULT NULL,
  `importe_exento` decimal(5,2) DEFAULT NULL,
  `importe_exonerado` decimal(5,2) DEFAULT NULL,
  `impuesto` decimal(5,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hist_contrasena`
--

CREATE TABLE IF NOT EXISTS `tbl_hist_contrasena` (
`id_hist` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `contrasena` varchar(254) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_hist_contrasena`
--

INSERT INTO `tbl_hist_contrasena` (`id_hist`, `id_usuario`, `contrasena`) VALUES
(8, 91, 'ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901'),
(9, 91, 'fc6d282c72b8dd14058abe01ae03a1cf81a50af056d5fbd1e7f3bed00c713f71'),
(11, 93, 'ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901'),
(12, 94, '1sxqpS6ce44='),
(13, 95, '1sxqpS6ce44='),
(14, 96, '1sxqpS6ce44=');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inventario`
--

CREATE TABLE IF NOT EXISTS `tbl_inventario` (
`id_inventario` int(11) NOT NULL,
  `id_materia_prima` int(11) NOT NULL,
  `existencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_material`
--

CREATE TABLE IF NOT EXISTS `tbl_material` (
`id_material` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_material`
--

INSERT INTO `tbl_material` (`id_material`, `descripcion`) VALUES
(1, 'Cover'),
(2, 'Opalina'),
(3, 'Especial'),
(4, 'Bond 20'),
(5, 'Satinado'),
(6, 'Cartoncillo'),
(7, 'Adhesivo'),
(8, 'Carton'),
(9, 'Lona textil'),
(10, 'Lona vinilica'),
(11, 'Lona base negra'),
(12, 'Lona mate'),
(13, 'Vinil de corte'),
(14, 'Vinil reflectivo'),
(15, 'Vinil transparente fotoluminicente'),
(16, 'Vinil'),
(17, 'Microperforado'),
(18, 'Vinil transparente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materia_prima`
--

CREATE TABLE IF NOT EXISTS `tbl_materia_prima` (
`id_materia_prima` int(11) NOT NULL,
  `nombre_materia_prima` varchar(60) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `cantidad_minima` int(11) DEFAULT NULL,
  `cantidad_maxima` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materia_prima_por_producto`
--

CREATE TABLE IF NOT EXISTS `tbl_materia_prima_por_producto` (
`id_materia_prima_por_producto` int(11) NOT NULL,
  `id_materia_prima` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_objetos`
--

CREATE TABLE IF NOT EXISTS `tbl_objetos` (
`id_objeto` int(11) NOT NULL,
  `objeto` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `tipo_objeto` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_objetos`
--

INSERT INTO `tbl_objetos` (`id_objeto`, `objeto`, `descripcion`, `tipo_objeto`) VALUES
(1, 'Usuarios', 'Gestión de Usuarios', 'Prueba'),
(2, 'Usuarios', 'Gestión de roles', 'Formulario'),
(3, 'Usuarios', 'Gestión de Preguntas', 'Formulario'),
(4, 'Seguridad', 'Gestión Bitácora ', 'Formulario'),
(5, 'Login', 'Gestión login', 'Formulario'),
(6, 'Primer Ingreso', 'Gestión Primer Ingreso', 'Formulario'),
(7, 'Auto registro ', 'Gestión Auto Registro ', 'Formulario'),
(8, 'Recu. Por Correo', 'Gestión Recuperación de contraseña por correo ', 'Formulario'),
(9, 'Recu. Por Pregunta Secreta', 'Gestión Recuperación de contraseña por pregunta Secreta', 'Formulario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_orden_produccion`
--

CREATE TABLE IF NOT EXISTS `tbl_orden_produccion` (
`id_orden_produccion` int(11) NOT NULL,
  `id_materia_prima_por_producto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_parametros`
--

CREATE TABLE IF NOT EXISTS `tbl_parametros` (
`id_parametro` int(11) NOT NULL,
  `parametro` varchar(50) DEFAULT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_parametros`
--

INSERT INTO `tbl_parametros` (`id_parametro`, `parametro`, `valor`, `id_usuario`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'EMPRESA_NOMBRE', 'Luna Color', 1, '2020-09-30', NULL),
(2, 'EMPRESA_PAIS', 'Honduras', 1, '2020-09-30', NULL),
(3, 'EMPRESA_DIRECCION', 'Bo. Morazán Cll. Principal Cnt. Escuela Manuel Soto Tegucigalpa.', 1, '2020-09-30', NULL),
(4, 'EMPRESA_CORREO', 'admon.lunacolor@gmail.com', 1, '2020-09-30', NULL),
(5, 'EMPRESA_TELEFONO', ' 9948-1570', 1, '2020-09-30', NULL),
(6, 'EMPRESA_GERENTE', 'Azucena del Carmen Morales Robles', 1, '2020-09-30', NULL),
(7, 'ADMIN_PREGUNTAS_CONTESTADAS', '3', 1, '2020-09-30', NULL),
(8, 'ADMIN_INTENTOS', '3', 1, '2020-09-30', NULL),
(9, 'ADMIN_VIGENCIA_CORREO', '24', 1, '2020-09-30', NULL),
(10, 'ADMIN_VIGENCIA_USUARIO', '20', 1, '2020-09-30', NULL),
(11, 'ADMIN_PREGUNTAS_RECUPERACION', '1', 1, '2020-09-30', NULL),
(12, 'ADMIN_IMPUESTO', '15%', 1, '2020-10-30', NULL),
(13, 'SYS_NOMBRE', 'Sistema Luna Color', 1, '2020-09-30', NULL),
(14, 'FECHA_VENCIMIENTO', '360', 1, '2020-09-30', NULL),
(15, 'MIN_CONTRASENA', '5', 1, '2020-09-30', NULL),
(16, 'MAX_CONTRASENA', '10', 1, '2020-09-30', NULL),
(17, 'CORREO_HOST', 'smtp.gmail.com', 1, '2020-10-25', '2020-10-25'),
(18, 'CORREO_USERNAME', 'soportelunacolor@gmail.com', 1, '2020-10-25', '2020-10-25'),
(19, 'CORREO_PASSWORD', 'Teamluna1*', 1, '2020-10-25', '2020-10-25'),
(20, 'CORREO_SMTPSECURE', 'TLS', 1, '2020-10-25', '2020-10-25'),
(21, 'CORREO_PORT', '587', 1, '2020-10-25', '2020-10-25'),
(22, 'CORREO_NAMEFROM', 'Soporte luna color', 1, '2020-10-26', '2020-10-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedidos`
--

CREATE TABLE IF NOT EXISTS `tbl_pedidos` (
`id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha_inicial` date DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `descuento` decimal(8,2) DEFAULT NULL,
  `impuesto` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_permiso`
--

CREATE TABLE IF NOT EXISTS `tbl_permiso` (
`idpermiso` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_permiso`
--

INSERT INTO `tbl_permiso` (`idpermiso`, `nombre`) VALUES
(1, 'Escritorio'),
(2, 'Cliente'),
(3, 'Cotizacion'),
(4, 'Pedido'),
(5, 'Factura'),
(6, 'Inventario'),
(7, 'Compras'),
(8, 'Usuario'),
(9, 'Reporte'),
(10, 'Seguridad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_permisos`
--

CREATE TABLE IF NOT EXISTS `tbl_permisos` (
`id_permiso` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_objeto` int(11) NOT NULL,
  `permiso_insercion` varchar(1) DEFAULT NULL,
  `permiso_eliminacion` varchar(1) DEFAULT NULL,
  `permiso_actualizacion` varchar(1) DEFAULT NULL,
  `permiso_consultar` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preguntas`
--

CREATE TABLE IF NOT EXISTS `tbl_preguntas` (
`id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(100) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_preguntas`
--

INSERT INTO `tbl_preguntas` (`id_pregunta`, `pregunta`, `estado`) VALUES
(1, '¿Cuál era tu apodo de pequeño/a?', 1),
(2, '¿En que ciudad conociste a tu pareja?', 1),
(3, '¿Cuál era el nombre de tu mejor amigo/a de la infancia?', 1),
(4, '¿Cuál era el nombre de tu primera mascota?', 1),
(5, '¿Cuál fué el nombre de tu primer maestro/a?', 1),
(6, '¿Cuál es tu país favorito?', 1),
(9, '¿Cuál es tu actor/actríz favorito/a?', 1),
(10, '¿Cómo se llama la ciudad donde se conocieron tus padres?', 1),
(11, '¿Cómo se llama la primer escuela a la que asististe?', 1),
(12, '¿Cuál es tu libro de fantasía favorito?', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preguntas_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_preguntas_usuarios` (
`id_pregunta_usuario` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `respuesta` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_preguntas_usuarios`
--

INSERT INTO `tbl_preguntas_usuarios` (`id_pregunta_usuario`, `id_pregunta`, `id_usuario`, `respuesta`) VALUES
(1, 1, 2, 'z'),
(2, 2, 2, 'z'),
(3, 3, 2, 'z'),
(4, 1, 3, 'z'),
(5, 2, 3, 'z'),
(6, 3, 3, 'z'),
(7, 1, 7, 'z'),
(8, 2, 7, 'z'),
(9, 3, 7, 'z'),
(10, 1, 8, 'z'),
(11, 2, 8, 'z'),
(12, 3, 8, 'z'),
(13, 1, 9, 'z'),
(14, 2, 9, 'z'),
(15, 3, 9, 'z'),
(16, 1, 10, 'z'),
(17, 2, 10, 'z'),
(18, 3, 10, 'z'),
(19, 1, 6, 'z'),
(20, 2, 6, 'z'),
(21, 1, 47, 'A'),
(22, 2, 47, 'B'),
(23, 3, 47, 'C'),
(24, 1, 48, 'A'),
(25, 2, 48, 'B'),
(26, 3, 48, 'C'),
(27, 2, 49, 's'),
(28, 11, 49, 's'),
(29, 9, 49, 's'),
(33, 1, 51, 's'),
(34, 12, 51, 'd'),
(36, 1, 90, 'z'),
(37, 2, 90, 'z'),
(38, 3, 90, 'z'),
(39, 1, 91, 'titi'),
(40, 2, 91, 'u'),
(41, 3, 91, 'daniela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE IF NOT EXISTS `tbl_productos` (
`id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`id_producto`, `nombre_producto`) VALUES
(1, 'Tarjeta de presentación'),
(2, 'Tarjeta de invitación'),
(3, 'Separadores'),
(4, 'Volantes'),
(5, 'Brochures'),
(6, 'Boletines'),
(7, 'Diplomas'),
(8, 'Revistas'),
(9, 'Libros'),
(10, 'Afiches'),
(11, 'Etiquetas'),
(12, 'Carpetas'),
(13, 'Menus'),
(14, 'Agendas/Libretas'),
(15, 'Calendarios'),
(16, 'Cajas'),
(17, 'Tarjetas'),
(18, 'Banners'),
(19, 'Backdrop'),
(20, 'Vinil para rotulos'),
(21, 'Stickers'),
(22, 'Microperforado'),
(23, 'Estructuras prefabricadas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_producto_acabado`
--

CREATE TABLE IF NOT EXISTS `tbl_producto_acabado` (
  `id_producto` int(11) NOT NULL,
  `acabado` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_producto_acabado`
--

INSERT INTO `tbl_producto_acabado` (`id_producto`, `acabado`) VALUES
(1, 'Plastificadas'),
(1, 'Boleadas'),
(2, 'Dobladas'),
(2, 'Troqueleadas'),
(2, 'Embosadas'),
(5, 'Doblados'),
(6, 'Doblados'),
(8, 'A caballete'),
(9, 'Grapados'),
(12, 'Con salapas impresas'),
(13, 'Con espiral'),
(13, 'A caballete'),
(13, 'Laminados'),
(13, 'Doblados'),
(8, 'Grapada con lomo'),
(14, 'Pasta dura'),
(14, 'Pasta normal'),
(14, 'Espiral'),
(14, 'Pegado'),
(14, 'Plastificado'),
(15, 'Tipo afiche'),
(15, 'Tipo planificador de escritorio'),
(15, 'Tipo tripode (escritorio)'),
(15, 'Con espiral'),
(15, 'Sin espiral'),
(16, 'Con ventanas'),
(16, 'Sin ventanas'),
(17, 'Troqueleadas'),
(17, 'Boleadas'),
(17, 'Plastificadas'),
(18, 'Para estructura'),
(18, 'Para banderado'),
(19, 'Para estructura'),
(20, 'Estructura metalica'),
(20, 'PVC'),
(20, 'Coroplast'),
(20, 'Laminados'),
(21, 'Troqueleados'),
(21, 'Laminados'),
(22, 'Instalado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_producto_impresion`
--

CREATE TABLE IF NOT EXISTS `tbl_producto_impresion` (
  `Tipo_de_impresion` varchar(20) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_producto_impresion`
--

INSERT INTO `tbl_producto_impresion` (`Tipo_de_impresion`, `id_producto`, `descripcion`) VALUES
('Tiro', 1, ''),
('Retiro', 1, ''),
('Tiro', 2, ''),
('Retiro', 2, ''),
('Tiro', 3, ''),
('Retiro', 3, ''),
('Tiro', 4, ''),
('Retiro', 4, ''),
('Tiro', 5, ''),
('Retiro', 5, ''),
('Tiro', 6, ''),
('Retiro', 6, ''),
('Tiro', 7, ''),
('Tiro', 8, ''),
('Retiro', 8, ''),
('Tiro', 9, ''),
('Retiro', 9, ''),
('Tiro', 10, ''),
('Tiro', 11, ''),
('Tiro', 12, ''),
('Retiro', 12, ''),
('Tiro', 13, ''),
('Retiro', 13, ''),
('Tiro', 14, ''),
('Retiro', 14, ''),
('Tiro', 15, ''),
('Retiro', 15, ''),
('Tiro', 16, ''),
('Tiro', 17, ''),
('Retiro', 17, ''),
('Tiro', 18, ''),
('Tiro', 19, ''),
('Tiro', 20, ''),
('Tiro', 21, ''),
('Tiro', 22, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_producto_material`
--

CREATE TABLE IF NOT EXISTS `tbl_producto_material` (
  `id_material` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_producto_material`
--

INSERT INTO `tbl_producto_material` (`id_material`, `id_producto`) VALUES
(1, 1),
(2, 1),
(3, 1),
(1, 2),
(2, 2),
(3, 2),
(1, 3),
(4, 4),
(5, 4),
(4, 5),
(5, 5),
(4, 6),
(5, 6),
(1, 7),
(2, 7),
(3, 7),
(4, 8),
(5, 8),
(3, 9),
(4, 9),
(6, 9),
(4, 10),
(5, 10),
(6, 10),
(4, 11),
(5, 11),
(7, 11),
(6, 12),
(1, 13),
(4, 14),
(5, 14),
(6, 14),
(8, 14),
(1, 15),
(4, 15),
(6, 15),
(6, 16),
(1, 17),
(2, 17),
(6, 17),
(9, 18),
(10, 18),
(11, 18),
(11, 19),
(12, 19),
(13, 20),
(14, 20),
(15, 20),
(16, 20),
(14, 21),
(16, 21),
(18, 21),
(17, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_producto_tamaño`
--

CREATE TABLE IF NOT EXISTS `tbl_producto_tamaño` (
  `id_producto` int(11) NOT NULL,
  `tamaño` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_producto_tamaño`
--

INSERT INTO `tbl_producto_tamaño` (`id_producto`, `tamaño`) VALUES
(1, '3.5 x 2'),
(1, 'Personalizado'),
(2, '7 x 5'),
(2, '4 x 6'),
(2, 'Personalizado'),
(3, '2 x 7.5'),
(3, 'Personalizado'),
(4, '4.25 x 5.5'),
(4, '3.66 x 8.5'),
(4, '5.5 x 8.5'),
(4, '8.5 x 11'),
(4, 'Personalizado'),
(5, 'Carta'),
(5, 'Oficio'),
(5, 'Tabloide'),
(5, '25 x 8.5'),
(5, 'Personalizado'),
(6, 'Carta'),
(6, 'Oficio'),
(6, 'Tabloide'),
(6, '25 x 8.5'),
(6, 'Personalizado'),
(7, '8.5 x 5.5'),
(7, '11 x 8.5'),
(7, '13 x 8.5'),
(7, '11 x 17'),
(7, 'Personalizado'),
(8, '8.5 x 11'),
(8, '5.5 x 8.5'),
(8, '8.5 x 12.5'),
(8, '6.25 x 8.5'),
(8, 'Personalizado'),
(9, '8.5 x 11'),
(9, '5.5 x 8.5'),
(9, '8.5 x 12.5'),
(9, '6.25 x 8.5'),
(9, 'Personalizado'),
(10, '8.5 x 11'),
(10, '8.5 x 13'),
(10, '12 x 18'),
(10, 'Personalizado'),
(11, 'Personalizado'),
(12, '8.5 x 11'),
(12, '8.5 x 13'),
(12, 'Personalizado'),
(13, 'Personalizado'),
(14, 'Personalizado'),
(15, '8.5 x 5.5'),
(15, '8.5 x 11'),
(15, '11 x 17'),
(15, '17 x 22'),
(15, 'Personalizado'),
(16, 'Personalizado'),
(17, 'Personalizado'),
(18, 'Personalizado'),
(19, 'Personalizado'),
(20, 'Personalizado'),
(21, 'Personalizado'),
(22, 'Personalizado'),
(23, '30 x 70'),
(23, '32 x 80'),
(23, '94 x 94'),
(23, '2.30M x 4M'),
(23, 'Banderola'),
(23, 'Personalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedores`
--

CREATE TABLE IF NOT EXISTS `tbl_proveedores` (
`id_proveedor` int(11) NOT NULL,
  `id_tipo_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles`
--

CREATE TABLE IF NOT EXISTS `tbl_roles` (
`id_rol` int(11) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_roles`
--

INSERT INTO `tbl_roles` (`id_rol`, `rol`, `descripcion`, `estado`) VALUES
(1, 'Default', 'Predeterminado', 1),
(2, 'Admin', 'Administrador del sistema', 1),
(3, 'Gerente', 'Gerente de la empresa', 1),
(4, 'Diseñador', 'Diseñador grafico de la Empresa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_cliente`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_cliente` (
`id_tipo_cliente` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_contacto`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_contacto` (
`id_tipo_contacto` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_contacto_proveedores`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_contacto_proveedores` (
`id_tipo_contacto_proveedor` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_documento`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_documento` (
`id_tipo_documento` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_pago`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_pago` (
`id_tipo_pago` int(11) NOT NULL,
  `descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_proveedores`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_proveedores` (
`id_tipo_proveedor` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
`id_usuario` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `contrasena` varchar(254) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `id_estado_usuario` int(11) NOT NULL,
  `fecha_ultima_conexion` datetime DEFAULT CURRENT_TIMESTAMP,
  `preguntas_contestadas` int(11) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT CURRENT_TIMESTAMP,
  `intentos` int(11) NOT NULL DEFAULT '1',
  `fecha_vencimiento` datetime DEFAULT CURRENT_TIMESTAMP,
  `token` varchar(60) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_final` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `id_rol`, `usuario`, `nombre_usuario`, `contrasena`, `imagen`, `correo_electronico`, `id_estado_usuario`, `fecha_ultima_conexion`, `preguntas_contestadas`, `fecha_creacion`, `intentos`, `fecha_vencimiento`, `token`, `fecha_inicio`, `fecha_final`) VALUES
(1, 2, 'ADMIN', 'ADMIN', '1sxqpS6ce44=', '1603094717.png', 'admin@gmail.com', 2, '2020-10-19 12:54:59', 0, '2020-10-19 12:54:59', 1, '2020-10-19 12:54:59', NULL, NULL, NULL),
(2, 2, 'NESTO', 'NESTO', '8d22900f61f6312e7d35be3132110c6ffdf6592ecdfcf058fa68d5f56613bd69', '1603134666.png', 'aaa@gmail.com', 2, '0000-00-00 00:00:00', 3, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 'owUhIk7A6l4ymJ0', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'CAMPEON', 'CAMPEON', 'ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901', '1603137139.png', 'campeon@gmail.com', 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 'COPA', 'COPA', 'ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901', '1603137287.png', 'copa@gmail.com', 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 'EMILIO', 'EMILIOR', 'fc6d282c72b8dd14058abe01ae03a1cf81a50af056d5fbd1e7f3bed00c713f71', '1603137749.png', 'emilio@gmail.com', 2, '0000-00-00 00:00:00', 2, '0000-00-00 00:00:00', 2, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 3, 'NAVIDAD', 'NAVIDAD SIN TI', '02b93f33a419ec2e6899fbee126f398a87251dc6e565dc0d6f15985f48367945', '1603146905.png', 'gto@gto.com', 2, '0000-00-00 00:00:00', 3, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '4gLNSUmMav0enH1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 'PERRI', 'PERRI', 'ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901', '', 'perri@gmail.com', 1, '0000-00-00 00:00:00', 3, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 1, 'USUARIOPRUEBA', 'USUARIO DE PRUEBA', 'ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901', '', 'soportelunacolor@gmail.com', 5, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 1, 'RENE', 'RENE', 'ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901', '', 'javierpereira1996pj@gmail.com', 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 'CkShZHX1TgxQpny', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 1, 'RN', 'RN', 'ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901', '', 'tunau@gmail.com', 5, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 1, 'JR', 'JR', 'ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901', '', 'teamlunau@gmail.com', 1, '0000-00-00 00:00:00', 3, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 4, 'ZOE', 'ZOE', 'fc6d282c72b8dd14058abe01ae03a1cf81a50af056d5fbd1e7f3bed00c713f71', '', 'zoe@gmail.com', 2, '0000-00-00 00:00:00', 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 3, 'JOSE', 'JOSE', 'ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901', '', 'jose@gmail.com', 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 3, 'CLAU', 'CLAU', 'ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901', '', 'clau@hotmail.com', 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 1, 'VALERIA', 'VALERIA', '1sxqpS6ce44=', '', 'valeria@hotmail.com', 5, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 3, 'RITA', 'RITA', '1sxqpS6ce44=', '1603094717.png', 'carolinaflorentino_98@hotmail.com', 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 3, 'CAROL', 'CAROL', '1sxqpS6ce44=', '1603094717.png', 'carolflorentino398@gmail.com', 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_permiso`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario_permiso` (
`id_usuario_permiso` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuario_permiso`
--

INSERT INTO `tbl_usuario_permiso` (`id_usuario_permiso`, `id_usuario`, `idpermiso`) VALUES
(56, 1, 2),
(57, 1, 3),
(58, 1, 7),
(59, 1, 5),
(60, 1, 1),
(61, 1, 6),
(62, 1, 4),
(63, 1, 9),
(64, 1, 10),
(65, 1, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_bitacora`
--
ALTER TABLE `tbl_bitacora`
 ADD PRIMARY KEY (`id_bitacora`), ADD KEY `FK_tblusuarios` (`id_usuario`), ADD KEY `FK_tblobjetos` (`id_objeto`);

--
-- Indices de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
 ADD PRIMARY KEY (`id_cliente`), ADD KEY `FK_tbl_tipo_cliente` (`id_tipo_cliente`);

--
-- Indices de la tabla `tbl_compras`
--
ALTER TABLE `tbl_compras`
 ADD PRIMARY KEY (`id_compra`), ADD KEY `FK_user` (`id_usuario`), ADD KEY `FK_provee` (`id_proveedor`), ADD KEY `FK_tblmateriaprima` (`id_materia_prima`);

--
-- Indices de la tabla `tbl_comprobante_entrega`
--
ALTER TABLE `tbl_comprobante_entrega`
 ADD PRIMARY KEY (`id_comprobante_entrega`), ADD KEY `FK_cliente` (`id_cliente`), ADD KEY `FK_usuario` (`id_usuario`), ADD KEY `FK_pedido` (`id_pedido`);

--
-- Indices de la tabla `tbl_contactos_clientes`
--
ALTER TABLE `tbl_contactos_clientes`
 ADD PRIMARY KEY (`id_contacto`), ADD KEY `FK_tblclientes` (`id_cliente`), ADD KEY `FK_tbl_tipo_contacto` (`id_tipo_contacto`);

--
-- Indices de la tabla `tbl_contactos_proveedores`
--
ALTER TABLE `tbl_contactos_proveedores`
 ADD PRIMARY KEY (`id_contacto_proveedor`), ADD KEY `FK_tblproveedores` (`id_proveedor`), ADD KEY `FK_tbl_tipo_cproveedor` (`id_tipo_contacto_proveedor`);

--
-- Indices de la tabla `tbl_detalle_factura`
--
ALTER TABLE `tbl_detalle_factura`
 ADD PRIMARY KEY (`id_detalle_factura`), ADD KEY `FK_tblfacturas` (`id_factura`), ADD KEY `FK_tbldetalle_pedido` (`id_detalle_pedido`);

--
-- Indices de la tabla `tbl_detalle_pedido`
--
ALTER TABLE `tbl_detalle_pedido`
 ADD PRIMARY KEY (`id_detalle_pedido`), ADD KEY `FK_pedidos` (`id_pedido`), ADD KEY `FK_productos` (`id_producto`);

--
-- Indices de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
 ADD PRIMARY KEY (`id_documento`), ADD KEY `FK_tbl_tipo_documento` (`id_tipo_documento`), ADD KEY `FK_tbl_clientes` (`id_cliente`);

--
-- Indices de la tabla `tbl_estado_pedido`
--
ALTER TABLE `tbl_estado_pedido`
 ADD PRIMARY KEY (`id_estado_pedido`), ADD KEY `FK_tbl_pedidos` (`id_pedido`);

--
-- Indices de la tabla `tbl_estado_usuarios`
--
ALTER TABLE `tbl_estado_usuarios`
 ADD PRIMARY KEY (`id_estado_usuario`);

--
-- Indices de la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
 ADD PRIMARY KEY (`id_factura`), ADD KEY `FK_tbclientes` (`id_cliente`), ADD KEY `FK_tbl_tipo_pago` (`id_tipo_pago`);

--
-- Indices de la tabla `tbl_hist_contrasena`
--
ALTER TABLE `tbl_hist_contrasena`
 ADD PRIMARY KEY (`id_hist`), ADD KEY `FK_tbl_usuarios` (`id_usuario`);

--
-- Indices de la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
 ADD PRIMARY KEY (`id_inventario`), ADD KEY `FK_tblmateria_prima` (`id_materia_prima`);

--
-- Indices de la tabla `tbl_material`
--
ALTER TABLE `tbl_material`
 ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `tbl_materia_prima`
--
ALTER TABLE `tbl_materia_prima`
 ADD PRIMARY KEY (`id_materia_prima`);

--
-- Indices de la tabla `tbl_materia_prima_por_producto`
--
ALTER TABLE `tbl_materia_prima_por_producto`
 ADD PRIMARY KEY (`id_materia_prima_por_producto`), ADD KEY `FK_tbl_materia_prima` (`id_materia_prima`), ADD KEY `FK_tbl_productos` (`id_producto`);

--
-- Indices de la tabla `tbl_objetos`
--
ALTER TABLE `tbl_objetos`
 ADD PRIMARY KEY (`id_objeto`);

--
-- Indices de la tabla `tbl_orden_produccion`
--
ALTER TABLE `tbl_orden_produccion`
 ADD PRIMARY KEY (`id_orden_produccion`), ADD KEY `FK_tbl_materia_prima_por_producto` (`id_materia_prima_por_producto`);

--
-- Indices de la tabla `tbl_parametros`
--
ALTER TABLE `tbl_parametros`
 ADD PRIMARY KEY (`id_parametro`), ADD KEY `FK_usuarios` (`id_usuario`);

--
-- Indices de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
 ADD PRIMARY KEY (`id_pedido`), ADD KEY `FK_tblcliente` (`id_cliente`);

--
-- Indices de la tabla `tbl_permiso`
--
ALTER TABLE `tbl_permiso`
 ADD PRIMARY KEY (`idpermiso`);

--
-- Indices de la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
 ADD PRIMARY KEY (`id_permiso`), ADD KEY `FK_tbroles` (`id_rol`), ADD KEY `FK_tbobjetos` (`id_objeto`);

--
-- Indices de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
 ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `tbl_preguntas_usuarios`
--
ALTER TABLE `tbl_preguntas_usuarios`
 ADD PRIMARY KEY (`id_pregunta_usuario`), ADD KEY `FK_tbl_preguntas` (`id_pregunta`);

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
 ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
 ADD PRIMARY KEY (`id_proveedor`), ADD KEY `FK_tbl_tipo_proveedores` (`id_tipo_proveedor`);

--
-- Indices de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
 ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tbl_tipo_cliente`
--
ALTER TABLE `tbl_tipo_cliente`
 ADD PRIMARY KEY (`id_tipo_cliente`);

--
-- Indices de la tabla `tbl_tipo_contacto`
--
ALTER TABLE `tbl_tipo_contacto`
 ADD PRIMARY KEY (`id_tipo_contacto`);

--
-- Indices de la tabla `tbl_tipo_contacto_proveedores`
--
ALTER TABLE `tbl_tipo_contacto_proveedores`
 ADD PRIMARY KEY (`id_tipo_contacto_proveedor`);

--
-- Indices de la tabla `tbl_tipo_documento`
--
ALTER TABLE `tbl_tipo_documento`
 ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `tbl_tipo_pago`
--
ALTER TABLE `tbl_tipo_pago`
 ADD PRIMARY KEY (`id_tipo_pago`);

--
-- Indices de la tabla `tbl_tipo_proveedores`
--
ALTER TABLE `tbl_tipo_proveedores`
 ADD PRIMARY KEY (`id_tipo_proveedor`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
 ADD PRIMARY KEY (`id_usuario`), ADD KEY `FK_tbl_roles` (`id_rol`), ADD KEY `FK_tbl_estado_usuarios` (`id_estado_usuario`);

--
-- Indices de la tabla `tbl_usuario_permiso`
--
ALTER TABLE `tbl_usuario_permiso`
 ADD PRIMARY KEY (`id_usuario_permiso`), ADD KEY `FK_tusuario` (`id_usuario`), ADD KEY `FK_tblpermiso` (`idpermiso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bitacora`
--
ALTER TABLE `tbl_bitacora`
MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=298;
--
-- AUTO_INCREMENT de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_compras`
--
ALTER TABLE `tbl_compras`
MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_comprobante_entrega`
--
ALTER TABLE `tbl_comprobante_entrega`
MODIFY `id_comprobante_entrega` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_contactos_clientes`
--
ALTER TABLE `tbl_contactos_clientes`
MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_contactos_proveedores`
--
ALTER TABLE `tbl_contactos_proveedores`
MODIFY `id_contacto_proveedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_detalle_factura`
--
ALTER TABLE `tbl_detalle_factura`
MODIFY `id_detalle_factura` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_detalle_pedido`
--
ALTER TABLE `tbl_detalle_pedido`
MODIFY `id_detalle_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_estado_pedido`
--
ALTER TABLE `tbl_estado_pedido`
MODIFY `id_estado_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_estado_usuarios`
--
ALTER TABLE `tbl_estado_usuarios`
MODIFY `id_estado_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_hist_contrasena`
--
ALTER TABLE `tbl_hist_contrasena`
MODIFY `id_hist` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_material`
--
ALTER TABLE `tbl_material`
MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `tbl_materia_prima`
--
ALTER TABLE `tbl_materia_prima`
MODIFY `id_materia_prima` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_materia_prima_por_producto`
--
ALTER TABLE `tbl_materia_prima_por_producto`
MODIFY `id_materia_prima_por_producto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_objetos`
--
ALTER TABLE `tbl_objetos`
MODIFY `id_objeto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tbl_orden_produccion`
--
ALTER TABLE `tbl_orden_produccion`
MODIFY `id_orden_produccion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_parametros`
--
ALTER TABLE `tbl_parametros`
MODIFY `id_parametro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_permiso`
--
ALTER TABLE `tbl_permiso`
MODIFY `idpermiso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tbl_preguntas_usuarios`
--
ALTER TABLE `tbl_preguntas_usuarios`
MODIFY `id_pregunta_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_cliente`
--
ALTER TABLE `tbl_tipo_cliente`
MODIFY `id_tipo_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_contacto`
--
ALTER TABLE `tbl_tipo_contacto`
MODIFY `id_tipo_contacto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_contacto_proveedores`
--
ALTER TABLE `tbl_tipo_contacto_proveedores`
MODIFY `id_tipo_contacto_proveedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_documento`
--
ALTER TABLE `tbl_tipo_documento`
MODIFY `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_pago`
--
ALTER TABLE `tbl_tipo_pago`
MODIFY `id_tipo_pago` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_proveedores`
--
ALTER TABLE `tbl_tipo_proveedores`
MODIFY `id_tipo_proveedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario_permiso`
--
ALTER TABLE `tbl_usuario_permiso`
MODIFY `id_usuario_permiso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_bitacora`
--
ALTER TABLE `tbl_bitacora`
ADD CONSTRAINT `FK_tblobjetos` FOREIGN KEY (`id_objeto`) REFERENCES `tbl_objetos` (`id_objeto`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_tblusuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
ADD CONSTRAINT `FK_tbl_tipo_cliente` FOREIGN KEY (`id_tipo_cliente`) REFERENCES `tbl_tipo_cliente` (`id_tipo_cliente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_compras`
--
ALTER TABLE `tbl_compras`
ADD CONSTRAINT `FK_provee` FOREIGN KEY (`id_proveedor`) REFERENCES `tbl_proveedores` (`id_proveedor`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_tblmateriaprima` FOREIGN KEY (`id_materia_prima`) REFERENCES `tbl_materia_prima` (`id_materia_prima`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_user` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_comprobante_entrega`
--
ALTER TABLE `tbl_comprobante_entrega`
ADD CONSTRAINT `FK_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `tbl_pedidos` (`id_pedido`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_contactos_clientes`
--
ALTER TABLE `tbl_contactos_clientes`
ADD CONSTRAINT `FK_tbl_tipo_contacto` FOREIGN KEY (`id_tipo_contacto`) REFERENCES `tbl_tipo_contacto` (`id_tipo_contacto`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_tblclientes` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_contactos_proveedores`
--
ALTER TABLE `tbl_contactos_proveedores`
ADD CONSTRAINT `FK_tbl_tipo_cproveedor` FOREIGN KEY (`id_tipo_contacto_proveedor`) REFERENCES `tbl_tipo_contacto_proveedores` (`id_tipo_contacto_proveedor`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_tblproveedores` FOREIGN KEY (`id_proveedor`) REFERENCES `tbl_proveedores` (`id_proveedor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_detalle_factura`
--
ALTER TABLE `tbl_detalle_factura`
ADD CONSTRAINT `FK_tbldetalle_pedido` FOREIGN KEY (`id_detalle_pedido`) REFERENCES `tbl_detalle_pedido` (`id_detalle_pedido`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_tblfacturas` FOREIGN KEY (`id_factura`) REFERENCES `tbl_facturas` (`id_factura`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_detalle_pedido`
--
ALTER TABLE `tbl_detalle_pedido`
ADD CONSTRAINT `FK_pedidos` FOREIGN KEY (`id_pedido`) REFERENCES `tbl_pedidos` (`id_pedido`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_productos` FOREIGN KEY (`id_producto`) REFERENCES `tbl_productos` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
ADD CONSTRAINT `FK_tbl_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_tbl_tipo_documento` FOREIGN KEY (`id_tipo_documento`) REFERENCES `tbl_tipo_documento` (`id_tipo_documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_estado_pedido`
--
ALTER TABLE `tbl_estado_pedido`
ADD CONSTRAINT `FK_tbl_pedidos` FOREIGN KEY (`id_pedido`) REFERENCES `tbl_pedidos` (`id_pedido`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
ADD CONSTRAINT `FK_tbclientes` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_tbl_tipo_pago` FOREIGN KEY (`id_tipo_pago`) REFERENCES `tbl_tipo_pago` (`id_tipo_pago`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_hist_contrasena`
--
ALTER TABLE `tbl_hist_contrasena`
ADD CONSTRAINT `FK_tbl_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
ADD CONSTRAINT `FK_tblmateria_prima` FOREIGN KEY (`id_materia_prima`) REFERENCES `tbl_materia_prima` (`id_materia_prima`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_materia_prima_por_producto`
--
ALTER TABLE `tbl_materia_prima_por_producto`
ADD CONSTRAINT `FK_tbl_materia_prima` FOREIGN KEY (`id_materia_prima`) REFERENCES `tbl_materia_prima` (`id_materia_prima`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_tbl_productos` FOREIGN KEY (`id_producto`) REFERENCES `tbl_productos` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_orden_produccion`
--
ALTER TABLE `tbl_orden_produccion`
ADD CONSTRAINT `FK_tbl_materia_prima_por_producto` FOREIGN KEY (`id_materia_prima_por_producto`) REFERENCES `tbl_materia_prima_por_producto` (`id_materia_prima_por_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_parametros`
--
ALTER TABLE `tbl_parametros`
ADD CONSTRAINT `FK_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
ADD CONSTRAINT `FK_tblcliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
ADD CONSTRAINT `FK_tbobjetos` FOREIGN KEY (`id_objeto`) REFERENCES `tbl_objetos` (`id_objeto`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_tbroles` FOREIGN KEY (`id_rol`) REFERENCES `tbl_roles` (`id_rol`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_preguntas_usuarios`
--
ALTER TABLE `tbl_preguntas_usuarios`
ADD CONSTRAINT `FK_tbl_preguntas` FOREIGN KEY (`id_pregunta`) REFERENCES `tbl_preguntas` (`id_pregunta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
ADD CONSTRAINT `FK_tbl_tipo_proveedores` FOREIGN KEY (`id_tipo_proveedor`) REFERENCES `tbl_tipo_proveedores` (`id_tipo_proveedor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
ADD CONSTRAINT `FK_tbl_estado_usuarios` FOREIGN KEY (`id_estado_usuario`) REFERENCES `tbl_estado_usuarios` (`id_estado_usuario`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_tbl_roles` FOREIGN KEY (`id_rol`) REFERENCES `tbl_roles` (`id_rol`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuario_permiso`
--
ALTER TABLE `tbl_usuario_permiso`
ADD CONSTRAINT `FK_tblpermiso` FOREIGN KEY (`idpermiso`) REFERENCES `tbl_permiso` (`idpermiso`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_tusuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
