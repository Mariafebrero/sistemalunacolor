<?php 
require_once "../modelos/Pregunta.php";

$preguntas = new Pregunta();

$id_pregunta=isset($_POST["id_pregunta"])? limpiarCadena($_POST["id_pregunta"]):"";
$pregunta=isset($_POST["pregunta"])? limpiarCadena($_POST["pregunta"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($id_pregunta)){
			$rspta=$preguntas->insertar($pregunta);
			echo $rspta ? "Pregunta registrada" : "Pregunta no se pudo registrar";
		}
		else {
			$rspta=$preguntas->editar($id_pregunta,$pregunta);
			echo $rspta ? "Pregunta actualizada" : "Pregunta no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$preguntas->desactivar($id_pregunta);
 		echo $rspta ? "Pregunta Desactivada" : "Pregunta no se puede desactivar";
	break;

	case 'activar':
		$rspta=$preguntas->activar($id_pregunta);
 		echo $rspta ? "Pregunta activada" : "Pregunta no se puede activar";
	break;

	case 'mostrar':
		$rspta=$preguntas->mostrar($id_pregunta);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case "selectPregunta":
		
	
		$rspta = $preguntas->select();

		while ($reg = $rspta->fetch_object())
				{
					echo '<option value=' . $reg->id_pregunta . '>' . $reg->pregunta . '</option>';
				}
	break;

	case 'listar':
		$rspta=$preguntas->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-warning" onclick="mostrar('.$reg->id_pregunta.')"><i class="fas fa-user-edit"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->id_pregunta.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->id_pregunta.')"><i class="fas fa-user-edit"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->id_pregunta.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->pregunta,
 				"2"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
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