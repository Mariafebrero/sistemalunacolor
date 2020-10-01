var tabla;
alert('estoy funcionando');

//Función que se ejecuta al inicio
function init(){
	

	        //Cargamos los items al select Pregunta
	$.post("../ajax/pregunta.php?op=selectPregunta", function(t){
	            $("#id_pregunta").html(t);
	            $('#id_pregunta').selectpicker('refresh');

   });             
}

init();