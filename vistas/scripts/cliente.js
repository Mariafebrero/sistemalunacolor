var tabla;

//Función que se ejecuta al inicio
//Funciones visuales, las variables con # es el nombre_cn de los objetos de nuevocliente.php donde estan estos
function init(){
	mostrarformcn(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
}

//Función limpiarcn
function limpiarcn()
{
	$("#nombre_cn").val("");

	var CampoFecha = document.getElementById("fecha_nacimiento");
	CampoFecha.value = CampoFecha.defaultValue;

	//var CampoTipoDoc = document.getElementById("tipo_doc_prin");
	//CampoTipoDoc.value = CampoTipoDoc.defaultValue;
	$('#tipo_doc_prin').selectpicker('val', '0');
	$('#tipo_con_prin').selectpicker('val', '0');

	$("#valor_doc_prin").val("");
	$("#valor_doc_prin").attr("disabled","disabled");
	$("#add_doc").attr("disabled","disabled");
	$("#rem_doc").attr("disabled","disabled");

	//var CampoTipoDocSec = document.getElementById("tipo_doc_sec");
	//CampoTipoDocSec.value = CampoTipoDocSec.defaultValue;

	$("#valor_con_prin").val("");
	$("#valor_con_prin").attr("disabled","disabled");
	$("#add_con").attr("disabled","disabled");
	$("#rem_con").attr("disabled","disabled");
	
	$("#valor_con_prin").removeAttr("style");

$("#add_con").attr("style","position:relative;  top:-34px; right: -363px;width: 75px;");
$("#rem_con").attr("style","position:relative;  top:-34px; right: -365px;width: 75px;");

	//var CampoTipoCon = document.getElementById("tipo_con_prin");
	//CampoTipoCon.value = CampoTipoCon.defaultValue;

	

	var CampoTipoConSec = document.getElementById("tipo_con_sec");
	CampoTipoConSec.value = CampoTipoConSec.defaultValue;
	$("#valor_doc_sec").val("");
	$("#valor_con_sec").val("");
	RemoverOtroDoc();
	RemoverOtroCon();
}

//Función mostrar formulario
function mostrarformcn(flag)
{
	limpiarcn();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
		$("#btnagregare").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
		$("#btnagregare").show();
	}
}

//Función cancelarform
function cancelarformcn()
{
	limpiarcn();
	mostrarformcn(false);
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
		"iDisplayLength": 10,//Paginación
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
		url: "../ajax/cliente.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarformcn(false);
	          tabla.ajax.reload();
	    }

	});
	limpiarcn();
}

function mostrar(id_cliente)
{
	$.post("../ajax/persona.php?op=mostrar",{id_cliente : id_cliente}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarformcn(true);

		$("#nombre_cn").val(data.nombre_cn);
		$("#tipo_documento").val(data.tipo_documento);
		$("#tipo_documento").selectpicker('refresh');
		$("#num_documento").val(data.num_documento);
		$("#direccion").val(data.direccion);
		$("#telefono").val(data.telefono);
		$("#email").val(data.email);
 		$("#id_cliente").val(data.id_cliente);
		

 	})
}

