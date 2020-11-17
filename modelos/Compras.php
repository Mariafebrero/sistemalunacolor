<?php 
//Incluímos inicialmente la conexión a la base de datos
//todas las consultas de insert,select, delete y update
require "../config/conexion.php";


Class Compras
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($id_proveedor,$tipo_comprobante,$nro_facturac,$descuento_c,$impuesto_c,$total_c,$fecha_compra) 
	{
	  $id_usuario1=$_SESSION['id_usuario'];
       $usuario1=$_SESSION['usuario']; 

		$sql="INSERT INTO tbl_compras ( id_usuario, id_proveedor, nro_factura, Tipo_comprobante, descuento, impuesto, Total_compra, fecha_compra, fecha_ingreso) 
        VALUES ('$id_usuario1','$id_proveedor','$nro_facturac','$tipo_comprobante','$descuento_c','$impuesto_c','$total_c','$fecha_compra',(select now()))";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	//public function editar($id_producto,$nombreproducto)
	//{
	//	$sql="UPDATE tbl_productos SET nombre_producto='$nombreproducto' WHERE id_producto='$id_producto'";
	//	return ejecutarConsulta($sql);
	//}
	     
	

	//Implementar un método para listar los registros
	public function listar()
	{
		
		$sql="SELECT c.id_compra,u.usuario ,c.nro_factura,p.nombre_proveedor, c.Total_compra,c.fecha_compra,c.fecha_ingreso
      from tbl_usuarios u INNER join tbl_compras  c on u.id_usuario=c.id_usuario
       INNER join tbl_proveedores p on  c.id_proveedor=p.id_proveedor";
		
		return ejecutarConsulta($sql);		
	}

	



	
}

?>