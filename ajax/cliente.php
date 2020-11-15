<?php 
require_once "../modelos/Cliente.php";
//Aqui se codifica toda la pantalla

//----------------------- Datos para cliente natural inicio---------------------------------------
$Cliente=new Cliente();
$id_cliente=isset($_POST["id_cliente"])? limpiarCadena($_POST["id_cliente"]):"";
$id_tipo_cliente=isset($_POST["id_tipo_cliente"])? limpiarCadena($_POST["id_tipo_cliente"]):"";
$nombre_cn=isset($_POST["nombre_cn"])? limpiarCadena($_POST["nombre_cn"]):"";
$fecha_nacimiento=isset($_POST["fecha_nacimiento"])? limpiarCadena($_POST["fecha_nacimiento"]):"1900-01-01";
$nombre_cn=strtoupper($nombre_cn);


$tipo_documento=isset($_POST["tipo_documento"])? limpiarCadena($_POST["tipo_documento"]):"";
$num_documento=isset($_POST["num_documento"])? limpiarCadena($_POST["num_documento"]):"";
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($id_cliente))
		{
			
			$rspta=$Cliente->insertar($id_tipo_cliente,$nombre_cn,$tipo_documento,$num_documento,$direccion,$telefono,$email);
			echo $rspta ? "Cliente registrada" : "Cliente no se pudo registrar";
		}
		else {
			$rspta=$Cliente->editar($id_cliente,$id_tipo_cliente,$nombre_cn,$tipo_documento,$num_documento,$direccion,$telefono,$email);
			echo $rspta ? "Cliente actualizada" : "Cliente no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$Cliente->eliminar($id_cliente);
 		echo $rspta ? "Cliente eliminada" : "Cliente no se puede eliminar";
	break;

	case 'mostrar':
		$rspta=$Cliente->mostrar($id_cliente);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;
/*
	case 'listarp':
		$rspta=$Cliente->listarp();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_cliente.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="eliminar('.$reg->id_cliente.')"><i class="fa fa-trash"></i></button>',
 				"1"=>$reg->tipo,
 				"2"=>$reg->nombre_cliente,
 				"3"=>$reg->tipo_documento,
 				"4"=>$reg->valor,
 				"5"=>$reg->descripcion,
 				"6"=>$reg->contacto
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
*/
	case 'listarc':
		$rspta=$Cliente->listarc();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button  class="btn btn-warning btn-sm" onclick="mostrar('.$reg->id_cliente.')"><i class="fa fa-pen"></i></button>'. 
 					' <button class="btn btn-danger btn-sm" onclick="eliminar('.$reg->id_cliente.')"><i class="fa fa-trash"></i></button>',
 				"1"=>$reg->tipo,
 				"2"=>$reg->nombre_cliente,
 				"3"=>$reg->tipo_documento,
 				"4"=>$reg->valor,
 				"5"=>$reg->descripcion,
 				"6"=>$reg->contacto
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