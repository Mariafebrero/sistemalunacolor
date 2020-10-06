
<?php 

//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";


Class Usuario
{
	//Constructor
	public function __construct()
	{

	}
	//método para insertar registros
	public function insertar($id_rol,$usuario,$nombre_usuario,$contrasena,$imagen,$correo_electronico,$permisos)
	{ 	
		$sql="INSERT INTO tbl_usuarios (id_rol,usuario,nombre_usuario,contrasena,imagen,correo_electronico,condicion,primer_ingreso,fecha_ultima_conexion,preguntas_contestadas,fecha_creacion)
			VALUES ('$id_rol','$usuario','$nombre_usuario','$contrasena','$imagen','$correo_electronico','1', '1','','',CURDATE() )";
			
			//return ejecutarConsulta($sql);
			$idusuarionew=ejecutarConsulta_retornarID($sql);

          	 
          //Historial de contraseñas
         // $sql_hist_contrasena= "INSERT INTO tbl_hist_contrasena(,'$contrasena') 
			//VALUES()";
			//return ejecutarConsulta($sql_hist_contrasena);

			//Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion,modificado_por,fecha_modificacion) 
			VALUES('$id_usuario1','1',(select now()),'Insertar','Insertó un usuario','$usuario1',(select now()),'','')";
			return ejecutarConsulta($sql_bitacora);	


			$num_elementos=0;
			$sw=true;

			while ($num_elementos < count($permisos))
		{
			$sql_detalle = "INSERT INTO tbl_usuario_permiso(idusuario, idpermiso) VALUES('$idusuarionew','$permisos[$num_elementos]')";
			ejecutarConsulta($sql_detalle) or $sw = false;
			$num_elementos=$num_elementos + 1;
		}
		return $sw;

	}

	//Método para editar registros
	public function editar($id_usuario,$id_rol,$usuario,$nombre_usuario,$contrasena,$imagen,$correo_electronico,$permisos)
	{


		$sql="UPDATE tbl_usuarios SET id_rol ='$id_rol',usuario='$usuario',nombre_usuario='$nombre_usuario',contrasena='$contrasena',imagen='$imagen',correo_electronico='$correo_electronico' WHERE id_usuario='$id_usuario'";
		ejecutarConsulta($sql);

			//Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion,modificado_por,fecha_modificacion) 
			VALUES('$id_usuario1','1',(select now()),'Actualizar','Editó un usuario','','','$usuario1',(select now()))";
			return ejecutarConsulta($sql_bitacora);	


		//Eliminamos todos los permisos asignados para volverlos a registrar
		$sqldel="DELETE FROM tbl_usuario_permiso WHERE idusuario='$id_usuario'";
		ejecutarConsulta($sqldel);

		$num_elementos=0;
			$sw=true;

			while ($num_elementos < count($permisos))
		{
			$sql_detalle = "INSERT INTO tbl_usuario_permiso(idusuario, idpermiso) VALUES('$id_usuario','$permisos[$num_elementos]')";
			ejecutarConsulta($sql_detalle) or $sw = false;
			$num_elementos=$num_elementos + 1;
		}
		return $sw;
	}


	//Implementamos un método para desactivar categorías
	public function desactivar($id_usuario)
	{

		

		$sql="UPDATE tbl_usuarios SET condicion='0' WHERE id_usuario='$id_usuario'";
		

		//Bitacora
		//Incializamos las variables de seccion 
 		$id_usuario2=$_SESSION['id_usuario'];
	    $usuario2=$_SESSION['usuario']; 
		//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
		$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion,modificado_por,fecha_modificacion) 
			VALUES('$id_usuario2','1',(select now()),'Actualizar','Actualizó la condición del usuario a desactivado','$usuario2',(select now()),'','')";
		ejecutarConsulta($sql_bitacora);

        //Return desactivar los usuarios
		return ejecutarConsulta($sql);

			
	}

	//Implementamos un método para activar categorías
	public function activar($id_usuario)
	{
		$sql="UPDATE tbl_usuarios SET condicion='1' WHERE id_usuario='$id_usuario'";
		

		//Bitacora
		//Incializamos las variables de seccion 
 		$id_usuario1=$_SESSION['id_usuario'];
	    $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion,modificado_por,fecha_modificacion) 
			VALUES('$id_usuario1','1',(select now()),'Actualizar','Actualizó la condición del usuario a activado','$usuario1',(select now()),'','')";
			ejecutarConsulta($sql_bitacora);	

			//Return activar los usuarios
			return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_usuario)
	{
		$sql="SELECT * FROM tbl_usuarios WHERE id_usuario='$id_usuario'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT u.id_usuario,u.id_rol,r.rol,u.usuario,u.nombre_usuario,u.contrasena,u.imagen,u.correo_electronico,u.condicion FROM tbl_usuarios u inner join tbl_roles r on u.id_rol=r.id_rol";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los permisos marcados
	public function listarmarcados($id_usuario)
	{
		$sql="SELECT * FROM tbl_usuario_permiso WHERE idusuario='$id_usuario'";
		return ejecutarConsulta($sql);
	}
	
	//Función para verificar el acceso al sistema
	public function verificar($usuario,$contrasena)
    {
    	$sql="SELECT id_usuario,usuario,nombre_usuario,contrasena,imagen,correo_electronico FROM tbl_usuarios WHERE usuario='$usuario' AND contrasena='$contrasena' AND condicion='1' AND primer_ingreso='0'"; 
    	return ejecutarConsulta($sql);  
    	
    }

    


}

?>