<?php 
require_once "../modelos/Cliente.php";
//Aqui se codifica toda la pantalla

//----------------------- Datos para cliente natural inicio---------------------------------------
$Cliente=new Cliente();

$tipo_cliente=isset($_POST["tipo_cliente"])? limpiarCadena($_POST["tipo_cliente"]):"";
$id_cliente=isset($_POST["id_cliente"])? limpiarCadena($_POST["id_cliente"]):"";
$nombre_cliente=isset($_POST["nombre_cliente"])? limpiarCadena($_POST["nombre_cliente"]):"";

$contacto=isset($_POST["contacto"])? limpiarCadena($_POST["contacto"]):"N/A";

$cargo=isset($_POST["cargo"])? limpiarCadena($_POST["cargo"]):"N/A";
$rtn=isset($_POST["rtn"])? limpiarCadena($_POST["rtn"]):"N/A";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"N/A";
$correo_electronico=isset($_POST["correo_electronico"])? limpiarCadena($_POST["correo_electronico"]):"N/A";
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"N/A";
$observacion=isset($_POST["observacion"])? limpiarCadena($_POST["observacion"]):"N/A";


switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($id_cliente))
		{	
				$sql= "SELECT nombre_cliente from tbl_clientes where nombre_cliente ='$nombre_cliente'";
		    	$result =mysqli_query($conexion,$sql);

		      if (mysqli_num_rows($result)>0)
		 		{
		 		    echo  "Este cliente ya se encuentra registrado";
				return;
				}

				$sql= "SELECT rtn from tbl_clientes where rtn ='$rtn' and rtn <> 'N/A' ";
		    	$result =mysqli_query($conexion,$sql);

		      if (mysqli_num_rows($result)>0)
		 		{
		 		    echo  "Este RTN ya ha sido registrado";
				return;
				}
			
				$rspta=$Cliente->insertar($tipo_cliente,$nombre_cliente,$contacto,$telefono,$cargo,$rtn,$correo_electronico,$direccion,$observacion);
				echo $rspta ? "¡El cliente ha sido registrado con éxito!" : "El cliente no se pudo registrar";
			
		}
		else {
			$rspta=$Cliente->editar($id_cliente,$tipo_cliente,$nombre_cliente,$contacto,$telefono,$cargo,$rtn,$correo_electronico,$direccion,$observacion);
			echo $rspta ? "¡El cliente ha sido actualizado con éxito!" : "El cliente no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$Cliente->eliminar($id_cliente);
 		echo $rspta ? "¡El cliente ha sido eliminado con éxito!" : "El cliente no puede ser eliminado";
	break;

	case 'mostrar':
		$rspta=$Cliente->mostrar($id_cliente);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listarc':
		$rspta=$Cliente->listarc();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button  class="btn btn-warning btn-sm" onclick="mostrar('.$reg->id_cliente.')"><i class="fa fa-pen"></i></button>'. 
 					' <button class="btn btn-danger btn-sm" onclick="eliminar('.$reg->id_cliente.')"><i class="fa fa-trash"></i></button>',
 				"1"=>$reg->tipo_cliente,
 				"2"=>$reg->nombre_cliente,
 				"3"=>$reg->contacto,
 				"4"=>$reg->telefono,
 				"5"=>$reg->cargo,
 				"6"=>$reg->rtn,
 				"7"=>$reg->correo_electronico,
 				"8"=>$reg->direccion,
 				"9"=>$reg->observacion
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