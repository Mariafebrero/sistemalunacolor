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
                       <center> <h1 ><span class="hiddenui"><i class="fa fa-list-alt"> Bitácora</i></span></h1> </center>
                     </div>



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

                
                   
                    <!-- /.box-header -->
                    <!-- centro -->
                     <?php 
                        date_default_timezone_set("America/Tegucigalpa");
                        $fecha_creacion = strtotime("now"); 
                        $fecha_creacion = date("Y-m-d", $fecha_creacion); 
                       
                      ?>

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
                    
                        <div class="form-group col-lg-3 col-xs-12">
                          <label>Fecha Inicio</label>
                          <input type="date" class="form-control"  name="fecha_inicio" id="fecha_inicio" value=<?php echo $fecha_creacion; ?>>
                        </div>
                        <div class="form-group col-lg-3 col-xs-12">
                          <label>Fecha Fin</label>
                          <input type="date" class="form-control"  name="fecha_fin" id="fecha_fin" value=<?php echo $fecha_creacion; ?>>
                        </div>

                         <div class="form-group col-lg-3 col-xs-12">
                          <label>Usuario</label>
                          <select name="id_usuario" id="id_usuario" class="form-control selectpicker" data-live-search="true" required>                           
                          </select>                          
                          <button class="btn btn-success" onclick="listar()">Mostrar</button>
                        </div>

                         <div class="form-group col-lg-3 col-xs-12">
                          <label>Actualizar</label>
                          <br>
                         <a href="bitacora.php" type="button" class="btn btn-success" style="WIDTH: 50px; HEIGHT: 30px" ><span class = "fas fa-sync-alt"><span></a>
                        </div>

                   

                           <table id="tbllistado" class="table table-hover" data-page-length=<?php echo $valor1 ?>> 
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
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
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
