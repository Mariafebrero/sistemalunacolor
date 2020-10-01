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
	public function insertar($pregunta)
	{ 	
		$sql="INSERT INTO tbl_preguntas (pregunta,condicion)
			VALUES ('$pregunta','1')";
			return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($id_pregunta,$pregunta)
	{
		$sql="UPDATE tbl_preguntas SET pregunta='$pregunta' WHERE id_pregunta='$id_pregunta'";
		ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar preguntas
	public function desactivar($id_pregunta)
	{
		$sql="UPDATE tbl_preguntas SET condicion='0' WHERE id_pregunta='$id_pregunta'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar preguntas
	public function activar($id_pregunta)
	{
		$sql="UPDATE tbl_preguntas SET condicion ='1' WHERE id_pregunta='$id_pregunta'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_pregunta)
	{
		$sql="SELECT * FROM tbl_preguntas WHERE id_pregunta='$id_pregunta'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM tbl_preguntas";
		return ejecutarConsulta($sql);		
	}

	public function select()
	{
		$sql="SELECT * FROM tbl_preguntas where condicion=1";
		return ejecutarConsulta($sql);		
	}


}

?>