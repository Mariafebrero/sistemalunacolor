var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();


	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})

	$.post("../ajax/permisos.php?op=selectRol", function(r){
	            $("#id_rol").html(r);
	            $('#id_rol').selectpicker('refresh');
	});

	$.post("../ajax/permisos.php?op=selectRol2", function(r){
	            $("#id_rol2").html(r);
	            $('#id_rol2').selectpicker('refresh');
	});

	$.post("../ajax/permisos.php?op=selectObjeto", function(r){
	            $("#id_objeto").html(r);
	            $('#id_objeto').selectpicker('refresh');
	});
}

//Función limpiar
function limpiar()
{
	$("#id_permiso").val("");
	$("#id_rol2").val("");
	$("#id_objeto").val("");
	$("#permiso_insercion").val("");
	$("#permiso_eliminacion").val("");
	$("#permiso_actualizacion").val("");
	$("#permiso_consultar").val("");
	

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

		$("#id_rol2").prop('disabled', false);
		$("#id_objeto").prop('disabled', false);


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
	
	var id_rol = $("#id_rol").val();

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
        		title: 'Copiar',
        		filename: 'Bitácora_Consulta',
        		text: '<button class="btn btn-danger" style="color: #fffff;">Exportar a PDF <i class="fas fa-file-pdf"></i></button>'
			},
			 

			

		        ],
		"ajax":
				{
					url: '../ajax/permisos.php?op=listar',
					data:{id_rol: id_rol},
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 20,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/permisos.php?op=guardaryeditar",
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




function mostrar(id_permiso)
{
	$.post("../ajax/permisos.php?op=mostrar",{id_permiso : id_permiso}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#id_permiso").val(data.id_permiso);

		$("#id_rol2").val(data.id_rol);
		//$("#id_rol2").prop('disabled', true);
		$("#id_rol2").selectpicker('refresh');

		$("#id_objeto").val(data.id_objeto);
		//$("#id_objeto").prop('disabled', true);
		$("#id_objeto").selectpicker('refresh');

		$("#permiso_insercion").val(data.permiso_insercion);
		$("#permiso_eliminacion").val(data.permiso_eliminacion);
		$("#permiso_actualizacion").val(data.permiso_actualizacion);
		$("#permiso_consultar").val(data.permiso_consultar);
		
	});
}


init();