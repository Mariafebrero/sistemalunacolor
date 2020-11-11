<?php 
require_once "../modelos/Rol.php";

$roles = new Rol();

$id_rol=isset($_POST["id_rol"])? limpiarCadena($_POST["id_rol"]):"";
$rol=isset($_POST["rol"])? limpiarCadena($_POST["rol"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($id_rol)){
			$rspta=$roles->insertar($rol,$descripcion);
			echo $rspta ? "Rol registrado" : "Rol no se pudo registrar";
		}
		else {
			$rspta=$roles->editar($id_rol,$rol,$descripcion);
			echo $rspta ? "Rol no se pudo actualizar" : "Rol actualizado";
		}
	break;

	case 'desactivar':
		$rspta=$roles->desactivar($id_rol);
 		echo $rspta ? "Rol Desactivado" : "Rol no se puede desactivar";
	break;

	case 'activar':
		$rspta=$roles->activar($id_rol);
 		echo $rspta ? "Rol activado" : "Rol no se puede activar";
	break;

	case 'mostrar':
		$rspta=$roles->mostrar($id_rol);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$roles->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-warning" onclick="mostrar('.$reg->id_rol.')"><i class="fas fa-user-edit"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->id_rol.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->id_rol.')"><i class="fas fa-user-edit"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->id_rol.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->rol,
 				"2"=>$reg->descripcion,
 				"3"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
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
}
?>