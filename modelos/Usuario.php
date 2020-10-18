<?php 
//Incluímos inicialmente la conexión a la base de datos
//require "../config/Conexion.php";
include '../config/conexion.php';

Class Usuario
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	//Implementamos un método para insertar registros

	//,$permisos LO QUITE

	public function insertar($id_rol,$usuario,$nombre_usuario,$contrasena,$imagen,$correo_electronico,$id_estado_usuario)
	{ 	
		
		

		$query4 = "select valor FROM tbl_parametros WHERE id_parametro = '14'";
		ejecutarConsulta($query4);
			

           while ($tbl_parametros=ejecutarConsulta($query4)->fetch_array()) 
			{
				$valor=$tbl_parametros["valor"];
				break;
			}


		$parametroV = "+" . $valor . " Days";

		date_default_timezone_set("America/Tegucigalpa");
		$fecha_creacion = strtotime("now");
		$fecha_vencimiento = strtotime($parametroV, $fecha_creacion);
		$fecha_creacion = date("d-m-Y H:i:s", $fecha_creacion); 
		$fecha_vencimiento = date("d-m-Y H:i:s", $fecha_vencimiento); 

		$sql="INSERT INTO tbl_usuarios (id_rol,usuario,nombre_usuario,contrasena,imagen,correo_electronico,id_estado_usuario,fecha_ultima_conexion,preguntas_contestadas,fecha_creacion,intentos,fecha_vencimiento,token,fecha_inicio,fecha_final)
			VALUES ('$id_rol','$usuario','$nombre_usuario','$contrasena','$imagen','$correo_electronico','$id_estado_usuario','','0','$fecha_creacion','1','$fecha_vencimiento','','','')";
		
			//$idusuarionew=ejecutarConsulta_retornarID($sql);

			$sql_contra= "INSERT INTO tbl_hist_contrasena (id_usuario, contrasena) VALUES ((select id_usuario from tbl_usuarios where usuario ='$usuario'),'$contrasena')"; 
			ejecutarConsulta($sql_contra);

			//Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','1',(select now()),'Insertar','Insertó un usuario','$usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora);

		/*
			$num_elementos=0;
			$sw=true;

			while ($num_elementos < count($permisos))
		{
			$sql_detalle = "INSERT INTO tbl_usuario_permiso(idusuario, idpermiso) VALUES('$idusuarionew','$permisos[$num_elementos]')";
			ejecutarConsulta($sql_detalle) or $sw = false;
			$num_elementos=$num_elementos + 1;
		}
		return $sw;*/

		return ejecutarConsulta($sql);

	}


	//Implementamos un método para editar registros
	//,$permisos LO QUITE

	public function editar($id_usuario,$id_rol,$usuario,$nombre_usuario,$contrasena,$imagen,$correo_electronico,$id_estado_usuario)
	{
		$sql="UPDATE tbl_usuarios SET id_rol ='$id_rol',nombre_usuario='$nombre_usuario',contrasena='$contrasena',imagen='$imagen',correo_electronico='$correo_electronico',id_estado_usuario='$id_estado_usuario' WHERE id_usuario='$id_usuario'";
		

			 //Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','1',(select now()),'Actualizar','Editó un usuario','$usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora); 


		//Eliminamos todos los permisos asignados para volverlos a registrar
		/*$sqldel="DELETE FROM tbl_usuario_permiso WHERE idusuario='$id_usuario'";
		ejecutarConsulta($sqldel);

		$num_elementos=0;
			$sw=true;

			while ($num_elementos < count($permisos))
		{
			$sql_detalle = "INSERT INTO tbl_usuario_permiso(idusuario, idpermiso) VALUES('$id_usuario','$permisos[$num_elementos]')";
			ejecutarConsulta($sql_detalle) or $sw = false;
			$num_elementos=$num_elementos + 1;
		}
		return $sw;*/

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
		$sql="SELECT u.id_usuario,u.id_rol,r.rol,u.usuario,u.nombre_usuario,u.contrasena,u.imagen,u.correo_electronico,e.id_estado_usuario,e.descripcion
		FROM tbl_usuarios u 
		inner join tbl_roles r on u.id_rol=r.id_rol
		inner join tbl_estado_usuarios e on u.id_estado_usuario=e.id_estado_usuario
		WHERE id_usuario>1";
		return ejecutarConsulta($sql);		
	}

	/*
	//Implementar un método para listar los permisos marcados
	public function listarmarcados($id_usuario)
	{
		$sql="SELECT * FROM tbl_usuario_permiso WHERE idusuario='$id_usuario'";
		return ejecutarConsulta($sql);
	}
	*/
	
	//Función para verificar el acceso al sistema
	public function verificar($usuario,$contrasena)
    {
    	$sql="SELECT id_usuario,usuario,nombre_usuario,contrasena,imagen,correo_electronico FROM tbl_usuarios WHERE usuario='$usuario' AND contrasena='$contrasena' AND id_estado_usuario =2";
    	//return $sql; 
    	return ejecutarConsulta($sql);  
    	
    }

    public function verifica_ingreso($usuario,$contrasena)
   {
    	$sql="SELECT * FROM tbl_usuarios WHERE usuario='$usuario' AND contrasena='$contrasena' AND (id_estado_usuario=3 OR id_estado_usuario=5)"; 
    	return ejecutarConsulta($sql);  
    	
    }

    public function eliminar($id_usuario)
    
	{
		//Eliminar un usuario
		$sql="DELETE FROM tbl_usuarios WHERE id_usuario = '$id_usuario'";

			//Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Insertar datos en la bitacora
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','1',(select now()),'Eliminar','Elimino un usuario','$usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora); 

		return ejecutarConsulta($sql);
	
	}

}

?>