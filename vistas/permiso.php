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
                      
                     </div>


                      <!-- IMAGEN TITULO -->
                      <center> 
                          <img class="imagen" width="250" heigth="250" src="../public/img/titulos/PERMISOS.svg">
                      
                      </center>
                      <!-- FIN IMAGEN TITULO --> 
                          <br>
                
                   
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

                    <div class="row">
                        
                       <div class="form-group col-lg-2 col-xs-12">
                        <br>
                      <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar Permiso</button>
                       </div>


                         <div class="form-group col-lg-5 col-xs-12">
                          <label>Rol</label>
                          <select name="id_rol" id="id_rol" class="form-control selectpicker" data-live-search="true" required>                           
                          </select>                          
                          <button class="btn btn-success" onclick="listar()">Mostrar</button>
                        </div>

                         <div class="form-group col-lg-5 col-xs-12">
                          <label>Actualizar</label>
                          <br>
                         <a href="permiso.php" type="button" class="btn btn-success" style="WIDTH: 50px; HEIGHT: 30px" ><span class = "fas fa-sync-alt"><span></a>
                        </div>

                    </div>

                   
                          
                           <table id="tbllistado" class="table table-hover" data-page-length=<?php echo $valor1 ?>> 
                          <thead>
                            <th>Editar Permisos</th>
                            <th>Nº</th>
                            <th>Rol</th>
                            <th>Nº de Pantalla</th>
                            <th>Pantalla</th>
                            <th>Permiso Insercion</th>
                            <th>Permiso Eliminacion</th>
                            <th>Permiso Actualizacion</th>
                            <th>Permiso Consultar</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Editar Permisos</th>
                            <th>Nº</th>
                            <th>Rol</th>
                            <th>Nº de Pantalla</th>
                            <th>Pantalla</th>
                            <th>Permiso Insercion</th>
                            <th>Permiso Eliminacion</th>
                            <th>Permiso Actualizacion</th>
                            <th>Permiso Consultar</th>
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

                     <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                          <input type="hidden" name="id_permiso" id="id_permiso">

                          <div class="row">
                            <div class="form-group col-lg-6 col-xs-12">
                               <label>Rol</label>
                                  <select name="id_rol" id="id_rol2" class="form-control selectpicker" data-live-search="true" required> </select>           
                            </div>

                         <div class="form-group col-lg-6 col-xs-12">
                            <label>Pantalla</label>
                              <select name="id_objeto" id="id_objeto" class="form-control selectpicker" data-live-search="true" required> </select>           
                           </div>
                         </div>
                         <br>


                      <div class="row">
                        
                       <!-- IMAGEN TITULO -->
                      <center> 
                          <img class="imagen" width="600" heigth="600" src="../public/img/titulos/rot_per-22.svg">
                      
                      </center>
                      <!-- FIN IMAGEN TITULO --> 
                          <br>
                    </div>      
                

                  <div class="row">
                      <div class="form-group col-lg-3 col-xs-12">
                        <label>Permiso Inserción:</label>
                         <input Class="form-control" name="permiso_insercion" id="permiso_insercion" type="text" minlength="1" maxlength="1" value="1" min="0" max="1" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/>
                      </div>


                      <div class="form-group col-lg-3 col-xs-12">
                        <label>Permiso Eliminación:</label>
                         <input Class="form-control" name="permiso_eliminacion" id="permiso_eliminacion" type="text" minlength="1" maxlength="1" value="1" min="0" max="1" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/>
                      </div>


                      <div class="form-group col-lg-3 col-xs-12">
                        <label>Permiso Actualización:</label>
                         <input Class="form-control"  name="permiso_actualizacion" id="permiso_actualizacion" type="text" minlength="1" maxlength="1" value="1" min="0" max="1" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/>
                      </div>


                      <div class="form-group col-lg-3 col-xs-12">
                        <label>Permiso Consultar:</label>
                         <input Class="form-control" name="permiso_consultar" id="permiso_consultar" type="text" minlength="1" maxlength="1" value="1" min="0" max="1" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/>
                      </div>
                    </div>  

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                        
                          </div>
                        </form>
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
                               <br>
                                <br>
                                 <br>



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

<script type="text/javascript" src="scripts/permisos.js"></script>



<?php 
}
ob_end_flush();
?>
