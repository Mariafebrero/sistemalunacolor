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
	public function insertar($id_tipo_cliente,$nombre_cn,$tipo_documento,$num_documento,$direccion,$telefono,$email)
	{
		$sql="INSERT INTO persona (id_tipo_cliente,nombre_cn,tipo_documento,num_documento,direccion,telefono,email)
		VALUES ('$id_tipo_cliente','$nombre_cn','$tipo_documento','$num_documento','$direccion','$telefono','$email')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($id_cliente,$id_tipo_cliente,$nombre_cn,$tipo_documento,$num_documento,$direccion,$telefono,$email)
	{
		$sql="UPDATE persona SET id_tipo_cliente='$id_tipo_cliente',nombre_cn='$nombre_cn',tipo_documento='$tipo_documento',num_documento='$num_documento',direccion='$direccion',telefono='$telefono',email='$email' WHERE id_cliente='$id_cliente'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para eliminar categorías
	public function eliminar($id_cliente)
	{
		$sql="DELETE FROM persona WHERE id_cliente='$id_cliente'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_cliente)
	{
		$sql="SELECT * FROM persona WHERE id_cliente='$id_cliente'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listarp()
	{
		$sql="SELECT * FROM persona WHERE id_tipo_cliente='Proveedor'";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros 
	public function listarc()
	{
		$sql="SELECT c.id_cliente, tc.tipo, c.nombre_cliente , td.descripcion as tipo_documento, td.valor, tipc.descripcion , cc.contacto 
		FROM tbl_clientes c 
		INNER JOIN tbl_tipo_cliente tc
		ON c.id_tipo_cliente = tc.id_tipo_cliente 
		INNER JOIN tbl_tipo_documento td ON td.id_cliente=c.id_cliente 
		INNER JOIN tbl_contactos_clientes cc ON c.id_cliente=cc.id_cliente
		INNER JOIN tbl_tipo_contacto tipc ON tipc.id_tipo_contacto=cc.id_tipo_contacto 
		ORDER BY `c`.`id_cliente` ASC  ";
		return ejecutarConsulta($sql);		
	}
}

?>