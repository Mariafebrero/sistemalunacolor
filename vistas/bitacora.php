<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre_usuario"]))
{
  header("Location: login.php");
}
else
{
require 'header.php';
if ($_SESSION['Seguridad']==1)
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
                          <h1 class="box-title">Bitacora <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Id_bitacora</th>
                            <th>Fecha</th>
                            <th>Id_usuario</th>
                            <th>Id_objeto</th>
                            <th>Pantalla</th>
                            <th>Descripcion</th>
                            <th>Accion</th>
                            <th>Descripcion</th>
                            <th>Creado_por</th>
                            <th>Fecha_creacion</th>
                            <th>Modificado_por</th>
                            <th>Fecha_modificacion</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                             <th>Id_bitacora</th>
                            <th>Fecha</th>
                            <th>Id_usuario</th>
                            <th>Id_objeto</th>
                            <th>Pantalla</th>
                            <th>Descripcion</th>
                            <th>Accion</th>
                            <th>Descripcion</th>
                            <th>Creado_por</th>
                            <th>Fecha_creacion</th>
                            <th>Modificado_por</th>
                            <th>Fecha_modificacion</th>
                          </tfoot>
                        </table>
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

<script type="text/javascript" src="scripts/bitacora.js"></script>

<?php 
}
ob_end_flush();
?>
