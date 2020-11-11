<?php
require '../config/conexion.php';
require 'header.php'; 

?>


<!DOCTYPE html>
<div class="content-wrapper"> 
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restore</title>
</head>
<body>

<form action="../ajax/restore.php" method="POST" enctype="multipart/form-data"
    id="frm-restore">
    <div class="form-row">
      <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <center><h2>Elegir el archivo de Respaldo</h2></center>
        <div>
<!--            <center><input type="file" name="backup_file" class="input-file"/></center> -->
            <center><select name="restorePoint" class="form-control" style="height: 50px; width:300px; ">
            <option  value="" disabled="" selected="">Selecciona un punto de restauración </option>
            <?php
				include_once '../config/conexionBackup.php';
				$ruta=BACKUP_PATH;
				if(is_dir($ruta)){
				    if($aux=opendir($ruta)){
				        while(($archivo = readdir($aux)) !== false){
				            if($archivo!="."&&$archivo!=".."){
				                $nombrearchivo=str_replace(".sql", "", $archivo);
				                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
				                $ruta_completa=$ruta.$archivo;
				                if(is_dir($ruta_completa)){
				                }else{
				                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
				                }
				            }
				        }
				        closedir($aux);
				    }
				}else{

                    echo "<script>alert('NO ES RUTA VALIDA');window.location.href='importar.php';</script>";
				}
			?>

		</select> <center>


        </div>
        <br>
        <br>
        <center><img src="../public/img/subir.png" height="100px" width="100px"></center>
        <br>
        <br>
    </div>
    <div>
        <center><input type="submit" name="restore" value="Restore"
            class="btn-action btn-primary" style="width: 100px;" /></center>
    </div>

</form>
</div>
</div>	
</body>
<?php

include 'footer.php'; 
?>

</html>
