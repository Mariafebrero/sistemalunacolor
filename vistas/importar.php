<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre_usuario"]))
{
  header("Location: login1.php");
}
else
{
require 'header.php';

if ($_SESSION['id_rol']==2)
{

?>

<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">

                         <!-- IMAGEN TITULO -->
                      <center> 
                          <img class="imagen" width="250" heigth="250" src="../public/img/titulos/RESTORE.svg">
                      
                      </center>
                      <!-- FIN IMAGEN TITULO --> 


                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    
                   
<form action="../ajax/restore.php" method="POST" enctype="multipart/form-data" id="frm-restore">
    <div class="form-row">


         <center> 
        <img class="imagen" width="500" heigth="500" src="../public/img/titulos/AR.svg">
                      
        </center>
     

        <center><h2>Elige el archivo de Respaldo</h2></center>
        <div>
<!--            <center><input type="file" name="backup_file" class="input-file"/></center> -->
  
            <center>
            <div class="row">

            <div class="form-group col-lg-3 col-xs-12">    
            <input type="hidden" name="id_usuario" id="id_usuario">
            </div>

            <div class="form-group col-lg-6 col-xs-12"> 
            <select name="restorePoint" class="form-control selectpicker" data-live-search="true" style="height: 500px; width:50px; " required>
            <option style="color:#000000;"  value="" disabled="" selected="">Selecciona un punto de restauración </option>
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

        </select>
        </div>


            <div class="form-group col-lg-3 col-xs-12">    
            <input type="hidden" name="id_usuario" id="id_usuario">
            </div>
        
       
     
        </div>    
            

        </div>
        <br>
        <br>
        <br>
        <br>
    </div>

    <!--BTON -->

    <div>
        <center>

            <!--<input type="submit" name="restore" value="Restore"
            class="btn-action btn-primary" style="width: 100px;"/>-->

             <button type="submit" name="restore" value="Restore" class="btn btn-primary"> Restore</button>

        </center>
    </div>

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
     
       


</form>



                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->




<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>
<script type="text/javascript" src="scripts/rol.js"></script>
<?php 
}
ob_end_flush();
?>


