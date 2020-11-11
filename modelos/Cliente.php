<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";


Class Cliente
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}


	public function select()
	{
		$sql="SELECT * FROM tbl_clientes";
		return ejecutarConsulta($sql);		
	}
}

?>