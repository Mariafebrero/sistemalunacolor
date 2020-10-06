$("#frmAcceso").on('submit',function(e)
{
	e.preventDefault();
    usuariolog=$("#usuariolog").val();
    contrasenalog=$("#contrasenalog").val();
    
   
    $.post("../ajax/usuario.php?op=verificar",
        {"usuariolog":usuariolog,"contrasenalog":contrasenalog},
        function(data)
    {
        if (data!="null")
        {
            $(location).attr("href","Escritorio.php");  

        }
        else
        {
             $(location).attr("href","PrimerIngreso/preguntaingreso.php");
        }
    });
})