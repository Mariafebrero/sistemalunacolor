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

$day=date("d");
$mont=date("m");
$year=date("Y");
$hora=date("H-i-s");
$fecha=$day.'_'.$mont.'_'.$year;
$DataBASE=$fecha."_db_luna_color_(".$hora."_hrs).sql";    //AQUI SE CAMBIA EL NOMBRE DE LA BD
$tables=array();
$result=SGBD::sql('SHOW TABLES');
if($result){
    while($row=mysqli_fetch_row($result)){
       $tables[] = $row[0];
    }
    $sql='SET FOREIGN_KEY_CHECKS=0;'."\n\n";
    $sql.='CREATE DATABASE IF NOT EXISTS '.BD.";\n\n";
    $sql.='USE '.BD.";\n\n";;
    foreach($tables as $table){
        $result=SGBD::sql('SELECT * FROM '.$table);
        if($result){
            $numFields=mysqli_num_fields($result);
            $sql.='DROP TABLE IF EXISTS '.$table.';';
            $row2=mysqli_fetch_row(SGBD::sql('SHOW CREATE TABLE '.$table));
            $sql.="\n\n".$row2[1].";\n\n";
            for ($i=0; $i < $numFields; $i++){
                while($row=mysqli_fetch_row($result)){
                    $sql.='INSERT INTO '.$table.' VALUES(';
                    for($j=0; $j<$numFields; $j++){
                        $row[$j]=addslashes($row[$j]);
                        $row[$j]=str_replace("\n","\\n",$row[$j]);
                        if (isset($row[$j])){
                            $sql .= '"'.$row[$j].'"' ;
                        }
                        else{
                            $sql.= '""';
                        }
                        if ($j < ($numFields-1)){
                            $sql .= ',';
                        }
                    }
                    $sql.= ");\n";
                }
            }
            $sql.="\n\n\n";
        }else{
            $error=1;
        }
    }
    if($error==1){
        
        //echo "<script>alert('Ocurrio un error inesperado al crear la copia de seguridad');window.location.href='../vistas/backup.php';</script>";

         echo '<script>
                    setTimeout(function() {
                    swal({
                    title: "Ocurrio un error inesperado al crear la copia de seguridad",
                    text: "Inténtelo de nuevo o contacte a su soporte técnico",
                    closeOnClickOutside: false,
                    type: "error"
                        }, function() 
                        {
                            window.location = "../vistas/backup.php";
                        });
                    }, 1000);
                </script>';
    }else{
        chmod(BACKUP_PATH, 0777);
        $sql.='SET FOREIGN_KEY_CHECKS=1;';
        $handle=fopen(BACKUP_PATH.$DataBASE,'w+');
        if(fwrite($handle, $sql)){
            fclose($handle);

            //echo   "<script>alert('Copia de Seguridad Realizada con Exito');window.location.href='../vistas/backup.php';</script>";
            echo '<script>
                    setTimeout(function() {
                    swal({
                    title: "¡La copia de seguridad se ha realizado con éxito!",
                    text: "",
                    closeOnClickOutside: false,
                    type: "success"
                        }, function() 
                        {
                            window.location = "../vistas/backup.php";
                        });
                    }, 1000);
                </script>';



        }else{
            //echo "<script>alert('Ocurrio un error inesperado al crear la copia de seguridad');window.location.href='../vistas/backup.php';</script>";
             echo '<script>
                    setTimeout(function() {
                    swal({
                    title: "Ocurrio un error inesperado al crear la copia de seguridad",
                    text: "Inténtelo de nuevo o contacte a su soporte técnico",
                    closeOnClickOutside: false,
                    type: "error"
                        }, function() 
                        {
                            window.location = "../vistas/backup.php";
                        });
                    }, 1000);
                </script>';

        }
    }
}
mysqli_free_result($result);
?>

