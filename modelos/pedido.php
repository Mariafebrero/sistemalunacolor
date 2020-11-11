<?php 
session_start();
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class pedido
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	//Implementamos un método para insertar registros
	public function insertar()
	{ 	
		$sql="INSERT INTO tbl_pedidos ()
			VALUES ()";

			 //Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','2',(select now()),'Insertó','Insertó un pedido',' $usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora);	

			return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($id_pedido)
	{
		$sql="UPDATE tbl_pedidos SET ='$', ='$' WHERE id_pedido='$id_pedido'";

			//Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','2',(select now()),'Actualizó','Editó un pedido','$usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora);	

		return ejecutarConsulta($sql);
	}

	
	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_rol)
	{
		$sql="SELECT * FROM tbl_roles WHERE id_rol='$id_rol'";
		return ejecutarConsultaSimpleFila($sql);
	}

	

		public function listar()
	{
		$sql="SELECT tpe.id_pedido, tc.nombre_cliente, tdp.comentario as detalle_de_pedido, tpe.fecha_inicial, tpe.fecha_entrega, tdp.descuento, tdp.impuesto, tdp.total, tep.descripcion as estado 
			FROM tbl_pedidos tpe 
			JOIN tbl_clientes tc ON tpe.id_cliente = tc.id_cliente
			JOIN tbl_detalle_pedido tdp ON tpe.id_pedido = tdp.id_pedido
			JOIN tbl_estado_pedido tep ON tpe.id_estado_pedido = tep.id_estado_pedido";	
			return ejecutarConsulta($sql);	
	}



	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM tbl_roles where estado=1";
		return ejecutarConsulta($sql);		
	}





}

?>
