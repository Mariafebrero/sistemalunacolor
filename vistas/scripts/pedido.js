var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})

	$.post("../ajax/pedido.php?op=selectCliente", function(t){
	            $("#id_cliente").html(t);
	            $('#id_cliente').selectpicker('refresh');

   });
}

//Función limpiar
function limpiar()
{
	$("#id_rol").val("");
	$("#rol").val("");
	$("#descripcion").val("");
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

		//agregado
		$("#fecha_inicio").hide();
		$("#fecha_fin").hide();
		$("#fecha_inicio1").hide();
		$("#fecha_fin1").hide();
		$("#estado_pedido").hide();
		$("#id_estadopedido").hide();
		$("#id_estado_pedido1").hide();
		$("#buscar").hide();
		$("#actualizar").hide();
		$("#buscar1").hide();
		$("#actualizar1").hide();




	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();

		//agregado
		$("#fecha_inicio").show();
		$("#fecha_fin").show();
		$("#fecha_inicio1").show();
		$("#fecha_fin1").show();
		$("#estado_pedido").show();
		$("#id_estadopedido").show();
		$("#id_estado_pedido1").show();
		$("#buscar").show();
		$("#actualizar").show();
		$("#buscar1").show();
		$("#actualizar1").show();
		
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


	    	{
	    		extend: 'copyHtml5',
	    		titleAttr: 'Copiar',
        		footer: true,
        		title: 'Copiar',
        		filename: 'Bitácora_Consulta',
        		text: '<button class="btn btn-primary" style="color: #fffff;">Copiar <i class="fas fa-copy"></i></button>'

			},

	    	{	
				extend: 'excelHtml5',
	    		titleAttr: 'Exportar a Excel',
        		footer: true,
        		title: 'Copiar',
        		filename: 'Bitácora_Consulta',
        		text: '<button class="btn btn-success" style="color: #fffff;">Exportar a Excel <i class="fas fa-file-excel"></i></button>'

			},
			{
				extend: 'pdfHtml5',
	    		titleAttr: 'Exportar a PDF',
        		footer: true,
        		title: 'Sistema Luna Color - Reporte Usuario',
        		filename: 'Bitácora_Consulta',
        		text: '<button class="btn btn-danger" style="color: #fffff;">Exportar a PDF <i class="fas fa-file-pdf"></i></button>'
			},
			],
		"ajax":
				{
					url: '../ajax/pedido.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
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
		url: "../ajax/rol.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	   success: function(datos)
	    {      
	    	swal({
  			title: "",
  			text: datos,
  			icon: "success",
  			button: "OK",
			});                
	          //bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}

function mostrar(id_rol)
{
	$.post("../ajax/rol.php?op=mostrar",{id_rol : id_rol}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#id_rol").val(data.id_rol);
		$("#rol").val(data.rol);
		$("#descripcion").val(data.descripcion);
 		

 	})
}

//Función para desactivar registros
function desactivar(id_rol)
{
swal({
  title:"¿Está Seguro de desactivar el rol?",
  text: "",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
  	$.post("../ajax/rol.php?op=desactivar", {id_rol : id_rol}, function(e){
        		swal({
  			title: "",
  			text: e,
  			icon: "success",
  			button: "OK",
			});  
        		//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    
  } else {
    swal("No se ha desactivado");
  }
});
	
}

//Función para activar registros
function activar(id_rol)
{


swal({
  title:"¿Está Seguro de activar el rol?",
  text: "",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
  	$.post("../ajax/rol.php?op=activar", {id_rol : id_rol}, function(e){
        		swal({
  			title: "",
  			text: e,
  			icon: "success",
  			button: "OK",
			});  
        		//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    
  } else {
    swal("No se ha activado");
  }
});
	
}



init();