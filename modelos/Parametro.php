<?php 

//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Parametro
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	public function editar($id_parametro,$valor)
	{
		$sql="UPDATE tbl_parametros SET valor='$valor' WHERE id_parametro='$id_parametro'";

			//Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','2',(select now()),'Actualizó','Actualizó el valor de un Parametro','$usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora);	

		return ejecutarConsulta($sql);
	}
	
	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM tbl_parametros";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_parametro)
	{
		$sql="SELECT * FROM tbl_parametros WHERE id_parametro='$id_parametro'";
		return ejecutarConsultaSimpleFila($sql);
	}

}

?>
 