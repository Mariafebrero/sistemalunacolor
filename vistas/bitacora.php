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
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>
      
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
       <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


      <div class="content-wrapper">        
        <!-- Main content -->


        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                       <center> <h1 ><span class="hiddenui"><i class="fa fa-list-alt"> Bitácora</i></span></h1> </center>  















                      
                       
                          <form class="form-inline" method="POST" action="">
                            <div class="col-sm-12">
                            <div class="form-group">
                            <label>Fecha Inicio</label>
                          <input type="date"style="WIDTH: 300px; HEIGHT: 30px" class="form-control" name="fecha_inicio" id="fecha_inicio" >
                          <label>Fecha Fin</label>
                          <input type="date" style="WIDTH: 300px; HEIGHT: 30px" class="form-control" name="fecha_fin" id="fecha_fin" >
                          <button class="btn btn-primary" name="search"><span class="fa fa-search"></span></button> <a href="bitacora.php" type="button" class="btn btn-success"><span class = "fa fa-sync-alt"><span></a>
                           
                           </div>
                           </div>
  
                        </form>

                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <td>Nº</td>
                            <td>Fecha</td>
                            <td>Nº de Usuario</td>
                            <td>Id Objeto</td>
                            <td>Objeto</td>
                            <td>Descripcion</td>
                            <td>Accion</td>
                            <td>Descripcion</td>
                            <td>Creado Por</td>
                            <td>Fecha creación</td>
                           
                          </thead>
                          <tbody> 
                          <?php include'../ajax/busquedabitacora.php'?>                           
                          </tbody>
                          <tfoot>
                            <td>Nº</td>
                            <td>Fecha</td>
                            <td>Nº de Usuario</td>
                            <td>Id Objeto</td>
                            <td>Objeto</td>
                            <td>Descripcion</td>
                            <td>Accion</td>
                            <td>Descripcion</td>
                            <td>Creado Por</td>
                            <td>Fecha creación</td>
                           
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#tbllistado').DataTable({
      language:{
    "sProcessing":     "Procesando...",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de MAX registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
}
    });
  });
</script>




<?php 
}
ob_end_flush();
?>
