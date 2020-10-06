<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class UsuarioEscritorio
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	//Implementamos un método para insertar registros
	public function insertar($usuario,$nombre_usuario,$contrasena,$imagen,$correo_electronico)
	{ 	
		$sql="INSERT INTO tbl_usuarios (usuario,nombre_usuario,contrasena,imagen,correo_electronico,condicion)
			VALUES ('$usuario','$nombre_usuario','$contrasena','$imagen','$correo_electronico','1')";
			return ejecutarConsulta($sql);
	}


	//Implementamos un método para editar registros
	public function editar($id_usuario,$usuario,$nombre_usuario,$contrasena,$imagen,$correo_electronico)
	{
		$sql="UPDATE tbl_usuarios SET usuario='$usuario',nombre_usuario='$nombre_usuario',contrasena='$contrasena',imagen='$imagen',correo_electronico='$correo_electronico' WHERE id_usuario='$id_usuario'";
		return  ejecutarConsulta($sql);
	}


	//Implementamos un método para desactivar categorías
	public function desactivar($id_usuario)
	{
		$sql="UPDATE tbl_usuarios SET condicion='0' WHERE id_usuario='$id_usuario'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($id_usuario)
	{
		$sql="UPDATE tbl_usuarios SET condicion='1' WHERE id_usuario='$id_usuario'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_usuario)
	{
		$sql="SELECT * FROM tbl_usuarios WHERE id_usuario='$id_usuario'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * from tbl_usuarios";
		return ejecutarConsulta($sql);		
	}

	
}

?>