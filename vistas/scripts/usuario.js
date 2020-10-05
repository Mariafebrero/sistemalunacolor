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

	//Mostramos los permisos
	$.post("../ajax/usuario.php?op=permisos&id=",function(r){
	        $("#permisos").html(r);
	});    

	        //Cargamos los items al select Rol
	$.post("../ajax/usuario.php?op=selectRol", function(t){
	            $("#id_rol").html(t);
	            $('#id_rol').selectpicker('refresh');

   });    
}

//Función limpiar
function limpiar()
{
	$("#id_rol").val("");
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
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/usuario.php?op=listar',
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
		url: "../ajax/usuario.php?op=guardaryeditar",
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

function mostrar(id_usuario)
{
	$.post("../ajax/usuario.php?op=mostrar",{id_usuario : id_usuario}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#id_rol").val(data.id_rol);
		$("#usuario").val(data.usuario);
		$("#nombre_usuario").val(data.nombre_usuario);
		$("#contrasena").val(data.contrasena);
		$("#imagenmuestra").show();
		$("#imagenmuestra").attr("src","../files/usuarios/"+data.imagen);
		$("#imagenactual").val(data.imagen);
		$("#correo_electronico").val(data.correo_electronico);
		$("#id_usuario").val(data.id_usuario);

	});
	$.post("../ajax/usuario.php?op=permisos&id="+id_usuario,function(r){
	        $("#permisos").html(r);
	});
}

//Función para desactivar registros
function desactivar(id_usuario)
{
	bootbox.confirm("¿Está Seguro de desactivar el usuario?", function(result){
		if(result)
        {
        	$.post("../ajax/usuario.php?op=desactivar", {id_usuario : id_usuario}, 
        		function(e){
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
function activar(id_usuario)
{
	bootbox.confirm("¿Está Seguro de activar el Usuario?", function(result){
		if(result)
        {
        	$.post("../ajax/usuario.php?op=activar", {id_usuario : id_usuario}, 
        		function(e){
        			swal({
  			title: "",
  			text: e,
  			icon: "success",
  			button: "OK",
			});  
        		//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

init();