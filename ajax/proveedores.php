<?php 
require_once "../modelos/proveedores.php";


$proveedores = new proveedores();

$id_proveedor=isset($_POST["id_proveedor"])? limpiarCadena($_POST["id_proveedor"]):"";
$nombre_proveedor=isset($_POST["nombre_proveedor"])? limpiarCadena($_POST["nombre_proveedor"]):"";
$cai_proveedor=isset($_POST["cai_proveedor"])? limpiarCadena($_POST["cai_proveedor"]):"";
$rtn_proveedor=isset($_POST["rtn_proveedor"])? limpiarCadena($_POST["rtn_proveedor"]):"";

$Descripcion_proveedores=isset($_POST["Descripcion_proveedores"])? limpiarCadena($_POST["Descripcion_proveedores"]):"";
$Direccion_proveedores=isset($_POST["Direccion_proveedores"])? limpiarCadena($_POST["Direccion_proveedores"]):"";
$Telefono_proveedores=isset($_POST["Telefono_proveedores"])? limpiarCadena($_POST["Telefono_proveedores"]):"";
$Correo_proveedores=isset($_POST["Correo_proveedores"])? limpiarCadena($_POST["Correo_proveedores"]):"";




switch ($_GET["op"]){
	case 'guardaryeditar':
	    if (empty($id_proveedor)){
			$sql= "SELECT nombre_proveedor from tbl_proveedores where nombre_proveedor ='$nombre_proveedor'";
		    	$result =mysqli_query($conexion,$sql);

		      if (mysqli_num_rows($result)>0)
		 		{
		 		    echo  "Este proveedor ya se encuentra registrado";

				return;
                }
           elseif (empty($nombre_proveedor))
	     
		    echo  "Debe llenar el nombre del proveedor";

		     else


		 $rspta=$proveedores->insertar($nombre_proveedor,$cai_proveedor,$rtn_proveedor,$Descripcion_proveedores,$Telefono_proveedores,
		 	$Direccion_proveedores,$Correo_proveedores);

	
	      echo $rspta ? "Proveedor registrado" : "Proveedor no se pudo registrar";
		
            } 
	else {
			$rspta=$proveedores->editar($id_proveedor,$nombre_proveedor,$Descripcion_proveedores);
			echo $rspta ? "Proveedor no se pudo actualizar" : "Proveedor actualizado";
		}
	
	break;

    case 'eliminar':
		$rspta=$proveedores->eliminar($id_proveedor);

 		echo $rspta ? "El Proveedor fue eliminado" : "El Proveedor no se pudo eliminar";
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
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_proveedor.')"><i class="fas fa-user-edit"></i></button>',
 					
 				"1"=>$reg->nombre_proveedor,
 				"2"=>$reg->CAI,
 				"3"=>$reg->rtn,
 				"4"=>$reg->telefono,
 				"5"=>$reg->correo,
 				"6"=>$reg->direccion,
 				"7"=>$reg->descripcion
 				
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