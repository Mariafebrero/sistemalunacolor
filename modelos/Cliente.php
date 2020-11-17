<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/conexion.php";
//Aqui son las funciones de codigo, son puras funciones INSERT/DELETE/ETC

Class Cliente
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($tipo_cliente,$nombre_cliente,$contacto,$telefono,$cargo,$rtn,$correo_electronico,$direccion,$observacion)
	{
		$sql="INSERT INTO tbl_clientes (tipo_cliente,nombre_cliente,contacto,telefono,cargo,rtn,correo_electronico,direccion,observacion)
		VALUES ('$tipo_cliente','$nombre_cliente','$contacto','$telefono','$cargo','$rtn','$correo_electronico','$direccion','$observacion')";

		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($id_cliente,$tipo_cliente,$nombre_cliente,$contacto,$telefono,$cargo,$rtn,$correo_electronico,$direccion,$observacion)
	{
		$sql="UPDATE tbl_clientes
		SET nombre_cliente='$nombre_cliente',contacto='$contacto',telefono='$telefono',cargo='$cargo',rtn='$rtn',correo_electronico='$correo_electronico', direccion='$direccion',observacion = '$observacion' 
		WHERE id_cliente='$id_cliente'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para eliminar categorías
	public function eliminar($id_cliente)
	{
		$sql="DELETE FROM tbl_clientes WHERE id_cliente='$id_cliente'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_cliente)
	{
		$sql="SELECT * FROM tbl_clientes WHERE id_cliente ='$id_cliente' ";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listarp()
	{
		$sql="BEGIN;
				INSERT INTO tbl_clientes (id_tipo_cliente, nombre_cliente,fecha_nacimiento)
				  VALUES('1', 'ProbandoMultipleInsert','01/02/2000');
				  
				INSERT INTO tbl_tipo_documento (id_cliente, descripcion, valor) 
				  VALUES('3', 'ID','0000-0000-00000');

				INSERT INTO tbl_contactos_clientes (id_cliente, id_tipo_contacto, contacto) 
				  VALUES('3', '3','InsertMultiple@gmail.com');  
			COMMIT;";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros 
	public function listarc()
	{
		$sql="SELECT * FROM `tbl_clientes` ORDER BY `tbl_clientes`.`id_cliente` ASC";
		return ejecutarConsulta($sql);		
	}
}

?>