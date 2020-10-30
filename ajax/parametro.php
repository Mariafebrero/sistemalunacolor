<?php 
require_once "../modelos/Parametro.php";

$parametro = new Parametro();


$id_parametro=isset($_POST["id_parametro"])? limpiarCadena($_POST["id_parametro"]):"";
$valor=isset($_POST["valor"])? limpiarCadena($_POST["valor"]):"";

switch ($_GET["op"]){

	case 'guardaryeditar':

	if (empty($id_parametro)){
	
			echo $rspta ? "Parametro actualizado" : "Parametro no se pudo actualizar";
		} else{	
				$rspta=$parametro->editar($id_parametro,$valor);
				echo $rspta ? "Parametro actualizado" : "Parametro no se pudo actualizar";
		  	
		}
	break;

	case 'mostrar':
		$rspta=$parametro->mostrar($id_parametro);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;
	
	case 'listar':
		$rspta=$parametro->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_parametro.')"><i class="fas fa-edit"></i></button>',
 				"1"=>$reg->parametro,
 				"2"=>$reg->valor
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