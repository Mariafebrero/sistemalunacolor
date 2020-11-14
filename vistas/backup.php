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
                          <img class="imagen" width="250" heigth="250" src="../public/img/titulos/BACKUP.svg">
                      
                      </center>
                      <!-- FIN IMAGEN TITULO --> 


                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    
                   
<form action="../ajax/restore.php" method="POST" enctype="multipart/form-data" id="frm-restore">
    <div class="form-row">


         <center> 
        <img class="imagen" width="500" heigth="500" src="../public/img/titulos/BINFO.svg">
                      
        </center>
     

        <center><h2>Realizar Backup</h2></center>
        <div>
<!--            <center><input type="file" name="backup_file" class="input-file"/></center> -->
  
            <center>
            <div class="row">

            <div class="form-group col-lg-3 col-xs-12">    
            <input type="hidden" name="id_usuario" id="id_usuario">
            </div>

            <div class="form-group col-lg-6 col-xs-12"> 
            <a href="../ajax/backup_ajax.php" class="btn btn-primary"> Backup</a>
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


