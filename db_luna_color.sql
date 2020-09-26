-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2020 a las 04:23:05
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
-- Base de datos: `db_luna_color`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bitacora`
--

CREATE TABLE `tbl_bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_objeto` int(11) DEFAULT NULL,
  `accion` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `identidad_cliente` varchar(13) DEFAULT NULL,
  `id_tipo_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cliente_empresarial`
--

CREATE TABLE `tbl_cliente_empresarial` (
  `id_cliente_empresarial` int(11) NOT NULL,
  `representante` varchar(50) DEFAULT NULL,
  `nombre_empresa` varchar(50) DEFAULT NULL,
  `razon_social` varchar(30) DEFAULT NULL,
  `denominacion` varchar(30) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `RTN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_compras`
--

CREATE TABLE `tbl_compras` (
  `id_compra` int(11) NOT NULL,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total_compra` decimal(8,2) DEFAULT NULL,
  `fecha_compra` date DEFAULT NULL,
  `id_orden_compra` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comprobante_entrega`
--

CREATE TABLE `tbl_comprobante_entrega` (
  `id_comprobante_entrega` int(11) NOT NULL,
  `fecha_entrega` datetime DEFAULT NULL,
  `nombre_cliente` varchar(50) DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contactos`
--

CREATE TABLE `tbl_contactos` (
  `id_contacto` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_tipo_contacto` int(11) DEFAULT NULL,
  `valor` varchar(50) DEFAULT NULL,
  `id_cliente_empresarial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contactos_proveedores`
--

CREATE TABLE `tbl_contactos_proveedores` (
  `id_contacto_proveedor` int(11) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_tipo_contacto_proveedor` int(11) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cotizaciones`
--

CREATE TABLE `tbl_cotizaciones` (
  `id_cotizacion` int(11) NOT NULL,
  `nombre_cliente` varchar(50) DEFAULT NULL,
  `contacto_cliente` varchar(50) DEFAULT NULL,
  `telefono` varchar(8) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empresa_luna_color`
--

CREATE TABLE `tbl_empresa_luna_color` (
  `id_empresa_luna_color` int(11) NOT NULL,
  `nombre_empresa` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(8) DEFAULT NULL,
  `CAI` int(11) DEFAULT NULL,
  `RTN` varchar(20) DEFAULT NULL,
  `año_fiscal` date DEFAULT NULL,
  `nombre_gerente` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_facturas`
--

CREATE TABLE `tbl_facturas` (
  `id_factura` int(11) NOT NULL,
  `fecha_factura` date DEFAULT NULL,
  `descuento` decimal(5,2) DEFAULT NULL,
  `importe_grabado` decimal(5,2) DEFAULT NULL,
  `importe_exento` decimal(5,2) DEFAULT NULL,
  `importe_exonerado` decimal(5,2) DEFAULT NULL,
  `impuesto` decimal(5,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_tipo_pago` int(11) DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `id_cliente_empresarial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hist_contraseña`
--

CREATE TABLE `tbl_hist_contraseña` (
  `id_hist` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inventarios`
--

CREATE TABLE `tbl_inventarios` (
  `id_inventario` int(11) NOT NULL,
  `existencia` varchar(50) DEFAULT NULL,
  `id_compra` int(11) DEFAULT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `id_materia_prima` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materia_prima`
--

CREATE TABLE `tbl_materia_prima` (
  `id_materia_prima` int(11) NOT NULL,
  `nombre_materia_prima` varchar(60) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_unitario` decimal(5,2) DEFAULT NULL,
  `id_orden_compra` int(11) DEFAULT NULL,
  `id_tipo_materia_prima` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materia_prima_por_producto`
--

CREATE TABLE `tbl_materia_prima_por_producto` (
  `id_materia_prima_por_producto` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_materia_prima` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_objetos`
--

CREATE TABLE `tbl_objetos` (
  `id_objeto` int(11) NOT NULL,
  `objeto` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `tipo_objeto` varchar(15) DEFAULT NULL,
  `creado por` varchar(15) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `modificado_por` varchar(15) DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_orden_compras`
--

CREATE TABLE `tbl_orden_compras` (
  `id_orden_compra` int(11) NOT NULL,
  `precio_unitario` decimal(5,2) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total_orden_compra` decimal(8,2) DEFAULT NULL,
  `fecha_orden_compra` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_parametros`
--

CREATE TABLE `tbl_parametros` (
  `id_parametro` int(11) NOT NULL,
  `parametro` varchar(50) DEFAULT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedidos`
--

CREATE TABLE `tbl_pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `fecha_inicial` date DEFAULT NULL,
  `fecha_entrega` int(11) DEFAULT NULL,
  `descuento` decimal(8,2) DEFAULT NULL,
  `impuesto` decimal(8,2) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `id_cliente_empresarial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_permiso`
--

CREATE TABLE `tbl_permiso` (
  `idpermiso` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_permiso`
--

INSERT INTO `tbl_permiso` (`idpermiso`, `nombre`) VALUES
(1, 'escritorio'),
(2, 'cliente'),
(3, 'cotizacion'),
(4, 'pedido'),
(5, 'factura'),
(6, 'inventario'),
(7, 'compras'),
(8, 'usuario'),
(9, 'reporte'),
(10, 'seguridad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_permisos`
--

CREATE TABLE `tbl_permisos` (
  `id_permiso` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `id_objeto` int(11) DEFAULT NULL,
  `permiso_insercion` varchar(1) DEFAULT NULL,
  `permiso_eliminacion` varchar(1) DEFAULT NULL,
  `permiso_actualizacion` varchar(1) DEFAULT NULL,
  `permiso_consultar` varchar(1) DEFAULT NULL,
  `creado_por` varchar(15) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `modificado_por` varchar(15) DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preguntas`
--

CREATE TABLE `tbl_preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(100) DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_preguntas`
--

INSERT INTO `tbl_preguntas` (`id_pregunta`, `pregunta`, `condicion`) VALUES
(1, 'Hola', 1),
(2, 'casa', 1),
(3, 'messi', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preguntas_usuarios`
--

CREATE TABLE `tbl_preguntas_usuarios` (
  `id_pregunta` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `respuesta` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `id_producto` int(11) NOT NULL,
  `precio_unitario` decimal(5,2) DEFAULT NULL,
  `precio_costo` decimal(8,2) DEFAULT NULL,
  `precio_venta` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `id_tipo_producto` int(11) DEFAULT NULL,
  `nombre_producto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedores`
--

CREATE TABLE `tbl_proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(50) DEFAULT NULL,
  `direccion_proveedor` varchar(100) DEFAULT NULL,
  `telefono` varchar(8) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `id_tipo_proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(30) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_roles`
--

INSERT INTO `tbl_roles` (`id_rol`, `rol`, `descripcion`, `condicion`) VALUES
(1, 'Administrador', NULL, 1),
(2, 'conserje', NULL, 1),
(3, 'Diseñador', 'cool', 1),
(4, 'operador', 'operador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles_objetos`
--

CREATE TABLE `tbl_roles_objetos` (
  `id_rol_objeto` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `permiso_insercion` varchar(1) DEFAULT NULL,
  `permiso_eliminacion` varchar(1) DEFAULT NULL,
  `permiso_actualizacion` varchar(1) DEFAULT NULL,
  `permiso_consultar` varchar(1) DEFAULT NULL,
  `creado_por` varchar(15) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `modificado_por` varchar(15) DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_cliente`
--

CREATE TABLE `tbl_tipo_cliente` (
  `id_tipo_cliente` int(11) NOT NULL,
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
-- Estructura de tabla para la tabla `tbl_tipo_materia_prima`
--

CREATE TABLE `tbl_tipo_materia_prima` (
  `id_tipo_materia_prima` int(11) NOT NULL,
  `descripcion` varchar(60) DEFAULT NULL
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
  `id_rol` int(11) NOT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `nombre_usuario` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `condicion` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `id_rol`, `usuario`, `nombre_usuario`, `contrasena`, `imagen`, `correo_electronico`, `condicion`) VALUES
(8, 1, 'JAVIER', 'JAVIER', '3757cd1c85c9f1a8cd7fd23ccbd0b65cd9e80e5143d3a04a686d610d74f4c0d4', '1601008618.jpg', 'javier@gmail.com', 1),
(9, 1, 'ale', 'ale', '5c85bb36f3869809fb738a3ba6f990aedbfeca3df2dc1a997fa49c50d0eed8e6', '1601009471.jpg', 'fer@gmail.com', 1),
(10, 4, 'ALEXR', 'ALEXR', '3757cd1c85c9f1a8cd7fd23ccbd0b65cd9e80e5143d3a04a686d610d74f4c0d4', '1601056471.jpg', 'alex@gmail.com', 1);

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
(1, 5, 1),
(2, 5, 2),
(3, 5, 3),
(4, 5, 4),
(5, 5, 5),
(6, 5, 6),
(7, 5, 7),
(8, 5, 8),
(9, 5, 9),
(10, 5, 10),
(21, 2, 1),
(22, 2, 2),
(23, 2, 3),
(24, 2, 4),
(25, 2, 5),
(26, 2, 6),
(27, 2, 7),
(28, 2, 8),
(29, 2, 9),
(30, 2, 10),
(31, 7, 8),
(137, 9, 1),
(138, 9, 2),
(139, 9, 3),
(140, 9, 4),
(141, 9, 5),
(142, 9, 6),
(143, 9, 7),
(144, 9, 8),
(145, 9, 9),
(146, 9, 10),
(177, 10, 5),
(178, 10, 6),
(179, 10, 7),
(180, 10, 8),
(181, 10, 9),
(182, 10, 10),
(193, 8, 1),
(194, 8, 2),
(195, 8, 3),
(196, 8, 4),
(197, 8, 5),
(198, 8, 6),
(199, 8, 7),
(200, 8, 8),
(201, 8, 9),
(202, 8, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ventas`
--

CREATE TABLE `tbl_ventas` (
  `id_venta` int(11) NOT NULL,
  `fecha_venta` datetime DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_factura` int(11) DEFAULT NULL,
  `id_materia_prima_por_producto` int(11) DEFAULT NULL,
  `id_cliente_empresarial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indices de la tabla `tbl_cliente_empresarial`
--
ALTER TABLE `tbl_cliente_empresarial`
  ADD PRIMARY KEY (`id_cliente_empresarial`);

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
-- Indices de la tabla `tbl_contactos`
--
ALTER TABLE `tbl_contactos`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `tbl_contactos_proveedores`
--
ALTER TABLE `tbl_contactos_proveedores`
  ADD PRIMARY KEY (`id_contacto_proveedor`);

--
-- Indices de la tabla `tbl_cotizaciones`
--
ALTER TABLE `tbl_cotizaciones`
  ADD PRIMARY KEY (`id_cotizacion`);

--
-- Indices de la tabla `tbl_empresa_luna_color`
--
ALTER TABLE `tbl_empresa_luna_color`
  ADD PRIMARY KEY (`id_empresa_luna_color`);

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
-- Indices de la tabla `tbl_inventarios`
--
ALTER TABLE `tbl_inventarios`
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
-- Indices de la tabla `tbl_orden_compras`
--
ALTER TABLE `tbl_orden_compras`
  ADD PRIMARY KEY (`id_orden_compra`);

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
-- Indices de la tabla `tbl_roles_objetos`
--
ALTER TABLE `tbl_roles_objetos`
  ADD PRIMARY KEY (`id_rol_objeto`);

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
-- Indices de la tabla `tbl_tipo_materia_prima`
--
ALTER TABLE `tbl_tipo_materia_prima`
  ADD PRIMARY KEY (`id_tipo_materia_prima`);

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
-- Indices de la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_permiso`
--
ALTER TABLE `tbl_permiso`
  MODIFY `idpermiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario_permiso`
--
ALTER TABLE `tbl_usuario_permiso`
  MODIFY `idusuario_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
