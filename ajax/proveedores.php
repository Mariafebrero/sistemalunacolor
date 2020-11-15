<?php 
require_once "../modelos/proveedores.php";


$proveedores = new proveedores();

$id_proveedor=isset($_POST["id_proveedor"])? limpiarCadena($_POST["id_proveedor"]):"";
$nombre_proveedor=isset($_POST["nombre_proveedor"])? limpiarCadena($_POST["nombre_proveedor"]):"";
$Descripcion_proveedores=isset($_POST["Descripcion_proveedores"])? limpiarCadena($_POST["Descripcion_proveedores"]):"";
$Direccion_proveedores=isset($_POST["Direccion_proveedores"])? limpiarCadena($_POST["Direccion_proveedores"]):"";
$Telefono_proveedores=isset($_POST["Telefono_proveedores"])? limpiarCadena($_POST["Telefono_proveedores"]):"";
$Correo_proveedores=isset($_POST["Correo_proveedores"])? limpiarCadena($_POST["Correo_proveedores"]):"";




switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($id_proveedor)){
		
		$rspta=$proveedores->insertar($nombre_proveedor,$Descripcion_proveedores,$Telefono_proveedores,$Direccion_proveedores,$Correo_proveedores);
			echo $rspta ? "Proveedor registrado" : "Proveedor no se pudo registrar";
		}
		else {
			$rspta=$proveedores->editar($id_proveedor,$nombre_proveedor,$Descripcion_proveedores,$Telefono_proveedores,$Direccion_proveedores,$Correo_proveedores);
			echo $rspta ? "Proveedor no se pudo actualizar" : "Proveedor actualizado";
		}
		
	break;

	case 'mostrar':
		$rspta=$proveedores->mostrar($id_proveedor);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listarpr':
		$rspta=$proveedores->listarpr();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_proveedor.')"><i class="fas fa-user-edit"></i></button>'.
 					' <button class="btn btn-danger" onclick="eliminar('.$reg->id_proveedor.')"><i class="fas fa-trash"></i></button>',
 				"1"=>$reg->nombre_proveedor,
 				"2"=>$reg->Descripcion
 				
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