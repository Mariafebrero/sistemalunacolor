<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

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
                          <img class="imagen" width="250" heigth="250" src="../public/img/titulos/ROLES.svg">
                      
                      </center>
                      <!-- FIN IMAGEN TITULO --> 
                          <br> 

                            <button class="btn btn-success" id="btnagregar" <?php echo $permiso==false ? 'disabled' : '' ?>  onclick="mostrarform(true)"><i class="fa fa-address-book-o "></i> Agregar nuevo rol</button>

                        <div class="box-tools pull-right">
                        </div>
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
                            <th>Opciones</th>
                            <th>Rol</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                             <th>Opciones</th>
                            <th>Rol</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              
                            <input type="hidden" name="id_rol" id="id_rol">

                            <!-- Contraseña -->
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Rol(*):</label>
                            <input type="text" class="form-control" name="rol" id="rol" maxlength="30" placeholder="Rol" required>
                          </div>

                           <!-- Contraseña -->
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Descripcion(*):</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="100" placeholder="descripcion" required>
                          </div>
                          

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
<script type="text/javascript" src="scripts/rol.js"></script>
<?php 
}
ob_end_flush();
?>


