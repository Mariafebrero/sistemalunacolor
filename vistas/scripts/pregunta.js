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
	$("#id_pregunta").val("");
	$("#pregunta").val("");
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
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/pregunta.php?op=listar',
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
		url: "../ajax/pregunta.php?op=guardaryeditar",
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

function mostrar(id_pregunta)
{
	$.post("../ajax/pregunta.php?op=mostrar",{id_pregunta : id_pregunta}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		
		$("#pregunta").val(data.pregunta);
 		$("#id_pregunta").val(data.id_pregunta);

 	})
}

//Función para desactivar registros
function desactivar(id_pregunta)
{


swal({
  title: "¿Está Seguro de desactivar la pregunta?",
  text: "",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
  	$.post("../ajax/pregunta.php?op=desactivar", {id_pregunta : id_pregunta}, function(e){
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
function activar(id_pregunta)
{


swal({
  title: "¿Está Seguro de activar la pregunta?",
  text: "",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
  	$.post("../ajax/pregunta.php?op=activar", {id_pregunta : id_pregunta}, function(e){
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