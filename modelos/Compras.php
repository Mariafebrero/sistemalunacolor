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
	public function insertar($id_usuario1,$nro_facturac,$tipo_comprobante,$descuento_c,$impuesto_c,$total_compra,$fecha_compra,$fecha_ingreso)

	  $id_usuario1=$_SESSION['id_usuario'];
       $usuario1=$_SESSION['usuario']; 

$sql="select id_usuario from tbl_usuarios where usuario='admin';"
	{
		$sql="INSERT INTO tbl_compras (id_usuario,id_proveedor,nro_factura,tipo_comprobante,descuento,impuesto,Total_compra,fecha_compra,fecha_ingreso)
		VALUES ('$id_usuario',,'$nro_facturac','$tipo_comprobante','$descuento_c','$impuesto_c','$total_compra','$fecha_compra',(select now()))";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($id_producto,$nombreproducto)
	{
		$sql="UPDATE tbl_productos SET nombre_producto='$nombreproducto' WHERE id_producto='$id_producto'";
		return ejecutarConsulta($sql);
	}
	public function eliminar($id_producto)
    
	{
		//Eliminar un usuario
		$sql="DELETE FROM tbl_productos WHERE id_producto = '$id_producto'"; 

		return ejecutarConsulta($sql);
	
	}

	//Implementamos un método para desactivar registros
	public function desactivar($id_producto)
	{
		$sql="UPDATE tbl_productos SET estado='0' WHERE id_producto='$id_producto'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar registros
	public function activar($id_producto)
	{
		$sql="UPDATE tbl_productos SET estado='1' WHERE id_producto='$id_producto'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_producto)
	{
		$sql="SELECT * FROM tbl_productos WHERE id_producto='$id_producto'";
		return ejecutarConsultaSimpleFila($sql);
	}
	public function NextID()
	{

      $sql= "SELECT MAX(id_producto)+1 FROM `tbl_productos` ";
      ejecutarConsulta($sql);
       while ($r=ejecutarConsulta($sql)->fetch_array()) 
        {
           $user_id=$r["MAX(id_producto)+1"];
            break;
         }
     echo $user_id;
                            
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		//$sql="SELECT a.idarticulo,a.idcategoria,c.nombre as categoria,a.codigo,a.nombre,a.stock,a.descripcion,a.imagen,a.condicion FROM articulo a INNER JOIN categoria c ON a.idcategoria=c.idcategoria";
		//return ejecutarConsulta($sql);

		$sql="SELECT * from tbl_compras";
		//$sql="SELECT p.id_producto, tp.descripcion, p.nombre_producto, p.estado, p.cantidad, p.precio_unitario, p.total FROM tbl_productos p INNER JOIN tbl_tipo_producto tp ON p.id_tipo_producto = tp.id_tipo_producto;";

		return ejecutarConsulta($sql);		
	}

	



	
}

?>