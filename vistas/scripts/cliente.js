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
	$('#tipo_cliente').selectpicker('val', '0');
	$("#id_cliente").val("");
	$("#nombre_cliente").val("");
	$("#contacto").val("");
	$("#cargo").val("");
	$("#rtn").val("");
	$("#telefono").val("");
	$("#correo_electronico").val("");
	$("#direccion").val("");
	$("#observacion").val("");


		$("#nombre_cliente").attr("disabled","disabled");
		$("#contacto").attr("disabled","disabled");
		$("#cargo").attr("disabled","disabled");
		$("#rtn").attr("disabled","disabled");
		$("#telefono").attr("disabled","disabled");
		$("#correo_electronico").attr("disabled","disabled");
		$("#direccion").attr("disabled","disabled");
		$("#observacion").attr("disabled","disabled");

		$("#div_contacto").removeAttr("hidden");
		$("#div_cargo").removeAttr("hidden");
		$("#div_tipo_cliente").removeAttr("hidden");
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
					url: '../ajax/cliente.php?op=listarc',
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
	
LLenarCamposVacios();
	

	e.preventDefault(); //No se activará la acción predeterminada del evento
	//$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/cliente.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          if (datos == "Este cliente ya se encuentra registrado") 
	          {
	          	$("#errmsg").html("Este cliente ya se encuentra registrado").show().fadeOut(3000);
	          }
	          else if (datos == "Este RTN ya ha sido registrado") 
	          {
	          	$("#errmsg").html("Este RTN ya ha sido registrado").show().fadeOut(3000);
	          }
	          else if (datos == "¡El cliente ha sido registrado con éxito!") 
	          {
	          	swal({
				    title: datos,
				    text: "La lista de clientes ha sido actualizada",
				    icon: 'success',
				    timer: 3000,
				    buttons: false,
				    closeOnClickOutside: false,
				    });
	          	  mostrarform(false);
		          tabla.ajax.reload();
		          limpiar();
	          }

	          else if (datos == "El cliente no se pudo registrar") 
	          {
	          	swal({
				    title: datos,
				    text: "La lista de clientes no ha sido actualizada",
				    icon: 'error',
				    timer: 3000,
				    buttons: false,
				    closeOnClickOutside: false,
				    });
	          	  mostrarform(false);
		          tabla.ajax.reload();
		          limpiar();
	          }

	          else if (datos == "¡El cliente ha sido actualizado con éxito!") 
	          {
	          	swal({
				    title: datos,
				    text: "La lista de clientes ha sido actualizada",
				    icon: 'success',
				    timer: 3000,
				    buttons: false,
				    closeOnClickOutside: false,
				    });
	          	  mostrarform(false);
		          tabla.ajax.reload();
		          limpiar();
	          }

	           else if (datos == "El cliente no se pudo actualizar") 
	          {
	          	swal({
				    title: datos,
				    text: "La lista de clientes no ha sido actualizada",
				    icon: 'error',
				    timer: 3000,
				    buttons: false,
				    closeOnClickOutside: false,
				    });
	          	  mostrarform(false);
		          tabla.ajax.reload();
		          limpiar();
	          }

	          else if (datos == "¡El cliente ha sido eliminado con éxito!") 
	          {
	          	swal({
				    title: datos,
				    text: "La lista de clientes ha sido actualizada",
				    icon: 'success',
				    timer: 3000,
				    buttons: false,
				    closeOnClickOutside: false,
				    });
	          	  mostrarform(false);
		          tabla.ajax.reload();
		          limpiar();
	          }

	          else if (datos == "El cliente no puede ser eliminado") 
	          {
	          	swal({
				    title: datos,
				    text: "La lista de clientes no ha sido actualizada",
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

function mostrar(id_cliente)
{
	$.post("../ajax/cliente.php?op=mostrar",{id_cliente : id_cliente}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		//$("#tipo_cliente option:('Elija una opción para empezar')").text('No se puede cambiar');
		if (data.tipo_cliente == "Particular") 
		{
			$("#div_contacto").attr("hidden","true");
			$("#div_cargo").attr("hidden","true");

			$("#div_tipo_cliente").attr("hidden","true");
			$("#nombre_cliente").removeAttr("disabled");
			$("#rtn").removeAttr("disabled");
			$("#telefono").removeAttr("disabled");
			$("#correo_electronico").removeAttr("disabled");
			$("#direccion").removeAttr("disabled");
			$("#observacion").removeAttr("disabled");
			$("#rtn").mask("9999-9999-999999");
		}
		else
		{
			$("#div_tipo_cliente").attr("hidden","true");
			$("#nombre_cliente").removeAttr("disabled");
			$("#contacto").removeAttr("disabled");
			$("#cargo").removeAttr("disabled");
			$("#rtn").removeAttr("disabled");
			$("#telefono").removeAttr("disabled");
			$("#correo_electronico").removeAttr("disabled");
			$("#direccion").removeAttr("disabled");
			$("#observacion").removeAttr("disabled");
			$("#rtn").mask("9999-9999-999999");
		}
 		$("#nombre_cliente").val(data.nombre_cliente);
		$("#contacto").val(data.contacto);
		$("#cargo").val(data.cargo);
		$("#rtn").val(data.rtn);
		$("#telefono").val(data.telefono);
		$("#correo_electronico").val(data.correo_electronico);
		$("#direccion").val(data.direccion);
		$("#observacion").val(data.observacion);
 		$("#id_cliente").val(data.id_cliente);
		

 	})
}

//Función para eliminar registros
function eliminar(id_cliente)
{
swal({
  title:"¿Está seguro de eliminar el cliente?",
  text: "",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
  	$.post("../ajax/cliente.php?op=eliminar", {id_cliente : id_cliente}, function(e){
        		swal({
  			title: e,
  			text: "Este cliente ya tiene registros en el Sistema.",
  			icon: "warning",
  			timer: 3000,
 			buttons: false,
 			closeOnClickOutside: false,
			});  
        		//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    
  } else {
    swal({
  title:"El cliente no se pudo eliminar.",
  text: "Este cliente ya tiene registro en el Sistema.",
  icon: "warning",
  timer: 3000,
  buttons: false,
  closeOnClickOutside: false,
});
  }
});
	
}

function SelectTipoCliente(obj)
{   
 
$("#nombre_cliente").removeAttr("disabled");
$("#contacto").removeAttr("disabled");
$("#cargo").removeAttr("disabled");
$("#rtn").removeAttr("disabled");
$("#telefono").removeAttr("disabled");
$("#correo_electronico").removeAttr("disabled");
$("#direccion").removeAttr("disabled");
$("#observacion").removeAttr("disabled");
$("#rtn").mask("9999-9999-999999");

	if (obj.value == 0) 
		{
		$("#nombre_cliente").attr("disabled","disabled");
		$("#contacto").attr("disabled","disabled");
		$("#cargo").attr("disabled","disabled");
		$("#rtn").attr("disabled","disabled");
		$("#telefono").attr("disabled","disabled");
		$("#correo_electronico").attr("disabled","disabled");
		$("#direccion").attr("disabled","disabled");
		$("#observacion").attr("disabled","disabled");
		}

	else if (obj.value == "Particular") 
	{
		$("#div_contacto").attr("hidden","true");
		$("#div_cargo").attr("hidden","true");

	}
	else if (obj.value == "Empresarial") 
	{
		$("#div_contacto").removeAttr("hidden");
		$("#div_cargo").removeAttr("hidden");
	}	
}

function LLenarCamposVacios() 
{
	if( $('#contacto').val() == "" )  
	{
		$("#contacto").val("N/A");
	}
	if( $('#telefono').val() == "" )  
	{
		$("#telefono").val("N/A");
	}
	if( $('#cargo').val() == "" )  
	{
		$("#cargo").val("N/A");
	}
	if( $('#rtn').val() == "" )  
	{
		$("#rtn").val("N/A");
	}
	if( $('#correo_electronico').val() == "" )  
	{
		$("#correo_electronico").val("N/A");
	}
	if( $('#direccion').val() == "" )  
	{
		$("#direccion").val("N/A");
	}
	if( $('#observacion').val() == "" )  
	{
		$("#observacion").val("N/A");
	}
	
}

init();