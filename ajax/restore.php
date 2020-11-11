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
	echo "<script>alert('RESTAURACION COMPLETA CON EXITO');window.location.href='../vistas/importar.php';</script>";
}else{
	
	echo "<script>alert('Ocurrio un error inesperado, no se pudo hacer la restauración completamente');window.location.href='../vistas/importar.php';</script>";
}
