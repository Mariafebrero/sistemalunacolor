<?php 
require_once "../modelos/Producto.php";

$compras=new Compras();
$id_usuario=isset($_POST["id_usuario"])? limpiarCadena($_POST["id_usuario"]):"";
$id_compras=isset($_POST["id_compras"])? limpiarCadena($_POST["id_compras"]):"";
$proveedor_compras=isset($_POST["proveedor_compras"])? limpiarCadena($_POST["proveedor_compras"]):"";
$tipo_comprobante=isset($_POST["tipo_comprobante"])? limpiarCadena($_POST["tipo_comprobante"]):"";
$nro_facturac=isset($_POST["nro_facturac"])? limpiarCadena($_POST["nro_facturac"]):"";
$descuento_c=isset($_POST["descuento_c"])? limpiarCadena($_POST["descuento_c"]):"";
$impuesto_c=isset($_POST["impuesto_c"])? limpiarCadena($_POST["impuesto_c"]):"";
$total_c=isset($_POST["total_c"])? limpiarCadena($_POST["total_c"]):"";
$Nombre_pro=isset($_POST["Nombre_pro"])? limpiarCadena($_POST["Nombre_pro"]):"";
$Cantidad_compras=isset($_POST["Cantidad_compras"])? limpiarCadena($_POST["Cantidad_compras"]):"";
$Precio_compras=isset($_POST["Precio_compras"])? limpiarCadena($_POST["Precio_compras"]):"";
$fecha_compra=isset($_POST["fecha_hora"])? limpiarCadena($_POST["fecha_hora"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':
	
		if (empty($id_compras))
		{
				$sql= "SELECT id_compra FROM tbl_compras WHERE nro_factura  ='$nro_factura'";
		    	$result =mysqli_query($conexion,$sql);

		      if (mysqli_num_rows($result)>0)
		 		{
		 		    echo  "Esta Factura ya se encuentra registrado";

				return;
				}
					$rspta=$Compras->insertar($id_usuario,$proveedor_compras,$tipo_comprobante,$nro_facturac,$descuento_c,$impuesto_c,$total_c,$Nombre_pro,$Cantidad_compras,$Precio_compras,$fecha_compra);
					//echo $rspta ? "Producto registrado" : "Producto no se pudo registrar";
					echo $rspta ? "¡La Factura se ha ingresado con éxito!" : "La Factura no se pudo registrar";
				
		}
		else 
		{
			$rspta=$compras->editar($id_compras,$nombreproducto);
			echo $rspta ? "¡El producto ha sido actualizado!" : "El producto no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$Compras->desactivar($id_compras);
 		echo $rspta ? "Producto Desactivado" : "Producto no se puede desactivar";
	break;

	case 'activar':
		$rspta=$Compras->activar($id_compras);
 		echo $rspta ? "Producto activado" : "Producto no se puede activar";
	break;

	case 'mostrar':
		$rspta=$compras->mostrar($id_compras);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$Compras->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				//"0"=>$reg->id_producto,
 				
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_proveedor.')"><i class="fas fa-user-edit"></i></button>',
 					
 				"1"=>'' . $reg->nombre_proveedor . '',
 				"2"=>'' . $reg->descripcion. ''
 				
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

    case 'selectproveedor':
		require_once "../modelos/proveedores.php";
		$proveedores = new proveedores();

		$rspta = $proveedores->select();

		$vuelta=null;
		while ($reg = $rspta->fetch_object())
				{
					$vuelta=$vuelta+1;
					
					if ($vuelta==1) {
						echo '<option value=' . $reg->id_proveedor . 'selected>' . $reg->nombre_proveedor . '</option>';
					}else{
						echo '<option value=' . $reg->id_proveedor . '>' . $reg->nombre_proveedor . '</option>';
					}
					
				}


	break;



}
?>