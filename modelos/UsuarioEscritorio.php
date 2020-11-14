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
	public function editar($id_usuario2,$nombre_usuario,$contrasena,$imagen,$correo_electronico)
	{
		$id_usuario2=$_SESSION['id_usuario'];
		
		$query5 = "select contrasena FROM tbl_usuarios WHERE id_usuario='$id_usuario2'";
		ejecutarConsulta($query5);
			

           while ($tbl_usuarios=ejecutarConsulta($query5)->fetch_array()) 
			{
				$clave=$tbl_usuarios["contrasena"];
				break;
			}


		if ($contrasena==$clave) {
			$sql_contra="UPDATE tbl_usuarios SET contrasena ='$contrasena' WHERE id_usuario='$id_usuario2'";
			ejecutarConsulta($sql_contra);
		}else{

// Método para cifrar
$ciphering = "AES-128-CTR"; 
  
// Uso de OpenSSl para el método de encriptar 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
  
// Valor de inicio para la encriptación
$encryption_iv = '1234567891011121'; 
  
// Llave para la encriptación
$encryption_key = "LunaColor"; 
  
// usar openssl_encrypt() para encriptar
$encryption = openssl_encrypt($contrasena, $ciphering, 
            $encryption_key, $options, $encryption_iv); 



			$sql_contra2="UPDATE tbl_usuarios SET contrasena ='$encryption' WHERE id_usuario='$id_usuario2'";
			ejecutarConsulta($sql_contra2);

			$sql_contra3= "INSERT INTO tbl_hist_contrasena (id_usuario, contrasena) VALUES ((select id_usuario from tbl_usuarios WHERE id_usuario='$id_usuario2'),'$encryption')"; 
			ejecutarConsulta($sql_contra3);
		}






	

		$sql="UPDATE tbl_usuarios SET nombre_usuario='$nombre_usuario',imagen='$imagen',correo_electronico='$correo_electronico' WHERE id_usuario='$id_usuario2'";

		    //Bitacora
			//Incializamos las variables de seccion 
	        $usuario2=$_SESSION['usuario']; 
			//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
			$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
			VALUES('$id_usuario2','1',(select now()),'Actualizó','Editó su usuario','$usuario2',(select now()))";
			ejecutarConsulta($sql_bitacora);	


		return  ejecutarConsulta($sql);


	}


	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_usuario2)

	{   $id_usuario2=$_SESSION['id_usuario'];

		$sql="SELECT * FROM tbl_usuarios WHERE id_usuario='$id_usuario2'";
		return ejecutarConsultaSimpleFila($sql);
	}


// Valor de inicio para la desencriptación
//$decryption_iv = '1234567891011121'; 
  
//  Llave para la desencriptación 
//$decryption_key = "LunaColor"; 
  
// usar openssl_encrypt() para desencriptar 
//$decryption=openssl_decrypt ($encryption, $ciphering,  
//        $decryption_key, $options, $decryption_iv);



	//Implementar un método para listar los registros
	public function listar()

	{
		$id_usuario2=$_SESSION['id_usuario'];
	   

		$sql="SELECT id_usuario,usuario,nombre_usuario,contrasena,imagen,correo_electronico from tbl_usuarios where id_usuario='$id_usuario2'";
		return ejecutarConsulta($sql);		
	}

	
}

?>