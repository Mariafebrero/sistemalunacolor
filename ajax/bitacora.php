<?php 
//require_once "../modelos/Usuario.php";
require_once "../modelos/Bitacora.php";

$bitacora = new Bitacora();

$id_bicora=isset($_POST["id_bicora"])? limpiarCadena($_POST["id_bicora"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";
$id_usuario=isset($_POST["id_usuario"])? limpiarCadena($_POST["id_usuario"]):"";
$id_objeto=isset($_POST["id_objeto"])? limpiarCadena($_POST["id_objeto"]):"";
$objeto=isset($_POST["objeto"])? limpiarCadena($_POST["objeto"]):"";
$descripcion1=isset($_POST["descripcion1"])? limpiarCadena($_POST["descripcion1"]):"";
$accion=isset($_POST["accion"])? limpiarCadena($_POST["accion"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";
$creado_por=isset($_POST["creado_por"])? limpiarCadena($_POST["creado_por"]):"";
$fecha_creacion=isset($_POST["fecha_creacion"])? limpiarCadena($_POST["fecha_creacion"]):"";
$modificado_por=isset($_POST["modificado_por"])? limpiarCadena($_POST["modificado_por"]):"";
$fecha_modificacion=isset($_POST["fecha_modificacion"])? limpiarCadena($_POST["fecha_modificacion"]):"";


switch ($_GET["op"]){

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
 				"4"=>$reg->objeto,
 				"5"=>$reg->descripcion1,
 				"6"=>$reg->accion,
 				"7"=>$reg->descripcion,
 				"8"=>$reg->creado_por,
 				"9"=>$reg->fecha_creacion,
 				"10"=>$reg->modificado_por,
 				"11"=>$reg->fecha_modificacion,
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