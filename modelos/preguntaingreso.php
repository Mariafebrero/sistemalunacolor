<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Pregunta
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	//Implementamos un método para insertar registros
	public function insertar($respuesta)
	{ 	 

		$usuario1=$sql="SELECT id_usuario FROM tbl_usuarios WHERE usuario=$usuario";
		return ejecutarConsulta($sql);

		$sql="INSERT INTO tbl_preguntas_usuarios (id_pregunta, id_usuario ,respuesta)
			VALUES ($id_usuario, $respuesta)";
			return ejecutarConsulta($sql)
	}
}

?>