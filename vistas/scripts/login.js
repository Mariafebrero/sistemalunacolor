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
            $(location).attr("href","escritorio.php");            
        }
        else
        {
            bootbox.alert("Usuario y/o Password incorrectos");
        }
    });
})