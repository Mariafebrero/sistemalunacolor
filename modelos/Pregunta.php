<?php 
session_start();

//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Pregunta
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	//Implementamos un método para insertar registros
	public function insertar($pregunta)
	{ 	
		$sql="INSERT INTO tbl_preguntas (pregunta,estado)
			VALUES ('$pregunta','1')";

		    //Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','1',(select now()),'Insertar','Insertó nueva pregunta',' $usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora);	

			//Return insertar pregunta
			return ejecutarConsulta($sql);

		   	
	}

	//Implementamos un método para editar registros
	public function editar($id_pregunta,$pregunta)
	{
		$sql="UPDATE tbl_preguntas SET pregunta='$pregunta' WHERE id_pregunta='$id_pregunta'";

 			//Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','1',(select now()),'Actualizar','Editó una pregunta','$usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora);	



		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar preguntas
	public function desactivar($id_pregunta)
	{
		$sql="UPDATE tbl_preguntas SET estado='0' WHERE id_pregunta='$id_pregunta'";


		    //Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','1',(select now()),'Actualizar','Desactivó una pregunta',' $usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora);	

		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar preguntas
	public function activar($id_pregunta)
	{
		$sql="UPDATE tbl_preguntas SET estado ='1' WHERE id_pregunta='$id_pregunta'";

		  //Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','1',(select now()),'Actualizar','Activó una pregunta',' $usuario1',(select now()),'','')";
			ejecutarConsulta($sql_bitacora);	

		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_pregunta)
	{
		$sql="SELECT * FROM tbl_preguntas WHERE id_pregunta='$id_pregunta'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM tbl_preguntas";
		return ejecutarConsulta($sql);		
	}

	public function select()
	{
		$sql="SELECT * FROM tbl_preguntas where estado=1";
		return ejecutarConsulta($sql);		
	}


}

?>