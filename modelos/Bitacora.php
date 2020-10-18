<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Bitacora
{

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_usuario)
	{
		$sql="SELECT * FROM tbl_bitacora WHERE id_bitacora='$id_bitacora'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT b.id_bitacora,b.fecha,u.id_usuario,u.imagen,o.id_objeto,o.objeto,o.descripcion as descripcion1,b.accion,b.descripcion,b.creado_por,b.fecha_creacion
		from tbl_bitacora b
		INNER JOIN tbl_usuarios u ON b.id_usuario = u.id_usuario 
		INNER JOIN tbl_objetos o ON b.id_objeto = o.id_objeto";
		return ejecutarConsulta($sql);	
	}

}

?>