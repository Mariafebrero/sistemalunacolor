var tablap;

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

		$("#nombre_proveedor").val("");
		$("#rtn_proveedor").val("");
		$("#cai_proveedor").val("");
		$("#Descripcion_proveedores").val("");
        $("#Direccion_proveedores").val("");
        $("#correo_proveedores").val("");
        $("#Telefono_proveedores").val("");
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
	tablap=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		        
		            "pdf"
		        ],
		"ajax":
				{
					url: "../ajax/proveedores.php?op=listarpr",
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
		url: "../ajax/proveedores.php?op=guardaryeditar",
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

function mostrar(id_proveedor)
{
	$.post("../ajax/proveedores.php?op=mostrar",{id_proveedor: id_proveedor}, function(data)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		
		$("#id_proveedor").val(data.id_proveedor);
		$("#nombre_proveedor").val(data.nombre_proveedor);
		$("#cai_proveedor").val(data.CAI);
	    $("#rtn_proveedor").val(data.rtn);

        $("#Descripcion_proveedores").val(data.descripcion);
       $("Direccion_proveedores").val(data.Direccion_proveedores);
        $("Correo_proveedores").val(data.Correo_proveedores);
       $("Telefono_proveedores").val(data.Telefono_proveedores);
 	})

function eliminar(id_proveedor)
{
	bootbox.confirm("¿Está Seguro de eliminar el cliente?", function(result){
		if(result)
        {
        	$.post("../ajax/proveedores.php?op=eliminar", {id_proveedor : id_proveedor}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}




}




init();