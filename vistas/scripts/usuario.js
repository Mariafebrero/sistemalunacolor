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
	/*$.post("../ajax/usuario.php?op=permisos&id=",function(r){
	        $("#permisos").html(r);
	});*/    

	        //Cargamos los items al select Rol
	$.post("../ajax/usuario.php?op=selectRol", function(t){
	            $("#id_rol").html(t);
	            $('#id_rol').selectpicker('refresh');

   });    

	$.post("../ajax/usuario.php?op=selectEstadoUsuario", function(i){
	            $("#id_estado_usuario").html(i);
	            $('#id_estado_usuario').selectpicker('refresh');

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
	$("#id_estado_usuario").val("");
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

		//SHOW PARA MONSTRAR EL CAMPO USUARIO CUANDO SE AGREGA UN USUARIO
		$("#usuario").show();

		$("#show_password1").show();
		$("#show_password").show();

		//$("#confirmar_contrasena").val("");

		//$("#id_rol").val("");
		//$("#id_estado_usuario").val("");
		//$("#id_estado_usuario").hide();
		//$("#id_estado_usuario").selectpicker('val', 'Nuevo');

		$("#id_estado_usuario").prop('disabled', true);
  		//$("#id_estado_usuario").val("");


	
		//SHOW PARA MONSTRAR EL CAMPO FECHA ACTUAL Y VECHA VENCIMIENTO CUANDO SE AGREGA UN USUARIO
		$("#fa").show();
		$("#fv").show();



		$("#Autogenerar").show();
		$("#letra").show();


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
					url: '../ajax/usuario.php?op=listar',
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
		url: "../ajax/usuario.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {      
	    	swal({
  			title: datos,
  			text: "",
  			icon: "",
  			button: "Ok",
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
		$("#id_rol").selectpicker('refresh');
		//$("#usuario").val(data.usuario);


		//HIDE PARA OCULTAR EL CAMPO USUARIO CUANDO SE TENGA QUE EDITAR UN USUARIO
		$("#usuario").hide(data.usuario);
		$("#usuario").val('refresh');

		$("#contrasena").val(data.contrasena);
		$("#confirmar_contrasena").val(data.contrasena);

		$("#show_password1").hide(data.show_password1);
		$("#show_password").hide(data.show_password);


		$("#nombre_usuario").val(data.nombre_usuario);
		//$("#contrasena").val(data.contrasena);
		$("#imagenmuestra").show();
		$("#imagenmuestra").attr("src","../files/usuarios/"+data.imagen);
		$("#imagenactual").val(data.imagen);
		$("#correo_electronico").val(data.correo_electronico);

		

		$("#id_estado_usuario").val(data.id_estado_usuario);
		$("#id_estado_usuario").prop('disabled', false);
  		$("#id_estado_usuario").selectpicker('refresh');

		//descri

		

		//FECHAS 
		//$("#fecha_creacion").val(data.fecha_creacion);
		//$("#fecha_vencimiento").val(data.fecha_vencimiento);

		$("#fa").hide(data.fa);
		$("#fv").hide(data.fv);

		$("#Autogenerar").hide();
		$("#letra").hide();


		$("#id_usuario").val(data.id_usuario);

	});
	
	/*$.post("../ajax/usuario.php?op=permisos&id="+id_usuario,function(r){
	        $("#permisos").html(r);
	});*/
}

//Función para desactivar registros
function eliminar(id_usuario)
{
swal({
  title:"¿Está seguro de eliminar el usuario?",
  text: "",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
  	$.post("../ajax/usuario.php?op=eliminar", {id_usuario : id_usuario}, function(e){
        		swal({
  			title: e,
  			text: "Este usuario ya tiene registros en el Sistema.",
  			icon: "warning",
  			button: "OK",
			});  
        		//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    
  } else {
    swal({
  title:"El usuario no se pudo eliminar.",
  text: "Este usuario ya tiene registro en el Sistema.",
  icon: "warning",
});
  }
});
	
}


init();