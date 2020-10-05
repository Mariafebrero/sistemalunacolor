-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2020 a las 06:36:01
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_luna_color`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bitacora`
--

CREATE TABLE `tbl_bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_objeto` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `accion` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `creado_por` varchar(15) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `modificado_por` varchar(15) DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `id_cliente` int(11) NOT NULL,
  `id_tipo_documento` int(11) NOT NULL,
  `id_contacto` int(11) NOT NULL,
  `nombre_cliente` varchar(50) DEFAULT NULL,
  `nombre_empresa` varchar(50) DEFAULT NULL,
  `razon_social` varchar(30) DEFAULT NULL,
  `denominacion` varchar(30) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_compras`
--

CREATE TABLE `tbl_compras` (
  `id_compra` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_materia_prima` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total_compra` decimal(8,2) DEFAULT NULL,
  `fecha_compra` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comprobante_entrega`
--

CREATE TABLE `tbl_comprobante_entrega` (
  `id_comprobante_entrega` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `fecha_entrega` datetime DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contactos_clientes`
--

CREATE TABLE `tbl_contactos_clientes` (
  `id_contacto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_tipo_contacto` int(11) NOT NULL,
  `valor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contactos_proveedores`
--

CREATE TABLE `tbl_contactos_proveedores` (
  `id_contacto_proveedor` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_tipo_contacto_proveedor` int(11) NOT NULL,
  `valor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle_factura`
--

CREATE TABLE `tbl_detalle_factura` (
  `id_detalle_factura` int(11) NOT NULL,
  `id_detalle_pedido` int(11) NOT NULL,
  `comentario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle_pedido`
--

CREATE TABLE `tbl_detalle_pedido` (
  `id_detalle_pedido` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `comentario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE `tbl_documentos` (
  `id_documento` int(11) NOT NULL,
  `id_tipo_documento` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `valor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_pedido`
--

CREATE TABLE `tbl_estado_pedido` (
  `id_estado_pedido` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_facturas`
--

CREATE TABLE `tbl_facturas` (
  `id_factura` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_tipo_pago` int(11) NOT NULL,
  `fecha_factura` date DEFAULT NULL,
  `descuento` decimal(5,2) DEFAULT NULL,
  `importe_grabado` decimal(5,2) DEFAULT NULL,
  `importe_exento` decimal(5,2) DEFAULT NULL,
  `importe_exonerado` decimal(5,2) DEFAULT NULL,
  `impuesto` decimal(5,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hist_contraseña`
--

CREATE TABLE `tbl_hist_contraseña` (
  `id_hist` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `contraseña` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inventario`
--

CREATE TABLE `tbl_inventario` (
  `id_inventario` int(11) NOT NULL,
  `id_materia_prima` int(11) NOT NULL,
  `existencia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materia_prima`
--

CREATE TABLE `tbl_materia_prima` (
  `id_materia_prima` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `nombre_materia_prima` varchar(60) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `cantidad_minima` int(11) DEFAULT NULL,
  `cantidad_maxima` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materia_prima_por_producto`
--

CREATE TABLE `tbl_materia_prima_por_producto` (
  `id_materia_prima_por_producto` int(11) NOT NULL,
  `id_materia_prima` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_objetos`
--

CREATE TABLE `tbl_objetos` (
  `id_objeto` int(11) NOT NULL,
  `objeto` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `tipo_objeto` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_orden_produccion`
--

CREATE TABLE `tbl_orden_produccion` (
  `id_orden_produccion` int(11) NOT NULL,
  `id_materia_prima_por_producto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_parametros`
--

CREATE TABLE `tbl_parametros` (
  `id_parametro` int(11) NOT NULL,
  `parametro` varchar(50) DEFAULT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_parametros`
--

INSERT INTO `tbl_parametros` (`id_parametro`, `parametro`, `valor`, `id_usuario`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'EMPRESA_NOMBRE', 'Luna Color', 1, '2020-09-30', NULL),
(2, 'EMPRESA_PAIS', 'Honduras', 1, '2020-09-30', NULL),
(3, 'EMPRESA_DIRECCION', 'Bo. Morazán Cll. Principal Cnt. Escuela Manuel Soto,Tegucigalpa', 1, '2020-09-30', NULL),
(4, 'EMPRESA_CORREO', 'admon.lunacolor@gmail.com', 1, '2020-09-30', NULL),
(5, 'EMPRESA_TELEFONO', ' 99481570', 1, '2020-09-30', NULL),
(6, 'EMPRESA_GERENTE', 'Azucena del Carmen Morales Robles', 1, '2020-09-30', NULL),
(7, 'ADMIN_PREGUNTAS_CONTESTADAS', '3', 1, '2020-09-30', NULL),
(8, 'ADMIN_INTENTOS', '3', 1, '2020-09-30', NULL),
(9, 'ADMIN_VIGENCIA_CORREO', '24 horas', 1, '2020-09-30', NULL),
(10, 'ADMIN_VIGENCIA_USUARIO', '20 dias', 1, '2020-09-30', NULL),
(11, 'ADMIN_PREGUNTAS_RECUPERACION', '1', 1, '2020-09-30', NULL),
(12, 'ADMIN_IMPUESTO', '15%', 1, '2020-09-30', NULL),
(13, 'SYS_NOMBRE', 'Sistema Luna Color', 1, '2020-09-30', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedidos`
--

CREATE TABLE `tbl_pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha_inicial` date DEFAULT NULL,
  `fecha_entrega` int(11) DEFAULT NULL,
  `descuento` decimal(8,2) DEFAULT NULL,
  `impuesto` decimal(8,2) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `condicion` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_permiso`
--

CREATE TABLE `tbl_permiso` (
  `idpermiso` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tbl_permisos` (
  `id_permiso` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_objeto` int(11) NOT NULL,
  `permiso_insercion` varchar(1) DEFAULT NULL,
  `permiso_eliminacion` varchar(1) DEFAULT NULL,
  `permiso_actualizacion` varchar(1) DEFAULT NULL,
  `permiso_consultar` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preguntas`
--

CREATE TABLE `tbl_preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(100) DEFAULT NULL,
  `condicion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_preguntas`
--

INSERT INTO `tbl_preguntas` (`id_pregunta`, `pregunta`, `condicion`) VALUES
(1, '¿Cuál es tu color favorito?', 1),
(2, '¿Cuál es tu animal favorito?', 1),
(3, '¿Cuál es tu libro favorito?', 1),
(4, '¿Cuál es tu fruta favorita?', 0),
(5, '¿Cuál es el nombre de tu mejor amigo/a?', 0),
(6, '¿Cuál es tu comida favorita?', 0),
(7, 'Como se llama tu mama?', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preguntas_usuarios`
--

CREATE TABLE `tbl_preguntas_usuarios` (
  `id_pregunta_usuario` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_pregunta` int(11) NOT NULL,
  `respuesta` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_preguntas_usuarios`
--

INSERT INTO `tbl_preguntas_usuarios` (`id_pregunta_usuario`, `id_usuario`, `id_pregunta`, `respuesta`) VALUES
(65, 4, 2, 'perro'),
(66, 4, 4, 'uva'),
(67, 4, 5, 'tato'),
(68, 4, 3, 'hjgsds'),
(69, 4, 3, 'dfvlkjfdl'),
(70, 4, 2, 'jhgjdas'),
(71, 4, 3, 'hjgsds'),
(72, 4, 3, 'dfvlkjfdl'),
(73, 4, 2, 'jhgjdas'),
(74, 10, 2, 'GATO'),
(75, 10, 4, 'MANGO'),
(76, 10, 7, 'ROSALIO'),
(77, 4, 4, 'sdfs'),
(78, 4, 3, 'xgx'),
(79, 4, 2, 'cvbvxbv'),
(80, 4, 4, 'sdfs'),
(81, 4, 3, 'xgx'),
(82, 4, 2, 'cvbvxbv'),
(83, 9, 2, 'vghgdh'),
(84, 9, 4, 'vfdshsdf'),
(85, 9, 3, 'ERTETYE'),
(86, 9, 2, 'vghgdh'),
(87, 9, 4, 'vfdshsdf'),
(88, 9, 3, 'ERTETYE'),
(89, 4, 4, 'sdfs'),
(90, 4, 3, 'xgx'),
(91, 4, 2, 'cvbvxbv'),
(92, 9, 3, 'fdg'),
(93, 9, 2, 'fdgfds'),
(94, 9, 4, 'cvbcvb'),
(95, 9, 3, 'gdf'),
(96, 9, 2, 'gbg'),
(97, 9, 2, 'dfhghdgf'),
(98, 9, 3, 'gdf'),
(99, 9, 2, 'gbg'),
(100, 9, 2, 'dfhghdgf'),
(101, 9, 2, 'ggdfsg'),
(102, 9, 3, 'vbvb'),
(103, 9, 3, 'fhgfdh'),
(104, 9, 2, 'FGDHGSF'),
(105, 9, 3, 'VHDFH'),
(106, 9, 5, 'VFVG'),
(107, 9, 3, 'dfdsg'),
(108, 9, 5, 'fdhhdf'),
(109, 9, 3, 'fgsdfhghdf'),
(110, 9, 2, 'dfvhdfh'),
(111, 9, 4, 'fdfdf'),
(112, 9, 5, 'dfhdfh'),
(113, 9, 2, 'fgfdssfd'),
(114, 9, 4, 'ghdf'),
(115, 9, 3, 'fdhgfhs'),
(116, 9, 2, 'vbhsfd'),
(117, 9, 6, 'vxnfvn'),
(118, 9, 4, 'cbvnv'),
(119, 10, 3, 'FGSGSD'),
(120, 10, 3, 'FGSDHGF'),
(121, 10, 2, 'FGFVHFGHS'),
(122, 10, 5, 'JHGS'),
(123, 10, 2, 'KHDBFVDHF'),
(124, 10, 5, 'JHFD'),
(125, 10, 4, 'dytery'),
(126, 10, 3, 'erteter'),
(127, 10, 4, 'gsgrtyrt'),
(128, 10, 4, 'DFGFE'),
(129, 10, 3, 'FGHGF'),
(130, 10, 2, 'FDDHG'),
(131, 10, 3, 'DFGSDF'),
(132, 10, 3, 'CVFGD'),
(133, 10, 4, 'GSDFGFD'),
(134, 10, 3, 'fdgdsf'),
(135, 10, 4, 'gdfsgsfd'),
(136, 10, 3, 'sdgfgs'),
(137, 10, 3, 'VXVC'),
(138, 10, 2, 'FVDFVF'),
(139, 10, 4, 'FBGFHG'),
(140, 13, 1, 'jidshisdh'),
(141, 13, 4, 'jdfddu'),
(142, 13, 5, 'kjhvuhgvu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `id_producto` int(11) NOT NULL,
  `id_tipo_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) DEFAULT NULL,
  `precio_unitario` decimal(5,2) DEFAULT NULL,
  `precio_venta` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedores`
--

CREATE TABLE `tbl_proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `id_tipo_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_roles`
--

INSERT INTO `tbl_roles` (`id_rol`, `rol`, `descripcion`, `condicion`) VALUES
(1, 'Admin', 'Administrador del sistema', 1),
(2, 'Diseñador', 'Diseñador de la empresa', 1),
(3, 'Trapeador', 'Trapea', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_cliente`
--

CREATE TABLE `tbl_tipo_cliente` (
  `id_tipo_cliente` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_contacto`
--

CREATE TABLE `tbl_tipo_contacto` (
  `id_tipo_contacto` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_contacto_proveedores`
--

CREATE TABLE `tbl_tipo_contacto_proveedores` (
  `id_tipo_contacto_proveedor` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_documento`
--

CREATE TABLE `tbl_tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_pago`
--

CREATE TABLE `tbl_tipo_pago` (
  `id_tipo_pago` int(11) NOT NULL,
  `descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_producto`
--

CREATE TABLE `tbl_tipo_producto` (
  `id_tipo_producto` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_proveedores`
--

CREATE TABLE `tbl_tipo_proveedores` (
  `id_tipo_proveedor` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `contrasena` varchar(16) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT 1,
  `primer_ingreso` int(11) DEFAULT NULL,
  `fecha_ultima_conexion` date DEFAULT NULL,
  `preguntas_contestadas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `id_rol`, `usuario`, `nombre_usuario`, `contrasena`, `imagen`, `correo_electronico`, `condicion`, `primer_ingreso`, `fecha_ultima_conexion`, `preguntas_contestadas`) VALUES
(1, 1, 'ADMIN', 'Azucena Morales', 'Admin12*', '1601510545.jpeg', 'admon.lunacolor@gmail.com', 1, 0, '2020-09-30', NULL),
(2, 2, 'MARIA', 'Maria Jose', 'Mache11#', '', '', 0, NULL, NULL, NULL),
(3, 2, 'MARIA', 'Maria Jose', 'Mache11#', '', 'mache.febrero@gmail.com', 1, NULL, NULL, NULL),
(4, 2, 'MACHE', 'Maria Jose', 'Mache11#', '', 'mache.febrero@gmail.com', 1, NULL, NULL, NULL),
(7, 1, 'JAVI', 'JAVIER', 'Javier11#', NULL, 'mache@gmail.com', 1, 0, '2020-09-30', 2),
(8, 1, 'JAVI', 'JAVIER', 'Javier11#', NULL, 'mache@gmail.com', 1, 0, '2020-09-30', 2),
(9, 2, 'JC', 'Juan carlos', 'Mache11#', '', 'mache.febrero@gmail.com', 1, 1, NULL, NULL),
(10, 2, 'BETTY', 'betty', 'Mache12#', '', 'mache.febrero@gmail.com', 1, 0, NULL, NULL),
(11, 2, 'BESSY', 'betty', 'BessyG11#', '', 'mache.febrero@gmail.com', 1, 0, NULL, NULL),
(12, 3, 'BETTY', 'betty', 'Mache11#', '', 'mache.febrero@gmail.com', 1, 1, NULL, NULL),
(13, 2, 'BESSY', 'besy', 'BessyG11#', '', 'mache.febrero@gmail.com', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_permiso`
--

CREATE TABLE `tbl_usuario_permiso` (
  `idusuario_permiso` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuario_permiso`
--

INSERT INTO `tbl_usuario_permiso` (`idusuario_permiso`, `idusuario`, `idpermiso`) VALUES
(21, 1, 1),
(22, 1, 2),
(23, 1, 3),
(24, 1, 4),
(25, 1, 5),
(26, 1, 6),
(27, 1, 7),
(28, 1, 8),
(29, 1, 9),
(30, 1, 10),
(31, 4, 1),
(32, 4, 2),
(33, 4, 3),
(34, 4, 4),
(35, 4, 5),
(36, 4, 6),
(37, 4, 7),
(38, 4, 8),
(39, 4, 9),
(40, 4, 10),
(41, 0, 1),
(42, 0, 8),
(43, 0, 9),
(44, 0, 10),
(45, 9, 1),
(46, 9, 8),
(47, 9, 9),
(48, 9, 10),
(49, 10, 1),
(50, 10, 8),
(51, 10, 9),
(52, 10, 10),
(53, 11, 1),
(54, 11, 2),
(55, 11, 3),
(56, 11, 4),
(57, 11, 5),
(58, 11, 6),
(59, 11, 7),
(60, 11, 8),
(61, 11, 9),
(62, 11, 10),
(63, 12, 1),
(64, 12, 2),
(65, 12, 3),
(66, 12, 4),
(67, 12, 5),
(68, 12, 6),
(69, 12, 7),
(70, 12, 8),
(71, 12, 9),
(72, 12, 10),
(73, 13, 1),
(74, 13, 2),
(75, 13, 3),
(76, 13, 4),
(77, 13, 5),
(78, 13, 6),
(79, 13, 7),
(80, 13, 8),
(81, 13, 9),
(82, 13, 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_bitacora`
--
ALTER TABLE `tbl_bitacora`
  ADD PRIMARY KEY (`id_bitacora`);

--
-- Indices de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tbl_compras`
--
ALTER TABLE `tbl_compras`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indices de la tabla `tbl_comprobante_entrega`
--
ALTER TABLE `tbl_comprobante_entrega`
  ADD PRIMARY KEY (`id_comprobante_entrega`);

--
-- Indices de la tabla `tbl_contactos_clientes`
--
ALTER TABLE `tbl_contactos_clientes`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `tbl_contactos_proveedores`
--
ALTER TABLE `tbl_contactos_proveedores`
  ADD PRIMARY KEY (`id_contacto_proveedor`);

--
-- Indices de la tabla `tbl_detalle_factura`
--
ALTER TABLE `tbl_detalle_factura`
  ADD PRIMARY KEY (`id_detalle_factura`);

--
-- Indices de la tabla `tbl_detalle_pedido`
--
ALTER TABLE `tbl_detalle_pedido`
  ADD PRIMARY KEY (`id_detalle_pedido`);

--
-- Indices de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `tbl_estado_pedido`
--
ALTER TABLE `tbl_estado_pedido`
  ADD PRIMARY KEY (`id_estado_pedido`);

--
-- Indices de la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  ADD PRIMARY KEY (`id_factura`);

--
-- Indices de la tabla `tbl_hist_contraseña`
--
ALTER TABLE `tbl_hist_contraseña`
  ADD PRIMARY KEY (`id_hist`);

--
-- Indices de la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  ADD PRIMARY KEY (`id_inventario`);

--
-- Indices de la tabla `tbl_materia_prima`
--
ALTER TABLE `tbl_materia_prima`
  ADD PRIMARY KEY (`id_materia_prima`);

--
-- Indices de la tabla `tbl_materia_prima_por_producto`
--
ALTER TABLE `tbl_materia_prima_por_producto`
  ADD PRIMARY KEY (`id_materia_prima_por_producto`);

--
-- Indices de la tabla `tbl_objetos`
--
ALTER TABLE `tbl_objetos`
  ADD PRIMARY KEY (`id_objeto`);

--
-- Indices de la tabla `tbl_orden_produccion`
--
ALTER TABLE `tbl_orden_produccion`
  ADD PRIMARY KEY (`id_orden_produccion`);

--
-- Indices de la tabla `tbl_parametros`
--
ALTER TABLE `tbl_parametros`
  ADD PRIMARY KEY (`id_parametro`);

--
-- Indices de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `tbl_permiso`
--
ALTER TABLE `tbl_permiso`
  ADD PRIMARY KEY (`idpermiso`);

--
-- Indices de la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `tbl_preguntas_usuarios`
--
ALTER TABLE `tbl_preguntas_usuarios`
  ADD PRIMARY KEY (`id_pregunta_usuario`),
  ADD KEY `id_pregunta_usuario_usuario` (`id_usuario`),
  ADD KEY `id_pregunta_usuario_pregunta` (`id_pregunta`);

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

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
-- Indices de la tabla `tbl_tipo_producto`
--
ALTER TABLE `tbl_tipo_producto`
  ADD PRIMARY KEY (`id_tipo_producto`);

--
-- Indices de la tabla `tbl_tipo_proveedores`
--
ALTER TABLE `tbl_tipo_proveedores`
  ADD PRIMARY KEY (`id_tipo_proveedor`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `tbl_usuario_permiso`
--
ALTER TABLE `tbl_usuario_permiso`
  ADD PRIMARY KEY (`idusuario_permiso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bitacora`
--
ALTER TABLE `tbl_bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT de la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_hist_contraseña`
--
ALTER TABLE `tbl_hist_contraseña`
  MODIFY `id_hist` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_objeto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_orden_produccion`
--
ALTER TABLE `tbl_orden_produccion`
  MODIFY `id_orden_produccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_parametros`
--
ALTER TABLE `tbl_parametros`
  MODIFY `id_parametro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_permiso`
--
ALTER TABLE `tbl_permiso`
  MODIFY `idpermiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_preguntas_usuarios`
--
ALTER TABLE `tbl_preguntas_usuarios`
  MODIFY `id_pregunta_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_cliente`
--
ALTER TABLE `tbl_tipo_cliente`
  MODIFY `id_tipo_cliente` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario_permiso`
--
ALTER TABLE `tbl_usuario_permiso`
  MODIFY `idusuario_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_preguntas_usuarios`
--
ALTER TABLE `tbl_preguntas_usuarios`
  ADD CONSTRAINT `id_pregunta_usuario_pregunta` FOREIGN KEY (`id_pregunta`) REFERENCES `tbl_preguntas` (`id_pregunta`),
  ADD CONSTRAINT `id_pregunta_usuario_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
