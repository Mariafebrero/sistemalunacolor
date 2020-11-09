<?php 
require_once "../modelos/Producto.php";

$producto=new Producto();

$id_producto=isset($_POST["id_producto"])? limpiarCadena($_POST["id_producto"]):"";
$id_tipo_producto=isset($_POST["id_tipo_producto"])? limpiarCadena($_POST["id_tipo_producto"]):"";
$nombreproducto=isset($_POST["nombreproducto"])? limpiarCadena($_POST["nombreproducto"]):"no reconoce post";
$estado=isset($_POST["estado"])? limpiarCadena($_POST["estado"]):"";
$cantidad=isset($_POST["cantidad"])? limpiarCadena($_POST["cantidad"]):"";
$precio_unitario=isset($_POST["precio_unitario"])? limpiarCadena($_POST["precio_unitario"]):"";
$total =isset($_POST["total"])? limpiarCadena($_POST["total"]):"";
//$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
	/*

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
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/productos/" . $imagen);
			}
		}
	*/
		if (empty($id_producto))
		{
			$rspta=$producto->insertar($nombreproducto);
			//echo $rspta ? "Producto registrado" : "Producto no se pudo registrar";
			echo $rspta ? "¡El producto se ha ingresado con éxito!" : "Producto no se pudo registrar";
		}
		else 
		{
			$rspta=$producto->editar($id_producto,$id_tipo_producto,$nombre_producto,$estado,$cantidad,$precio_unitario,$total);
			echo $rspta ? "Producto actualizado" : "Producto no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$producto->desactivar($id_producto);
 		echo $rspta ? "Producto Desactivado" : "Producto no se puede desactivar";
	break;

	case 'activar':
		$rspta=$producto->activar($id_producto);
 		echo $rspta ? "Producto activado" : "Producto no se puede activar";
	break;

	case 'mostrar':
		$rspta=$producto->mostrar($id_producto);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$producto->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				//"0"=>$reg->id_producto,
 				
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_producto.')"><i class="fas fa-user-edit"></i></button>'.
 					' <button class="btn btn-danger" onclick="eliminar('.$reg->id_producto.')"><i class="fas fa-trash"></i></button>',
 					
 				//"1"=>'<center>' . $reg->descripcion . '</center>',
 				"1"=>'' . $reg->id_producto . '',
 				"2"=>'' . $reg->nombre_producto . ''
 				/*
 				"3"=>($reg->estado)?'<center><span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span></center>',
 				"4"=>'<center>' . $reg->cantidad . '</center>',
 				"5"=>'<center>' . $reg->precio_unitario . '</center>',
 				"6"=>'<center>' . $reg->total . '</center>'
 				"5"=>"<img src='../files/productos/".$reg->imagen."' height='50px' width='50px' >",
 				"6"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				*/
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