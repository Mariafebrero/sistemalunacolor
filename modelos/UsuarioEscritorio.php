<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class UsuarioEscritorio
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros


	//Implementamos un método para editar registros
	public function editar($id_usuario2,$usuario,$nombre_usuario,$contrasena,$imagen,$correo_electronico)
	{
		$id_usuario2=$_SESSION['id_usuario'];

		$sql="UPDATE tbl_usuarios SET usuario='$usuario',nombre_usuario='$nombre_usuario',contrasena='$contrasena',imagen='$imagen',correo_electronico='$correo_electronico' WHERE id_usuario='$id_usuario2'";

		    //Bitacora
			//Incializamos las variables de seccion 
	        $usuario2=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario2','1',(select now()),'Actualizar','Editó su usuario','$usuario2',(select now()))";
			ejecutarConsulta($sql_bitacora);	


		return  ejecutarConsulta($sql);


	}



	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_usuario2)

	{   $id_usuario2=$_SESSION['id_usuario'];

		$sql="SELECT * FROM tbl_usuarios WHERE id_usuario='$id_usuario2'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()

	{
		$id_usuario2=$_SESSION['id_usuario'];
	   

		$sql="SELECT id_usuario,usuario,nombre_usuario,contrasena,imagen,correo_electronico from tbl_usuarios where id_usuario='$id_usuario2'";
		return ejecutarConsulta($sql);		
	}

	
}

?>