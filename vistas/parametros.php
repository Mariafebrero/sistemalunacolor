<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();


//Permisos
include '../config/conexion.php';
$idobjeto = $_GET['objeto'];
$rol = $_SESSION['id_rol'];

$sql = "SELECT * from tbl_permisos WHERE id_objeto = '$idobjeto' and id_rol = '$rol' and permiso_insercion = 1";
$stmt = mysqli_query($conexion,$sql);
if(mysqli_num_rows($stmt)>0){
  $permiso = true;
}else{
  $permiso = false;
}
 
$_SESSION["objeto"] = $_GET['objeto'];


//nombre new variable para secion
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
                          <img class="imagen" width="250" heigth="250" src="../public/img/titulos/PARAMETROS.svg">
                      
                      </center>
                      <!-- FIN IMAGEN TITULO --> 
                          <br>
                          
                        
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                   <!-- Parametro ADMIN_NUM_REGISTROS -->
                    <?php
                    include '../config/conexion.php';
                    $query5=mysqli_query($mysqli,"SELECT valor FROM tbl_parametros WHERE id_parametro = '23'");      
                    while($tbl_parametros = mysqli_fetch_array($query5))
                        {
                    ?> 
                            <?php $valor1=$tbl_parametros['valor']?>
                    <?php

                        }                    
                    ?> 
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-hover" data-page-length=<?php echo $valor1 ?>> 
                          <thead>
                            <th>Editar</th>
                            <th>Parametro</th>
                            <th>Valor</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                             <th>Editar</th>
                            <th>Parametro</th>
                            <th>Valor</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Valor:</label>


                            <!-- Parametro ADMIN_NUM_REGISTROS -->
                    <?php
                    /*
                    include '../config/conexion.php';
                    $query1=mysqli_query($mysqli,"SELECT id_parametro FROM tbl_parametros WHERE id_parametro = '1'");      
                    while($tbl_parametros1 = mysqli_fetch_array($query1))
                        {
                    ?> 
                            <?php $id_parametro1=$tbl_parametros1['id_parametro']?>
                    <?php

                        }

                    $query2=mysqli_query($mysqli,"SELECT id_parametro FROM tbl_parametros WHERE id_parametro = '2'");      
                    while($tbl_parametros2 = mysqli_fetch_array($query2))
                        {
                    ?> 
                            <?php $id_parametro2=$tbl_parametros2['id_parametro']?>
                    <?php

                        }  */
                     //$value=0;                     
                    ?> 
                       <!-- <input type="hidden" name=<?php echo $id_parametro ?>, id=<?php echo $id_parametro ?>>-->
                            
                          <input type="hidden" name="id_parametro" id="id_parametro">

                           <input type="text" class="form-control" name="valor" id="valor" maxlength="50" placeholder="valor" required>  </div>

                          
                                

                           <!-- <input type="hidden" name="id_parametro" id="id_parametro">
                            <input type="text" class="form-control" name="valor" id="valor" maxlength="50" placeholder="valor" required>
                          </div>-->
                          
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                        
                          </div>
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

<script type="text/javascript" src="scripts/parametro.js"></script>


<?php 
}
ob_end_flush();
?>
