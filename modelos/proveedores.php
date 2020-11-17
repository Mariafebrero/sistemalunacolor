<?php 
session_start();
//Incluímos inicialmente la conexión a la base de datos


require "../config/conexion.php";



Class proveedores
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	//Implementamos un método para insertar registros
	public function insertar($nombre_proveedor,$cai_proveedor,$rtn_proveedor,$Descripcion_proveedores,$Telefono_proveedores,$Direccion_proveedores,$Correo_proveedores)	 	
{


$sql="INSERT INTO tbl_proveedores (nombre_proveedor,CAI,rtn,telefono,correo,direccion,descripcion)
			VALUES ('$nombre_proveedor','$cai_proveedor','$rtn_proveedor','$Telefono_proveedores','$Correo_proveedores','$Direccion_proveedores','$Descripcion_proveedores')";



return ejecutarConsulta($sql);











}

	//Implementamos un método para editar registros
	public function editar($id_proveedor,$nombre_proveedor,$Descripcion_proveedores)
	{
		$sql="UPDATE tbl_proveedores SET nombre_proveedor ='$nombre_proveedor', Descripcion='$Descripcion_proveedores' WHERE id_proveedor ='$id_proveedor'";
		
ejecutarConsulta($sql);

			//Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','2',(select now()),'Actualizar','Editó un proveedor','$usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora);	

		
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_proveedor)
	{
		$sql="SELECT * FROM tbl_proveedores WHERE id_proveedor='$id_proveedor'";
		return ejecutarConsultaSimpleFila($sql);
	}



    public function eliminar($id_proveedor)
    
	{
		//Eliminar un usuario
		$sql="DELETE FROM tbl_proveedores WHERE id_proveedor = '$id_proveedor'";
       return ejecutarConsulta($sql);
		
			//Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Insertar datos en la bitacora
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','1',(select now()),'Eliminar','Se elimino proveedores','$usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora); 

		
	
	}



	//Implementar un método para listar los registros
	public function listarpr()
	{
		$sql="SELECT * FROM tbl_proveedores  ";
		return ejecutarConsulta($sql);		
	}
	
	public function select()
	{
		$sql="SELECT * FROM tbl_proveedores  ";
		return ejecutarConsulta($sql);		
	}


}

?>
