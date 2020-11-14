<?php
//ojo
session_start(); 
require_once "../modelos/UsuarioEscritorio.php";

$usuarioescritorio = new UsuarioEscritorio();

$id_usuario2=isset($_POST["id_usuario2"])? limpiarCadena($_POST["id_usuario2"]):"";
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


	   if (empty($id_usuario2)){

	   	/*

	   	$correo_electronico1=$_SESSION['correo_electronico'];

	   	$sql1= "Select correo_electronico from tbl_usuarios where correo_electronico <>'$correo_electronico1'";
    	$result =mysqli_query($conexion,$sql1);

      if (mysqli_num_rows($result)>0)
 		{
		//echo "El usuario y/o correo electrónico ingresado ya se encuentra en uso. Inténtelo de nuevo";
 		    echo 
           "El correo electrónico ingresado ya se encuentra en uso. Inténtelo de nuevo.";

		return;

   		}*/	

			$rspta=$usuarioescritorio->editar($id_usuario2,$nombre_usuario,$contrasena,$imagen,$correo_electronico);
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		} else{	
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		}
	break;

	case 'mostrar':
		$rspta=$usuarioescritorio->mostrar($id_usuario2);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listarEscritorio':
		$rspta=$usuarioescritorio->listar();

 		//Vamos a declarar un array


 		$data= Array();
 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_usuario.')"><i class="fas fa-user-edit"></i></button>',
 				"1"=>$reg->nombre_usuario,
 				"2"=>"<img src='../files/usuarios/".$reg->imagen."' height='50px' width='50px'>",
 				"3"=>$reg->correo_electronico,
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

}
?>