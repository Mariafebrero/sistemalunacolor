
<?php
session_start(); 


include '../config/conexion.php';
$idobjeto = $_SESSION["objeto"];
$rol = $_SESSION['id_rol'];

$sql = "SELECT * from tbl_permisos WHERE id_objeto = '$idobjeto' and id_rol = '$rol' and permiso_actualizacion = 1";
$stmt = mysqli_query($conexion,$sql);
if(mysqli_num_rows($stmt)>0){
  $permisoact = true;
}else{
  $permisoact = false;
}

$sql1 = "SELECT * from tbl_permisos WHERE id_objeto = '$idobjeto' and id_rol = '$rol' and permiso_eliminacion = 1";
$stmtt = mysqli_query($conexion,$sql1);
if(mysqli_num_rows($stmtt)>0){
  $permisoeli = true;
}else{
  $permisoeli = false;
}
 



require_once "../modelos/Usuario.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../public/phpmailer/vendor/autoload.php';

$usuarios=new Usuario();
$id_usuario=isset($_POST["id_usuario"])? limpiarCadena($_POST["id_usuario"]):"";
$id_rol=isset($_POST["id_rol"])? limpiarCadena($_POST["id_rol"]):"";
$usuario=isset($_POST["usuario"])? limpiarCadena($_POST["usuario"]):"";
$nombre_usuario=isset($_POST["nombre_usuario"])? limpiarCadena($_POST["nombre_usuario"]):"";
$contrasena=isset($_POST["confirmar_contrasena"])? limpiarCadena($_POST["confirmar_contrasena"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$correo_electronico=isset($_POST["correo_electronico"])? limpiarCadena($_POST["correo_electronico"]):"";
$id_estado_usuario=isset($_POST["id_estado_usuario"])? limpiarCadena($_POST["id_estado_usuario"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':

		if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["imagen"]["name"]);
			if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
			{
				$imagen = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/usuarios/" . $imagen);
			}
		}
		//Hash SHA256 en la contraseña
		//$clavehash=hash("SHA256",$contrasena);

		if (empty($id_usuario)){

		$sql1= "Select usuario,correo_electronico from tbl_usuarios where usuario ='$usuario' or correo_electronico ='$correo_electronico'";
    	$result =mysqli_query($conexion,$sql1);

      if (mysqli_num_rows($result)>0)
 		{
		//echo "El usuario y/o correo electrónico ingresado ya se encuentra en uso. Inténtelo de nuevo";
 		    echo 
           "El usuario y/o correo electrónico ingresado ya se encuentra en uso. Inténtelo de nuevo.";

		return;

   		}	
			$rspta=$usuarios->insertar($id_rol,$usuario,$nombre_usuario,$contrasena,$imagen,$correo_electronico,$id_estado_usuario);

//--------------------------- Proceso que envía correos INICIO--------------------------------
     
    $sql= "SELECT * from tbl_usuarios where (usuario=\"$_POST[usuario]\") ";
						  ejecutarConsulta($sql);
							$fechaI =NULL;
							$fechaF =NULL;
						 
				           while ($r=ejecutarConsulta($sql)->fetch_array()) 
							{
								$user_id=$r["id_usuario"];
								$fechaI = $r["fecha_creacion"];
								$fechaF = $r["fecha_vencimiento"];
								break;
							}
							
	 $sql= "SELECT valor from tbl_parametros WHERE id_parametro = 17 ";
          
     ejecutarConsulta($sql);

     while ($r=ejecutarConsulta($sql)->fetch_array())

      {
        $Correo_host=$r["valor"];
        break;
      } 

    $sql= "SELECT valor from tbl_parametros WHERE id_parametro = 18 ";
          
    ejecutarConsulta($sql);

     while ($r=ejecutarConsulta($sql)->fetch_array())

      {
        $Correo_username=$r["valor"];
        break;
      }

      $sql= "SELECT valor from tbl_parametros WHERE id_parametro = 19 ";
          
    ejecutarConsulta($sql);

     while ($r=ejecutarConsulta($sql)->fetch_array())

      {
        $Correo_password=$r["valor"];
        break;
      }
    $sql= "SELECT valor from tbl_parametros WHERE id_parametro = 20 ";
          
    ejecutarConsulta($sql);

     while ($r=ejecutarConsulta($sql)->fetch_array()) 

      {
        $Correo_smtpsecure=$r["valor"];
        break;
      }
    $sql= "SELECT valor from tbl_parametros WHERE id_parametro = 21 ";
          
    ejecutarConsulta($sql);

     while ($r=ejecutarConsulta($sql)->fetch_array())

      {
        $Correo_port=$r["valor"];
        break;
      }

    $sql= "SELECT valor from tbl_parametros WHERE id_parametro = 22 ";
          
   ejecutarConsulta($sql);

     while ($r=ejecutarConsulta($sql)->fetch_array())

      {
        $Correo_nombrefrom=$r["valor"];
        break;
      }

   // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = $Correo_host;                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $Correo_username;                     // SMTP username
    $mail->Password   = $Correo_password;                               // SMTP password*
    $mail->SMTPSecure = $Correo_smtpsecure;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;
    $mail->SMTPOptions = array(
        'ssl' => array
          (
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
          )
        );                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($Correo_username, $Correo_nombrefrom);
    $mail->addAddress($correo_electronico);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    $Body = "  <center> <h1 > ¡Gracias por registrarte " . $nombre_usuario . "!". " </h1> </center>
 <center>     
<tr> 
<td width='170' height='170' style='border:1px solid #df203b; border-right: none; border-left: none;' align='right' valign='top'>
<a href='https://www.facebook.com/luna.color.imprenta/' target='_blank'><img src='https://scontent.ftgu1-2.fna.fbcdn.net/v/t1.0-9/56664589_651473938616958_3796671250516934656_o.jpg?_nc_cat=109&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeHWhBDah6aUVxioIXiSBgaNbjrlQYI0KPtuOuVBgjQo-_rX40eteDVsewDthEeNFLQ5dJJZ7RMTR85stIptIO1l&_nc_ohc=KY9w-1v88WoAX8WGeOf&_nc_ht=scontent.ftgu1-2.fna&oh=cbb9cb6a95ec907ba459c390738fa8ae&oe=5FC411B0' width='170' height='180'
style='padding-top:15px;'></a>
</td>
<td width='430' height='170' style='padding-left:25px; font-size:13px; border:1px solid #df203b; border-left: none; border-right: none; line-height:16px;' valign='bottom'>
<p style='font-size:18px;'><b>Te damos la bienvenida al Sistema Luna Color</b></p>
<p><b>". 

         "<br>".
         "La informaci&oacute;n de tu cuenta es: ".
         "<br>". "<b>".
         "Fecha de creaci&oacute;n: </b>" . $fechaI .
         "<br>". "<b>".
         "Fecha de vencimiento: </b>" . $fechaF .
         "<br>". "<b>".
         "Nombre de usuario: </b>" . $usuario.
         "<br>". "<b>".
         "Contrase&ntilde;a: </b>" . $contrasena . "
</b></p>


</td>
</tr> </center>
</table> ";   
    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $subject ='Creación de cuenta';
    $subject = utf8_decode($subject);
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $Body;
    $mail->AltBody = strip_tags($Body);

    $mail->send();
    
    } 
catch (Exception $e) 
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    //echo"<script type='text/javascript'>    
      //swal('ERROR: No se pudo enviar el correo, por favor inténtelo de nuevo o contacte a su soporte técnico.', '', 'error');
        //</script>";
}
//--------------------------- Proceso que envía correos FIN--------------------------------        
     	  
			echo $rspta ? "¡Usuario registrado con éxito! Se ha enviado un correo con sus datos" : "No se pudieron registrar todos los datos del usuario";

		}
		else {

			//,$_POST['permiso']

			$rspta=$usuarios->editar($id_usuario,$id_rol,$usuario,$nombre_usuario,$contrasena,$imagen,$correo_electronico,$id_estado_usuario);
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		}
	break;

	case 'mostrar':
		$rspta=$usuarios->mostrar($id_usuario);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'eliminar':
		$rspta=$usuarios->eliminar($id_usuario);
 		echo $rspta ? "El usuario fue eliminado" : "El usuario no se pudo eliminar";
	break;


	case 'listar':
	
	   $perm = $permisoact==false ? 'disabled' : '';
	   $permeli = $permisoeli==false ? 'disabled' : '';
		$rspta=$usuarios->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" '.$perm.'  onclick="mostrar('.$reg->id_usuario.')"><i class="fas fa-user-edit"></i></button>'.
 					'<button class="btn btn-danger" '.$permeli.' onclick="eliminar('.$reg->id_usuario.')"><i class="fas fa-trash"></i></button>',
 				"1"=>$reg->rol,
 				"2"=>$reg->usuario,
 				"3"=>$reg->nombre_usuario,
 				"4"=>"<img src='../files/usuarios/".$reg->imagen."'  height='50px' width='50px'>",
 				"5"=>$reg->correo_electronico,
 				"6"=>$reg->descripcion
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

	case "selectRol":
		require_once "../modelos/Rol.php";
		$roles = new Rol();

		$rspta = $roles->select();

		$vuelta=null;
		while ($reg = $rspta->fetch_object())
				{
					$vuelta=$vuelta+1;
					
					if ($vuelta==1) {
						echo '<option value=' . $reg->id_rol . 'selected>' . $reg->rol . '</option>';
					}else{
						echo '<option value=' . $reg->id_rol . '>' . $reg->rol . '</option>';
					}
					
				}
	break;

	

	case "selectEstadoUsuario":
		require_once "../modelos/EstadoUsuario.php";
		$estado_usuarios = new EstadoUsuario();

		$rspta = $estado_usuarios->select();

		$vuelta=null;
		while ($reg = $rspta->fetch_object())
				{
					$vuelta=$vuelta+1;
					if ($vuelta==3) {

						echo '<option value=' . $reg->id_estado_usuario . ' selected>' . $reg->descripcion . '</option>';
					}else{
						echo '<option value=' . $reg->id_estado_usuario . '>' . $reg->descripcion . '</option>';
					}
					
				}
	break;

	/*
	case 'permisos':
		//Obtenemos todos los permisos de la tabla permisos
		require_once "../modelos/Permiso.php";
		$permiso = new Permiso();
		$rspta = $permiso->listar();

		//Obtener los permisos asignados al usuario
		$id=$_GET['id'];
		$marcados = $usuarios->listarmarcados($id);
		//Declaramos el array para almacenar todos los permisos marcados
		$valores=array();

		//Almacenar los permisos asignados al usuario en el array
		while ($per = $marcados->fetch_object())
			{
				array_push($valores, $per->idpermiso);
			}

		//Mostramos la lista de permisos en la vista y si están o no marcados
		while ($reg = $rspta->fetch_object())
				{
					$sw=in_array($reg->idpermiso,$valores)?'checked':'';
					echo '<li> <input type="checkbox" '.$sw.'  name="permiso[]" value="'.$reg->idpermiso.'">'.$reg->nombre.'</li>';
				}
	break;
	*/


	case 'verificar':
		$usuariolog=$_POST['usuariolog'];
	    $contrasenalog=$_POST['contrasenalog'];

	    //Hash SHA256 en la contraseña
		$clavehash=hash("SHA256",$contrasenalog);

		$rspta=$usuarios->verificar($usuariolog,$clavehash);

		$fetch=$rspta->fetch_object();

		if (isset($fetch))

	    {
	    	/*$rspta=$usuarios->verificar_ingreso();
		   // $fetchh=$rspta->fetch_object();
		    

		    if(mysqli_num_rows($rspta)>0){
          echo json_encode(array('success'=> 1));
          return;
      }else{
        echo json_encode(array('success'=> 0));
        return;
      }*/

		


	        //Declaramos las variables de sesión
	        $_SESSION['id_usuario']=$fetch->id_usuario;
	        $_SESSION['nombre_usuario']=$fetch->nombre_usuario;
	        $_SESSION['imagen']=$fetch->imagen;
	        $_SESSION['usuario']=$fetch->usuario;

	         //Obtenemos los permisos del usuario
	    	$marcados = $usuarios->listarmarcados($fetch->id_usuario);

	    	//Declaramos el array para almacenar todos los permisos marcados
			$valores=array();

			//Almacenamos los permisos marcados en el array
			while ($per = $marcados->fetch_object())
				{
					array_push($valores, $per->idpermiso);

				}

			//Determinamos los accesos del usuario
			in_array(1,$valores)?$_SESSION['Escritorio']=1:$_SESSION['Escritorio']=0;
			in_array(2,$valores)?$_SESSION['Cliente']=1:$_SESSION['Cliente']=0;
			in_array(3,$valores)?$_SESSION['Cotizacion']=1:$_SESSION['Cotizacion']=0;
			in_array(4,$valores)?$_SESSION['Pedido']=1:$_SESSION['Pedido']=0;
			in_array(5,$valores)?$_SESSION['Factura']=1:$_SESSION['Factura']=0;
			in_array(6,$valores)?$_SESSION['Inventario']=1:$_SESSION['Inventario']=0;
			in_array(7,$valores)?$_SESSION['Compras']=1:$_SESSION['Compras']=0;
			in_array(8,$valores)?$_SESSION['Usuario']=1:$_SESSION['Usuario']=0;
			in_array(9,$valores)?$_SESSION['Reporte']=1:$_SESSION['Reporte']=0;
			in_array(10,$valores)?$_SESSION['Seguridad']=1:$_SESSION['Seguridad']=0;

	    }

	    $id_usuario1=$_SESSION['id_usuario'];
  		$usuario1=$_SESSION['usuario']; 
  		//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
 		$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion,modificado_por,fecha_modificacion) 
      	VALUES('$id_usuario1','1',(select now()),'Entrada','Entró al Sistema','$usuario1',(select now()),'','')";
      	ejecutarConsulta($sql_bitacora);
	    echo json_encode($fetch);

	break;

	case 'salir':

	$id_usuario1=$_SESSION['id_usuario'];
	$usuario1=$_SESSION['usuario']; 

	$sql="UPDATE tbl_usuarios SET fecha_ultima_conexion = (select now()) WHERE id_usuario='$id_usuario1'";

	 
      //Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
      $sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
      VALUES('$id_usuario1','1',(select now()),'Salida','Salió del sistema','$usuario1',(select now()))";
      ejecutarConsulta($sql_bitacora);
      
		//Limpiamos las variables de sesión   
        session_unset();
        //Destruìmos la sesión
        session_destroy();
        //Redireccionamos al login
        header("Location: ../index.html");

	break;
}
?>
