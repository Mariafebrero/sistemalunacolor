<?php
session_start(); 
require_once "../modelos/Usuario.php";

$usuarios=new Usuario();


$id_usuario=isset($_POST["id_usuario"])? limpiarCadena($_POST["id_usuario"]):"";
$id_rol=isset($_POST["id_rol"])? limpiarCadena($_POST["id_rol"]):"";
$usuario=isset($_POST["usuario"])? limpiarCadena($_POST["usuario"]):"";
$nombre_usuario=isset($_POST["nombre_usuario"])? limpiarCadena($_POST["nombre_usuario"]):"";
$contrasena=isset($_POST["contrasena"])? limpiarCadena($_POST["contrasena"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$correo_electronico=isset($_POST["correo_electronico"])? limpiarCadena($_POST["correo_electronico"]):"";





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

		$sql1= "Select usuario,contrasena,correo_electronico from tbl_usuarios where usuario ='$usuario' or correo_electronico ='$correo_electronico'";
    	 $result =mysqli_query($conexion,$sql1);

      if (mysqli_num_rows($result)>0)
 	{
		echo '<script>swal({
  			title: "",
  			text: "El usuario y correo ya existen",
  			icon: "warning",
  			button: "OK",
			});</script>';
		return;

    }
		
    
			$rspta=$usuarios->insertar($id_rol,$usuario,$nombre_usuario,$contrasena,$imagen,$correo_electronico,$_POST['permiso'],$id_usuario);
			echo $rspta ? "Usuario registrado" : "No se pudieron registrar todos los datos del usuario";
		}

		else 
		{
    	
    	$sql2="Select contrasena from tbl_usuarios where id_usuario ='$id_usuario'";
    	$result1 = mysqli_query($sql2);
    	if (mysqli_num_rows($result1)>0)
 				{
			echo '<script>swal({
  			title: "",
  			text: "Esta contrasena ya ha sido utilizada",
  			icon: "warning",
  			button: "OK",
			});</script>';
				return;
    			}

			$rspta=$usuarios->editar($id_usuario,$id_rol,$usuario,$nombre_usuario,$contrasena,$imagen,$correo_electronico,$_POST['permiso']);
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$usuarios->desactivar($id_usuario);
 		echo $rspta ? "Usuario Desactivado" : "Usuario no se puede desactivar";
	break;

	case 'activar':
		$rspta=$usuarios->activar($id_usuario);
 		echo $rspta ? "Usuario activado" : "Usuario no se puede activar";
	break;

	case 'mostrar':
		$rspta=$usuarios->mostrar($id_usuario);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$usuarios->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->id_usuario.')"><i class="fas fa-user-edit"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->id_usuario.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->id_usuario.')"><i class="fas fa-user-edit"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->id_usuario.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->rol,
 				"2"=>$reg->usuario,
 				"3"=>$reg->nombre_usuario,
 				"4"=>$reg->contrasena,
 				"5"=>"<img src='../files/usuarios/".$reg->imagen."' height='50px' width='50px'>",
 				"6"=>$reg->correo_electronico,
 				"7"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
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

		while ($reg = $rspta->fetch_object())
				{
					echo '<option value=' . $reg->id_rol . '>' . $reg->rol . '</option>';
				}
	break;


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


	case 'verificar':
		$usuariolog=$_POST['usuariolog'];
	    $contrasenalog=$_POST['contrasenalog'];

	    //Hash SHA256 en la contraseña
		//$clavehash=hash("SHA256",$contrasenalog);

		$rspta=$usuarios->verificar($usuariolog, $contrasenalog);

		$fetch=$rspta->fetch_object();

		if (isset($fetch))
	    {
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
      //Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
      $sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion,modificado_por,fecha_modificacion) 
      VALUES('$id_usuario1','1',(select now()),'Salida','Salió del sistema','$usuario1',(select now()),'','')";
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