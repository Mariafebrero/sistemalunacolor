<?php 
require_once "../modelos/Pedido.php";

$pedido = new Pedido();

/*
$id_pregunta=isset($_POST["id_pregunta"])? limpiarCadena($_POST["id_pregunta"]):"";
*/


switch ($_GET["op"]){

	/*
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

	*/

	case "selectCliente":
		require_once "../modelos/ClientePedido.php";
		$clientepedido = new ClientePedido();

		$rspta = $clientepedido->select();

		$vuelta=null;
		while ($reg = $rspta->fetch_object())
				{
					$vuelta=$vuelta+1;
					
					if ($vuelta==1) {
						echo '<option value=' . $reg->id_cliente . 'selected>' . $reg->nombre_cliente . '</option>';
					}else{
						echo '<option value=' . $reg->id_cliente . '>' . $reg->nombre_cliente . '</option>';
					}
					
				}
	break;

	case "selectProducto":
		require_once "../modelos/PedidoProducto.php";
		$pedidoproducto = new PedidoProducto();

		$rspta = $pedidoproducto->select();

		$vuelta=null;
		while ($reg = $rspta->fetch_object())
				{
					$vuelta=$vuelta+1;
					
					if ($vuelta==1) {
						echo '<option value=' . $reg->id_producto . 'selected>' . $reg->nombre_producto . '</option>';
					}else{
						echo '<option value=' . $reg->id_producto . '>' . $reg->nombre_producto . '</option>';
					}
					
				}
	break;

	case "selectMaterial":
		require_once "../modelos/Material.php";
		$material = new Material();

		$rspta = $material->selectM();

		$vuelta=null;
		while ($reg = $rspta->fetch_object())
				{
					$vuelta=$vuelta+1;
					
					if ($vuelta==1) {
						echo '<option value=' . $reg->id_material . 'selected>' . $reg->descripcion . '</option>';
					}else{
						echo '<option value=' . $reg->id_material . '>' . $reg->descripcion . '</option>';
					}
					
				}
	break;

	case 'listar':

		$fecha_inicio=$_REQUEST["fecha_inicio"];
		$fecha_fin=$_REQUEST["fecha_fin"];
 		//Vamos a declarar un array
 		
		$rspta=$pedido->listar($fecha_inicio,$fecha_fin);
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_pedido.')"><i class="fas fa-edit"></i></button>',
 				"1"=>$reg->id_pedido,
 				"2"=>$reg->nombre_cliente,
 				"3"=>$reg->detalle_de_pedido,
 				"4"=>$reg->fechas,
 				"5"=>$reg->fecha_entrega,
 				"6"=>$reg->descuento,
 				"7"=>$reg->impuesto,
 				"8"=>$reg->total,
 				"9"=>$reg->estado
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