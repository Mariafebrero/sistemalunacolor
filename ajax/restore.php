<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/>
</head>
<body>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>
</html>

<?php
include '../config/conexionBackup.php';
$restorePoint=SGBD::limpiarCadena($_POST['restorePoint']);
$sql=explode(";",file_get_contents($restorePoint));
$totalErrors=0;
set_time_limit (60);
$con=mysqli_connect(SERVER, USER, PASS, BD);
$con->query("SET FOREIGN_KEY_CHECKS=0");
for($i = 0; $i < (count($sql)-1); $i++){
    if($con->query($sql[$i].";")){  }else{ $totalErrors++; }
}
$con->query("SET FOREIGN_KEY_CHECKS=1");
$con->close();
if($totalErrors<=0){

	//echo "<script>alert('RESTAURACION COMPLETA CON EXITO');window.location.href='../vistas/importar.php';</script>";
	 echo '<script>
                    setTimeout(function() {
                    swal({
                    title: "¡La restauración se ha realizado con éxito!",
                    text: "",
                    closeOnClickOutside: false,
                    type: "success"
                        }, function() 
                        {
                            window.location = "../vistas/importar.php";
                        });
                    }, 1000);
                </script>';
}else{
	
	//echo "<script>alert('Ocurrio un error inesperado, no se pudo hacer la restauración completamente');window.location.href='../vistas/importar.php';</script>";
	 echo '<script>
                    setTimeout(function() {
                    swal({
                    title: "Ocurrio un error inesperado",
                    text: "No se pudo realizar la restauración",
                    closeOnClickOutside: false,
                    type: "error"
                        }, function() 
                        {
                            window.location = "../vistas/importar.php";
                        });
                    }, 1000);
           </script>';
}
