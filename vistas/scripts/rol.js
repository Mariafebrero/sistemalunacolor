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
					url: '../ajax/rol.php?op=listar',
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
	bootbox.confirm("¿Está Seguro de desactivar el rol?", function(result){
		if(result)
        {
        	$.post("../ajax/rol.php?op=desactivar", {id_rol : id_rol}, function(e){
        		swal({
  			title: "",
  			text: e,
  			icon: "warning",
  			button: "OK",
			});  
        		//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(id_rol)
{
	bootbox.confirm("¿Está Seguro de activar el rol?", function(result){
		if(result)
        {
        	$.post("../ajax/rol.php?op=activar", {id_rol : id_rol}, function(e){
        		swal({
  			title: "",
  			text: e,
  			icon: "warning",
  			button: "OK",
			});  
        		//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}


init();