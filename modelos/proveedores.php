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
	public function insertar($nombre_proveedor,$Descripcion_proveedores,$Direccion_proveedores,$Telefono_proveedores,$Correo_proveedores)

{
	
$sql="INSERT INTO tbl_proveedores (nombre_proveedor,Descripcion)
			VALUES ('$nombre_proveedor','$Descripcion_proveedores')";
return ejecutarConsulta($sql);

/*if(empty($_POST['Correo_proveedores']  and  (empty($_POST['Direccion_proveedores']))));{

 $des = "Telefono";
$valor = $Telefono_proveedores;
}

if(empty($_POST[$Correo_proveedores] and (empty($_POST [$Telefono_proveedores])))); {


$des = "Direccion";
$valor = $Direccion_proveedores;	
}

if(empty($_POST[$Direccion_proveedores] and (empty($_POST[$Telefono_proveedores] )))); {

$des= "Correo Electronico";
$valor = $Correo_proveedores;
}
*/

$sql1="INSERT INTO  tbl_tipo_contacto_proveedores (Descripcion)
			VALUES ('Correo'),
			('Direccion'),
			('Telefono') ";
return ejecutarConsulta($sql1);		


$sql2="INSERT INTO tbl_contactos_proveedores ( id_proveedor , id_tipo_contacto_proveedor, valor)
values((select max(id_proveedor) as id_proveedor from tbl_proveedores),(select max(id_tipo_contacto_proveedor) as id_tipo_contacto_proveedor from tbl_tipo_contacto_proveedores),'$Correo_proveedores'),
((select max(id_proveedor) as id_proveedor from tbl_proveedores),(select max(id_tipo_contacto_proveedor) as id_tipo_contacto_proveedor from tbl_tipo_contacto_proveedores),'$Telefono_proveedores'),
((select max(id_proveedor) as id_proveedor from tbl_proveedores),(select max(id_tipo_contacto_proveedor) as id_tipo_contacto_proveedor from tbl_tipo_contacto_proveedores),'$Direccion_proveedores'))";


  return ejecutarConsulta($sql2);







     
       
    

}
			
	







		

	//Implementamos un método para editar registros
	public function editar($id_proveedor,$nombre_proveedor,$Descripcion_proveedores)
	{
		$sql="UPDATE tbl_proveedores SET nombre_proveedor='$nombre_proveedor', Descripcion='$Descripcion_proveedores' WHERE id_proveedor='$id_proveedor'";


			//Bitacora
			//Incializamos las variables de seccion 
 			$id_usuario1=$_SESSION['id_usuario'];
	        $usuario1=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario1','2',(select now()),'Actualizar','Editó un rol','$usuario1',(select now()))";
			ejecutarConsulta($sql_bitacora);	

		ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_proveedor)
	{
		$sql="SELECT * FROM tbl_proveedores WHERE id_proveedor='$id_proveedor'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listarpr()
	{
		$sql="SELECT * FROM tbl_proveedores ";
		return ejecutarConsulta($sql);		
	}
	public function select()
	{
		$sql="SELECT * from tbl_proveedores";
		return ejecutarConsulta($sql);		
	}
	


}

?>
