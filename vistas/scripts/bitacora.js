var tabla;

//Función que se ejecuta al inicio
function init(){
	listar();

	//$("#fecha_inicio").change(listar);
	//$("#fecha_fin").change(listar);

	$.post("../ajax/bitacora.php?op=selectUsuario", function(r){
	            $("#id_usuario").html(r);
	            $('#id_usuario').selectpicker('refresh');
	});
}


//Función Listar
function listar()
{
	var fecha_inicio = $("#fecha_inicio").val();
	var fecha_fin = $("#fecha_fin").val();
	var id_usuario = $("#id_usuario").val();

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
					url: '../ajax/bitacora.php?op=listar',
					data:{fecha_inicio: fecha_inicio,fecha_fin: fecha_fin,id_usuario: id_usuario},
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


init();