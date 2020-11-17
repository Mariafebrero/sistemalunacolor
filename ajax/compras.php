<?php 
require_once "../modelos/Compras.php";

$compras=new Compras();
$id_proveedor=isset($_POST["id_proveedor"])? limpiarCadena($_POST["id_proveedor"]):"";
$id_compras=isset($_POST["id_compras"])? limpiarCadena($_POST["id_compras"]):"";
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
	$rspta=$compras->insertar($id_proveedor,$tipo_comprobante,$nro_facturac,$descuento_c,$impuesto_c,$total_c,$fecha_compra);
					
	echo $rspta ? "¡La Factura de compra se ha ingresado con éxito!" : "La Factura de compra no se pudo registrar";
				
		}
		
	break;
	case 'mostrar':
		$rspta=$compras->mostrar($id_compras);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$compras->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(	
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_compra.')"><i class="fas fa-user-edit"></i></button>',
 					
 				"1"=> $reg->usuario,
 				"2"=> $reg->nro_factura,
 				"3"=> $reg->nombre_proveedor,
 			    "4"=> $reg->Total_compra,
 				"5"=>$reg->fecha_compra,
 				"6"=> $reg->fecha_ingreso
 				
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