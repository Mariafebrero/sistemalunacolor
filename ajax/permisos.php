<?php 
session_start();

require_once "../modelos/Permisos.php";

$permisos = new Permisos();


$id_permiso=isset($_POST["id_permiso"])? limpiarCadena($_POST["id_permiso"]):"";
$id_rol=isset($_POST["id_rol"])? limpiarCadena($_POST["id_rol"]):"";
$id_objeto=isset($_POST["id_objeto"])? limpiarCadena($_POST["id_objeto"]):"";
$permiso_insercion=isset($_POST["permiso_insercion"])? limpiarCadena($_POST["permiso_insercion"]):"";
$permiso_eliminacion=isset($_POST["permiso_eliminacion"])? limpiarCadena($_POST["permiso_eliminacion"]):"";
$permiso_actualizacion=isset($_POST["permiso_actualizacion"])? limpiarCadena($_POST["permiso_actualizacion"]):"";
$permiso_consultar=isset($_POST["permiso_consultar"])? limpiarCadena($_POST["permiso_consultar"]):"";
$permiso_menu=isset($_POST["permiso_menu"])? limpiarCadena($_POST["permiso_menu"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
	if (empty($id_permiso)){
	$rspta=$permisos->insertar($id_rol,$id_objeto,$permiso_insercion,$permiso_eliminacion,$permiso_actualizacion,$permiso_consultar,$permiso_menu);
		echo $rspta ? "Permiso registrado" : "Permiso no se pudo registrar";
} else{	
	$rspta=$permisos->editar($id_permiso,$id_rol,$id_objeto,$permiso_insercion,$permiso_eliminacion,$permiso_actualizacion,$permiso_consultar,$permiso_menu);
		echo $rspta ? "Permiso actualizado" : "Permiso no se pudo actualizar";
		  	
		}
	break;


	case 'selectRol':
		require_once "../modelos/Rol.php";
		$roles = new Rol();

		$rspta = $roles->select();

		while ($reg = $rspta->fetch_object())
				{
				echo '<option value=' . $reg->id_rol . '>' . $reg->rol . '</option>';
				}
	break;

	case 'selectRol2':
		require_once "../modelos/Rol.php";
		$roles = new Rol();

		$rspta = $roles->select2();

		while ($reg = $rspta->fetch_object())
				{
				echo '<option value=' . $reg->id_rol . '>' . $reg->rol . '</option>';
				}
	break;

	case 'selectObjeto':
		require_once "../modelos/Objeto.php";
		$objetos = new Objeto();

		$rspta = $objetos->select();

		while ($reg = $rspta->fetch_object())
				{
				echo '<option value=' . $reg->id_objeto . '>' . $reg->objeto . '</option>';
				}
	break;

	case 'mostrar':
		$rspta=$permisos->mostrar($id_permiso);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;


	case 'listar':

		$id_rol=$_REQUEST["id_rol"];
 		//Vamos a declarar un array

 		$rspta=$permisos->listar($id_rol);
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_permiso.')"><i class="fas fa-edit"></i></button>',
 				"1"=>$reg->id_permiso,
 				"2"=>$reg->rol,
 				"3"=>$reg->id_objeto,
 				"4"=>$reg->objeto,
 				"5"=>$reg->permiso_insercion,
 				"6"=>$reg->permiso_eliminacion,
 				"7"=>$reg->permiso_actualizacion,
 				"8"=>$reg->permiso_consultar,
 				"9"=>$reg->permiso_menu
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