//Función para eliminar registros
function eliminar(id_cliente)
{
	bootbox.confirm("¿Está Seguro de eliminar el cliente?", function(result){
		if(result)
        {
        	$.post("../ajax/persona.php?op=eliminar", {id_cliente : id_cliente}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}
// -----------------------------Controladores del formulario CN ---------------------------------------
function AgregarOtroDoc(obj)
{   
 
$("#div_tipo_doc_sec").removeAttr("hidden");
$("#div_val_doc_sec").removeAttr("hidden");
}

function RemoverOtroDoc(obj)
{
$("#div_tipo_doc_sec").attr("hidden","true");
$("#div_val_doc_sec").attr("hidden","true");
$("#valor_doc_sec").attr("disabled","disabled");
$("#valor_doc_sec").val("");
$('#tipo_doc_sec').selectpicker('val', '0');

}

function AgregarOtroCon(obj)
{   
 
$("#div_tipo_con_sec").removeAttr("hidden");
$("#div_valor_con_sec").removeAttr("hidden");
}

function RemoverOtroCon(obj)
{
$("#div_tipo_con_sec").attr("hidden","true");
$("#div_valor_con_sec").attr("hidden","true");

//$("#valor_con_prin").attr("disabled","disabled");
//$("#add_con").attr("disabled","disabled");
//$("#rem_con").attr("disabled","disabled");

$("#valor_con_sec").val("");

//$("#valor_con_prin").removeAttr("style");
$("#valor_con_sec").removeAttr("style");
//$("#add_con").attr("style","position:relative;  top:-34px; right: -363px;width: 75px;");
//$("#rem_con").attr("style","position:relative;  top:-34px; right: -365px;width: 75px;");

//$('#tipo_con_prin').selectpicker('val', '0');
$('#tipo_con_sec').selectpicker('val', '0');
}

function SelectTipoDocPrin(obj)
{
$("#valor_doc_prin").val("");
$("#valor_doc_prin").removeAttr("disabled");
$("#add_doc").removeAttr("disabled");
$("#rem_doc").removeAttr("disabled");

//$("#valor_doc_prin").trigger("unmask");
	if (obj.value == 0) 
	{
		$("#valor_doc_prin").attr("disabled","disabled");
		$("#add_doc").attr("disabled","disabled");
		$("#rem_doc").attr("disabled","disabled");
	}
	else if (obj.value === "ID") 
	{
		$("#valor_doc_prin").mask("9999-9999-99999");

	}
	else if (obj.value === "RTN") 
	{
		$("#valor_doc_prin").mask("9999-9999-999999");

	}
	else if (obj.value === "Pasaporte") 
	{
		//$("#valor_doc_prin").attr("onkeyup","javascript:this.value=this.value.toUpperCase();");
		$("#valor_doc_prin").mask("a999999");
	}

	else
	{

	}

}

function SelectTipoDocSec(obj)
{
$("#valor_doc_sec").val("");
$("#valor_doc_sec").removeAttr("disabled");
$("#add_sec").removeAttr("disabled");
$("#rem_sec").removeAttr("disabled");

//$("#valor_doc_prin").trigger("unmask");
	if (obj.value == 0) 
	{
		$("#valor_doc_sec").attr("disabled","disabled");
		$("#add_sec").attr("disabled","disabled");
		$("#rem_sec").attr("disabled","disabled");
	}
	else if (obj.value === "ID") 
	{
		$("#valor_doc_sec").mask("9999-9999-99999");

	}
	else if (obj.value === "RTN") 
	{
		$("#valor_doc_sec").mask("9999-9999-999999");

	}
	else if (obj.value === "Pasaporte") 
	{
		//$("#valor_doc_prin").attr("onkeyup","javascript:this.value=this.value.toUpperCase();");
		$("#valor_doc_sec").mask("a999999");
	}

	else
	{

	}

}

function SelectTipoConPrin(obj)
{
$("#valor_con_prin").val("");	
$("#valor_con_prin").removeAttr("disabled");
$("#add_con").removeAttr("disabled");
$("#rem_con").removeAttr("disabled");
$( "#valor_con_prin" ).off();
$("#valor_con_prin").attr("maxlength","20");
$("#valor_con_prin").removeAttr("style");

$("#add_con").attr("style","position:relative;  top:-34px; right: -363px;width: 75px;");
$("#rem_con").attr("style","position:relative;  top:-34px; right: -365px;width: 75px;");


//style="WIDTH: 362px; HEIGHT: 60px"
var CampoValorConPrin = document.getElementById("valor_con_prin");
CampoValorConPrin.value = CampoValorConPrin.defaultValue;

CampoValorConPrin.pattern = "";
CampoValorConPrin.title = "";

if (obj.value == 1 || obj.value == 4 ) 
	{
		
			$("#valor_con_prin").on('keypress',function(evt)
			{
				var theEvent = evt || window.event;
			    var key = theEvent.keyCode || theEvent.which;
			    key = String.fromCharCode( key );
			    var regex = /[+\d\s]/; // dowolna liczba (+- ,.) :)
			     
			    var val = $(evt.target).val();
			    if(!regex.test(key) ||  !theEvent.keyCode == 43 ||  !theEvent.keyCode == 32) 
			    {
			        theEvent.returnValue = false;
			        if(theEvent.preventDefault) theEvent.preventDefault();
			    };
			});
	}
	else if (obj.value === "3") 
	{

		 CampoValorConPrin.pattern = "[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}";
		 CampoValorConPrin.title = "Ingrese un correo válido. Ejemplo: Correo@gmail.com";

	}
	else if (obj.value === "2") 
	{
		$("#valor_con_prin").removeAttr("maxlength");
		$("#valor_con_prin").attr("style","WIDTH: 362px; HEIGHT: 80px");
		$("#add_con").attr("style","position:relative;  top:-56px; right: -363px;width: 75px;");
		$("#rem_con").attr("style","position:relative;  top:-56px; right: -363px;width: 75px;");
	}

	else if (obj.value === "0") 
	{
		$("#valor_con_prin").attr("disabled","disabled");
		$("#add_con").attr("disabled","disabled");
		$("#rem_con").attr("disabled","disabled");

	}


	else
	{

	}

}
//esta es la 2da que falta
function SelectTipoConSec(obj)
{
$("#valor_con_sec").val("");	
$("#valor_con_sec").removeAttr("disabled");
$("#valor_con_sec" ).off();
$("#valor_con_sec").attr("maxlength","20");
$("#valor_con_sec").removeAttr("style");

var CampoValorConSec = document.getElementById("valor_con_sec");
CampoValorConSec.value = CampoValorConSec.defaultValue;

CampoValorConSec.pattern = "";
CampoValorConSec.title = "";

if (obj.value == 1 || obj.value == 4 ) 
	{
		
			$("#valor_con_sec").on('keypress',function(evt)
			{
				var theEvent = evt || window.event;
			    var key = theEvent.keyCode || theEvent.which;
			    key = String.fromCharCode( key );
			    var regex = /[+\d\s]/; // dowolna liczba (+- ,.) :)
			     
			    var val = $(evt.target).val();
			    if(!regex.test(key) ||  !theEvent.keyCode == 43 ||  !theEvent.keyCode == 32) 
			    {
			        theEvent.returnValue = false;
			        if(theEvent.preventDefault) theEvent.preventDefault();
			    };
			});
	}
	else if (obj.value === "3") 
	{

		 CampoValorConSec.pattern = "[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}";
		 CampoValorConSec.title = "Ingrese un correo válido. Ejemplo: Correo@gmail.com";

	}
	else if (obj.value === "2") 
	{
		$("#valor_con_sec").removeAttr("maxlength");
		$("#valor_con_sec").attr("style","WIDTH: 362px; HEIGHT: 80px");
		//falta la del formulario
	}

	else if (obj.value === "0") 
	{
		$("#valor_con_sec").attr("disabled","disabled");
	}


	else
	{

	}

}


// -----------------------------Controladores del formulario CN ---------------------------------------


init();