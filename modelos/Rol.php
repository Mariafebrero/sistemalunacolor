<?php 
session_start();
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Rol
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	//Implementamos un método para insertar registros
	public function insertar($rol,$descripcion)
	{ 	
		$sql="INSERT INTO tbl_roles (rol,descripcion,condicion)
			VALUES ('$rol','$descripcion','1')";


			 //Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion,modificado_por,fecha_modificacion) 
			VALUES('$id_usuario1','3',(select now()),'Insertar','Insertó un rol',' $usuario1',(select now()),'','')";
			ejecutarConsulta($sql_bitacora);	

			return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($id_rol,$rol,$descripcion)
	{
		$sql="UPDATE tbl_roles SET rol='$rol', descripcion='$descripcion' WHERE id_rol='$id_rol'";

			//Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion,modificado_por,fecha_modificacion) 
			VALUES('$id_usuario1','3',(select now()),'Actualizar','Editó un rol','','','$usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora);	

		ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar preguntas
	public function desactivar($id_rol)
	{
		$sql="UPDATE tbl_roles SET condicion='0' WHERE id_rol='$id_rol'";

		 //Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion,modificado_por,fecha_modificacion) 
			VALUES('$id_usuario1','3',(select now()),'Actualizar','Desactivó un rol',' $usuario1',(select now()),'','')";
			ejecutarConsulta($sql_bitacora);	

		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar preguntas
	public function activar($id_rol)
	{
		$sql="UPDATE tbl_roles SET condicion ='1' WHERE id_rol='$id_rol'";

		 //Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion,modificado_por,fecha_modificacion) 
			VALUES('$id_usuario1','3',(select now()),'Actualizar','Activó un rol',' $usuario1',(select now()),'','')";
			ejecutarConsulta($sql_bitacora);	

		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_rol)
	{
		$sql="SELECT * FROM tbl_roles WHERE id_rol='$id_rol'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM tbl_roles";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM tbl_roles where condicion=1";
		return ejecutarConsulta($sql);		
	}


}

?>