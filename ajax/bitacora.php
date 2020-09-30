<?php 
require_once "../modelos/Usuario.php";
require_once "../modelos/Bitacora.php";

$bitacora = new Bitacora();

$id_bicora=isset($_POST["id_bicora"])? limpiarCadena($_POST["id_bicora"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";
$id_usuario=isset($_POST["id_usuario"])? limpiarCadena($_POST["id_usuario"]):"";
$id_objeto=isset($_POST["id_objeto"])? limpiarCadena($_POST["id_objeto"]):"";
$accion=isset($_POST["accion"])? limpiarCadena($_POST["accion"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";


switch ($_GET["op"]){

	case 'guardaryeditar':
		if (empty($id_bicora)){
			$rspta=$bitacora->insertar($fecha,$id_usuario,$id_objeto,$accion,$descripcion);
			echo $rspta ? "Pregunta registrada" : "Pregunta no se pudo registrar";
		}

		else {
			$rspta=$bitacora->editar($fecha,$id_usuario,$id_objeto,$accion,$descripcion);
			echo $rspta ? "Pregunta actualizada" : "Pregunta no se pudo actualizar";
		}
	
	case 'mostrar':
		$rspta=$bitacora->mostrar($id_bicora);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$bitacora->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>$reg->id_bitacora,
 				"1"=>$reg->fecha,
 				"2"=>$reg->id_usuario,
 				"3"=>$reg->id_objeto,
 				"4"=>$reg->accion,
 				"5"=>$reg->descripcion,
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