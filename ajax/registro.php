<?php
error_reporting(0);

//****Ingresar tabla usuario***//
//conexion BD

require_once "global.php";

//recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$username = $_POST["username"];
$password = $_POST["password"];
$clave1 = $_POST["clave1"];
$rol = 2;


tbl_usuarios,
$usuario = $_POST[""];
$nombre_usuario = $_POST[""];
$estado_usuario= $_POST[""];
$id_rol= $_POST[""];
$contraseña= $_POST[""];
$correo_electronico = $_POST[""];
$fecha_ultima_conexion	= $_POST[""];
$preguntas_contestadas	= $_POST[""];
$primer_ingreso	= $_POST[""];
$fecha_vencimiento	= $_POST[""];
$correo_electronico	= $_POST[""];
$creado_por	= $_POST[""];
$fecha_creacion	= $_POST[""];
$modificado_por	= $_POST[""];
$fecha_modificacion	= $_POST[""];
$id_tipo_usuario= $_POST[""];


/**************************Tabla user********************/

$insertar = "INSERT INTO `USUARIOS`(NOMBRE,APELLIDO,EMAIL,NOMBRE_USUARIO,CLAVE_USUARIO,CONFIRM_CLAVE_USUARIO,ROL) 

VALUES('$nombre','$apellido','$correo','$username','$password','$clave1','$rol')";

//No ingresar el mismo nombre de usuario
$verificar_usuario = mysqli_query($conn, "SELECT * FROM `USUARIOS` WHERE  NOMBRE_USUARIO = '$username'");
if (mysqli_num_rows($verificar_usuario)>0){
	echo '<script>alert("Ese usuario ya esta registrado"); window.history.go(-1);</script>';
	exit;
}
//Ejecutar consulta
$resultado = mysqli_query($conn,$insertar);
if (!$resultado){
	echo '<script>alert("Error al registrarse"); window.history.go(-1);</script>';
	header('location: ../index.php');
}else{
	echo '<script>alert("Usuario registrado correctamente");</script>';
}

//Cerrar conexion
mysqli_close($conn);
