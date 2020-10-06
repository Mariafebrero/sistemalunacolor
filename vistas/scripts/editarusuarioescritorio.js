var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})

	$("#imagenmuestra").hide();  

}

//Función limpiar
function limpiar()
{
	
	$("#usuario").val("");
	$("#nombre_usuario").val("");
	$("#contrasena").val("");
	$("#imagenmuestra").attr("src","");//ojo
	$("#imagenactual").val(""); //ojo
	$("#correo_electronico").val("");	
	$("#id_usuario").val("");

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
		            
		        ],
		"ajax":
				{
					url: '../ajax/usuarioescritorio.php?op=listarEscritorio',
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
		url: "../ajax/usuarioescritorio.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	   success: function(datos)
	   {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	         tabla.ajax.reload();
	    }

	});
	limpiar();
}

function mostrar(id_usuario)
{
	$.post("../ajax/usuarioescritorio.php?op=mostrar",{id_usuario : id_usuario}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#usuario").val(data.usuario);
		$("#nombre_usuario").val(data.nombre_usuario);
		$("#contrasena").val(data.contrasena);
		$("#imagenmuestra").show();
		$("#imagenmuestra").attr("src","../files/usuarios/"+data.imagen);
		$("#imagenactual").val(data.imagen);
		$("#correo_electronico").val(data.correo_electronico);
		$("#id_usuario").val(data.id_usuario);

	});
}

//Función para desactivar registros
function desactivar(id_usuario)
{
	bootbox.confirm("¿Está Seguro de desactivar el usuario?", function(result){
		if(result)
        {
        	$.post("../ajax/usuarioescritorio.php?op=desactivar", {id_usuario : id_usuario}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(id_usuario)
{
	bootbox.confirm("¿Está Seguro de activar el Usuario?", function(result){
		if(result)
        {
        	$.post("../ajax/usuarioescritorio.php?op=activar", {id_usuario : id_usuario}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

init();