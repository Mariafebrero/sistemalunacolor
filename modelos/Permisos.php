<?php 

//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Permisos
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	public function insertar($id_rol,$id_objeto,$permiso_insercion,$permiso_eliminacion,$permiso_actualizacion,$permiso_consultar)
	{
		
		$sql="INSERT INTO tbl_permisos (id_rol,id_objeto,permiso_insercion,permiso_eliminacion,permiso_actualizacion,permiso_consultar)
			VALUES ('$id_rol','$id_objeto','$permiso_insercion','$permiso_eliminacion','$permiso_actualizacion','$permiso_consultar')";
			
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

	public function editar($id_permiso,$id_rol,$id_objeto,$permiso_insercion,$permiso_eliminacion,$permiso_actualizacion,$permiso_consultar)
	{
		$sql="UPDATE tbl_permisos SET id_rol='$id_rol',id_objeto='$id_objeto',permiso_insercion='$permiso_insercion',permiso_eliminacion='$permiso_eliminacion',permiso_actualizacion='$permiso_actualizacion',permiso_consultar='$permiso_consultar' WHERE id_permiso='$id_permiso'";

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
	public function listar($id_rol)
	{
		$sql="SELECT p.id_permiso,r.rol,o.id_objeto,o.objeto,p.permiso_insercion,p.permiso_eliminacion,p.permiso_actualizacion,p.permiso_consultar 
		FROM tbl_permisos p
		INNER JOIN tbl_roles r on p.id_rol=r.id_rol
		INNER JOIN tbl_objetos o on p.id_objeto=o.id_objeto
		WHERE r.id_rol='$id_rol'";
		return ejecutarConsulta($sql);		
	}


	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_permiso)
	{
		$sql="SELECT * FROM tbl_permisos WHERE id_permiso='$id_permiso'";
		return ejecutarConsultaSimpleFila($sql);
	}

}

?>
 