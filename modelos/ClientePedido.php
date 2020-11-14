<?php 
session_start();
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class ClientePedido
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM tbl_clientes";
		return ejecutarConsulta($sql);		
	}


}

?>