var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
}

//Función limpiar
function limpiar()
{
	//var myinput = document.getElementById("id_producto");
	//myinput.value = myinput.defaultValue;
	$("#id_producto").val("");
	$("#nombreproducto").val("");
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
					url: '../ajax/producto.php?op=listar',
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
	//$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/producto.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    { 

	    if (datos == "Este producto ya se encuentra registrado") 
	          {
	          	$("#errmsg").html("Este producto ya se encuentra registrado").show().fadeOut(3000);
	          }

	    else if (datos == "¡El producto se ha ingresado con éxito!") 
	          {
	          	swal({
				    title: datos,
				    text: "La lista de productos ha sido actualizada",
				    icon: 'success',
				    timer: 3000,
				    buttons: false,
				    closeOnClickOutside: false,
				    });
	          	  mostrarform(false);
		          tabla.ajax.reload();
		          limpiar();
	          }
	    else if (datos == "El producto no se pudo registrar") 
	          {
	          	swal({
				    title: datos,
				    text: "La lista de productos no ha sido actualizada",
				    icon: 'error',
				    timer: 3000,
				    buttons: false,
				    closeOnClickOutside: false,
				    });
	          	  mostrarform(false);
		          tabla.ajax.reload();
		          limpiar();
	          } 
	    else if (datos == "¡El producto ha sido actualizado!") 
	          {
	          	swal({
				    title: datos,
				    text: "La lista de productos ha sido actualizada",
				    icon: 'success',
				    timer: 3000,
				    buttons: false,
				    closeOnClickOutside: false,
				    });
	          	  mostrarform(false);
		          tabla.ajax.reload();
		          limpiar();
	          }
	     else if (datos == "El producto no se pudo actualizar") 
	          {
	          	swal({
				    title: datos,
				    text: "La lista de productos no ha sido actualizada",
				    icon: 'error',
				    timer: 3000,
				    buttons: false,
				    closeOnClickOutside: false,
				    });
	          	  mostrarform(false);
		          tabla.ajax.reload();
		          limpiar();
	          }                             
	          	
		else
	          {   swal({
				    title: "Fallo en el sistema",
				    text: "Si el problema persiste contacte a su soporte técnico",
				    icon: 'error',
				    timer: 3000,
				    buttons: false,
				    closeOnClickOutside: false,
				    });        
		          mostrarform(false);
		          tabla.ajax.reload();
		          limpiar();
	      	  }
	    }

	});

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