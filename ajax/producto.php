<?php 
session_start(); 

include '../config/conexion.php';
$idobjeto = $_SESSION["objeto"];
$rol = $_SESSION['id_rol'];

$sql = "SELECT * from tbl_permisos WHERE id_objeto = '$idobjeto' and id_rol = '$rol' and permiso_actualizacion = 1";
$stmt = mysqli_query($conexion,$sql);
if(mysqli_num_rows($stmt)>0){
  $permisoact = true;
}else{
  $permisoact = false;
}


require_once "../modelos/Producto.php";

$producto=new Producto();

$id_producto=isset($_POST["id_producto"])? limpiarCadena($_POST["id_producto"]):"";
$nombreproducto=isset($_POST["nombreproducto"])? limpiarCadena($_POST["nombreproducto"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
	
		if (empty($id_producto))
		{
				$sql= "SELECT nombre_producto from tbl_productos where nombre_producto ='$nombreproducto'";
		    	$result =mysqli_query($conexion,$sql);

		      if (mysqli_num_rows($result)>0)
		 		{
		 		    echo  "Este producto ya se encuentra registrado";

				return;
				}
					$rspta=$producto->insertar($nombreproducto);
					//echo $rspta ? "Producto registrado" : "Producto no se pudo registrar";
					echo $rspta ? "¡El producto se ha ingresado con éxito!" : "El producto no se pudo registrar";
				
		}
		else 
		{
			$rspta=$producto->editar($id_producto,$nombreproducto);
			echo $rspta ? "¡El producto ha sido actualizado!" : "El producto no se pudo actualizar";
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
	$perm = $permisoact==false ? 'disabled' : '';
		$rspta=$producto->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				//"0"=>$reg->id_producto,
 				
 				"0"=>'<button class="btn btn-warning" '.$perm.' onclick="mostrar('.$reg->id_producto.')"><i class="fas fa-user-edit"></i></button>',
 					
 				"1"=>'' . $reg->nombre_producto . ''
 				
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