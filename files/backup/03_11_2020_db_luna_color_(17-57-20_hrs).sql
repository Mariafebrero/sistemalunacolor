SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS db_luna_color;

USE db_luna_color;

DROP TABLE IF EXISTS tbl_bitacora;

CREATE TABLE `tbl_bitacora` (
  `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_objeto` int(11) NOT NULL,
  `fecha` datetime DEFAULT current_timestamp(),
  `accion` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `creado_por` varchar(15) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_bitacora`),
  KEY `FK_tblusuarios` (`id_usuario`),
  KEY `FK_tblobjetos` (`id_objeto`),
  CONSTRAINT `FK_tblobjetos` FOREIGN KEY (`id_objeto`) REFERENCES `tbl_objetos` (`id_objeto`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tblusuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=391 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_bitacora VALUES("120","1","5","2020-10-27 17:20:55","Salió","Salió de login","ADMIN","2020-10-27 17:20:55");
INSERT INTO tbl_bitacora VALUES("121","1","5","2020-10-27 17:20:55","Entrada","Entró al Sistema","ADMIN","2020-10-27 17:20:55");
INSERT INTO tbl_bitacora VALUES("122","1","1","2020-10-27 17:21:09","Eliminar","Elimino un usuario","ADMIN","2020-10-27 17:21:09");
INSERT INTO tbl_bitacora VALUES("123","1","1","2020-10-27 17:24:41","Actualizar","Editó un usuario","ADMIN","2020-10-27 17:24:41");
INSERT INTO tbl_bitacora VALUES("124","1","1","2020-10-27 17:25:10","Actualizar","Editó un usuario","ADMIN","2020-10-27 17:25:10");
INSERT INTO tbl_bitacora VALUES("125","1","1","2020-10-27 17:25:30","Actualizar","Editó un usuario","ADMIN","2020-10-27 17:25:30");
INSERT INTO tbl_bitacora VALUES("126","1","1","2020-10-27 17:25:51","Eliminar","Elimino un usuario","ADMIN","2020-10-27 17:25:51");
INSERT INTO tbl_bitacora VALUES("127","1","1","2020-10-27 17:27:29","Eliminar","Elimino un usuario","ADMIN","2020-10-27 17:27:29");
INSERT INTO tbl_bitacora VALUES("128","1","1","2020-10-27 17:28:13","Insertar","Insertó un usuario","ADMIN","2020-10-27 17:28:13");
INSERT INTO tbl_bitacora VALUES("129","1","1","2020-10-27 17:28:27","Salida","Salió del sistema","ADMIN","2020-10-27 17:28:27");
INSERT INTO tbl_bitacora VALUES("130","91","5","2020-10-27 17:28:32","Salió","Salió de login","ZOE","2020-10-27 17:28:32");
INSERT INTO tbl_bitacora VALUES("131","91","6","2020-10-27 17:28:33","Entró","Preguntas Primer Ingreso","ZOE","2020-10-27 17:28:33");
INSERT INTO tbl_bitacora VALUES("132","91","6","2020-10-27 17:28:42","Insertó","Insertó preguntas primer ingreso","ZOE","2020-10-27 17:28:42");
INSERT INTO tbl_bitacora VALUES("133","91","6","2020-10-27 17:28:42","Actualizó","Actualizó preguntas constestadas","ZOE","2020-10-27 17:28:42");
INSERT INTO tbl_bitacora VALUES("134","91","6","2020-10-27 17:29:10","Insertó","Insertó preguntas primer ingreso","ZOE","2020-10-27 17:29:10");
INSERT INTO tbl_bitacora VALUES("135","91","6","2020-10-27 17:29:10","Actualizó","Actualizó preguntas constestadas","ZOE","2020-10-27 17:29:10");
INSERT INTO tbl_bitacora VALUES("136","91","6","2020-10-27 17:29:17","Insertó","Insertó preguntas primer ingreso","ZOE","2020-10-27 17:29:17");
INSERT INTO tbl_bitacora VALUES("137","91","6","2020-10-27 17:29:18","Actualizó","Actualizó preguntas constestadas","ZOE","2020-10-27 17:29:18");
INSERT INTO tbl_bitacora VALUES("138","91","6","2020-10-27 17:29:19","Entró","Confirmar contraseña en Preguntas primer ingreso","ZOE","2020-10-27 17:29:19");
INSERT INTO tbl_bitacora VALUES("139","91","6","2020-10-27 17:29:39","Salió","Salió de Primer ingreso/Confirmar contraseña","ZOE","2020-10-27 17:29:39");
INSERT INTO tbl_bitacora VALUES("140","91","5","2020-10-27 17:29:39","Entró","Entró a login","ZOE","2020-10-27 17:29:39");
INSERT INTO tbl_bitacora VALUES("141","91","6","2020-10-27 17:29:56","Actualizó","Actualizó contraseña","ZOE","2020-10-27 17:29:56");
INSERT INTO tbl_bitacora VALUES("142","91","6","2020-10-27 17:29:56","Actualizó","Actualizó Primer ingreso a usuario: Activo","ZOE","2020-10-27 17:29:56");
INSERT INTO tbl_bitacora VALUES("143","91","6","2020-10-27 17:29:56","Insertó","Insertó contraseña a historial de contraseñas","ZOE","2020-10-27 17:29:56");
INSERT INTO tbl_bitacora VALUES("144","91","6","2020-10-27 17:29:56","Salió","Salió de Primer ingreso/Confirmar contraseña","ZOE","2020-10-27 17:29:56");
INSERT INTO tbl_bitacora VALUES("145","91","5","2020-10-27 17:29:56","Entró","Entró a login","ZOE","2020-10-27 17:29:56");
INSERT INTO tbl_bitacora VALUES("146","1","5","2020-10-27 17:30:05","Salió","Salió de login","ADMIN","2020-10-27 17:30:05");
INSERT INTO tbl_bitacora VALUES("147","1","5","2020-10-27 17:30:05","Entrada","Entró al Sistema","ADMIN","2020-10-27 17:30:05");
INSERT INTO tbl_bitacora VALUES("148","1","1","2020-10-27 17:30:15","Eliminar","Elimino un usuario","ADMIN","2020-10-27 17:30:15");
INSERT INTO tbl_bitacora VALUES("149","1","1","2020-10-27 17:30:42","Eliminar","Elimino un usuario","ADMIN","2020-10-27 17:30:42");
INSERT INTO tbl_bitacora VALUES("150","1","1","2020-10-27 17:31:27","Eliminar","Elimino un usuario","ADMIN","2020-10-27 17:31:27");
INSERT INTO tbl_bitacora VALUES("151","1","1","2020-10-27 17:32:00","Eliminar","Elimino un usuario","ADMIN","2020-10-27 17:32:00");
INSERT INTO tbl_bitacora VALUES("152","1","5","2020-10-27 17:34:34","Salió","Salió de login","ADMIN","2020-10-27 17:34:34");
INSERT INTO tbl_bitacora VALUES("153","1","5","2020-10-27 17:34:34","Entrada","Entró al Sistema","ADMIN","2020-10-27 17:34:34");
INSERT INTO tbl_bitacora VALUES("154","1","1","2020-10-27 17:34:42","Eliminar","Elimino un usuario","ADMIN","2020-10-27 17:34:42");
INSERT INTO tbl_bitacora VALUES("155","1","1","2020-10-27 17:36:06","Insertar","Insertó un usuario","ADMIN","2020-10-27 17:36:06");
INSERT INTO tbl_bitacora VALUES("156","1","1","2020-10-27 17:36:43","Eliminar","Elimino un usuario","ADMIN","2020-10-27 17:36:43");
INSERT INTO tbl_bitacora VALUES("157","1","1","2020-10-27 17:49:48","Insertar","Insertó un usuario","ADMIN","2020-10-27 17:49:48");
INSERT INTO tbl_bitacora VALUES("158","1","1","2020-10-27 20:01:50","Salida","Salió del sistema","ADMIN","2020-10-27 20:01:50");
INSERT INTO tbl_bitacora VALUES("159","1","5","2020-10-27 20:02:05","Salió","Salió de login","ADMIN","2020-10-27 20:02:05");
INSERT INTO tbl_bitacora VALUES("160","1","5","2020-10-27 20:02:05","Entrada","Entró al Sistema","ADMIN","2020-10-27 20:02:05");
INSERT INTO tbl_bitacora VALUES("161","93","5","2020-10-27 20:04:14","Actualizó","Actualizó Intentos/contraseña","CLAU","2020-10-27 20:04:14");
INSERT INTO tbl_bitacora VALUES("162","93","5","2020-10-27 20:04:28","Actualizó","Actualizó Intentos/contraseña","CLAU","2020-10-27 20:04:28");
INSERT INTO tbl_bitacora VALUES("163","93","5","2020-10-27 20:04:36","Actualizó","Actualizó Intentos/contraseña","CLAU","2020-10-27 20:04:36");
INSERT INTO tbl_bitacora VALUES("164","93","5","2020-10-27 20:04:55","Actualizó","Actualizó Estado a: Bloqueado","CLAU","2020-10-27 20:04:55");
INSERT INTO tbl_bitacora VALUES("165","1","5","2020-10-27 20:16:02","Salió","Salió de login","ADMIN","2020-10-27 20:16:02");
INSERT INTO tbl_bitacora VALUES("166","1","5","2020-10-27 20:16:02","Entrada","Entró al Sistema","ADMIN","2020-10-27 20:16:02");
INSERT INTO tbl_bitacora VALUES("167","1","1","2020-10-27 20:16:37","Insertar","Insertó un usuario","ADMIN","2020-10-27 20:16:37");
INSERT INTO tbl_bitacora VALUES("168","1","1","2020-10-27 20:18:49","Insertar","Insertó un usuario","ADMIN","2020-10-27 20:18:49");
INSERT INTO tbl_bitacora VALUES("169","1","1","2020-10-27 20:21:20","Insertar","Insertó un usuario","ADMIN","2020-10-27 20:21:20");
INSERT INTO tbl_bitacora VALUES("170","1","1","2020-10-27 20:22:56","Insertar","Insertó un usuario","ADMIN","2020-10-27 20:22:56");
INSERT INTO tbl_bitacora VALUES("171","1","1","2020-10-27 20:29:15","Insertar","Insertó un usuario","ADMIN","2020-10-27 20:29:15");
INSERT INTO tbl_bitacora VALUES("172","1","1","2020-10-27 20:59:00","Insertar","Insertó un usuario","ADMIN","2020-10-27 20:59:00");
INSERT INTO tbl_bitacora VALUES("173","1","5","2020-10-27 21:02:02","Salió","Salió de login","ADMIN","2020-10-27 21:02:02");
INSERT INTO tbl_bitacora VALUES("174","1","5","2020-10-27 21:02:02","Entrada","Entró al Sistema","ADMIN","2020-10-27 21:02:02");
INSERT INTO tbl_bitacora VALUES("175","1","1","2020-10-27 21:02:30","Insertar","Insertó un usuario","ADMIN","2020-10-27 21:02:30");
INSERT INTO tbl_bitacora VALUES("176","1","1","2020-10-27 21:04:45","Insertar","Insertó un usuario","ADMIN","2020-10-27 21:04:45");
INSERT INTO tbl_bitacora VALUES("177","1","1","2020-10-27 21:13:51","Insertar","Insertó un usuario","ADMIN","2020-10-27 21:13:51");
INSERT INTO tbl_bitacora VALUES("178","1","1","2020-10-27 21:15:53","Insertar","Insertó un usuario","ADMIN","2020-10-27 21:15:53");
INSERT INTO tbl_bitacora VALUES("179","1","5","2020-10-27 21:25:13","Salió","Salió de login","ADMIN","2020-10-27 21:25:13");
INSERT INTO tbl_bitacora VALUES("180","1","5","2020-10-27 21:25:13","Entrada","Entró al Sistema","ADMIN","2020-10-27 21:25:13");
INSERT INTO tbl_bitacora VALUES("181","1","1","2020-10-27 21:34:34","Insertar","Insertó un usuario","ADMIN","2020-10-27 21:34:34");
INSERT INTO tbl_bitacora VALUES("182","1","1","2020-10-27 21:36:18","Insertar","Insertó un usuario","ADMIN","2020-10-27 21:36:18");
INSERT INTO tbl_bitacora VALUES("183","1","1","2020-10-27 21:38:20","Insertar","Insertó un usuario","ADMIN","2020-10-27 21:38:20");
INSERT INTO tbl_bitacora VALUES("184","1","1","2020-10-27 21:40:15","Insertar","Insertó un usuario","ADMIN","2020-10-27 21:40:15");
INSERT INTO tbl_bitacora VALUES("185","1","1","2020-10-27 21:42:51","Insertar","Insertó un usuario","ADMIN","2020-10-27 21:42:51");
INSERT INTO tbl_bitacora VALUES("186","1","5","2020-10-27 22:41:39","Salió","Salió de login","ADMIN","2020-10-27 22:41:39");
INSERT INTO tbl_bitacora VALUES("187","1","5","2020-10-27 22:41:39","Entrada","Entró al Sistema","ADMIN","2020-10-27 22:41:39");
INSERT INTO tbl_bitacora VALUES("188","1","1","2020-10-27 22:46:07","Insertar","Insertó un usuario","ADMIN","2020-10-27 22:46:07");
INSERT INTO tbl_bitacora VALUES("189","1","1","2020-10-27 22:48:37","Actualizar","Editó un usuario","ADMIN","2020-10-27 22:48:37");
INSERT INTO tbl_bitacora VALUES("190","1","1","2020-10-27 22:50:20","Insertar","Insertó un usuario","ADMIN","2020-10-27 22:50:20");
INSERT INTO tbl_bitacora VALUES("191","1","1","2020-10-27 22:53:33","Actualizar","Editó un usuario","ADMIN","2020-10-27 22:53:33");
INSERT INTO tbl_bitacora VALUES("192","1","1","2020-10-27 23:08:50","Salida","Salió del sistema","ADMIN","2020-10-27 23:08:50");
INSERT INTO tbl_bitacora VALUES("193","111","7","2020-10-27 23:09:41","Entró","Entró en Auto registro","FELIPE","2020-10-27 23:09:41");
INSERT INTO tbl_bitacora VALUES("194","111","7","2020-10-27 23:09:41","Insertó","Un usuario se Autoregistro","FELIPE","2020-10-27 23:09:41");
INSERT INTO tbl_bitacora VALUES("195","111","7","2020-10-27 23:09:41","Salió","Salió del Autoregistro","FELIPE","2020-10-27 23:09:41");
INSERT INTO tbl_bitacora VALUES("196","111","5","2020-10-27 23:09:41","Entró","Entró al login","FELIPE","2020-10-27 23:09:41");
INSERT INTO tbl_bitacora VALUES("197","111","6","2020-10-27 23:09:56","Insertó","Insertó preguntas primer ingreso","FELIPE","2020-10-27 23:09:56");
INSERT INTO tbl_bitacora VALUES("198","111","6","2020-10-27 23:09:56","Actualizó","Actualizó preguntas constestadas","FELIPE","2020-10-27 23:09:56");
INSERT INTO tbl_bitacora VALUES("199","111","6","2020-10-27 23:09:58","Insertó","Insertó preguntas primer ingreso","FELIPE","2020-10-27 23:09:58");
INSERT INTO tbl_bitacora VALUES("200","111","6","2020-10-27 23:09:58","Actualizó","Actualizó preguntas constestadas","FELIPE","2020-10-27 23:09:58");
INSERT INTO tbl_bitacora VALUES("201","111","6","2020-10-27 23:10:01","Insertó","Insertó preguntas primer ingreso","FELIPE","2020-10-27 23:10:01");
INSERT INTO tbl_bitacora VALUES("202","111","6","2020-10-27 23:10:01","Actualizó","Actualizó preguntas constestadas","FELIPE","2020-10-27 23:10:01");
INSERT INTO tbl_bitacora VALUES("203","110","5","2020-10-27 23:16:27","Salió","Salió de login","DADO","2020-10-27 23:16:27");
INSERT INTO tbl_bitacora VALUES("204","110","6","2020-10-27 23:16:27","Entró","Preguntas Primer Ingreso","DADO","2020-10-27 23:16:27");
INSERT INTO tbl_bitacora VALUES("205","110","6","2020-10-27 23:16:33","Insertó","Insertó preguntas primer ingreso","DADO","2020-10-27 23:16:33");
INSERT INTO tbl_bitacora VALUES("206","110","6","2020-10-27 23:16:33","Actualizó","Actualizó preguntas constestadas","DADO","2020-10-27 23:16:33");
INSERT INTO tbl_bitacora VALUES("207","110","6","2020-10-27 23:16:36","Insertó","Insertó preguntas primer ingreso","DADO","2020-10-27 23:16:36");
INSERT INTO tbl_bitacora VALUES("208","110","6","2020-10-27 23:16:36","Actualizó","Actualizó preguntas constestadas","DADO","2020-10-27 23:16:36");
INSERT INTO tbl_bitacora VALUES("209","110","6","2020-10-27 23:16:38","Insertó","Insertó preguntas primer ingreso","DADO","2020-10-27 23:16:38");
INSERT INTO tbl_bitacora VALUES("210","110","6","2020-10-27 23:16:38","Actualizó","Actualizó preguntas constestadas","DADO","2020-10-27 23:16:38");
INSERT INTO tbl_bitacora VALUES("211","110","6","2020-10-27 23:16:38","Entró","Confirmar contraseña en Preguntas primer ingreso","DADO","2020-10-27 23:16:38");
INSERT INTO tbl_bitacora VALUES("212","110","6","2020-10-27 23:20:23","Salió","Salió de Primer ingreso/Confirmar contraseña","DADO","2020-10-27 23:20:23");
INSERT INTO tbl_bitacora VALUES("213","110","5","2020-10-27 23:20:23","Entró","Entró a login","DADO","2020-10-27 23:20:23");
INSERT INTO tbl_bitacora VALUES("214","110","6","2020-10-27 23:22:12","Salió","Salió de Primer ingreso/Confirmar contraseña","DADO","2020-10-27 23:22:12");
INSERT INTO tbl_bitacora VALUES("215","110","5","2020-10-27 23:22:12","Entró","Entró a login","DADO","2020-10-27 23:22:12");
INSERT INTO tbl_bitacora VALUES("216","110","6","2020-10-27 23:22:29","Salió","Salió de Primer ingreso/Confirmar contraseña","DADO","2020-10-27 23:22:29");
INSERT INTO tbl_bitacora VALUES("217","110","5","2020-10-27 23:22:29","Entró","Entró a login","DADO","2020-10-27 23:22:29");
INSERT INTO tbl_bitacora VALUES("218","110","6","2020-10-27 23:25:00","Salió","Salió de Primer ingreso/Confirmar contraseña","DADO","2020-10-27 23:25:00");
INSERT INTO tbl_bitacora VALUES("219","110","5","2020-10-27 23:25:00","Entró","Entró a login","DADO","2020-10-27 23:25:00");
INSERT INTO tbl_bitacora VALUES("220","110","6","2020-10-27 23:25:53","Actualizó","Actualizó contraseña","DADO","2020-10-27 23:25:53");
INSERT INTO tbl_bitacora VALUES("221","110","6","2020-10-27 23:25:53","Actualizó","Actualizó Primer ingreso a usuario: Activo","DADO","2020-10-27 23:25:53");
INSERT INTO tbl_bitacora VALUES("222","110","6","2020-10-27 23:25:53","Insertó","Insertó contraseña a historial de contraseñas","DADO","2020-10-27 23:25:53");
INSERT INTO tbl_bitacora VALUES("223","110","6","2020-10-27 23:25:53","Salió","Salió de Primer ingreso/Confirmar contraseña","DADO","2020-10-27 23:25:53");
INSERT INTO tbl_bitacora VALUES("224","110","5","2020-10-27 23:25:53","Entró","Entró a login","DADO","2020-10-27 23:25:53");
INSERT INTO tbl_bitacora VALUES("225","110","5","2020-10-27 23:26:11","Salió","Salió de login","DADO","2020-10-27 23:26:11");
INSERT INTO tbl_bitacora VALUES("226","110","5","2020-10-27 23:26:11","Entrada","Entró al Sistema","DADO","2020-10-27 23:26:11");
INSERT INTO tbl_bitacora VALUES("227","110","1","2020-10-28 00:03:38","Insertar","Insertó un usuario","DADO","2020-10-28 00:03:38");
INSERT INTO tbl_bitacora VALUES("228","110","1","2020-10-28 00:05:47","Insertar","Insertó un usuario","DADO","2020-10-28 00:05:47");
INSERT INTO tbl_bitacora VALUES("229","110","1","2020-10-28 00:16:00","Insertar","Insertó un usuario","DADO","2020-10-28 00:16:00");
INSERT INTO tbl_bitacora VALUES("230","110","1","2020-10-28 00:30:51","Insertar","Insertó un usuario","DADO","2020-10-28 00:30:51");
INSERT INTO tbl_bitacora VALUES("231","110","1","2020-10-28 00:34:40","Salida","Salió del sistema","DADO","2020-10-28 00:34:40");
INSERT INTO tbl_bitacora VALUES("232","1","5","2020-10-28 00:34:53","Actualizó","Actualizó Intentos/contraseña","ADMIN","2020-10-28 00:34:53");
INSERT INTO tbl_bitacora VALUES("233","110","5","2020-10-28 00:35:26","Salió","Salió de login","DADO","2020-10-28 00:35:26");
INSERT INTO tbl_bitacora VALUES("234","110","5","2020-10-28 00:35:26","Entrada","Entró al Sistema","DADO","2020-10-28 00:35:26");
INSERT INTO tbl_bitacora VALUES("235","110","1","2020-10-28 00:35:49","Actualizar","Editó un usuario","DADO","2020-10-28 00:35:49");
INSERT INTO tbl_bitacora VALUES("236","110","1","2020-10-28 00:35:53","Salida","Salió del sistema","DADO","2020-10-28 00:35:53");
INSERT INTO tbl_bitacora VALUES("237","1","5","2020-10-28 00:36:14","Salió","Salió de login","ADMIN","2020-10-28 00:36:14");
INSERT INTO tbl_bitacora VALUES("238","1","5","2020-10-28 00:36:14","Entrada","Entró al Sistema","ADMIN","2020-10-28 00:36:14");
INSERT INTO tbl_bitacora VALUES("239","1","1","2020-10-28 00:36:57","Insertar","Insertó un usuario","ADMIN","2020-10-28 00:36:57");
INSERT INTO tbl_bitacora VALUES("240","1","1","2020-10-28 00:42:18","Insertar","Insertó un usuario","ADMIN","2020-10-28 00:42:18");
INSERT INTO tbl_bitacora VALUES("241","1","5","2020-10-28 08:46:45","Salió","Salió de login","ADMIN","2020-10-28 08:46:45");
INSERT INTO tbl_bitacora VALUES("242","1","5","2020-10-28 08:46:45","Entrada","Entró al Sistema","ADMIN","2020-10-28 08:46:45");
INSERT INTO tbl_bitacora VALUES("243","1","1","2020-10-28 08:56:51","Eliminar","Se intentó eliminar un usuario","ADMIN","2020-10-28 08:56:51");
INSERT INTO tbl_bitacora VALUES("244","1","1","2020-10-28 08:57:47","Salida","Salió del sistema","ADMIN","2020-10-28 08:57:47");
INSERT INTO tbl_bitacora VALUES("245","1","5","2020-10-28 08:57:57","Salió","Salió de login","ADMIN","2020-10-28 08:57:57");
INSERT INTO tbl_bitacora VALUES("246","1","5","2020-10-28 08:57:57","Entrada","Entró al Sistema","ADMIN","2020-10-28 08:57:57");
INSERT INTO tbl_bitacora VALUES("247","1","1","2020-10-28 08:58:10","Eliminar","Se intentó eliminar un usuario","ADMIN","2020-10-28 08:58:10");
INSERT INTO tbl_bitacora VALUES("248","1","5","2020-10-28 10:51:30","Salió","Salió de login","ADMIN","2020-10-28 10:51:30");
INSERT INTO tbl_bitacora VALUES("249","1","5","2020-10-28 10:51:30","Entrada","Entró al Sistema","ADMIN","2020-10-28 10:51:30");
INSERT INTO tbl_bitacora VALUES("250","1","1","2020-10-28 11:16:21","Insertar","Insertó un usuario","ADMIN","2020-10-28 11:16:21");
INSERT INTO tbl_bitacora VALUES("251","1","1","2020-10-28 11:27:07","Eliminar","Se intentó eliminar un usuario","ADMIN","2020-10-28 11:27:07");
INSERT INTO tbl_bitacora VALUES("252","1","1","2020-10-28 11:27:23","Eliminar","Se intentó eliminar un usuario","ADMIN","2020-10-28 11:27:23");
INSERT INTO tbl_bitacora VALUES("253","1","1","2020-10-28 12:44:22","Salida","Salió del sistema","ADMIN","2020-10-28 12:44:22");
INSERT INTO tbl_bitacora VALUES("254","1","5","2020-10-28 14:39:05","Salió","Salió de login","ADMIN","2020-10-28 14:39:05");
INSERT INTO tbl_bitacora VALUES("255","1","5","2020-10-28 14:39:05","Entrada","Entró al Sistema","ADMIN","2020-10-28 14:39:05");
INSERT INTO tbl_bitacora VALUES("256","1","1","2020-10-28 14:40:24","Salida","Salió del sistema","ADMIN","2020-10-28 14:40:24");
INSERT INTO tbl_bitacora VALUES("257","1","5","2020-10-28 14:44:03","Salió","Salió de login","ADMIN","2020-10-28 14:44:03");
INSERT INTO tbl_bitacora VALUES("258","1","5","2020-10-28 14:44:03","Entrada","Entró al Sistema","ADMIN","2020-10-28 14:44:03");
INSERT INTO tbl_bitacora VALUES("259","1","1","2020-10-28 14:44:16","Salida","Salió del sistema","ADMIN","2020-10-28 14:44:16");
INSERT INTO tbl_bitacora VALUES("260","1","5","2020-10-28 14:44:29","Salió","Salió de login","ADMIN","2020-10-28 14:44:29");
INSERT INTO tbl_bitacora VALUES("261","1","5","2020-10-28 14:44:29","Entrada","Entró al Sistema","ADMIN","2020-10-28 14:44:29");
INSERT INTO tbl_bitacora VALUES("262","1","1","2020-10-28 14:44:35","Salida","Salió del sistema","ADMIN","2020-10-28 14:44:35");
INSERT INTO tbl_bitacora VALUES("263","1","5","2020-10-28 14:45:49","Salió","Salió de login","ADMIN","2020-10-28 14:45:49");
INSERT INTO tbl_bitacora VALUES("264","1","5","2020-10-28 14:45:49","Entrada","Entró al Sistema","ADMIN","2020-10-28 14:45:49");
INSERT INTO tbl_bitacora VALUES("265","1","1","2020-10-28 14:46:14","Salida","Salió del sistema","ADMIN","2020-10-28 14:46:14");
INSERT INTO tbl_bitacora VALUES("266","1","5","2020-10-28 14:47:07","Salió","Salió de login","ADMIN","2020-10-28 14:47:07");
INSERT INTO tbl_bitacora VALUES("267","1","5","2020-10-28 14:47:08","Entrada","Entró al Sistema","ADMIN","2020-10-28 14:47:08");
INSERT INTO tbl_bitacora VALUES("268","1","1","2020-10-28 14:47:12","Salida","Salió del sistema","ADMIN","2020-10-28 14:47:12");
INSERT INTO tbl_bitacora VALUES("269","1","5","2020-10-28 14:52:12","Salió","Salió de login","ADMIN","2020-10-28 14:52:12");
INSERT INTO tbl_bitacora VALUES("270","1","5","2020-10-28 14:52:13","Entrada","Entró al Sistema","ADMIN","2020-10-28 14:52:13");
INSERT INTO tbl_bitacora VALUES("271","1","1","2020-10-28 14:55:02","Salida","Salió del sistema","ADMIN","2020-10-28 14:55:02");
INSERT INTO tbl_bitacora VALUES("272","1","5","2020-10-28 14:55:15","Salió","Salió de login","ADMIN","2020-10-28 14:55:15");
INSERT INTO tbl_bitacora VALUES("273","1","5","2020-10-28 14:55:15","Entrada","Entró al Sistema","ADMIN","2020-10-28 14:55:15");
INSERT INTO tbl_bitacora VALUES("274","1","1","2020-10-28 14:55:59","Insertar","Insertó un usuario","ADMIN","2020-10-28 14:55:59");
INSERT INTO tbl_bitacora VALUES("275","1","1","2020-10-28 15:49:20","Salida","Salió del sistema","ADMIN","2020-10-28 15:49:20");
INSERT INTO tbl_bitacora VALUES("276","1","5","2020-10-30 14:20:54","Salió","Salió de login","ADMIN","2020-10-30 14:20:54");
INSERT INTO tbl_bitacora VALUES("277","1","5","2020-10-30 14:20:55","Entrada","Entró al Sistema","ADMIN","2020-10-30 14:20:55");
INSERT INTO tbl_bitacora VALUES("280","1","1","2020-10-30 14:21:01","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 14:21:01");
INSERT INTO tbl_bitacora VALUES("281","1","1","2020-10-30 14:21:01","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 14:21:01");
INSERT INTO tbl_bitacora VALUES("282","1","5","2020-10-30 14:30:56","Salió","Salió de login","ADMIN","2020-10-30 14:30:56");
INSERT INTO tbl_bitacora VALUES("283","1","5","2020-10-30 14:30:56","Entrada","Entró al Sistema","ADMIN","2020-10-30 14:30:56");
INSERT INTO tbl_bitacora VALUES("286","1","1","2020-10-30 14:31:26","Salida","Salió del sistema","ADMIN","2020-10-30 14:31:26");
INSERT INTO tbl_bitacora VALUES("287","1","5","2020-10-30 14:31:43","Salió","Salió de login","ADMIN","2020-10-30 14:31:43");
INSERT INTO tbl_bitacora VALUES("288","1","5","2020-10-30 14:31:43","Entrada","Entró al Sistema","ADMIN","2020-10-30 14:31:43");
INSERT INTO tbl_bitacora VALUES("291","1","1","2020-10-30 14:59:12","Salida","Salió del sistema","ADMIN","2020-10-30 14:59:12");
INSERT INTO tbl_bitacora VALUES("292","1","5","2020-10-30 14:59:22","Salió","Salió de login","ADMIN","2020-10-30 14:59:22");
INSERT INTO tbl_bitacora VALUES("293","1","5","2020-10-30 14:59:22","Entrada","Entró al Sistema","ADMIN","2020-10-30 14:59:22");
INSERT INTO tbl_bitacora VALUES("296","1","1","2020-10-30 15:41:08","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 15:41:08");
INSERT INTO tbl_bitacora VALUES("297","1","1","2020-10-30 15:41:08","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 15:41:08");
INSERT INTO tbl_bitacora VALUES("298","1","1","2020-10-30 16:48:33","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:48:33");
INSERT INTO tbl_bitacora VALUES("299","1","1","2020-10-30 16:48:35","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:48:35");
INSERT INTO tbl_bitacora VALUES("300","1","1","2020-10-30 17:00:35","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 17:00:35");
INSERT INTO tbl_bitacora VALUES("301","1","1","2020-10-30 17:00:35","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 17:00:35");
INSERT INTO tbl_bitacora VALUES("302","1","1","2020-10-30 17:01:43","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 17:01:43");
INSERT INTO tbl_bitacora VALUES("303","1","1","2020-10-30 17:01:43","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 17:01:43");
INSERT INTO tbl_bitacora VALUES("304","1","1","2020-10-30 17:13:29","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 17:13:29");
INSERT INTO tbl_bitacora VALUES("305","1","1","2020-10-30 17:13:29","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 17:13:29");
INSERT INTO tbl_bitacora VALUES("306","1","1","2020-10-30 17:21:52","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 17:21:52");
INSERT INTO tbl_bitacora VALUES("307","1","1","2020-10-30 17:21:52","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 17:21:52");
INSERT INTO tbl_bitacora VALUES("308","1","5","2020-10-30 20:45:12","Salió","Salió de login","ADMIN","2020-10-30 20:45:12");
INSERT INTO tbl_bitacora VALUES("309","1","5","2020-10-30 20:45:12","Entrada","Entró al Sistema","ADMIN","2020-10-30 20:45:12");
INSERT INTO tbl_bitacora VALUES("312","1","5","2020-10-31 00:11:32","Salió","Salió de login","ADMIN","2020-10-31 00:11:32");
INSERT INTO tbl_bitacora VALUES("313","1","5","2020-10-31 00:11:33","Entrada","Entró al Sistema","ADMIN","2020-10-31 00:11:33");
INSERT INTO tbl_bitacora VALUES("316","1","1","2020-10-31 01:19:42","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 01:19:42");
INSERT INTO tbl_bitacora VALUES("317","1","1","2020-10-31 01:19:42","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 01:19:42");
INSERT INTO tbl_bitacora VALUES("318","1","1","2020-10-31 02:07:26","Salida","Salió del sistema","ADMIN","2020-10-31 02:07:26");
INSERT INTO tbl_bitacora VALUES("319","1","5","2020-10-31 15:03:16","Salió","Salió de login","ADMIN","2020-10-31 15:03:16");
INSERT INTO tbl_bitacora VALUES("320","1","5","2020-10-31 15:03:16","Entrada","Entró al Sistema","ADMIN","2020-10-31 15:03:16");
INSERT INTO tbl_bitacora VALUES("323","1","1","2020-10-31 15:06:22","Salida","Salió del sistema","ADMIN","2020-10-31 15:06:22");
INSERT INTO tbl_bitacora VALUES("324","1","5","2020-10-31 15:06:36","Salió","Salió de login","ADMIN","2020-10-31 15:06:36");
INSERT INTO tbl_bitacora VALUES("325","1","5","2020-10-31 15:06:36","Entrada","Entró al Sistema","ADMIN","2020-10-31 15:06:36");
INSERT INTO tbl_bitacora VALUES("328","1","1","2020-10-31 15:10:45","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 15:10:45");
INSERT INTO tbl_bitacora VALUES("329","1","1","2020-10-31 15:10:45","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 15:10:45");
INSERT INTO tbl_bitacora VALUES("330","1","1","2020-10-31 15:23:25","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 15:23:25");
INSERT INTO tbl_bitacora VALUES("331","1","1","2020-10-31 15:23:25","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 15:23:25");
INSERT INTO tbl_bitacora VALUES("332","1","1","2020-10-31 15:39:47","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 15:39:47");
INSERT INTO tbl_bitacora VALUES("333","1","1","2020-10-31 15:39:47","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 15:39:47");
INSERT INTO tbl_bitacora VALUES("334","1","1","2020-10-31 15:41:30","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 15:41:30");
INSERT INTO tbl_bitacora VALUES("335","1","1","2020-10-31 15:41:30","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 15:41:30");
INSERT INTO tbl_bitacora VALUES("336","1","1","2020-10-31 15:52:47","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 15:52:47");
INSERT INTO tbl_bitacora VALUES("337","1","1","2020-10-31 15:52:47","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 15:52:47");
INSERT INTO tbl_bitacora VALUES("338","1","1","2020-10-31 15:54:06","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 15:54:06");
INSERT INTO tbl_bitacora VALUES("339","1","1","2020-10-31 15:54:06","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 15:54:06");
INSERT INTO tbl_bitacora VALUES("340","1","1","2020-10-31 16:03:20","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 16:03:20");
INSERT INTO tbl_bitacora VALUES("341","1","1","2020-10-31 16:03:20","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 16:03:20");
INSERT INTO tbl_bitacora VALUES("342","1","1","2020-10-31 16:05:41","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 16:05:41");
INSERT INTO tbl_bitacora VALUES("343","1","1","2020-10-31 16:05:41","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 16:05:41");
INSERT INTO tbl_bitacora VALUES("344","1","1","2020-10-31 18:08:25","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 18:08:25");
INSERT INTO tbl_bitacora VALUES("345","1","1","2020-10-31 18:08:25","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 18:08:25");
INSERT INTO tbl_bitacora VALUES("346","1","1","2020-10-31 18:09:39","Insertar","Insertó un usuario","ADMIN","2020-10-31 18:09:39");
INSERT INTO tbl_bitacora VALUES("347","1","1","2020-10-31 18:10:04","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 18:10:04");
INSERT INTO tbl_bitacora VALUES("348","1","1","2020-10-31 18:10:04","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 18:10:04");
INSERT INTO tbl_bitacora VALUES("349","1","1","2020-10-31 18:11:01","Insertar","Insertó un usuario","ADMIN","2020-10-31 18:11:01");
INSERT INTO tbl_bitacora VALUES("350","1","1","2020-10-31 18:19:02","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 18:19:02");
INSERT INTO tbl_bitacora VALUES("351","1","1","2020-10-31 18:19:02","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 18:19:02");
INSERT INTO tbl_bitacora VALUES("352","1","1","2020-10-31 18:19:06","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 18:19:06");
INSERT INTO tbl_bitacora VALUES("353","1","1","2020-10-31 18:19:06","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 18:19:06");
INSERT INTO tbl_bitacora VALUES("354","1","1","2020-10-31 18:19:44","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 18:19:44");
INSERT INTO tbl_bitacora VALUES("355","1","1","2020-10-31 18:19:44","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 18:19:44");
INSERT INTO tbl_bitacora VALUES("356","1","1","2020-10-31 18:20:27","Insertar","Insertó un usuario","ADMIN","2020-10-31 18:20:27");
INSERT INTO tbl_bitacora VALUES("357","1","1","2020-10-31 18:21:41","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 18:21:41");
INSERT INTO tbl_bitacora VALUES("358","1","1","2020-10-31 18:21:41","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 18:21:41");
INSERT INTO tbl_bitacora VALUES("359","1","1","2020-10-31 18:22:32","Insertar","Insertó un usuario","ADMIN","2020-10-31 18:22:32");
INSERT INTO tbl_bitacora VALUES("360","1","2","2020-10-31 18:23:12","Insertar","Insertó un rol"," ADMIN","2020-10-31 18:23:12");
INSERT INTO tbl_bitacora VALUES("361","1","3","2020-10-31 18:23:59","Insertar","Insertó nueva pregunta"," ADMIN","2020-10-31 18:23:59");
INSERT INTO tbl_bitacora VALUES("362","1","1","2020-10-31 18:26:26","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 18:26:26");
INSERT INTO tbl_bitacora VALUES("363","1","1","2020-10-31 18:26:26","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 18:26:26");
INSERT INTO tbl_bitacora VALUES("364","1","1","2020-10-31 18:30:23","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 18:30:23");
INSERT INTO tbl_bitacora VALUES("365","1","1","2020-10-31 18:30:23","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 18:30:23");
INSERT INTO tbl_bitacora VALUES("366","1","1","2020-10-31 18:31:53","Insertar","Insertó un usuario","ADMIN","2020-10-31 18:31:53");
INSERT INTO tbl_bitacora VALUES("367","1","1","2020-10-31 18:32:41","Salida","Salió del sistema","ADMIN","2020-10-31 18:32:41");
INSERT INTO tbl_bitacora VALUES("368","1","5","2020-10-31 18:33:11","Salió","Salió de login","ADMIN","2020-10-31 18:33:11");
INSERT INTO tbl_bitacora VALUES("369","1","5","2020-10-31 18:33:11","Entrada","Entró al Sistema","ADMIN","2020-10-31 18:33:11");
INSERT INTO tbl_bitacora VALUES("372","1","1","2020-10-31 18:39:01","Salida","Salió del sistema","ADMIN","2020-10-31 18:39:01");
INSERT INTO tbl_bitacora VALUES("373","1","5","2020-11-01 00:47:49","Salió","Salió de login","ADMIN","2020-11-01 00:47:49");
INSERT INTO tbl_bitacora VALUES("374","1","5","2020-11-01 00:47:49","Entrada","Entró al Sistema","ADMIN","2020-11-01 00:47:49");
INSERT INTO tbl_bitacora VALUES("377","1","1","2020-11-01 01:27:14","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-01 01:27:14");
INSERT INTO tbl_bitacora VALUES("378","1","1","2020-11-01 01:27:14","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-01 01:27:14");
INSERT INTO tbl_bitacora VALUES("379","1","1","2020-11-01 01:28:53","Salida","Salió del sistema","ADMIN","2020-11-01 01:28:53");
INSERT INTO tbl_bitacora VALUES("380","1","5","2020-11-03 14:31:32","Salió","Salió de login","ADMIN","2020-11-03 14:31:32");
INSERT INTO tbl_bitacora VALUES("381","1","5","2020-11-03 14:31:33","Entrada","Entró al Sistema","ADMIN","2020-11-03 14:31:33");
INSERT INTO tbl_bitacora VALUES("384","1","1","2020-11-03 17:55:32","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-03 17:55:32");
INSERT INTO tbl_bitacora VALUES("385","1","1","2020-11-03 17:55:32","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-03 17:55:32");
INSERT INTO tbl_bitacora VALUES("386","1","1","2020-11-03 17:55:45","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-03 17:55:45");
INSERT INTO tbl_bitacora VALUES("387","1","1","2020-11-03 17:55:45","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-03 17:55:45");
INSERT INTO tbl_bitacora VALUES("388","1","1","2020-11-03 17:55:55","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-03 17:55:55");
INSERT INTO tbl_bitacora VALUES("389","1","1","2020-11-03 17:55:55","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-03 17:55:55");
INSERT INTO tbl_bitacora VALUES("390","1","1","2020-11-03 17:57:08","Actualizar","Editó un usuario","ADMIN","2020-11-03 17:57:08");



DROP TABLE IF EXISTS tbl_clientes;

CREATE TABLE `tbl_clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_cliente` int(11) NOT NULL,
  `id_tipo_documento` int(11) NOT NULL,
  `id_contacto` int(11) NOT NULL,
  `nombre_cliente` varchar(50) DEFAULT NULL,
  `nombre_empresa` varchar(50) DEFAULT NULL,
  `razon_social` varchar(30) DEFAULT NULL,
  `denominacion` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `FK_tbl_tipo_cliente` (`id_tipo_cliente`),
  CONSTRAINT `FK_tbl_tipo_cliente` FOREIGN KEY (`id_tipo_cliente`) REFERENCES `tbl_tipo_cliente` (`id_tipo_cliente`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_compras;

CREATE TABLE `tbl_compras` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_materia_prima` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total_compra` decimal(8,2) DEFAULT NULL,
  `fecha_compra` date DEFAULT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `FK_user` (`id_usuario`),
  KEY `FK_provee` (`id_proveedor`),
  KEY `FK_tblmateriaprima` (`id_materia_prima`),
  CONSTRAINT `FK_provee` FOREIGN KEY (`id_proveedor`) REFERENCES `tbl_proveedores` (`id_proveedor`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tblmateriaprima` FOREIGN KEY (`id_materia_prima`) REFERENCES `tbl_materia_prima` (`id_materia_prima`) ON UPDATE CASCADE,
  CONSTRAINT `FK_user` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_comprobante_entrega;

CREATE TABLE `tbl_comprobante_entrega` (
  `id_comprobante_entrega` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `fecha_entrega` datetime DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_comprobante_entrega`),
  KEY `FK_cliente` (`id_cliente`),
  KEY `FK_usuario` (`id_usuario`),
  KEY `FK_pedido` (`id_pedido`),
  CONSTRAINT `FK_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON UPDATE CASCADE,
  CONSTRAINT `FK_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `tbl_pedidos` (`id_pedido`) ON UPDATE CASCADE,
  CONSTRAINT `FK_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_contactos_clientes;

CREATE TABLE `tbl_contactos_clientes` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_tipo_contacto` int(11) NOT NULL,
  `valor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_contacto`),
  KEY `FK_tblclientes` (`id_cliente`),
  KEY `FK_tbl_tipo_contacto` (`id_tipo_contacto`),
  CONSTRAINT `FK_tbl_tipo_contacto` FOREIGN KEY (`id_tipo_contacto`) REFERENCES `tbl_tipo_contacto` (`id_tipo_contacto`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tblclientes` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_contactos_proveedores;

CREATE TABLE `tbl_contactos_proveedores` (
  `id_contacto_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `id_proveedor` int(11) NOT NULL,
  `id_tipo_contacto_proveedor` int(11) NOT NULL,
  `valor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_contacto_proveedor`),
  KEY `FK_tblproveedores` (`id_proveedor`),
  KEY `FK_tbl_tipo_cproveedor` (`id_tipo_contacto_proveedor`),
  CONSTRAINT `FK_tbl_tipo_cproveedor` FOREIGN KEY (`id_tipo_contacto_proveedor`) REFERENCES `tbl_tipo_contacto_proveedores` (`id_tipo_contacto_proveedor`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tblproveedores` FOREIGN KEY (`id_proveedor`) REFERENCES `tbl_proveedores` (`id_proveedor`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_detalle_factura;

CREATE TABLE `tbl_detalle_factura` (
  `id_detalle_factura` int(11) NOT NULL AUTO_INCREMENT,
  `id_factura` int(11) NOT NULL,
  `id_detalle_pedido` int(11) NOT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_detalle_factura`),
  KEY `FK_tblfacturas` (`id_factura`),
  KEY `FK_tbldetalle_pedido` (`id_detalle_pedido`),
  CONSTRAINT `FK_tbldetalle_pedido` FOREIGN KEY (`id_detalle_pedido`) REFERENCES `tbl_detalle_pedido` (`id_detalle_pedido`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tblfacturas` FOREIGN KEY (`id_factura`) REFERENCES `tbl_facturas` (`id_factura`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_detalle_pedido;

CREATE TABLE `tbl_detalle_pedido` (
  `id_detalle_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_detalle_pedido`),
  KEY `FK_pedidos` (`id_pedido`),
  KEY `FK_productos` (`id_producto`),
  CONSTRAINT `FK_pedidos` FOREIGN KEY (`id_pedido`) REFERENCES `tbl_pedidos` (`id_pedido`) ON UPDATE CASCADE,
  CONSTRAINT `FK_productos` FOREIGN KEY (`id_producto`) REFERENCES `tbl_productos` (`id_producto`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_documentos;

CREATE TABLE `tbl_documentos` (
  `id_documento` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_documento` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `valor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_documento`),
  KEY `FK_tbl_tipo_documento` (`id_tipo_documento`),
  KEY `FK_tbl_clientes` (`id_cliente`),
  CONSTRAINT `FK_tbl_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tbl_tipo_documento` FOREIGN KEY (`id_tipo_documento`) REFERENCES `tbl_tipo_documento` (`id_tipo_documento`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_estado_pedido;

CREATE TABLE `tbl_estado_pedido` (
  `id_estado_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  PRIMARY KEY (`id_estado_pedido`),
  KEY `FK_tbl_pedidos` (`id_pedido`),
  CONSTRAINT `FK_tbl_pedidos` FOREIGN KEY (`id_pedido`) REFERENCES `tbl_pedidos` (`id_pedido`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_estado_usuarios;

CREATE TABLE `tbl_estado_usuarios` (
  `id_estado_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_estado_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_estado_usuarios VALUES("1","Inactivo");
INSERT INTO tbl_estado_usuarios VALUES("2","Activo");
INSERT INTO tbl_estado_usuarios VALUES("3","Nuevo");
INSERT INTO tbl_estado_usuarios VALUES("4","Bloqueado");
INSERT INTO tbl_estado_usuarios VALUES("5","ARNuevo");



DROP TABLE IF EXISTS tbl_facturas;

CREATE TABLE `tbl_facturas` (
  `id_factura` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_tipo_pago` int(11) NOT NULL,
  `fecha_factura` date DEFAULT NULL,
  `descuento` decimal(5,2) DEFAULT NULL,
  `importe_gravado` decimal(5,2) DEFAULT NULL,
  `importe_exento` decimal(5,2) DEFAULT NULL,
  `importe_exonerado` decimal(5,2) DEFAULT NULL,
  `impuesto` decimal(5,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id_factura`),
  KEY `FK_tbclientes` (`id_cliente`),
  KEY `FK_tbl_tipo_pago` (`id_tipo_pago`),
  CONSTRAINT `FK_tbclientes` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tbl_tipo_pago` FOREIGN KEY (`id_tipo_pago`) REFERENCES `tbl_tipo_pago` (`id_tipo_pago`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_hist_contrasena;

CREATE TABLE `tbl_hist_contrasena` (
  `id_hist` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `contrasena` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id_hist`),
  KEY `FK_tbl_usuarios` (`id_usuario`),
  CONSTRAINT `FK_tbl_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_hist_contrasena VALUES("8","91","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901");
INSERT INTO tbl_hist_contrasena VALUES("9","91","fc6d282c72b8dd14058abe01ae03a1cf81a50af056d5fbd1e7f3bed00c713f71");
INSERT INTO tbl_hist_contrasena VALUES("11","93","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901");
INSERT INTO tbl_hist_contrasena VALUES("12","101","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901");
INSERT INTO tbl_hist_contrasena VALUES("13","102","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901");
INSERT INTO tbl_hist_contrasena VALUES("14","107","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901");
INSERT INTO tbl_hist_contrasena VALUES("15","108","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901");
INSERT INTO tbl_hist_contrasena VALUES("16","109","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("17","110","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("18","109","1sxqpS6ceo4=");
INSERT INTO tbl_hist_contrasena VALUES("19","111","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("20","110","1sxqpS6ceo4=");
INSERT INTO tbl_hist_contrasena VALUES("21","112","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("22","113","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("23","114","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("24","115","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("25","1","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("26","116","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("27","117","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("28","118","");
INSERT INTO tbl_hist_contrasena VALUES("29","119","tu1suiTjBeyrhlHq");
INSERT INTO tbl_hist_contrasena VALUES("30","120","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("31","121","1MlpuCGce44=");
INSERT INTO tbl_hist_contrasena VALUES("32","122","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("33","123","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("34","124","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("35","102","1sxqpS6ce5e0");



DROP TABLE IF EXISTS tbl_inventario;

CREATE TABLE `tbl_inventario` (
  `id_inventario` int(11) NOT NULL AUTO_INCREMENT,
  `id_materia_prima` int(11) NOT NULL,
  `existencia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_inventario`),
  KEY `FK_tblmateria_prima` (`id_materia_prima`),
  CONSTRAINT `FK_tblmateria_prima` FOREIGN KEY (`id_materia_prima`) REFERENCES `tbl_materia_prima` (`id_materia_prima`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_materia_prima;

CREATE TABLE `tbl_materia_prima` (
  `id_materia_prima` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_materia_prima` varchar(60) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `cantidad_minima` int(11) DEFAULT NULL,
  `cantidad_maxima` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_materia_prima`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_materia_prima_por_producto;

CREATE TABLE `tbl_materia_prima_por_producto` (
  `id_materia_prima_por_producto` int(11) NOT NULL AUTO_INCREMENT,
  `id_materia_prima` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_materia_prima_por_producto`),
  KEY `FK_tbl_materia_prima` (`id_materia_prima`),
  KEY `FK_tbl_productos` (`id_producto`),
  CONSTRAINT `FK_tbl_materia_prima` FOREIGN KEY (`id_materia_prima`) REFERENCES `tbl_materia_prima` (`id_materia_prima`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tbl_productos` FOREIGN KEY (`id_producto`) REFERENCES `tbl_productos` (`id_producto`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_objetos;

CREATE TABLE `tbl_objetos` (
  `id_objeto` int(11) NOT NULL AUTO_INCREMENT,
  `objeto` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `tipo_objeto` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_objeto`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_objetos VALUES("1","Usuarios","Gestión de Usuarios","Prueba");
INSERT INTO tbl_objetos VALUES("2","Usuarios","Gestión de roles","Formulario");
INSERT INTO tbl_objetos VALUES("3","Usuarios","Gestión de Preguntas","Formulario");
INSERT INTO tbl_objetos VALUES("4","Seguridad","Gestión Bitácora ","Formulario");
INSERT INTO tbl_objetos VALUES("5","Login","Gestión login","Formulario");
INSERT INTO tbl_objetos VALUES("6","Primer Ingreso","Gestión Primer Ingreso","Formulario");
INSERT INTO tbl_objetos VALUES("7","Auto registro ","Gestión Auto Registro ","Formulario");
INSERT INTO tbl_objetos VALUES("8","Recu. Por Correo","Gestión Recuperación de contraseña por correo ","Formulario");
INSERT INTO tbl_objetos VALUES("9","Recu. Por Pregunta Secreta","Gestión Recuperación de contraseña por pregunta Secreta","Formulario");



DROP TABLE IF EXISTS tbl_orden_produccion;

CREATE TABLE `tbl_orden_produccion` (
  `id_orden_produccion` int(11) NOT NULL AUTO_INCREMENT,
  `id_materia_prima_por_producto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_orden_produccion`),
  KEY `FK_tbl_materia_prima_por_producto` (`id_materia_prima_por_producto`),
  CONSTRAINT `FK_tbl_materia_prima_por_producto` FOREIGN KEY (`id_materia_prima_por_producto`) REFERENCES `tbl_materia_prima_por_producto` (`id_materia_prima_por_producto`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_parametros;

CREATE TABLE `tbl_parametros` (
  `id_parametro` int(11) NOT NULL AUTO_INCREMENT,
  `parametro` varchar(50) DEFAULT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`id_parametro`),
  KEY `FK_usuarios` (`id_usuario`),
  CONSTRAINT `FK_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_parametros VALUES("1","EMPRESA_NOMBRE","Luna Color","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("2","EMPRESA_PAIS","Honduras","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("3","EMPRESA_DIRECCION","Bo. Morazán Cll. Principal Cnt. Escuela Manuel Soto Tegucigalpa.","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("4","EMPRESA_CORREO","admon.lunacolor@gmail.com","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("5","EMPRESA_TELEFONO"," 9948-1570","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("6","EMPRESA_GERENTE","Azucena del Carmen Morales Robles","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("7","ADMIN_PREGUNTAS_CONTESTADAS","3","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("8","ADMIN_INTENTOS","3","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("9","ADMIN_VIGENCIA_CORREO","24","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("10","ADMIN_VIGENCIA_USUARIO","20","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("11","ADMIN_PREGUNTAS_RECUPERACION","1","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("12","ADMIN_IMPUESTO","15%","1","2020-10-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("13","SYS_NOMBRE","Sistema Luna Color","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("14","FECHA_VENCIMIENTO","360","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("15","MIN_CONTRASENA","5","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("16","MAX_CONTRASENA","10","1","2020-09-30","0000-00-00");
INSERT INTO tbl_parametros VALUES("17","CORREO_HOST","smtp.gmail.com","1","2020-10-25","2020-10-25");
INSERT INTO tbl_parametros VALUES("18","CORREO_USERNAME","soportelunacolor@gmail.com","1","2020-10-25","2020-10-25");
INSERT INTO tbl_parametros VALUES("19","CORREO_PASSWORD","Teamluna1*","1","2020-10-25","2020-10-25");
INSERT INTO tbl_parametros VALUES("20","CORREO_SMTPSECURE","TLS","1","2020-10-25","2020-10-25");
INSERT INTO tbl_parametros VALUES("21","CORREO_PORT","587","1","2020-10-25","2020-10-25");
INSERT INTO tbl_parametros VALUES("22","CORREO_NAMEFROM","Soporte luna color","1","2020-10-26","2020-10-26");



DROP TABLE IF EXISTS tbl_pedidos;

CREATE TABLE `tbl_pedidos` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `fecha_inicial` date DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `descuento` decimal(8,2) DEFAULT NULL,
  `impuesto` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_pedido`),
  KEY `FK_tblcliente` (`id_cliente`),
  CONSTRAINT `FK_tblcliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_permiso;

CREATE TABLE `tbl_permiso` (
  `idpermiso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idpermiso`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_permiso VALUES("1","Escritorio");
INSERT INTO tbl_permiso VALUES("2","Cliente");
INSERT INTO tbl_permiso VALUES("3","Cotizacion");
INSERT INTO tbl_permiso VALUES("4","Pedido");
INSERT INTO tbl_permiso VALUES("5","Factura");
INSERT INTO tbl_permiso VALUES("6","Inventario");
INSERT INTO tbl_permiso VALUES("7","Compras");
INSERT INTO tbl_permiso VALUES("8","Usuario");
INSERT INTO tbl_permiso VALUES("9","Reporte");
INSERT INTO tbl_permiso VALUES("10","Seguridad");



DROP TABLE IF EXISTS tbl_permisos;

CREATE TABLE `tbl_permisos` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `id_objeto` int(11) NOT NULL,
  `permiso_insercion` varchar(1) DEFAULT NULL,
  `permiso_eliminacion` varchar(1) DEFAULT NULL,
  `permiso_actualizacion` varchar(1) DEFAULT NULL,
  `permiso_consultar` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_permiso`),
  KEY `FK_tbroles` (`id_rol`),
  KEY `FK_tbobjetos` (`id_objeto`),
  CONSTRAINT `FK_tbobjetos` FOREIGN KEY (`id_objeto`) REFERENCES `tbl_objetos` (`id_objeto`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tbroles` FOREIGN KEY (`id_rol`) REFERENCES `tbl_roles` (`id_rol`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_preguntas;

CREATE TABLE `tbl_preguntas` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(100) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_preguntas VALUES("1","¿Cuál era tu apodo de pequeño/a?","1");
INSERT INTO tbl_preguntas VALUES("2","¿En que ciudad conociste a tu pareja?","1");
INSERT INTO tbl_preguntas VALUES("3","¿Cuál era el nombre de tu mejor amigo/a de la infancia?","1");
INSERT INTO tbl_preguntas VALUES("4","¿Cuál era el nombre de tu primera mascota?","1");
INSERT INTO tbl_preguntas VALUES("5","¿Cuál fué el nombre de tu primer maestro/a?","1");
INSERT INTO tbl_preguntas VALUES("6","¿Cuál es tu país favorito?","1");
INSERT INTO tbl_preguntas VALUES("9","¿Cuál es tu actor/actríz favorito/a?","1");
INSERT INTO tbl_preguntas VALUES("10","¿Cómo se llama la ciudad donde se conocieron tus padres?","1");
INSERT INTO tbl_preguntas VALUES("11","¿Cómo se llama la primer escuela a la que asististe?","1");
INSERT INTO tbl_preguntas VALUES("12","¿Cuál es tu libro de fantasía favorito?","1");
INSERT INTO tbl_preguntas VALUES("13","cual es el nombre de tu mama?","1");



DROP TABLE IF EXISTS tbl_preguntas_usuarios;

CREATE TABLE `tbl_preguntas_usuarios` (
  `id_pregunta_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_pregunta` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `respuesta` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta_usuario`),
  KEY `FK_tbl_preguntas` (`id_pregunta`),
  CONSTRAINT `FK_tbl_preguntas` FOREIGN KEY (`id_pregunta`) REFERENCES `tbl_preguntas` (`id_pregunta`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_preguntas_usuarios VALUES("1","1","2","z");
INSERT INTO tbl_preguntas_usuarios VALUES("2","2","2","z");
INSERT INTO tbl_preguntas_usuarios VALUES("3","3","2","z");
INSERT INTO tbl_preguntas_usuarios VALUES("4","1","3","z");
INSERT INTO tbl_preguntas_usuarios VALUES("5","2","3","z");
INSERT INTO tbl_preguntas_usuarios VALUES("6","3","3","z");
INSERT INTO tbl_preguntas_usuarios VALUES("7","1","7","z");
INSERT INTO tbl_preguntas_usuarios VALUES("8","2","7","z");
INSERT INTO tbl_preguntas_usuarios VALUES("9","3","7","z");
INSERT INTO tbl_preguntas_usuarios VALUES("10","1","8","z");
INSERT INTO tbl_preguntas_usuarios VALUES("11","2","8","z");
INSERT INTO tbl_preguntas_usuarios VALUES("12","3","8","z");
INSERT INTO tbl_preguntas_usuarios VALUES("13","1","9","z");
INSERT INTO tbl_preguntas_usuarios VALUES("14","2","9","z");
INSERT INTO tbl_preguntas_usuarios VALUES("15","3","9","z");
INSERT INTO tbl_preguntas_usuarios VALUES("16","1","10","z");
INSERT INTO tbl_preguntas_usuarios VALUES("17","2","10","z");
INSERT INTO tbl_preguntas_usuarios VALUES("18","3","10","z");
INSERT INTO tbl_preguntas_usuarios VALUES("19","1","6","z");
INSERT INTO tbl_preguntas_usuarios VALUES("20","2","6","z");
INSERT INTO tbl_preguntas_usuarios VALUES("21","1","47","A");
INSERT INTO tbl_preguntas_usuarios VALUES("22","2","47","B");
INSERT INTO tbl_preguntas_usuarios VALUES("23","3","47","C");
INSERT INTO tbl_preguntas_usuarios VALUES("24","1","48","A");
INSERT INTO tbl_preguntas_usuarios VALUES("25","2","48","B");
INSERT INTO tbl_preguntas_usuarios VALUES("26","3","48","C");
INSERT INTO tbl_preguntas_usuarios VALUES("27","2","49","s");
INSERT INTO tbl_preguntas_usuarios VALUES("28","11","49","s");
INSERT INTO tbl_preguntas_usuarios VALUES("29","9","49","s");
INSERT INTO tbl_preguntas_usuarios VALUES("33","1","51","s");
INSERT INTO tbl_preguntas_usuarios VALUES("34","12","51","d");
INSERT INTO tbl_preguntas_usuarios VALUES("36","1","90","z");
INSERT INTO tbl_preguntas_usuarios VALUES("37","2","90","z");
INSERT INTO tbl_preguntas_usuarios VALUES("38","3","90","z");
INSERT INTO tbl_preguntas_usuarios VALUES("39","1","91","titi");
INSERT INTO tbl_preguntas_usuarios VALUES("40","2","91","u");
INSERT INTO tbl_preguntas_usuarios VALUES("41","3","91","daniela");
INSERT INTO tbl_preguntas_usuarios VALUES("42","1","111","z");
INSERT INTO tbl_preguntas_usuarios VALUES("43","2","111","z");
INSERT INTO tbl_preguntas_usuarios VALUES("44","3","111","z");
INSERT INTO tbl_preguntas_usuarios VALUES("45","1","110","z");
INSERT INTO tbl_preguntas_usuarios VALUES("46","2","110","z");
INSERT INTO tbl_preguntas_usuarios VALUES("47","3","110","z");



DROP TABLE IF EXISTS tbl_producto_acabado;

CREATE TABLE `tbl_producto_acabado` (
  `id_acabado` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_acabado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_producto_impresion;

CREATE TABLE `tbl_producto_impresion` (
  `id_impresion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_impresion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_producto_tamaño;

CREATE TABLE `tbl_producto_tamaño` (
  `id_tamaño` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tamaño`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_productos;

CREATE TABLE `tbl_productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) DEFAULT NULL,
  `precio_unitario` decimal(5,2) DEFAULT NULL,
  `precio_venta` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `FK_tbl_tipo_producto` (`id_tipo_producto`),
  CONSTRAINT `FK_tbl_tipo_producto` FOREIGN KEY (`id_tipo_producto`) REFERENCES `tbl_tipo_producto` (`id_tipo_producto`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_proveedores;

CREATE TABLE `tbl_proveedores` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(50) NOT NULL,
  PRIMARY KEY (`id_proveedor`),
  KEY `FK_tbl_tipo_proveedores` (`id_tipo_proveedor`),
  CONSTRAINT `FK_tbl_tipo_proveedores` FOREIGN KEY (`id_tipo_proveedor`) REFERENCES `tbl_tipo_proveedores` (`id_tipo_proveedor`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_roles;

CREATE TABLE `tbl_roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(30) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_roles VALUES("1","Default","Predeterminado","1");
INSERT INTO tbl_roles VALUES("2","Admin","Administrador del sistema","1");
INSERT INTO tbl_roles VALUES("3","Gerente","Gerente de la empresa","1");
INSERT INTO tbl_roles VALUES("4","Diseñador","Diseñador grafico de la Empresa","1");
INSERT INTO tbl_roles VALUES("5","ITventas","marketinh","1");



DROP TABLE IF EXISTS tbl_tipo_cliente;

CREATE TABLE `tbl_tipo_cliente` (
  `id_tipo_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_tipo_contacto;

CREATE TABLE `tbl_tipo_contacto` (
  `id_tipo_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_contacto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_tipo_contacto_proveedores;

CREATE TABLE `tbl_tipo_contacto_proveedores` (
  `id_tipo_contacto_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_contacto_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_tipo_documento;

CREATE TABLE `tbl_tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_tipo_pago;

CREATE TABLE `tbl_tipo_pago` (
  `id_tipo_pago` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_tipo_producto;

CREATE TABLE `tbl_tipo_producto` (
  `id_tipo_producto` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_tipo_proveedores;

CREATE TABLE `tbl_tipo_proveedores` (
  `id_tipo_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_usuario_permiso;

CREATE TABLE `tbl_usuario_permiso` (
  `id_usuario_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario_permiso`),
  KEY `FK_tusuario` (`id_usuario`),
  KEY `FK_tblpermiso` (`idpermiso`),
  CONSTRAINT `FK_tblpermiso` FOREIGN KEY (`idpermiso`) REFERENCES `tbl_permiso` (`idpermiso`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tusuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_usuario_permiso VALUES("56","1","2");
INSERT INTO tbl_usuario_permiso VALUES("57","1","3");
INSERT INTO tbl_usuario_permiso VALUES("58","1","7");
INSERT INTO tbl_usuario_permiso VALUES("59","1","5");
INSERT INTO tbl_usuario_permiso VALUES("60","1","1");
INSERT INTO tbl_usuario_permiso VALUES("61","1","6");
INSERT INTO tbl_usuario_permiso VALUES("62","1","4");
INSERT INTO tbl_usuario_permiso VALUES("63","1","9");
INSERT INTO tbl_usuario_permiso VALUES("64","1","10");
INSERT INTO tbl_usuario_permiso VALUES("65","1","8");



DROP TABLE IF EXISTS tbl_usuarios;

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `contrasena` varchar(254) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `id_estado_usuario` int(11) NOT NULL,
  `fecha_ultima_conexion` datetime DEFAULT current_timestamp(),
  `preguntas_contestadas` int(11) DEFAULT NULL,
  `fecha_creacion` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `intentos` int(11) NOT NULL DEFAULT 1,
  `fecha_vencimiento` varchar(50) DEFAULT current_timestamp(),
  `token` varchar(60) DEFAULT NULL,
  `fecha_inicio` varchar(50) DEFAULT NULL,
  `fecha_final` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `FK_tbl_roles` (`id_rol`),
  KEY `FK_tbl_estado_usuarios` (`id_estado_usuario`),
  CONSTRAINT `FK_tbl_estado_usuarios` FOREIGN KEY (`id_estado_usuario`) REFERENCES `tbl_estado_usuarios` (`id_estado_usuario`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tbl_roles` FOREIGN KEY (`id_rol`) REFERENCES `tbl_roles` (`id_rol`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_usuarios VALUES("1","2","ADMIN","ADMIN","1sxqpS6ce44=","1603094717.png","admin@gmail.com","2","2020-10-19 12:54:59","0","2020-10-19 12:54:59","1","2020-10-19 12:54:59","","","");
INSERT INTO tbl_usuarios VALUES("91","4","ZOE","ZOE","fc6d282c72b8dd14058abe01ae03a1cf81a50af056d5fbd1e7f3bed00c713f71","","zoe@gmail.com","2","0000-00-00 00:00:00","3","27-10-2020 17:28:13","0","22-10-2021 17:28:13","","","");
INSERT INTO tbl_usuarios VALUES("92","3","JOSE","JOSE","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","","jose@gmail.com","3","0000-00-00 00:00:00","0","27-10-2020 17:36:06","0","22-10-2021 17:36:06","","","");
INSERT INTO tbl_usuarios VALUES("93","1","CLAU","CLAU","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","","clau@hotmail.com","3","0000-00-00 00:00:00","0","27-10-2020 17:49:48","3","22-10-2021 17:49:48","","","");
INSERT INTO tbl_usuarios VALUES("101","3","RENE","RENE","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","1603854286.png","rene@gmail.com","3","0000-00-00 00:00:00","0","27-10-2020 21:04:45","0","22-10-2021 21:04:45","","","");
INSERT INTO tbl_usuarios VALUES("102","1","CARLOS","DANIEL MI AMOR","1sxqpS6ce5e0","1603854832.png","carlos@gmail.com","3","0000-00-00 00:00:00","0","27-10-2020 21:13:51","0","22-10-2021 21:13:51","","","");
INSERT INTO tbl_usuarios VALUES("107","3","ROGER","ROGER","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","1603856416.png","roger@gmail.com","3","0000-00-00 00:00:00","0","27-10-2020 21:40:15","0","22-10-2021 21:40:15","","","");
INSERT INTO tbl_usuarios VALUES("108","4","RANGER","RANGER","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","1603856571.png","ranger@gmail.com","3","0000-00-00 00:00:00","0","27-10-2020 21:42:51","0","22-10-2021 21:42:51","","","");
INSERT INTO tbl_usuarios VALUES("109","4","CEMITA","CEMITAAA","1sxqpS6ceo4=","1603860367.png","cemita@gmail.com","3","0000-00-00 00:00:00","0","27-10-2020 22:46:07","0","22-10-2021 22:46:07","","","");
INSERT INTO tbl_usuarios VALUES("110","3","DADO","DADO","1sxqpS6ceo4=","1603860620.png","dado@gmail.com","2","0000-00-00 00:00:00","3","27-10-2020 22:50:20","1","22-10-2021 22:50:20","","","");
INSERT INTO tbl_usuarios VALUES("111","1","FELIPE","FELIPE","1sxqpS6ce44=","","javierpereira1996pj@gmail.com","1","0000-00-00 00:00:00","3","27-10-2020 23:09:41","1","22-10-2021 23:09:41","","","");
INSERT INTO tbl_usuarios VALUES("112","4","TONI","TONI","1sxqpS6ce44=","","toni@gmail.com","3","0000-00-00 00:00:00","0","28-10-2020 00:03:38","0","23-10-2021 00:03:38","","","");
INSERT INTO tbl_usuarios VALUES("113","3","TONA","TONA","1sxqpS6ce44=","","tona@gmail.com","3","0000-00-00 00:00:00","0","28-10-2020 00:05:47","0","23-10-2021 00:05:47","","","");
INSERT INTO tbl_usuarios VALUES("114","3","GOKU","GOKU","1sxqpS6ce44=","../files/img/ICON-04.png","goku@gmail.com","3","0000-00-00 00:00:00","0","28-10-2020 00:16:00","0","23-10-2021 00:16:00","","","");
INSERT INTO tbl_usuarios VALUES("115","4","YITI","YITI","1sxqpS6ce44=","","yiti@gmail.com","3","0000-00-00 00:00:00","0","28-10-2020 00:30:50","0","23-10-2021 00:30:50","","","");
INSERT INTO tbl_usuarios VALUES("116","2","NEME","NEME","1sxqpS6ce44=","1603094717.png","neme@gmail.com","3","0000-00-00 00:00:00","0","28-10-2020 00:36:57","0","23-10-2021 00:36:57","","","");
INSERT INTO tbl_usuarios VALUES("117","4","TYU","TYU","1sxqpS6ce44=","1603867339.png","tyu@gmail.com","3","0000-00-00 00:00:00","0","28-10-2020 00:42:18","0","23-10-2021 00:42:18","","","");
INSERT INTO tbl_usuarios VALUES("118","3","DIEGO","DIEGO JOSE","","1603094717.png","guzman_bessy21@yahoo.com","3","0000-00-00 00:00:00","0","28-10-2020 11:16:21","0","23-10-2021 11:16:21","","","");
INSERT INTO tbl_usuarios VALUES("119","4","LINETH","ANDREA LINETH","tu1suiTjBeyrhlHq","1603094717.png","fenixguzman20@gmail.com","3","0000-00-00 00:00:00","0","28-10-2020 14:55:58","0","23-10-2021 14:55:58","","","");
INSERT INTO tbl_usuarios VALUES("120","3","ISABEL","MARIA ISABEL REYES","1sxqpS6ce44=","1603094717.png","mariaisabel@yahoo.com","3","0000-00-00 00:00:00","0","31-10-2020 18:09:39","0","26-10-2021 18:09:39","","","");
INSERT INTO tbl_usuarios VALUES("121","4","PAOLA","PAOLA GIRON","1MlpuCGce44=","1603094717.png","jdbsj@gmail.com","3","0000-00-00 00:00:00","0","31-10-2020 18:11:01","0","26-10-2021 18:11:01","","","");
INSERT INTO tbl_usuarios VALUES("122","3","DIEGOJOSE","GUZMAN DIEGO","1sxqpS6ce44=","1603094717.png","gfdsg@yahoo.com","3","0000-00-00 00:00:00","0","31-10-2020 18:20:27","0","26-10-2021 18:20:27","","","");
INSERT INTO tbl_usuarios VALUES("123","3","ALEX","ALEZ","1sxqpS6ce44=","1603094717.png","fdfd@yahoo.com","3","0000-00-00 00:00:00","0","31-10-2020 18:22:31","0","26-10-2021 18:22:31","","","");
INSERT INTO tbl_usuarios VALUES("124","5","FLORENTINO","RITACARINA","1sxqpS6ce44=","1603094717.png","bessygg@yahoo.com","3","0000-00-00 00:00:00","0","31-10-2020 18:31:52","0","26-10-2021 18:31:52","","","");



SET FOREIGN_KEY_CHECKS=1;