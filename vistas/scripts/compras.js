var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	});

$.post("../ajax/R.php?op=selectproveedor",function(t){

$("#id_proveedor").html(t);
$("#id_proveedor").selectpicker("refresh");
	            }




	            	);



}


//Función limpiar
function limpiar()
{
	
		$("#id_compras").val("");
		$("#tipo_comprobante").val("");
		$("#nro_facturac").val("");
		$("#descuento_c").val("");
		$("#impuesto_c").val("");
		$("#total_c").val("");
		$("#Nombre_pro").val("");
		$("#Cantidad_compras").val("");
		$("#Precio_compras").val("");
 

	
	
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();

	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();

	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}

}


//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()


{


	var fecha_inicio = $("#fecha_inicio").val();
	var fecha_fin = $("#fecha_fin").val();

	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		        
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/compras.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/compras.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    { 
	    if (datos == "¡La Factura de Compra se ha ingresado con éxito!") 
	    {
			Swal.fire({
			title:  datos ,
			text: "La lista de Facturas de compras ha sido actualizada",
			icon: 'success',
			showConfirmButton: false,
			allowOutsideClick: false,
			timer: 3500
			});
	    } 
	    else if (datos == "La Factura de compras no se pudo registrar") 
	    {
	    	Swal.fire({
			title:  datos ,
			text: "La lista de Facturas de compras no ha sido actualizada",
			icon: 'error',
			showConfirmButton: false,
			allowOutsideClick: false,
			footer: "Si el problema persiste, contacte a su soporte técnico",
			timer: 4500
			});
	    }
	    else if (datos == "Este Factura de compras ya se encuentra registrado") 
	    {
	    	Swal.fire({
			title: datos,
			text: "Intentélo de nuevo", 
			icon:'error'  ,
			showConfirmButton: false,
			allowOutsideClick: false,
			footer: "Si el problema persiste, contacte a su soporte técnico",
			timer: 4500
			});
	    }
	    else if (datos == "¡La Factura ha sido actualizado!") 
	    {
	    	Swal.fire({
			title: datos,
			text: "La lista de productos ha sido actualizada", 
			icon:'success'  ,
			showConfirmButton: false,
			allowOutsideClick: false,
			timer: 4500
			});
	    }
	    else if (datos == "El producto no se pudo actualizar") 
	    {
	    	Swal.fire({
			title: datos,
			text: "La lista de productos no ha sido actualizada", 
			icon:'error'  ,
			showConfirmButton: false,
			allowOutsideClick: false,
			footer: "Si el problema persiste, contacte a su soporte técnico",
			timer: 4500
			});
	    }
	    else 
	    {
	    	Swal.fire({
			title: "Fallo en el sistema",
			text: "Intentélo de nuevo más tarde", 
			icon:'error'  ,
			showConfirmButton: false,
			allowOutsideClick: false,
			footer: "Si el problema persiste, contacte a su soporte técnico",
			timer: 4500
			});
	    }


			  //setTimeout("document.location.reload(true)", 2500);
	          mostrarform(false);
	          tabla.ajax.reload();


	    }
 

	});
	limpiar();

}

function mostrar(id_producto)
{
	$.post("../ajax/producto.php?op=mostrar",{id_producto : id_producto}, function(data)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		
		$("#id_producto").val(data.id_producto);
		$("#nombreproducto").val(data.nombre_producto);

 	})
}

//Función para desactivar registros
function desactivar(idarticulo)
{
	bootbox.confirm("¿Está Seguro de desactivar el artículo?", function(result){
		if(result)
        {
        	$.post("../ajax/producto.php?op=desactivar", {idarticulo : idarticulo}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(idarticulo)
{
	bootbox.confirm("¿Está Seguro de activar el Artículo?", function(result){
		if(result)
        {
        	$.post("../ajax/producto.php?op=activar", {idarticulo : idarticulo}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//función para generar el código de barras
function generarbarcode()
{
	codigo=$("#codigo").val();
	JsBarcode("#barcode", codigo);
	$("#print").show();
}

//Función para imprimir el Código de barras
function imprimir()
{
	$("#print").printArea();
}


init();