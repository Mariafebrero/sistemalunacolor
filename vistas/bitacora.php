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
                          <img class="imagen" width="250" heigth="250" src="../public/img/titulos/BITACORA.svg">
                      
                      </center>
                      <!-- FIN IMAGEN TITULO --> 
                          <br>

                        <!--<form class="form-inline" method="POST" action="">
                            <div class="col-sm-12">
                            <div class="form-group">
                         <label>Fecha Inicio</label>
                          <input type="date"style="WIDTH: 300px; HEIGHT: 30px" class="form-control" name="fecha_inicio" id="fecha_inicio" >
                          <label>Fecha Fin</label>
                          <input type="date" style="WIDTH: 300px; HEIGHT: 30px" class="form-control" name="fecha_fin" id="fecha_fin" >
                          <button class="btn btn-primary" name="search"><span class="fa fa-search"></span></button> 

                          <a href="bitacora.php" type="button" class="btn btn-success"><span class = "fa fa-sync-alt"><span></a>

                           
                           </div>
                           </div>
  
                        </form>-->

                          <?php 
                        date_default_timezone_set("America/Tegucigalpa");
                        $fecha_creacion = strtotime("now"); 
                        $fecha_creacion = date("Y-m-d", $fecha_creacion); 
                       
                         ?>

                      <div class="panel-body table-responsive" id="listadoregistros">
                        <div class="form-group col-lg-4 col-xs-12">
                          <label>Fecha Inicio</label>
                          <input type="date" class="form-control" style="WIDTH: 450px; HEIGHT: 30px" name="fecha_inicio" id="fecha_inicio" value=<?php echo $fecha_creacion; ?>>
                        </div>
                        <div class="form-group col-lg-4 col-xs-12">
                          <label>Fecha Fin</label>
                          <input type="date" class="form-control" style="WIDTH: 450px; HEIGHT: 30px" name="fecha_fin" id="fecha_fin" value=<?php echo $fecha_creacion; ?>>
                        </div>

                         <div class="form-group col-lg-4 col-xs-12">
                          <label>Actualizar</label>
                          <br>
                         <a href="bitacora.php" type="button" class="btn btn-success" style="WIDTH: 50px; HEIGHT: 30px" ><span class = "fas fa-sync-alt"><span></a>
                        </div>
                    </div>
                   
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-hover">
                          <thead>
                            <th>Nº</th>
                            <th>Fecha Busqueda</th>
                            <th>Nº de Usuario</th>
                            <th>Imagen</th>
                            <th>Creado por</th>
                            <th>Nº de Pantalla</th>
                            <th>Pantalla</th>
                            <th>Descripcion</th>
                            <th>Accion</th>
                            <th>Descripcion</th>
                            <th>Fecha y hora de creación</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Nº</th>
                            <th>Fecha Busqueda</th>
                            <th>Nº de Usuario</th>
                            <th>Imagen</th>
                            <th>Creado por</th>
                            <th>Nº de Pantalla</th>
                            <th>Pantalla</th>
                            <th>Descripcion</th>
                            <th>Accion</th>
                            <th>Descripcion</th>
                            <th>Fecha y hora de creación</th>
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

<!--<script type="text/javascript">
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
</script>-->




<?php 
}
ob_end_flush();
?>
