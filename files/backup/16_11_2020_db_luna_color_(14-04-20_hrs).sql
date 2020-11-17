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
  KEY `FK_tblobjetos` (`id_objeto`) USING BTREE,
  CONSTRAINT `FK_tblusuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=578 DEFAULT CHARSET=utf8mb4;

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
INSERT INTO tbl_bitacora VALUES("158","1","5","2020-10-30 14:39:05","Actualizó","Actualizó Intentos/contraseña","ADMIN","2020-10-30 14:39:05");
INSERT INTO tbl_bitacora VALUES("159","94","7","2020-10-30 14:44:59","Entró","Entró en Auto registro","VALERIA","2020-10-30 14:44:59");
INSERT INTO tbl_bitacora VALUES("160","94","7","2020-10-30 14:44:59","Insertó","Un usuario se Autoregistro","VALERIA","2020-10-30 14:44:59");
INSERT INTO tbl_bitacora VALUES("161","94","7","2020-10-30 14:44:59","Salió","Salió del Autoregistro","VALERIA","2020-10-30 14:44:59");
INSERT INTO tbl_bitacora VALUES("162","94","5","2020-10-30 14:45:00","Entró","Entró al login","VALERIA","2020-10-30 14:45:00");
INSERT INTO tbl_bitacora VALUES("163","1","5","2020-10-30 14:46:17","Salió","Salió de login","ADMIN","2020-10-30 14:46:17");
INSERT INTO tbl_bitacora VALUES("164","1","5","2020-10-30 14:46:17","Entrada","Entró al Sistema","ADMIN","2020-10-30 14:46:17");
INSERT INTO tbl_bitacora VALUES("169","1","1","2020-10-30 14:47:56","Salida","Salió del sistema","ADMIN","2020-10-30 14:47:56");
INSERT INTO tbl_bitacora VALUES("170","1","5","2020-10-30 14:48:05","Salió","Salió de login","ADMIN","2020-10-30 14:48:05");
INSERT INTO tbl_bitacora VALUES("171","1","5","2020-10-30 14:48:05","Entrada","Entró al Sistema","ADMIN","2020-10-30 14:48:05");
INSERT INTO tbl_bitacora VALUES("174","1","1","2020-10-30 15:32:14","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 15:32:14");
INSERT INTO tbl_bitacora VALUES("175","1","1","2020-10-30 15:32:14","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 15:32:14");
INSERT INTO tbl_bitacora VALUES("176","1","1","2020-10-30 15:35:01","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 15:35:01");
INSERT INTO tbl_bitacora VALUES("177","1","1","2020-10-30 15:35:02","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 15:35:02");
INSERT INTO tbl_bitacora VALUES("178","1","1","2020-10-30 15:37:31","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 15:37:31");
INSERT INTO tbl_bitacora VALUES("179","1","1","2020-10-30 15:37:31","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 15:37:31");
INSERT INTO tbl_bitacora VALUES("180","1","1","2020-10-30 15:45:36","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 15:45:36");
INSERT INTO tbl_bitacora VALUES("181","1","1","2020-10-30 15:45:36","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 15:45:36");
INSERT INTO tbl_bitacora VALUES("182","1","1","2020-10-30 15:47:10","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 15:47:10");
INSERT INTO tbl_bitacora VALUES("183","1","1","2020-10-30 15:47:11","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 15:47:11");
INSERT INTO tbl_bitacora VALUES("184","1","1","2020-10-30 15:47:32","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 15:47:32");
INSERT INTO tbl_bitacora VALUES("185","1","1","2020-10-30 15:47:32","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 15:47:32");
INSERT INTO tbl_bitacora VALUES("186","1","1","2020-10-30 15:55:03","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 15:55:03");
INSERT INTO tbl_bitacora VALUES("187","1","1","2020-10-30 15:55:04","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 15:55:04");
INSERT INTO tbl_bitacora VALUES("188","1","5","2020-10-30 16:05:20","Salió","Salió de login","ADMIN","2020-10-30 16:05:20");
INSERT INTO tbl_bitacora VALUES("189","1","5","2020-10-30 16:05:21","Entrada","Entró al Sistema","ADMIN","2020-10-30 16:05:21");
INSERT INTO tbl_bitacora VALUES("192","1","1","2020-10-30 16:06:44","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:06:44");
INSERT INTO tbl_bitacora VALUES("193","1","1","2020-10-30 16:06:44","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:06:44");
INSERT INTO tbl_bitacora VALUES("194","1","1","2020-10-30 16:41:28","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:41:28");
INSERT INTO tbl_bitacora VALUES("195","1","1","2020-10-30 16:41:31","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:41:31");
INSERT INTO tbl_bitacora VALUES("196","1","1","2020-10-30 16:44:38","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:44:38");
INSERT INTO tbl_bitacora VALUES("197","1","1","2020-10-30 16:44:38","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:44:38");
INSERT INTO tbl_bitacora VALUES("198","1","1","2020-10-30 16:44:54","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:44:54");
INSERT INTO tbl_bitacora VALUES("199","1","1","2020-10-30 16:44:54","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:44:54");
INSERT INTO tbl_bitacora VALUES("200","1","1","2020-10-30 16:45:12","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:45:12");
INSERT INTO tbl_bitacora VALUES("201","1","1","2020-10-30 16:45:12","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:45:12");
INSERT INTO tbl_bitacora VALUES("202","1","1","2020-10-30 16:45:23","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:45:23");
INSERT INTO tbl_bitacora VALUES("203","1","1","2020-10-30 16:45:23","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:45:23");
INSERT INTO tbl_bitacora VALUES("204","1","1","2020-10-30 16:46:35","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:46:35");
INSERT INTO tbl_bitacora VALUES("205","1","1","2020-10-30 16:46:35","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:46:35");
INSERT INTO tbl_bitacora VALUES("206","1","1","2020-10-30 16:47:01","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:47:01");
INSERT INTO tbl_bitacora VALUES("207","1","1","2020-10-30 16:47:01","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:47:01");
INSERT INTO tbl_bitacora VALUES("208","1","1","2020-10-30 16:48:38","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:48:38");
INSERT INTO tbl_bitacora VALUES("209","1","1","2020-10-30 16:48:38","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:48:38");
INSERT INTO tbl_bitacora VALUES("210","1","1","2020-10-30 16:48:52","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:48:52");
INSERT INTO tbl_bitacora VALUES("211","1","1","2020-10-30 16:48:52","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:48:52");
INSERT INTO tbl_bitacora VALUES("212","1","1","2020-10-30 16:49:04","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:49:04");
INSERT INTO tbl_bitacora VALUES("213","1","1","2020-10-30 16:49:04","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:49:04");
INSERT INTO tbl_bitacora VALUES("214","1","1","2020-10-30 16:49:21","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:49:21");
INSERT INTO tbl_bitacora VALUES("215","1","1","2020-10-30 16:49:22","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:49:22");
INSERT INTO tbl_bitacora VALUES("216","1","1","2020-10-30 16:49:42","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:49:42");
INSERT INTO tbl_bitacora VALUES("217","1","1","2020-10-30 16:49:42","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:49:42");
INSERT INTO tbl_bitacora VALUES("218","1","1","2020-10-30 16:49:53","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:49:53");
INSERT INTO tbl_bitacora VALUES("219","1","1","2020-10-30 16:49:53","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:49:53");
INSERT INTO tbl_bitacora VALUES("220","1","1","2020-10-30 16:50:01","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:50:01");
INSERT INTO tbl_bitacora VALUES("221","1","1","2020-10-30 16:50:01","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:50:01");
INSERT INTO tbl_bitacora VALUES("222","1","1","2020-10-30 16:50:29","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:50:29");
INSERT INTO tbl_bitacora VALUES("223","1","1","2020-10-30 16:50:29","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:50:29");
INSERT INTO tbl_bitacora VALUES("224","1","1","2020-10-30 16:51:08","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 16:51:08");
INSERT INTO tbl_bitacora VALUES("225","1","1","2020-10-30 16:51:08","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 16:51:08");
INSERT INTO tbl_bitacora VALUES("226","1","1","2020-10-30 17:38:48","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 17:38:48");
INSERT INTO tbl_bitacora VALUES("227","1","1","2020-10-30 17:38:48","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 17:38:48");
INSERT INTO tbl_bitacora VALUES("228","1","5","2020-10-30 18:08:48","Salió","Salió de login","ADMIN","2020-10-30 18:08:48");
INSERT INTO tbl_bitacora VALUES("229","1","5","2020-10-30 18:08:48","Entrada","Entró al Sistema","ADMIN","2020-10-30 18:08:48");
INSERT INTO tbl_bitacora VALUES("232","1","1","2020-10-30 18:11:45","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 18:11:45");
INSERT INTO tbl_bitacora VALUES("233","1","1","2020-10-30 18:11:45","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 18:11:45");
INSERT INTO tbl_bitacora VALUES("234","1","1","2020-10-30 18:27:35","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 18:27:35");
INSERT INTO tbl_bitacora VALUES("235","1","1","2020-10-30 18:27:35","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 18:27:35");
INSERT INTO tbl_bitacora VALUES("236","1","1","2020-10-30 18:27:47","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 18:27:47");
INSERT INTO tbl_bitacora VALUES("237","1","1","2020-10-30 18:27:47","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 18:27:47");
INSERT INTO tbl_bitacora VALUES("238","1","1","2020-10-30 18:27:56","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 18:27:56");
INSERT INTO tbl_bitacora VALUES("239","1","1","2020-10-30 18:27:56","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 18:27:56");
INSERT INTO tbl_bitacora VALUES("240","1","1","2020-10-30 18:28:56","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 18:28:56");
INSERT INTO tbl_bitacora VALUES("241","1","1","2020-10-30 18:28:56","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 18:28:56");
INSERT INTO tbl_bitacora VALUES("242","1","1","2020-10-30 18:43:16","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 18:43:16");
INSERT INTO tbl_bitacora VALUES("243","1","1","2020-10-30 18:43:16","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 18:43:16");
INSERT INTO tbl_bitacora VALUES("244","1","1","2020-10-30 18:43:25","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 18:43:25");
INSERT INTO tbl_bitacora VALUES("245","1","1","2020-10-30 18:43:25","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 18:43:25");
INSERT INTO tbl_bitacora VALUES("246","1","1","2020-10-30 20:36:51","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-30 20:36:51");
INSERT INTO tbl_bitacora VALUES("247","1","1","2020-10-30 20:36:51","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-30 20:36:51");
INSERT INTO tbl_bitacora VALUES("248","1","1","2020-10-30 22:28:36","Salida","Salió del sistema","ADMIN","2020-10-30 22:28:36");
INSERT INTO tbl_bitacora VALUES("249","1","5","2020-10-30 22:28:43","Salió","Salió de login","ADMIN","2020-10-30 22:28:43");
INSERT INTO tbl_bitacora VALUES("250","1","5","2020-10-30 22:28:43","Entrada","Entró al Sistema","ADMIN","2020-10-30 22:28:43");
INSERT INTO tbl_bitacora VALUES("253","1","5","2020-10-31 15:32:32","Salió","Salió de login","ADMIN","2020-10-31 15:32:32");
INSERT INTO tbl_bitacora VALUES("254","1","5","2020-10-31 15:32:32","Entrada","Entró al Sistema","ADMIN","2020-10-31 15:32:32");
INSERT INTO tbl_bitacora VALUES("257","1","1","2020-10-31 16:01:07","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 16:01:07");
INSERT INTO tbl_bitacora VALUES("258","1","1","2020-10-31 16:01:07","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 16:01:07");
INSERT INTO tbl_bitacora VALUES("259","1","5","2020-10-31 21:24:53","Salió","Salió de login","ADMIN","2020-10-31 21:24:53");
INSERT INTO tbl_bitacora VALUES("260","1","5","2020-10-31 21:24:54","Entrada","Entró al Sistema","ADMIN","2020-10-31 21:24:54");
INSERT INTO tbl_bitacora VALUES("263","1","1","2020-10-31 21:26:54","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 21:26:54");
INSERT INTO tbl_bitacora VALUES("264","1","1","2020-10-31 21:26:54","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 21:26:54");
INSERT INTO tbl_bitacora VALUES("265","1","1","2020-10-31 21:30:53","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 21:30:53");
INSERT INTO tbl_bitacora VALUES("266","1","1","2020-10-31 21:30:53","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 21:30:53");
INSERT INTO tbl_bitacora VALUES("267","1","1","2020-10-31 21:35:34","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-10-31 21:35:34");
INSERT INTO tbl_bitacora VALUES("268","1","1","2020-10-31 21:35:36","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-10-31 21:35:36");
INSERT INTO tbl_bitacora VALUES("269","1","1","2020-10-31 21:36:32","Insertar","Insertó un usuario","ADMIN","2020-10-31 21:36:32");
INSERT INTO tbl_bitacora VALUES("270","1","1","2020-10-31 21:40:48","Insertar","Insertó un usuario","ADMIN","2020-10-31 21:40:48");
INSERT INTO tbl_bitacora VALUES("271","1","1","2020-10-31 21:46:20","Salida","Salió del sistema","ADMIN","2020-10-31 21:46:20");
INSERT INTO tbl_bitacora VALUES("272","1","5","2020-11-01 00:15:55","Salió","Salió de login","ADMIN","2020-11-01 00:15:55");
INSERT INTO tbl_bitacora VALUES("273","1","5","2020-11-01 00:15:56","Entrada","Entró al Sistema","ADMIN","2020-11-01 00:15:56");
INSERT INTO tbl_bitacora VALUES("276","1","5","2020-11-01 00:24:48","Salió","Salió de login","ADMIN","2020-11-01 00:24:48");
INSERT INTO tbl_bitacora VALUES("277","1","5","2020-11-01 00:24:48","Entrada","Entró al Sistema","ADMIN","2020-11-01 00:24:48");
INSERT INTO tbl_bitacora VALUES("280","1","5","2020-11-01 00:42:12","Salió","Salió de login","ADMIN","2020-11-01 00:42:12");
INSERT INTO tbl_bitacora VALUES("281","1","5","2020-11-01 00:42:12","Entrada","Entró al Sistema","ADMIN","2020-11-01 00:42:12");
INSERT INTO tbl_bitacora VALUES("284","1","1","2020-11-01 00:46:33","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-01 00:46:33");
INSERT INTO tbl_bitacora VALUES("285","1","1","2020-11-01 00:46:33","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-01 00:46:33");
INSERT INTO tbl_bitacora VALUES("286","1","5","2020-11-01 16:08:37","Salió","Salió de login","ADMIN","2020-11-01 16:08:37");
INSERT INTO tbl_bitacora VALUES("287","1","5","2020-11-01 16:08:38","Entrada","Entró al Sistema","ADMIN","2020-11-01 16:08:38");
INSERT INTO tbl_bitacora VALUES("290","1","1","2020-11-01 16:10:09","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-01 16:10:09");
INSERT INTO tbl_bitacora VALUES("291","1","1","2020-11-01 16:10:09","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-01 16:10:09");
INSERT INTO tbl_bitacora VALUES("292","1","1","2020-11-01 16:12:07","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-01 16:12:07");
INSERT INTO tbl_bitacora VALUES("293","1","1","2020-11-01 16:12:07","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-01 16:12:07");
INSERT INTO tbl_bitacora VALUES("294","1","5","2020-11-01 16:57:31","Salió","Salió de login","ADMIN","2020-11-01 16:57:31");
INSERT INTO tbl_bitacora VALUES("295","1","5","2020-11-01 16:57:31","Entrada","Entró al Sistema","ADMIN","2020-11-01 16:57:31");
INSERT INTO tbl_bitacora VALUES("298","1","5","2020-11-08 19:19:01","Salió","Salió de login","ADMIN","2020-11-08 19:19:01");
INSERT INTO tbl_bitacora VALUES("299","1","5","2020-11-08 19:19:01","Entrada","Entró al Sistema","ADMIN","2020-11-08 19:19:01");
INSERT INTO tbl_bitacora VALUES("304","1","5","2020-11-09 12:08:53","Salió","Salió de login","ADMIN","2020-11-09 12:08:53");
INSERT INTO tbl_bitacora VALUES("305","1","5","2020-11-09 12:08:53","Entrada","Entró al Sistema","ADMIN","2020-11-09 12:08:53");
INSERT INTO tbl_bitacora VALUES("308","1","5","2020-11-09 19:52:43","Salió","Salió de login","ADMIN","2020-11-09 19:52:43");
INSERT INTO tbl_bitacora VALUES("309","1","5","2020-11-09 19:52:44","Entrada","Entró al Sistema","ADMIN","2020-11-09 19:52:44");
INSERT INTO tbl_bitacora VALUES("312","1","3","2020-11-09 19:53:19","Insertar","Insertó nueva pregunta"," ADMIN","2020-11-09 19:53:19");
INSERT INTO tbl_bitacora VALUES("313","1","1","2020-11-09 20:00:38","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-09 20:00:38");
INSERT INTO tbl_bitacora VALUES("314","1","1","2020-11-09 20:00:41","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-09 20:00:41");
INSERT INTO tbl_bitacora VALUES("315","1","1","2020-11-09 20:00:59","Eliminar","Se intentó eliminar un usuario","ADMIN","2020-11-09 20:00:59");
INSERT INTO tbl_bitacora VALUES("316","1","1","2020-11-09 20:02:24","Insertar","Insertó un usuario","ADMIN","2020-11-09 20:02:24");
INSERT INTO tbl_bitacora VALUES("317","1","1","2020-11-09 20:17:28","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-09 20:17:28");
INSERT INTO tbl_bitacora VALUES("318","1","1","2020-11-09 20:17:33","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-09 20:17:33");
INSERT INTO tbl_bitacora VALUES("325","1","5","2020-11-09 20:34:47","Salió","Salió de login","ADMIN","2020-11-09 20:34:47");
INSERT INTO tbl_bitacora VALUES("326","1","5","2020-11-09 20:34:47","Entrada","Entró al Sistema","ADMIN","2020-11-09 20:34:47");
INSERT INTO tbl_bitacora VALUES("338","1","5","2020-11-09 23:45:54","Salió","Salió de login","ADMIN","2020-11-09 23:45:54");
INSERT INTO tbl_bitacora VALUES("339","1","5","2020-11-09 23:45:54","Entrada","Entró al Sistema","ADMIN","2020-11-09 23:45:54");
INSERT INTO tbl_bitacora VALUES("342","1","1","2020-11-09 23:56:23","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-09 23:56:23");
INSERT INTO tbl_bitacora VALUES("343","1","1","2020-11-09 23:56:23","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-09 23:56:23");
INSERT INTO tbl_bitacora VALUES("344","1","1","2020-11-10 00:06:44","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-10 00:06:44");
INSERT INTO tbl_bitacora VALUES("345","1","1","2020-11-10 00:06:44","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-10 00:06:44");
INSERT INTO tbl_bitacora VALUES("346","1","5","2020-11-10 14:14:36","Salió","Salió de login","ADMIN","2020-11-10 14:14:36");
INSERT INTO tbl_bitacora VALUES("347","1","5","2020-11-10 14:14:37","Entrada","Entró al Sistema","ADMIN","2020-11-10 14:14:37");
INSERT INTO tbl_bitacora VALUES("352","1","5","2020-11-12 22:45:55","Salió","Salió de login","ADMIN","2020-11-12 22:45:55");
INSERT INTO tbl_bitacora VALUES("353","1","5","2020-11-12 22:45:56","Entrada","Entró al Sistema","ADMIN","2020-11-12 22:45:56");
INSERT INTO tbl_bitacora VALUES("356","1","1","2020-11-12 22:50:52","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-12 22:50:52");
INSERT INTO tbl_bitacora VALUES("357","1","1","2020-11-12 22:50:52","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-12 22:50:52");
INSERT INTO tbl_bitacora VALUES("358","1","1","2020-11-12 22:51:49","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-12 22:51:49");
INSERT INTO tbl_bitacora VALUES("359","1","1","2020-11-12 22:51:49","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-12 22:51:49");
INSERT INTO tbl_bitacora VALUES("360","1","1","2020-11-12 22:55:57","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-12 22:55:57");
INSERT INTO tbl_bitacora VALUES("361","1","1","2020-11-12 22:55:58","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-12 22:55:58");
INSERT INTO tbl_bitacora VALUES("362","1","1","2020-11-13 01:53:42","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 01:53:42");
INSERT INTO tbl_bitacora VALUES("363","1","1","2020-11-13 01:53:42","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 01:53:42");
INSERT INTO tbl_bitacora VALUES("364","1","1","2020-11-13 01:54:26","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 01:54:26");
INSERT INTO tbl_bitacora VALUES("365","1","1","2020-11-13 01:54:26","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 01:54:26");
INSERT INTO tbl_bitacora VALUES("366","1","1","2020-11-13 02:04:31","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:04:31");
INSERT INTO tbl_bitacora VALUES("367","1","1","2020-11-13 02:04:31","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:04:31");
INSERT INTO tbl_bitacora VALUES("368","1","1","2020-11-13 02:06:53","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:06:53");
INSERT INTO tbl_bitacora VALUES("369","1","1","2020-11-13 02:06:54","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:06:54");
INSERT INTO tbl_bitacora VALUES("370","1","1","2020-11-13 02:07:16","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:07:16");
INSERT INTO tbl_bitacora VALUES("371","1","1","2020-11-13 02:07:16","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:07:16");
INSERT INTO tbl_bitacora VALUES("372","1","1","2020-11-13 02:07:38","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:07:38");
INSERT INTO tbl_bitacora VALUES("373","1","1","2020-11-13 02:07:38","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:07:38");
INSERT INTO tbl_bitacora VALUES("374","1","1","2020-11-13 02:08:18","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:08:18");
INSERT INTO tbl_bitacora VALUES("375","1","1","2020-11-13 02:08:18","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:08:18");
INSERT INTO tbl_bitacora VALUES("376","1","1","2020-11-13 02:09:16","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:09:16");
INSERT INTO tbl_bitacora VALUES("377","1","1","2020-11-13 02:09:16","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:09:16");
INSERT INTO tbl_bitacora VALUES("378","1","1","2020-11-13 02:10:08","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:10:08");
INSERT INTO tbl_bitacora VALUES("379","1","1","2020-11-13 02:10:09","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:10:09");
INSERT INTO tbl_bitacora VALUES("380","1","1","2020-11-13 02:11:13","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:11:13");
INSERT INTO tbl_bitacora VALUES("381","1","1","2020-11-13 02:11:13","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:11:13");
INSERT INTO tbl_bitacora VALUES("382","1","1","2020-11-13 02:12:15","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:12:15");
INSERT INTO tbl_bitacora VALUES("383","1","1","2020-11-13 02:12:15","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:12:15");
INSERT INTO tbl_bitacora VALUES("384","1","1","2020-11-13 02:13:54","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:13:54");
INSERT INTO tbl_bitacora VALUES("385","1","1","2020-11-13 02:13:54","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:13:54");
INSERT INTO tbl_bitacora VALUES("386","1","1","2020-11-13 02:14:01","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:14:01");
INSERT INTO tbl_bitacora VALUES("387","1","1","2020-11-13 02:14:01","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:14:01");
INSERT INTO tbl_bitacora VALUES("388","1","1","2020-11-13 02:15:00","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:15:00");
INSERT INTO tbl_bitacora VALUES("389","1","1","2020-11-13 02:15:01","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:15:01");
INSERT INTO tbl_bitacora VALUES("390","1","1","2020-11-13 02:16:39","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:16:39");
INSERT INTO tbl_bitacora VALUES("391","1","1","2020-11-13 02:16:40","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:16:40");
INSERT INTO tbl_bitacora VALUES("392","1","1","2020-11-13 02:17:36","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:17:36");
INSERT INTO tbl_bitacora VALUES("393","1","1","2020-11-13 02:17:37","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:17:37");
INSERT INTO tbl_bitacora VALUES("394","1","1","2020-11-13 02:17:40","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:17:40");
INSERT INTO tbl_bitacora VALUES("395","1","1","2020-11-13 02:17:40","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:17:40");
INSERT INTO tbl_bitacora VALUES("396","1","1","2020-11-13 02:17:45","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:17:45");
INSERT INTO tbl_bitacora VALUES("397","1","1","2020-11-13 02:17:45","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:17:45");
INSERT INTO tbl_bitacora VALUES("398","1","1","2020-11-13 02:18:40","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:18:40");
INSERT INTO tbl_bitacora VALUES("399","1","1","2020-11-13 02:18:40","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:18:40");
INSERT INTO tbl_bitacora VALUES("400","1","1","2020-11-13 02:19:13","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:19:13");
INSERT INTO tbl_bitacora VALUES("401","1","1","2020-11-13 02:19:13","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:19:13");
INSERT INTO tbl_bitacora VALUES("402","1","1","2020-11-13 02:20:13","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:20:13");
INSERT INTO tbl_bitacora VALUES("403","1","1","2020-11-13 02:20:13","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:20:13");
INSERT INTO tbl_bitacora VALUES("404","1","1","2020-11-13 02:20:43","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:20:43");
INSERT INTO tbl_bitacora VALUES("405","1","1","2020-11-13 02:20:43","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:20:43");
INSERT INTO tbl_bitacora VALUES("406","1","1","2020-11-13 02:21:37","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:21:37");
INSERT INTO tbl_bitacora VALUES("407","1","1","2020-11-13 02:21:37","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:21:37");
INSERT INTO tbl_bitacora VALUES("408","1","1","2020-11-13 02:22:22","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:22:22");
INSERT INTO tbl_bitacora VALUES("409","1","1","2020-11-13 02:22:22","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:22:22");
INSERT INTO tbl_bitacora VALUES("410","1","1","2020-11-13 02:22:30","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:22:30");
INSERT INTO tbl_bitacora VALUES("411","1","1","2020-11-13 02:22:30","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:22:30");
INSERT INTO tbl_bitacora VALUES("412","1","1","2020-11-13 02:23:07","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:23:07");
INSERT INTO tbl_bitacora VALUES("413","1","1","2020-11-13 02:23:08","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:23:08");
INSERT INTO tbl_bitacora VALUES("414","1","1","2020-11-13 02:24:10","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:24:10");
INSERT INTO tbl_bitacora VALUES("415","1","1","2020-11-13 02:24:11","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:24:11");
INSERT INTO tbl_bitacora VALUES("416","1","1","2020-11-13 02:26:28","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:26:28");
INSERT INTO tbl_bitacora VALUES("417","1","1","2020-11-13 02:26:28","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:26:28");
INSERT INTO tbl_bitacora VALUES("418","1","1","2020-11-13 02:27:16","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:27:16");
INSERT INTO tbl_bitacora VALUES("419","1","1","2020-11-13 02:27:16","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:27:16");
INSERT INTO tbl_bitacora VALUES("420","1","1","2020-11-13 02:27:34","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:27:34");
INSERT INTO tbl_bitacora VALUES("421","1","1","2020-11-13 02:27:34","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:27:34");
INSERT INTO tbl_bitacora VALUES("422","1","1","2020-11-13 02:30:51","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:30:51");
INSERT INTO tbl_bitacora VALUES("423","1","1","2020-11-13 02:30:52","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:30:52");
INSERT INTO tbl_bitacora VALUES("424","1","1","2020-11-13 02:31:39","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:31:39");
INSERT INTO tbl_bitacora VALUES("425","1","1","2020-11-13 02:31:39","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:31:39");
INSERT INTO tbl_bitacora VALUES("426","1","1","2020-11-13 02:32:24","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:32:24");
INSERT INTO tbl_bitacora VALUES("427","1","1","2020-11-13 02:32:24","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:32:24");
INSERT INTO tbl_bitacora VALUES("428","1","1","2020-11-13 02:33:54","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:33:54");
INSERT INTO tbl_bitacora VALUES("429","1","1","2020-11-13 02:33:54","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:33:54");
INSERT INTO tbl_bitacora VALUES("430","1","1","2020-11-13 02:35:45","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:35:45");
INSERT INTO tbl_bitacora VALUES("431","1","1","2020-11-13 02:35:46","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:35:46");
INSERT INTO tbl_bitacora VALUES("432","1","1","2020-11-13 02:40:37","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:40:37");
INSERT INTO tbl_bitacora VALUES("433","1","1","2020-11-13 02:40:37","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:40:37");
INSERT INTO tbl_bitacora VALUES("434","1","1","2020-11-13 02:41:31","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:41:31");
INSERT INTO tbl_bitacora VALUES("435","1","1","2020-11-13 02:41:32","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:41:32");
INSERT INTO tbl_bitacora VALUES("436","1","1","2020-11-13 02:42:14","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:42:14");
INSERT INTO tbl_bitacora VALUES("437","1","1","2020-11-13 02:42:14","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:42:14");
INSERT INTO tbl_bitacora VALUES("438","1","1","2020-11-13 02:43:03","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:43:03");
INSERT INTO tbl_bitacora VALUES("439","1","1","2020-11-13 02:43:03","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:43:03");
INSERT INTO tbl_bitacora VALUES("440","1","1","2020-11-13 02:49:12","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:49:12");
INSERT INTO tbl_bitacora VALUES("441","1","1","2020-11-13 02:49:12","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:49:12");
INSERT INTO tbl_bitacora VALUES("442","1","1","2020-11-13 02:49:17","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:49:17");
INSERT INTO tbl_bitacora VALUES("443","1","1","2020-11-13 02:49:17","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:49:17");
INSERT INTO tbl_bitacora VALUES("444","1","1","2020-11-13 02:52:10","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:52:10");
INSERT INTO tbl_bitacora VALUES("445","1","1","2020-11-13 02:52:10","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:52:10");
INSERT INTO tbl_bitacora VALUES("446","1","1","2020-11-13 02:52:51","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:52:51");
INSERT INTO tbl_bitacora VALUES("447","1","1","2020-11-13 02:52:51","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:52:51");
INSERT INTO tbl_bitacora VALUES("448","1","1","2020-11-13 02:53:23","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:53:23");
INSERT INTO tbl_bitacora VALUES("449","1","1","2020-11-13 02:53:23","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:53:23");
INSERT INTO tbl_bitacora VALUES("450","1","1","2020-11-13 02:54:04","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:54:04");
INSERT INTO tbl_bitacora VALUES("451","1","1","2020-11-13 02:54:04","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:54:04");
INSERT INTO tbl_bitacora VALUES("452","1","1","2020-11-13 02:56:23","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:56:23");
INSERT INTO tbl_bitacora VALUES("453","1","1","2020-11-13 02:56:23","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:56:23");
INSERT INTO tbl_bitacora VALUES("454","1","1","2020-11-13 02:57:16","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:57:16");
INSERT INTO tbl_bitacora VALUES("455","1","1","2020-11-13 02:57:16","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:57:16");
INSERT INTO tbl_bitacora VALUES("456","1","1","2020-11-13 02:58:14","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 02:58:14");
INSERT INTO tbl_bitacora VALUES("457","1","1","2020-11-13 02:58:14","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 02:58:14");
INSERT INTO tbl_bitacora VALUES("458","1","1","2020-11-13 03:01:44","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 03:01:44");
INSERT INTO tbl_bitacora VALUES("459","1","1","2020-11-13 03:01:44","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 03:01:44");
INSERT INTO tbl_bitacora VALUES("460","1","1","2020-11-13 03:02:45","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 03:02:45");
INSERT INTO tbl_bitacora VALUES("461","1","1","2020-11-13 03:02:45","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 03:02:45");
INSERT INTO tbl_bitacora VALUES("462","1","1","2020-11-13 03:03:25","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 03:03:25");
INSERT INTO tbl_bitacora VALUES("463","1","1","2020-11-13 03:03:25","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 03:03:25");
INSERT INTO tbl_bitacora VALUES("464","1","5","2020-11-13 18:44:08","Salió","Salió de login","ADMIN","2020-11-13 18:44:08");
INSERT INTO tbl_bitacora VALUES("465","1","5","2020-11-13 18:44:08","Entrada","Entró al Sistema","ADMIN","2020-11-13 18:44:08");
INSERT INTO tbl_bitacora VALUES("466","1","10","2020-11-13 18:44:09","Entró","Entró a Escritorio","ADMIN","2020-11-13 18:44:09");
INSERT INTO tbl_bitacora VALUES("467","1","10","2020-11-13 18:44:09","Salió","Salió de Escritorio","ADMIN","2020-11-13 18:44:09");
INSERT INTO tbl_bitacora VALUES("468","1","5","2020-11-13 18:44:10","Salió","Salió de login","ADMIN","2020-11-13 18:44:10");
INSERT INTO tbl_bitacora VALUES("469","1","5","2020-11-13 18:44:10","Entrada","Entró al Sistema","ADMIN","2020-11-13 18:44:10");
INSERT INTO tbl_bitacora VALUES("470","1","10","2020-11-13 18:44:10","Entró","Entró a Escritorio","ADMIN","2020-11-13 18:44:10");
INSERT INTO tbl_bitacora VALUES("471","1","10","2020-11-13 18:44:11","Salió","Salió de Escritorio","ADMIN","2020-11-13 18:44:11");
INSERT INTO tbl_bitacora VALUES("472","1","10","2020-11-13 18:46:05","Entró","Entró a Escritorio","ADMIN","2020-11-13 18:46:05");
INSERT INTO tbl_bitacora VALUES("473","1","10","2020-11-13 18:46:05","Salió","Salió de Escritorio","ADMIN","2020-11-13 18:46:05");
INSERT INTO tbl_bitacora VALUES("474","1","10","2020-11-13 18:58:30","Entró","Entró a Escritorio","ADMIN","2020-11-13 18:58:30");
INSERT INTO tbl_bitacora VALUES("475","1","10","2020-11-13 18:58:30","Salió","Salió de Escritorio","ADMIN","2020-11-13 18:58:30");
INSERT INTO tbl_bitacora VALUES("476","1","10","2020-11-13 19:08:44","Entró","Entró a Escritorio","ADMIN","2020-11-13 19:08:44");
INSERT INTO tbl_bitacora VALUES("477","1","10","2020-11-13 19:08:44","Salió","Salió de Escritorio","ADMIN","2020-11-13 19:08:44");
INSERT INTO tbl_bitacora VALUES("478","1","10","2020-11-13 19:24:43","Entró","Entró a Escritorio","ADMIN","2020-11-13 19:24:43");
INSERT INTO tbl_bitacora VALUES("479","1","10","2020-11-13 19:24:43","Salió","Salió de Escritorio","ADMIN","2020-11-13 19:24:43");
INSERT INTO tbl_bitacora VALUES("480","1","10","2020-11-13 19:25:10","Entró","Entró a Mantenimiento de Productos","ADMIN","2020-11-13 19:25:10");
INSERT INTO tbl_bitacora VALUES("481","1","1","2020-11-13 19:25:37","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 19:25:37");
INSERT INTO tbl_bitacora VALUES("482","1","1","2020-11-13 19:25:37","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 19:25:37");
INSERT INTO tbl_bitacora VALUES("483","1","1","2020-11-13 19:30:10","Salida","Salió del sistema","ADMIN","2020-11-13 19:30:10");
INSERT INTO tbl_bitacora VALUES("484","1","5","2020-11-13 19:30:14","Salió","Salió de login","ADMIN","2020-11-13 19:30:14");
INSERT INTO tbl_bitacora VALUES("485","1","5","2020-11-13 19:30:14","Entrada","Entró al Sistema","ADMIN","2020-11-13 19:30:14");
INSERT INTO tbl_bitacora VALUES("486","1","10","2020-11-13 19:30:14","Entró","Entró a Escritorio","ADMIN","2020-11-13 19:30:14");
INSERT INTO tbl_bitacora VALUES("487","1","10","2020-11-13 19:30:14","Salió","Salió de Escritorio","ADMIN","2020-11-13 19:30:14");
INSERT INTO tbl_bitacora VALUES("488","1","10","2020-11-13 19:30:24","Entró","Entró a Escritorio","ADMIN","2020-11-13 19:30:24");
INSERT INTO tbl_bitacora VALUES("489","1","10","2020-11-13 19:30:24","Salió","Salió de Escritorio","ADMIN","2020-11-13 19:30:24");
INSERT INTO tbl_bitacora VALUES("490","1","10","2020-11-13 19:31:07","Entró","Entró a Escritorio","ADMIN","2020-11-13 19:31:07");
INSERT INTO tbl_bitacora VALUES("491","1","10","2020-11-13 19:31:07","Salió","Salió de Escritorio","ADMIN","2020-11-13 19:31:07");
INSERT INTO tbl_bitacora VALUES("492","1","10","2020-11-13 19:32:59","Entró","Entró a Escritorio","ADMIN","2020-11-13 19:32:59");
INSERT INTO tbl_bitacora VALUES("493","1","10","2020-11-13 19:32:59","Salió","Salió de Escritorio","ADMIN","2020-11-13 19:32:59");
INSERT INTO tbl_bitacora VALUES("494","1","10","2020-11-13 19:46:22","Entró","Entró a Escritorio","ADMIN","2020-11-13 19:46:22");
INSERT INTO tbl_bitacora VALUES("495","1","10","2020-11-13 19:46:22","Salió","Salió de Escritorio","ADMIN","2020-11-13 19:46:22");
INSERT INTO tbl_bitacora VALUES("496","1","1","2020-11-13 19:52:56","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 19:52:56");
INSERT INTO tbl_bitacora VALUES("497","1","1","2020-11-13 19:52:56","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 19:52:56");
INSERT INTO tbl_bitacora VALUES("498","1","1","2020-11-13 19:53:08","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 19:53:08");
INSERT INTO tbl_bitacora VALUES("499","1","1","2020-11-13 19:53:08","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 19:53:08");
INSERT INTO tbl_bitacora VALUES("500","1","1","2020-11-13 19:53:49","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 19:53:49");
INSERT INTO tbl_bitacora VALUES("501","1","1","2020-11-13 19:53:49","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 19:53:49");
INSERT INTO tbl_bitacora VALUES("502","1","1","2020-11-13 19:53:53","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 19:53:53");
INSERT INTO tbl_bitacora VALUES("503","1","1","2020-11-13 19:53:53","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 19:53:53");
INSERT INTO tbl_bitacora VALUES("504","1","1","2020-11-13 19:53:56","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 19:53:56");
INSERT INTO tbl_bitacora VALUES("505","1","1","2020-11-13 19:53:56","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 19:53:56");
INSERT INTO tbl_bitacora VALUES("506","1","1","2020-11-13 19:54:38","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 19:54:38");
INSERT INTO tbl_bitacora VALUES("507","1","1","2020-11-13 19:54:38","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 19:54:38");
INSERT INTO tbl_bitacora VALUES("508","1","1","2020-11-13 19:55:07","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 19:55:07");
INSERT INTO tbl_bitacora VALUES("509","1","1","2020-11-13 19:55:07","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 19:55:07");
INSERT INTO tbl_bitacora VALUES("510","1","1","2020-11-13 19:56:02","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 19:56:02");
INSERT INTO tbl_bitacora VALUES("511","1","1","2020-11-13 19:56:02","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 19:56:02");
INSERT INTO tbl_bitacora VALUES("512","1","1","2020-11-13 19:56:23","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 19:56:23");
INSERT INTO tbl_bitacora VALUES("513","1","1","2020-11-13 19:56:23","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 19:56:23");
INSERT INTO tbl_bitacora VALUES("514","1","10","2020-11-13 20:12:25","Entró","Entró a Escritorio","ADMIN","2020-11-13 20:12:25");
INSERT INTO tbl_bitacora VALUES("515","1","10","2020-11-13 20:12:25","Salió","Salió de Escritorio","ADMIN","2020-11-13 20:12:25");
INSERT INTO tbl_bitacora VALUES("516","1","10","2020-11-13 20:13:09","Entró","Entró a Escritorio","ADMIN","2020-11-13 20:13:09");
INSERT INTO tbl_bitacora VALUES("517","1","10","2020-11-13 20:13:09","Salió","Salió de Escritorio","ADMIN","2020-11-13 20:13:09");
INSERT INTO tbl_bitacora VALUES("518","1","10","2020-11-13 20:15:55","Entró","Entró a Escritorio","ADMIN","2020-11-13 20:15:55");
INSERT INTO tbl_bitacora VALUES("519","1","10","2020-11-13 20:15:55","Salió","Salió de Escritorio","ADMIN","2020-11-13 20:15:55");
INSERT INTO tbl_bitacora VALUES("520","1","10","2020-11-13 20:23:02","Entró","Entró a Escritorio","ADMIN","2020-11-13 20:23:02");
INSERT INTO tbl_bitacora VALUES("521","1","10","2020-11-13 20:23:02","Salió","Salió de Escritorio","ADMIN","2020-11-13 20:23:02");
INSERT INTO tbl_bitacora VALUES("522","1","10","2020-11-13 20:23:19","Entró","Entró a Escritorio","ADMIN","2020-11-13 20:23:19");
INSERT INTO tbl_bitacora VALUES("523","1","10","2020-11-13 20:23:19","Salió","Salió de Escritorio","ADMIN","2020-11-13 20:23:19");
INSERT INTO tbl_bitacora VALUES("524","1","10","2020-11-13 20:24:22","Entró","Entró a Escritorio","ADMIN","2020-11-13 20:24:22");
INSERT INTO tbl_bitacora VALUES("525","1","10","2020-11-13 20:24:22","Salió","Salió de Escritorio","ADMIN","2020-11-13 20:24:22");
INSERT INTO tbl_bitacora VALUES("526","1","10","2020-11-13 20:31:18","Entró","Entró a Escritorio","ADMIN","2020-11-13 20:31:18");
INSERT INTO tbl_bitacora VALUES("527","1","10","2020-11-13 20:31:18","Salió","Salió de Escritorio","ADMIN","2020-11-13 20:31:18");
INSERT INTO tbl_bitacora VALUES("528","1","1","2020-11-13 20:31:23","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 20:31:23");
INSERT INTO tbl_bitacora VALUES("529","1","1","2020-11-13 20:31:25","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 20:31:25");
INSERT INTO tbl_bitacora VALUES("530","1","1","2020-11-13 20:59:48","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 20:59:48");
INSERT INTO tbl_bitacora VALUES("531","1","1","2020-11-13 20:59:48","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 20:59:48");
INSERT INTO tbl_bitacora VALUES("532","1","1","2020-11-13 21:05:01","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 21:05:01");
INSERT INTO tbl_bitacora VALUES("533","1","1","2020-11-13 21:05:01","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 21:05:01");
INSERT INTO tbl_bitacora VALUES("534","1","1","2020-11-13 21:24:49","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-13 21:24:49");
INSERT INTO tbl_bitacora VALUES("535","1","1","2020-11-13 21:24:49","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-13 21:24:49");
INSERT INTO tbl_bitacora VALUES("536","1","5","2020-11-13 23:07:54","Salió","Salió de login","ADMIN","2020-11-13 23:07:54");
INSERT INTO tbl_bitacora VALUES("537","1","5","2020-11-13 23:07:54","Entrada","Entró al Sistema","ADMIN","2020-11-13 23:07:54");
INSERT INTO tbl_bitacora VALUES("538","1","10","2020-11-13 23:07:55","Entró","Entró a Escritorio","ADMIN","2020-11-13 23:07:55");
INSERT INTO tbl_bitacora VALUES("539","1","10","2020-11-13 23:07:55","Salió","Salió de Escritorio","ADMIN","2020-11-13 23:07:55");
INSERT INTO tbl_bitacora VALUES("540","1","10","2020-11-13 23:08:21","Entró","Entró a Mantenimiento de Productos","ADMIN","2020-11-13 23:08:21");
INSERT INTO tbl_bitacora VALUES("541","1","10","2020-11-13 23:11:03","Entró","Entró a Mantenimiento de Productos","ADMIN","2020-11-13 23:11:03");
INSERT INTO tbl_bitacora VALUES("542","1","10","2020-11-13 23:11:34","Entró","Entró a Mantenimiento de Productos","ADMIN","2020-11-13 23:11:34");
INSERT INTO tbl_bitacora VALUES("543","1","10","2020-11-13 23:24:10","Entró","Entró a Mantenimiento de Productos","ADMIN","2020-11-13 23:24:10");
INSERT INTO tbl_bitacora VALUES("544","1","10","2020-11-13 23:24:15","Entró","Entró a Mantenimiento de Productos","ADMIN","2020-11-13 23:24:15");
INSERT INTO tbl_bitacora VALUES("545","1","10","2020-11-13 23:24:20","Entró","Entró a Mantenimiento de Productos","ADMIN","2020-11-13 23:24:20");
INSERT INTO tbl_bitacora VALUES("546","1","10","2020-11-14 17:53:03","Entró","Entró a Escritorio","ADMIN","2020-11-14 17:53:03");
INSERT INTO tbl_bitacora VALUES("547","1","10","2020-11-14 17:53:03","Salió","Salió de Escritorio","ADMIN","2020-11-14 17:53:03");
INSERT INTO tbl_bitacora VALUES("548","1","5","2020-11-14 18:20:25","Salió","Salió de login","ADMIN","2020-11-14 18:20:25");
INSERT INTO tbl_bitacora VALUES("549","1","5","2020-11-14 18:20:25","Entrada","Entró al Sistema","ADMIN","2020-11-14 18:20:25");
INSERT INTO tbl_bitacora VALUES("550","1","10","2020-11-14 18:20:25","Entró","Entró a Escritorio","ADMIN","2020-11-14 18:20:25");
INSERT INTO tbl_bitacora VALUES("551","1","10","2020-11-14 18:20:25","Salió","Salió de Escritorio","ADMIN","2020-11-14 18:20:25");
INSERT INTO tbl_bitacora VALUES("552","1","5","2020-11-16 12:01:47","Salió","Salió de login","ADMIN","2020-11-16 12:01:47");
INSERT INTO tbl_bitacora VALUES("553","1","5","2020-11-16 12:01:47","Entrada","Entró al Sistema","ADMIN","2020-11-16 12:01:47");
INSERT INTO tbl_bitacora VALUES("554","1","10","2020-11-16 12:01:47","Entró","Entró a Escritorio","ADMIN","2020-11-16 12:01:47");
INSERT INTO tbl_bitacora VALUES("555","1","10","2020-11-16 12:01:47","Salió","Salió de Escritorio","ADMIN","2020-11-16 12:01:47");
INSERT INTO tbl_bitacora VALUES("556","1","1","2020-11-16 12:04:35","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-16 12:04:35");
INSERT INTO tbl_bitacora VALUES("557","1","1","2020-11-16 12:04:35","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-16 12:04:35");
INSERT INTO tbl_bitacora VALUES("558","1","1","2020-11-16 12:04:47","Actualizó","Editó su usuario","ADMIN","2020-11-16 12:04:47");
INSERT INTO tbl_bitacora VALUES("559","1","1","2020-11-16 12:04:56","Actualizó","Editó su usuario","ADMIN","2020-11-16 12:04:56");
INSERT INTO tbl_bitacora VALUES("560","1","1","2020-11-16 12:05:14","Actualizó","Editó su usuario","ADMIN","2020-11-16 12:05:14");
INSERT INTO tbl_bitacora VALUES("561","1","10","2020-11-16 12:05:22","Entró","Entró a Escritorio","ADMIN","2020-11-16 12:05:22");
INSERT INTO tbl_bitacora VALUES("562","1","10","2020-11-16 12:05:22","Salió","Salió de Escritorio","ADMIN","2020-11-16 12:05:22");
INSERT INTO tbl_bitacora VALUES("563","1","10","2020-11-16 12:05:27","Entró","Entró a Mantenimiento de Productos","ADMIN","2020-11-16 12:05:27");
INSERT INTO tbl_bitacora VALUES("564","1","2","2020-11-16 12:06:09","Actualizó","Actualizó el valor de un Parametro","ADMIN","2020-11-16 12:06:09");
INSERT INTO tbl_bitacora VALUES("565","1","10","2020-11-16 12:06:14","Entró","Entró a Mantenimiento de Productos","ADMIN","2020-11-16 12:06:14");
INSERT INTO tbl_bitacora VALUES("566","1","10","2020-11-16 12:10:24","Entró","Entró a Mantenimiento de Productos","ADMIN","2020-11-16 12:10:24");
INSERT INTO tbl_bitacora VALUES("567","1","10","2020-11-16 12:10:29","Entró","Entró a Mantenimiento de Compras","ADMIN","2020-11-16 12:10:29");
INSERT INTO tbl_bitacora VALUES("568","1","10","2020-11-16 12:10:48","Entró","Entró a Mantenimiento de Proveedores","ADMIN","2020-11-16 12:10:48");
INSERT INTO tbl_bitacora VALUES("569","1","10","2020-11-16 12:34:07","Entró","Entró a Mantenimiento de Proveedores","ADMIN","2020-11-16 12:34:07");
INSERT INTO tbl_bitacora VALUES("570","1","1","2020-11-16 13:57:59","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-16 13:57:59");
INSERT INTO tbl_bitacora VALUES("571","1","1","2020-11-16 13:57:59","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-16 13:57:59");
INSERT INTO tbl_bitacora VALUES("572","1","2","2020-11-16 13:58:19","Actualizó","Actualizó el valor de un Parametro","ADMIN","2020-11-16 13:58:19");
INSERT INTO tbl_bitacora VALUES("573","1","1","2020-11-16 14:00:10","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-16 14:00:10");
INSERT INTO tbl_bitacora VALUES("574","1","1","2020-11-16 14:00:10","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-16 14:00:10");
INSERT INTO tbl_bitacora VALUES("575","1","1","2020-11-16 14:01:23","Actualizar","Editó un usuario","ADMIN","2020-11-16 14:01:23");
INSERT INTO tbl_bitacora VALUES("576","1","1","2020-11-16 14:02:49","Entró","Entró a Mantenimiento de Usuario","ADMIN","2020-11-16 14:02:49");
INSERT INTO tbl_bitacora VALUES("577","1","1","2020-11-16 14:02:49","Salió","Salió de Mantenimiento de Usuario","ADMIN","2020-11-16 14:02:49");



DROP TABLE IF EXISTS tbl_clientes;

CREATE TABLE `tbl_clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) DEFAULT NULL,
  `nombre_empresa` varchar(50) DEFAULT NULL,
  `razon_social` varchar(30) DEFAULT NULL,
  `denominacion` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `FK_tbl_tipo_cliente` (`id_tipo_cliente`),
  CONSTRAINT `FK_tbl_tipo_cliente` FOREIGN KEY (`id_tipo_cliente`) REFERENCES `tbl_tipo_cliente` (`id_tipo_cliente`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_clientes VALUES("1","2","Carolina","","","","1998-07-03");
INSERT INTO tbl_clientes VALUES("2","1","Maria","","","","2020-11-05");



DROP TABLE IF EXISTS tbl_compras;

CREATE TABLE `tbl_compras` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_materia_prima` int(11) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
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
  `contacto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_contacto`),
  KEY `FK_tblclientes` (`id_cliente`),
  KEY `FK_tbl_tipo_contacto` (`id_tipo_contacto`),
  CONSTRAINT `FK_tbl_tipo_contacto` FOREIGN KEY (`id_tipo_contacto`) REFERENCES `tbl_tipo_contacto` (`id_tipo_contacto`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tblclientes` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_contactos_clientes VALUES("1","1","1","32832912");
INSERT INTO tbl_contactos_clientes VALUES("2","2","3","mache@gmail.com");
INSERT INTO tbl_contactos_clientes VALUES("3","1","1","22240161");



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
  `descuento` decimal(10,2) NOT NULL,
  `impuesto` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_detalle_pedido`),
  KEY `FK_pedidos` (`id_pedido`),
  CONSTRAINT `FK_pedidos` FOREIGN KEY (`id_pedido`) REFERENCES `tbl_pedidos` (`id_pedido`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_detalle_pedido VALUES("3","1","0.00","0.00","0.00","200 Tarjeta de presentación hecho de cover Tipo de impresion: tiro con un tamaño de 3.5 x 2");



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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_documentos VALUES("1","2","1","0801199812321");
INSERT INTO tbl_documentos VALUES("2","2","2","0801199812326");



DROP TABLE IF EXISTS tbl_estado_pedido;

CREATE TABLE `tbl_estado_pedido` (
  `id_estado_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_estado_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_estado_pedido VALUES("1","Cotización");
INSERT INTO tbl_estado_pedido VALUES("2","Pedido aprobado");
INSERT INTO tbl_estado_pedido VALUES("3","Producción");
INSERT INTO tbl_estado_pedido VALUES("4","Finalizado");
INSERT INTO tbl_estado_pedido VALUES("5","Facturado");
INSERT INTO tbl_estado_pedido VALUES("6","Entregado");



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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_hist_contrasena VALUES("8","91","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901");
INSERT INTO tbl_hist_contrasena VALUES("9","91","fc6d282c72b8dd14058abe01ae03a1cf81a50af056d5fbd1e7f3bed00c713f71");
INSERT INTO tbl_hist_contrasena VALUES("11","93","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901");
INSERT INTO tbl_hist_contrasena VALUES("12","94","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("13","95","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("14","96","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("15","97","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("16","1","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("17","1","1sxqpS6ce44=");
INSERT INTO tbl_hist_contrasena VALUES("18","1","1sxqpS6ce44=");



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
  `cantidad` int(11) NOT NULL,
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




DROP TABLE IF EXISTS tbl_material;

CREATE TABLE `tbl_material` (
  `id_material` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_material`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO tbl_material VALUES("1","Cover");
INSERT INTO tbl_material VALUES("2","Opalina");
INSERT INTO tbl_material VALUES("3","Especial");
INSERT INTO tbl_material VALUES("4","Bond 20");
INSERT INTO tbl_material VALUES("5","Satinado");
INSERT INTO tbl_material VALUES("6","Cartoncillo");
INSERT INTO tbl_material VALUES("7","Adhesivo");
INSERT INTO tbl_material VALUES("8","Carton");
INSERT INTO tbl_material VALUES("9","Lona textil");
INSERT INTO tbl_material VALUES("10","Lona vinilica");
INSERT INTO tbl_material VALUES("11","Lona base negra");
INSERT INTO tbl_material VALUES("12","Lona mate");
INSERT INTO tbl_material VALUES("13","Vinil de corte");
INSERT INTO tbl_material VALUES("14","Vinil reflectivo");
INSERT INTO tbl_material VALUES("15","Vinil transparente fotoluminicente");
INSERT INTO tbl_material VALUES("16","Vinil");
INSERT INTO tbl_material VALUES("17","Microperforado");
INSERT INTO tbl_material VALUES("18","Vinil transparente");



DROP TABLE IF EXISTS tbl_objetos;

CREATE TABLE `tbl_objetos` (
  `id_objeto` int(11) NOT NULL AUTO_INCREMENT,
  `objeto` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `icono` varchar(50) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `idmenupadre` int(11) NOT NULL,
  PRIMARY KEY (`id_objeto`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_objetos VALUES("2","Cliente","Clientes de la empresa","","fas fa-user","1","0");
INSERT INTO tbl_objetos VALUES("3","Pedido","Pedidos de la empresa","","fas fa-shopping-cart","1","0");
INSERT INTO tbl_objetos VALUES("4","Factura","Factura del sistema","","fas fa-file-invoice","1","0");
INSERT INTO tbl_objetos VALUES("5","Inventario","Inventario del sistema","","fas fa-dolly-flatbed","1","0");
INSERT INTO tbl_objetos VALUES("6","Compras","Compras del sistema","","fas fa-shopping-basket","1","0");
INSERT INTO tbl_objetos VALUES("7","Reportes","Reportes del sistema","","fas fa-chart-bar","1","0");
INSERT INTO tbl_objetos VALUES("8","Administracion","Administracion de la empresa","","fas fa-tasks","1","0");
INSERT INTO tbl_objetos VALUES("9","Seguridad","Seguridad del sistema","","fas fa-shield-alt","1","0");
INSERT INTO tbl_objetos VALUES("10","Nuevo cliente","Clientes de la empresa","nuevocliente.php","","1","2");
INSERT INTO tbl_objetos VALUES("11","Pedidos","Pedidos de la empresa","pedido.php","","1","3");
INSERT INTO tbl_objetos VALUES("13","Usuarios","Usuarios del sistema","usuario.php","","1","8");
INSERT INTO tbl_objetos VALUES("14","Productos","Productos de la empresa","productos.php","","1","3");
INSERT INTO tbl_objetos VALUES("15","Reporte de compras","Reporte de compras de la empresa","reportecompra.php","","1","7");
INSERT INTO tbl_objetos VALUES("16","Reporte de ventas","Reporte de ventas de la empresa","reporteventa.php","","1","7");
INSERT INTO tbl_objetos VALUES("17","Factura","Facturas de la empresa","factura.php","","1","4");
INSERT INTO tbl_objetos VALUES("18","Materia prima","Materia prima de la empresa","materiaprima.php","","1","5");
INSERT INTO tbl_objetos VALUES("19","Compras","Compras de la empresa","compras.php","","1","6");
INSERT INTO tbl_objetos VALUES("20","Proveedores","Proveedores de la empresa","proveedores.php","","1","6");
INSERT INTO tbl_objetos VALUES("21","Backup","Backup de la base de datos","backup.php","","1","8");
INSERT INTO tbl_objetos VALUES("22","Restore","Restore de la base de datos","importar.php","","1","8");
INSERT INTO tbl_objetos VALUES("23","Bitácora ","Bitacora del sistema","bitacora.php","","1","8");
INSERT INTO tbl_objetos VALUES("24","Roles","Roles del sistema","rol.php","","1","9");
INSERT INTO tbl_objetos VALUES("25","Permisos","Permisos del sistema","permiso.php","","1","9");
INSERT INTO tbl_objetos VALUES("26","Preguntas de seguridad","Preguntas del sistema","preguntas.php","","1","9");
INSERT INTO tbl_objetos VALUES("27","Parámetros","Parametros del sistema","parametros.php","","1","9");
INSERT INTO tbl_objetos VALUES("28","Menú-Objetos","Menu del sistema","objetos.php","","1","9");



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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

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
INSERT INTO tbl_parametros VALUES("23","ADMIN_NUM_REGISTRO","5","1","0000-00-00","0000-00-00");



DROP TABLE IF EXISTS tbl_pedidos;

CREATE TABLE `tbl_pedidos` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha_inicial` date DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `descuento por producto` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `id_estado_pedido` int(11) NOT NULL,
  `comentario` varchar(254) NOT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `FK_tblcliente` (`id_cliente`),
  CONSTRAINT `FK_tblcliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_pedidos VALUES("1","1","1","2020-11-10","2020-11-30","200","20.00","0.00","0.00","1","Que quede bonito");



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
  `permiso_insercion` tinyint(4) DEFAULT NULL,
  `permiso_eliminacion` tinyint(4) DEFAULT NULL,
  `permiso_actualizacion` tinyint(4) DEFAULT NULL,
  `permiso_consultar` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_permiso`),
  KEY `FK_tbroles` (`id_rol`),
  KEY `FK_tbobjetos` (`id_objeto`),
  CONSTRAINT `FK_tbroles` FOREIGN KEY (`id_rol`) REFERENCES `tbl_roles` (`id_rol`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_permisos VALUES("1","2","10","1","1","1","1");
INSERT INTO tbl_permisos VALUES("2","2","13","1","1","1","1");
INSERT INTO tbl_permisos VALUES("3","2","11","1","1","1","1");
INSERT INTO tbl_permisos VALUES("4","2","12","1","1","1","1");
INSERT INTO tbl_permisos VALUES("5","2","14","1","1","1","1");
INSERT INTO tbl_permisos VALUES("6","2","15","1","1","1","1");
INSERT INTO tbl_permisos VALUES("7","2","16","1","1","1","1");
INSERT INTO tbl_permisos VALUES("8","2","17","1","1","1","1");
INSERT INTO tbl_permisos VALUES("9","2","18","1","1","1","1");
INSERT INTO tbl_permisos VALUES("10","2","19","1","1","1","1");
INSERT INTO tbl_permisos VALUES("11","2","20","1","1","1","1");
INSERT INTO tbl_permisos VALUES("12","2","21","1","1","1","1");
INSERT INTO tbl_permisos VALUES("13","2","22","0","1","0","1");
INSERT INTO tbl_permisos VALUES("14","2","23","1","1","1","1");
INSERT INTO tbl_permisos VALUES("15","2","25","1","1","1","1");
INSERT INTO tbl_permisos VALUES("16","2","24","0","0","0","1");
INSERT INTO tbl_permisos VALUES("17","2","26","0","0","0","1");
INSERT INTO tbl_permisos VALUES("18","2","27","1","1","1","1");
INSERT INTO tbl_permisos VALUES("19","2","28","1","1","1","1");



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
INSERT INTO tbl_preguntas VALUES("13","hola","1");



DROP TABLE IF EXISTS tbl_preguntas_usuarios;

CREATE TABLE `tbl_preguntas_usuarios` (
  `id_pregunta_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_pregunta` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `respuesta` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta_usuario`),
  KEY `FK_tbl_preguntas` (`id_pregunta`),
  CONSTRAINT `FK_tbl_preguntas` FOREIGN KEY (`id_pregunta`) REFERENCES `tbl_preguntas` (`id_pregunta`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

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



DROP TABLE IF EXISTS tbl_producto_acabado;

CREATE TABLE `tbl_producto_acabado` (
  `id_producto` int(11) NOT NULL,
  `acabado` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_producto_acabado VALUES("1","Plastificadas");
INSERT INTO tbl_producto_acabado VALUES("1","Boleadas");
INSERT INTO tbl_producto_acabado VALUES("2","Dobladas");
INSERT INTO tbl_producto_acabado VALUES("2","Troqueleadas");
INSERT INTO tbl_producto_acabado VALUES("2","Embosadas");
INSERT INTO tbl_producto_acabado VALUES("5","Doblados");
INSERT INTO tbl_producto_acabado VALUES("6","Doblados");
INSERT INTO tbl_producto_acabado VALUES("8","A caballete");
INSERT INTO tbl_producto_acabado VALUES("9","Grapados");
INSERT INTO tbl_producto_acabado VALUES("12","Con salapas impresas");
INSERT INTO tbl_producto_acabado VALUES("13","Con espiral");
INSERT INTO tbl_producto_acabado VALUES("13","A caballete");
INSERT INTO tbl_producto_acabado VALUES("13","Laminados");
INSERT INTO tbl_producto_acabado VALUES("13","Doblados");
INSERT INTO tbl_producto_acabado VALUES("8","Grapada con lomo");
INSERT INTO tbl_producto_acabado VALUES("14","Pasta dura");
INSERT INTO tbl_producto_acabado VALUES("14","Pasta normal");
INSERT INTO tbl_producto_acabado VALUES("14","Espiral");
INSERT INTO tbl_producto_acabado VALUES("14","Pegado");
INSERT INTO tbl_producto_acabado VALUES("14","Plastificado");
INSERT INTO tbl_producto_acabado VALUES("15","Tipo afiche");
INSERT INTO tbl_producto_acabado VALUES("15","Tipo planificador de escritorio");
INSERT INTO tbl_producto_acabado VALUES("15","Tipo tripode (escritorio)");
INSERT INTO tbl_producto_acabado VALUES("15","Con espiral");
INSERT INTO tbl_producto_acabado VALUES("15","Sin espiral");
INSERT INTO tbl_producto_acabado VALUES("16","Con ventanas");
INSERT INTO tbl_producto_acabado VALUES("16","Sin ventanas");
INSERT INTO tbl_producto_acabado VALUES("17","Troqueleadas");
INSERT INTO tbl_producto_acabado VALUES("17","Boleadas");
INSERT INTO tbl_producto_acabado VALUES("17","Plastificadas");
INSERT INTO tbl_producto_acabado VALUES("18","Para estructura");
INSERT INTO tbl_producto_acabado VALUES("18","Para banderado");
INSERT INTO tbl_producto_acabado VALUES("19","Para estructura");
INSERT INTO tbl_producto_acabado VALUES("20","Estructura metalica");
INSERT INTO tbl_producto_acabado VALUES("20","PVC");
INSERT INTO tbl_producto_acabado VALUES("20","Coroplast");
INSERT INTO tbl_producto_acabado VALUES("20","Laminados");
INSERT INTO tbl_producto_acabado VALUES("21","Troqueleados");
INSERT INTO tbl_producto_acabado VALUES("21","Laminados");
INSERT INTO tbl_producto_acabado VALUES("22","Instalado");



DROP TABLE IF EXISTS tbl_producto_impresion;

CREATE TABLE `tbl_producto_impresion` (
  `Tipo_de_impresion` varchar(20) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_producto_impresion VALUES("Tiro","1","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","1","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","2","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","2","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","3","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","3","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","4","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","4","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","5","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","5","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","6","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","6","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","7","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","8","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","8","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","9","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","9","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","10","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","11","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","12","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","12","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","13","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","13","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","14","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","14","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","15","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","15","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","16","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","17","");
INSERT INTO tbl_producto_impresion VALUES("Retiro","17","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","18","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","19","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","20","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","21","");
INSERT INTO tbl_producto_impresion VALUES("Tiro","22","");



DROP TABLE IF EXISTS tbl_producto_material;

CREATE TABLE `tbl_producto_material` (
  `id_material` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_producto_material VALUES("1","1");
INSERT INTO tbl_producto_material VALUES("2","1");
INSERT INTO tbl_producto_material VALUES("3","1");
INSERT INTO tbl_producto_material VALUES("1","2");
INSERT INTO tbl_producto_material VALUES("2","2");
INSERT INTO tbl_producto_material VALUES("3","2");
INSERT INTO tbl_producto_material VALUES("1","3");
INSERT INTO tbl_producto_material VALUES("4","4");
INSERT INTO tbl_producto_material VALUES("5","4");
INSERT INTO tbl_producto_material VALUES("4","5");
INSERT INTO tbl_producto_material VALUES("5","5");
INSERT INTO tbl_producto_material VALUES("4","6");
INSERT INTO tbl_producto_material VALUES("5","6");
INSERT INTO tbl_producto_material VALUES("1","7");
INSERT INTO tbl_producto_material VALUES("2","7");
INSERT INTO tbl_producto_material VALUES("3","7");
INSERT INTO tbl_producto_material VALUES("4","8");
INSERT INTO tbl_producto_material VALUES("5","8");
INSERT INTO tbl_producto_material VALUES("3","9");
INSERT INTO tbl_producto_material VALUES("4","9");
INSERT INTO tbl_producto_material VALUES("6","9");
INSERT INTO tbl_producto_material VALUES("4","10");
INSERT INTO tbl_producto_material VALUES("5","10");
INSERT INTO tbl_producto_material VALUES("6","10");
INSERT INTO tbl_producto_material VALUES("4","11");
INSERT INTO tbl_producto_material VALUES("5","11");
INSERT INTO tbl_producto_material VALUES("7","11");
INSERT INTO tbl_producto_material VALUES("6","12");
INSERT INTO tbl_producto_material VALUES("1","13");
INSERT INTO tbl_producto_material VALUES("4","14");
INSERT INTO tbl_producto_material VALUES("5","14");
INSERT INTO tbl_producto_material VALUES("6","14");
INSERT INTO tbl_producto_material VALUES("8","14");
INSERT INTO tbl_producto_material VALUES("1","15");
INSERT INTO tbl_producto_material VALUES("4","15");
INSERT INTO tbl_producto_material VALUES("6","15");
INSERT INTO tbl_producto_material VALUES("6","16");
INSERT INTO tbl_producto_material VALUES("1","17");
INSERT INTO tbl_producto_material VALUES("2","17");
INSERT INTO tbl_producto_material VALUES("6","17");
INSERT INTO tbl_producto_material VALUES("9","18");
INSERT INTO tbl_producto_material VALUES("10","18");
INSERT INTO tbl_producto_material VALUES("11","18");
INSERT INTO tbl_producto_material VALUES("11","19");
INSERT INTO tbl_producto_material VALUES("12","19");
INSERT INTO tbl_producto_material VALUES("13","20");
INSERT INTO tbl_producto_material VALUES("14","20");
INSERT INTO tbl_producto_material VALUES("15","20");
INSERT INTO tbl_producto_material VALUES("16","20");
INSERT INTO tbl_producto_material VALUES("14","21");
INSERT INTO tbl_producto_material VALUES("16","21");
INSERT INTO tbl_producto_material VALUES("18","21");
INSERT INTO tbl_producto_material VALUES("17","22");



DROP TABLE IF EXISTS tbl_producto_tamaño;

CREATE TABLE `tbl_producto_tamaño` (
  `id_producto` int(11) NOT NULL,
  `tamaño` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_producto_tamaño VALUES("1","3.5 x 2");
INSERT INTO tbl_producto_tamaño VALUES("1","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("2","7 x 5");
INSERT INTO tbl_producto_tamaño VALUES("2","4 x 6");
INSERT INTO tbl_producto_tamaño VALUES("2","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("3","2 x 7.5");
INSERT INTO tbl_producto_tamaño VALUES("3","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("4","4.25 x 5.5");
INSERT INTO tbl_producto_tamaño VALUES("4","3.66 x 8.5");
INSERT INTO tbl_producto_tamaño VALUES("4","5.5 x 8.5");
INSERT INTO tbl_producto_tamaño VALUES("4","8.5 x 11");
INSERT INTO tbl_producto_tamaño VALUES("4","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("5","Carta");
INSERT INTO tbl_producto_tamaño VALUES("5","Oficio");
INSERT INTO tbl_producto_tamaño VALUES("5","Tabloide");
INSERT INTO tbl_producto_tamaño VALUES("5","25 x 8.5");
INSERT INTO tbl_producto_tamaño VALUES("5","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("6","Carta");
INSERT INTO tbl_producto_tamaño VALUES("6","Oficio");
INSERT INTO tbl_producto_tamaño VALUES("6","Tabloide");
INSERT INTO tbl_producto_tamaño VALUES("6","25 x 8.5");
INSERT INTO tbl_producto_tamaño VALUES("6","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("7","8.5 x 5.5");
INSERT INTO tbl_producto_tamaño VALUES("7","11 x 8.5");
INSERT INTO tbl_producto_tamaño VALUES("7","13 x 8.5");
INSERT INTO tbl_producto_tamaño VALUES("7","11 x 17");
INSERT INTO tbl_producto_tamaño VALUES("7","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("8","8.5 x 11");
INSERT INTO tbl_producto_tamaño VALUES("8","5.5 x 8.5");
INSERT INTO tbl_producto_tamaño VALUES("8","8.5 x 12.5");
INSERT INTO tbl_producto_tamaño VALUES("8","6.25 x 8.5");
INSERT INTO tbl_producto_tamaño VALUES("8","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("9","8.5 x 11");
INSERT INTO tbl_producto_tamaño VALUES("9","5.5 x 8.5");
INSERT INTO tbl_producto_tamaño VALUES("9","8.5 x 12.5");
INSERT INTO tbl_producto_tamaño VALUES("9","6.25 x 8.5");
INSERT INTO tbl_producto_tamaño VALUES("9","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("10","8.5 x 11");
INSERT INTO tbl_producto_tamaño VALUES("10","8.5 x 13");
INSERT INTO tbl_producto_tamaño VALUES("10","12 x 18");
INSERT INTO tbl_producto_tamaño VALUES("10","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("11","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("12","8.5 x 11");
INSERT INTO tbl_producto_tamaño VALUES("12","8.5 x 13");
INSERT INTO tbl_producto_tamaño VALUES("12","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("13","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("14","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("15","8.5 x 5.5");
INSERT INTO tbl_producto_tamaño VALUES("15","8.5 x 11");
INSERT INTO tbl_producto_tamaño VALUES("15","11 x 17");
INSERT INTO tbl_producto_tamaño VALUES("15","17 x 22");
INSERT INTO tbl_producto_tamaño VALUES("15","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("16","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("17","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("18","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("19","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("20","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("21","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("22","Personalizado");
INSERT INTO tbl_producto_tamaño VALUES("23","30 x 70");
INSERT INTO tbl_producto_tamaño VALUES("23","32 x 80");
INSERT INTO tbl_producto_tamaño VALUES("23","94 x 94");
INSERT INTO tbl_producto_tamaño VALUES("23","2.30M x 4M");
INSERT INTO tbl_producto_tamaño VALUES("23","Banderola");
INSERT INTO tbl_producto_tamaño VALUES("23","Personalizado");



DROP TABLE IF EXISTS tbl_productos;

CREATE TABLE `tbl_productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_productos VALUES("1","Tarjeta de presentación");
INSERT INTO tbl_productos VALUES("2","Tarjeta de invitación");
INSERT INTO tbl_productos VALUES("3","Separadores");
INSERT INTO tbl_productos VALUES("4","Volantes");
INSERT INTO tbl_productos VALUES("5","Brochures");
INSERT INTO tbl_productos VALUES("6","Boletines");
INSERT INTO tbl_productos VALUES("7","Diplomas");
INSERT INTO tbl_productos VALUES("8","Revistas");
INSERT INTO tbl_productos VALUES("9","Libros");
INSERT INTO tbl_productos VALUES("10","Afiches");
INSERT INTO tbl_productos VALUES("11","Etiquetas");
INSERT INTO tbl_productos VALUES("12","Carpetas");
INSERT INTO tbl_productos VALUES("13","Menus");
INSERT INTO tbl_productos VALUES("14","Agendas/Libretas");
INSERT INTO tbl_productos VALUES("15","Calendarios");
INSERT INTO tbl_productos VALUES("16","Cajas");
INSERT INTO tbl_productos VALUES("17","Tarjetas");
INSERT INTO tbl_productos VALUES("18","Banners");
INSERT INTO tbl_productos VALUES("19","Backdrop");
INSERT INTO tbl_productos VALUES("20","Vinil para rotulos");
INSERT INTO tbl_productos VALUES("21","Stickers");
INSERT INTO tbl_productos VALUES("22","Microperforado");
INSERT INTO tbl_productos VALUES("23","Estructuras prefabricadas");
INSERT INTO tbl_productos VALUES("24","Banner");
INSERT INTO tbl_productos VALUES("25","Hojas");
INSERT INTO tbl_productos VALUES("26","jjj");



DROP TABLE IF EXISTS tbl_proveedores;

CREATE TABLE `tbl_proveedores` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(50) NOT NULL,
  PRIMARY KEY (`id_proveedor`),
  KEY `FK_tbl_tipo_proveedores` (`id_tipo_proveedor`),
  CONSTRAINT `FK_tbl_tipo_proveedores` FOREIGN KEY (`id_tipo_proveedor`) REFERENCES `tbl_tipo_proveedores` (`id_tipo_proveedor`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_proveedores VALUES("1","1","Carlos Vasquez");
INSERT INTO tbl_proveedores VALUES("2","1","Alejandra");



DROP TABLE IF EXISTS tbl_roles;

CREATE TABLE `tbl_roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(30) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_roles VALUES("1","Default","Predeterminado","1");
INSERT INTO tbl_roles VALUES("2","Admin","Administrador del sistema","1");
INSERT INTO tbl_roles VALUES("3","Gerente","Gerente de la empresa","1");
INSERT INTO tbl_roles VALUES("4","Diseñador","Diseñador grafico de la Empresa","1");



DROP TABLE IF EXISTS tbl_tipo_cliente;

CREATE TABLE `tbl_tipo_cliente` (
  `id_tipo_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_tipo_cliente VALUES("1","Natural");
INSERT INTO tbl_tipo_cliente VALUES("2","Empresarial");



DROP TABLE IF EXISTS tbl_tipo_contacto;

CREATE TABLE `tbl_tipo_contacto` (
  `id_tipo_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_contacto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_tipo_contacto VALUES("1","Celular");
INSERT INTO tbl_tipo_contacto VALUES("2","Direccion");
INSERT INTO tbl_tipo_contacto VALUES("3","Email");



DROP TABLE IF EXISTS tbl_tipo_contacto_proveedores;

CREATE TABLE `tbl_tipo_contacto_proveedores` (
  `id_tipo_contacto_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_contacto_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_tipo_documento;

CREATE TABLE `tbl_tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `valor` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo_documento`),
  KEY `fk_client` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_tipo_documento VALUES("1","1","RTN","");
INSERT INTO tbl_tipo_documento VALUES("2","2","ID","");



DROP TABLE IF EXISTS tbl_tipo_pago;

CREATE TABLE `tbl_tipo_pago` (
  `id_tipo_pago` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS tbl_tipo_proveedores;

CREATE TABLE `tbl_tipo_proveedores` (
  `id_tipo_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_tipo_proveedores VALUES("1","Pegamentos");
INSERT INTO tbl_tipo_proveedores VALUES("2","proveedor de tinta");



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
  `id_rol` int(11) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `contrasena` varchar(254) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `id_estado_usuario` int(11) NOT NULL,
  `fecha_ultima_conexion` datetime DEFAULT current_timestamp(),
  `preguntas_contestadas` int(11) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT current_timestamp(),
  `intentos` int(11) NOT NULL DEFAULT 1,
  `fecha_vencimiento` datetime DEFAULT current_timestamp(),
  `token` varchar(60) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT current_timestamp(),
  `fecha_final` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_usuario`),
  KEY `FK_tbl_roles` (`id_rol`),
  KEY `FK_tbl_estado_usuarios` (`id_estado_usuario`),
  CONSTRAINT `FK_tbl_estado_usuarios` FOREIGN KEY (`id_estado_usuario`) REFERENCES `tbl_estado_usuarios` (`id_estado_usuario`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tbl_roles` FOREIGN KEY (`id_rol`) REFERENCES `tbl_roles` (`id_rol`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_usuarios VALUES("1","2","ADMIN","SUPERUSUARIO","1sxqpS6ce44=","1603094717.png","admin@gmail.com","2","2020-10-19 12:54:59","0","2020-10-19 12:54:59","1","2020-10-19 12:54:59","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("2","2","NESTO","NESTO","8d22900f61f6312e7d35be3132110c6ffdf6592ecdfcf058fa68d5f56613bd69","1603134666.png","aaa@gmail.com","2","0000-00-00 00:00:00","3","0000-00-00 00:00:00","1","0000-00-00 00:00:00","owUhIk7A6l4ymJ0","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("4","2","CAMPEON","CAMPEON","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","1603137139.png","campeon@gmail.com","3","0000-00-00 00:00:00","0","0000-00-00 00:00:00","1","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("5","2","COPA","COPA","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","1603137287.png","copa@gmail.com","3","0000-00-00 00:00:00","0","0000-00-00 00:00:00","1","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("6","2","EMILIO","EMILIOR","fc6d282c72b8dd14058abe01ae03a1cf81a50af056d5fbd1e7f3bed00c713f71","1603137749.png","emilio@gmail.com","2","0000-00-00 00:00:00","2","0000-00-00 00:00:00","2","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("7","3","NAVIDAD","NAVIDAD SIN TI","02b93f33a419ec2e6899fbee126f398a87251dc6e565dc0d6f15985f48367945","1603146905.png","gto@gto.com","2","0000-00-00 00:00:00","3","0000-00-00 00:00:00","1","0000-00-00 00:00:00","4gLNSUmMav0enH1","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("10","1","PERRI","PERRI","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","","perri@gmail.com","1","0000-00-00 00:00:00","3","0000-00-00 00:00:00","1","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("87","1","USUARIOPRUEBA","USUARIO DE PRUEBA","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","","soportelunacolor@gmail.com","5","0000-00-00 00:00:00","0","0000-00-00 00:00:00","1","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("88","1","RENE","RENE","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","","javierpereira1996pj@gmail.com","2","0000-00-00 00:00:00","0","0000-00-00 00:00:00","0","0000-00-00 00:00:00","CkShZHX1TgxQpny","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("89","1","RN","RN","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","","tunau@gmail.com","5","0000-00-00 00:00:00","0","0000-00-00 00:00:00","1","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("90","1","JR","JR","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","","teamlunau@gmail.com","1","0000-00-00 00:00:00","3","0000-00-00 00:00:00","1","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("91","4","ZOE","ZOE","fc6d282c72b8dd14058abe01ae03a1cf81a50af056d5fbd1e7f3bed00c713f71","","zoe@gmail.com","2","0000-00-00 00:00:00","3","0000-00-00 00:00:00","0","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("92","3","JOSE","JOSE","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","","jose@gmail.com","3","0000-00-00 00:00:00","0","0000-00-00 00:00:00","0","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("93","3","CLAU","CLAU","ca29863b8b4be2fd63b5bc73276c8e407cda29e03da5c4646b96612110aaf901","","clau@hotmail.com","2","0000-00-00 00:00:00","0","0000-00-00 00:00:00","0","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("94","1","VALERIA","VALERIA","1sxqpS6ce44=","","valeria@hotmail.com","1","0000-00-00 00:00:00","0","0000-00-00 00:00:00","1","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("95","3","RITA","RITA","1sxqpS6ce44=","1603094717.png","carolinaflorentino_98@hotmail.com","3","0000-00-00 00:00:00","0","0000-00-00 00:00:00","0","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("96","3","CAROL","CAROL","1sxqpS6ce44=","1603094717.png","carolflorentino398@gmail.com","3","0000-00-00 00:00:00","0","0000-00-00 00:00:00","0","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_usuarios VALUES("97","1","CLAR","CLARR","1sxqpS6ce44=","1603094717.png","clar@gmail.com","3","0000-00-00 00:00:00","0","0000-00-00 00:00:00","0","0000-00-00 00:00:00","","0000-00-00 00:00:00","0000-00-00 00:00:00");



SET FOREIGN_KEY_CHECKS=1;