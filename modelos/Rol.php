<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Rol
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	//Implementamos un método para insertar registros
	public function insertar($rol,$descripcion)
	{ 	
		$sql="INSERT INTO tbl_roles (rol,descripcion,condicion)
			VALUES ('$rol','$descripcion','1')";
			return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($id_rol,$rol,$descripcion)
	{
		$sql="UPDATE tbl_roles SET rol='$rol', descripcion='$descripcion' WHERE id_rol='$id_rol'";
		ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar preguntas
	public function desactivar($id_rol)
	{
		$sql="UPDATE tbl_roles SET condicion='0' WHERE id_rol='$id_rol'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar preguntas
	public function activar($id_rol)
	{
		$sql="UPDATE tbl_roles SET condicion ='1' WHERE id_rol='$id_rol'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_rol)
	{
		$sql="SELECT * FROM tbl_roles WHERE id_rol='$id_rol'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM tbl_roles";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM tbl_roles where condicion=1";
		return ejecutarConsulta($sql);		
	}


}

?>