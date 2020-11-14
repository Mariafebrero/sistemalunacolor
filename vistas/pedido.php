<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

//nombre new variable para secion
if (!isset($_SESSION["nombre_usuario"]))
{
  header("Location: login1.php");
}
else
{
require 'header.php';

if ($_SESSION['id_rol']==2 || $_SESSION['id_rol']==3 || $_SESSION['id_rol']==4)
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
                          <img class="imagen" width="250" heigth="250" src="../public/img/productos/titulo pedido-06.svg">
                      
                      </center>
                      <!-- FIN IMAGEN TITULO --> 
                          <br>

                        <!-- CONSULTA -->   
                        <div class="row">
                          <div class="form-group col-lg-3 col-xs-12"> 
                         
                            <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar Pedido</button>
                            </div>
                         </div>
                        <div class="box-tools pull-right">
                        </div>

                        <?php 
                        date_default_timezone_set("America/Tegucigalpa");
                        $fecha_creacion = strtotime("now"); 
                        $fecha_creacion = date("Y-m-d", $fecha_creacion); 
                       
                         ?>

                         <div class="form-group col-lg-3 col-xs-12">
                          <label name="fecha_inicio1" id="fecha_inicio1">Fecha Inicio</label>
                          <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value=<?php echo $fecha_creacion; ?>>
                        </div>

                        <div class="form-group col-lg-3 col-xs-12">
                          <label name="fecha_fin1" id="fecha_fin1">Fecha Entrega</label>
                          <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value=<?php echo $fecha_creacion; ?>>
                        </div>

                         
                        <div class="form-group col-lg-2 col-xs-12" id="estado_pedido" name="estado_pedido">
                          <label  id="id_estado_pedido1" name="id_estado_pedido1">Estado</label>
                          <br>
                            <select id="id_estadopedido" name="id_estadopedido" class="form-control selectpicker" data-live-search="true" required></select>
                        </div>
        
                        <div class="form-group col-lg-2 col-xs-12">
                          <br>
                         <a href="" type="button" class="btn btn-primary" style="WIDTH: 50px; HEIGHT: 40px" name="buscar1" id="buscar1" ><span class = "fas fa-search" style="WIDTH: -50px; HEIGHT: 50px" name="buscar" id="buscar"><span></a>

                          <a href="bitacora.php" type="button" class="btn btn-success" style="WIDTH: 50px; HEIGHT: 40px" name="actualizar1" id="actualizar1" ><span class = "fas fa-sync-alt" style="WIDTH: -50px; HEIGHT: 50px" name="actualizar" id="actualizar"><span></a>
                        </div>
                    </div>
                    <!-- FIN CONSULTA --> 

                
                    <!-- DATATABLE DE PEDIDO -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Nº Pedido</th>
                            <th>Cliente</th>
                            <th>Detalle Pedido</th>
                            <th>Fecha Inicial</th>
                            <th>Fecha Entrega</th>
                            <th>Descuento</th>
                            <th>Impuesto</th>
                            <th>Total</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                           <th>Opciones</th>
                            <th>Nº Pedido</th>
                            <th>Cliente</th>
                            <th>Detalle Pedido</th>
                            <th>Fecha Inicial</th>
                            <th>Fecha Entrega</th>
                            <th>Descuento</th>
                            <th>Impuesto</th>
                            <th>Total</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                    <!-- FIN DATATABLE DE PEDIDO -->


                     <!-- FORMULARIO DE PEDIDO -->
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                       <div class="row">

                        <div class="form-group col-lg-3 col-xs-12">
                          <label>Nombre Cliente / Representante:</label>
                          <br>
                            <select id="id_cliente" name="id_cliente" class="form-control selectpicker" data-live-search="true" required></select>
                        </div>

                          <div class="form-group col-lg-2 col-xs-12">
                            <label>Nº: </label>
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="ID" required>
                          </div>

                    
                          <?php 
                        date_default_timezone_set("America/Tegucigalpa");
                        $fecha_creacion = strtotime("now"); 
                        $fecha_creacion = date("Y-m-d", $fecha_creacion); 
                       
                         ?>

                         <div class="form-group col-lg-3 col-xs-12">
                          <label name="fecha_inicio1" id="fecha_inicio1">Fecha Inicio</label>
                          <input type="date" class="form-control" name="fecha_inicial" id="fecha_inicial" value=<?php echo $fecha_creacion; ?>>
                        </div>

                        <div class="form-group col-lg-3 col-xs-12">
                          <label name="fecha_fin1" id="fecha_fin1">Fecha Fin</label>
                          <input type="date" class="form-control" name="fecha_entrega" id="fecha_entrega" value=<?php echo $fecha_creacion; ?>>
                        </div>

                     </div>

                      
                         <div class="form-group col-lg-3 col-xs-12">
                                      
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#test1"> <span class="fa fa-plus"></span> Agregar Producto</button>
                            
                          </div>

                        <!-- DATATABLE DE PRODUCTO POR PEDIDO -->  
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <table id="detalles" class="table table-hover">
                              <thead style="background-color:#A9D0F5">
                                    <th>Opciones</th>
                                    <th>Producto</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Precio de venta</th>
                                    <th>Descuento</th>
                                    <th>Subtotal</th>
                                </thead>
                                <tfoot>
                                    <th>TOTAL</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                     <th></th>
                                    <th><h4 id="total">L/. 0.00</h4><input type="hidden" name="total_venta" id="total_venta"></th> 
                                </tfoot>
                                <tbody>
                                  
                                </tbody>
                            </table>
                          </div>
                           <!-- FIN DATATABLE DE PRODUCTO POR PEDIDO --> 
                        

                           <!--Botones -->
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button id="btnCancelar" class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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

  <!-- FORMULARIO DE PEDIDO -->



<!-- INICIO MODAL DE PRODUCTOS -->
  <div id="test1" class="modal fade" role="dialog" style="z-index: 1400;">
  <div class="modal-dialog" style="width: 65% !important;">
    <!-- Modal content-->
    <div class="modal-content">

      <!-- Modal titulo-->
      <div class="modal-header" style="background:#3F3F3F;">
          <button style="color:#FFFFFF;" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

          <center> 
          
           <img class="imagen" width="200" heigth="200" src="../public/img/productos/titulo-05.svg">

          </center>
      </div>

    <!-- Modal cuerpo-->
      <div class="modal-body">
      <div class="panel-body" style="height: 400px;" id="formularioregistros2">
      <form name="formulario2" id="formulario2" method="POST">

<hr style="height:5px;border-width:0;color:#E9762F;background-color:#E9762F">

<center>

<h2 style="color:#E9762F">Generalidades</h2>
                
</center>


<hr style="height:5px;border-width:0;color:#E9762F;background-color:#E9762F">

    <div class="row">
        <!-- Rol -->
        <div class="form-group col-lg-4 col-xs-12">
          <label style="color:#E9762F;">Producto:</label>
          <select id="id_producto" name="id_producto" class="form-control selectpicker" data-live-search="true" required></select>
        </div>

        <!-- Estado -->
        <div class="form-group col-lg-4 col-xs-12">
          <label>Material:</label>
          <select id="id_material" name="id_material" class="form-control selectpicker" data-live-search="true"></select>
          </div>
                          
       <div class="form-group col-lg-4 col-xs-12">
          <label>Impresión:</label>
            <div class="row">
              <label class="checkbox-inline">
                  <input type="checkbox" value="">Tiro 
              </label>
              <label class="checkbox-inline">
                  <input type="checkbox" value="">Retiro
              </label>
           </div>
       </div>

    </div>

  <div class="row">

      <div class="form-group col-lg-4 col-xs-12">
        <label>Tamaño:</label>
        <select id="id_rol" name="id_rol" class="form-control selectpicker" data-live-search="true" required></select>
      </div>

       <div class="form-group col-lg-2 col-xs-12">
        <label></label>
          <div class="row">
              <label class="checkbox-inline">
                  <input type="checkbox" value="" >Tamaño Personalizado 
              </label>
         </div>
      </div>

       <div class="form-group col-lg-1 col-xs-4">
        <label> </label>
        <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="" required>
      </div>

      <div class="form-group col-lg-1 col-xs-1">
        <center>
         <h3>X</h3>
         </center>
      </div>

       <div class="form-group col-lg-1 col-xs-4">
        <label> </label>
        <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="" required>
      </div>


 </div>


 <div class="row">

    <div class="form-group col-lg-4 col-xs-12">
        <label>Acabado:</label>
        <select id="id_rol" name="id_rol" class="form-control selectpicker" data-live-search="true" required></select>
   </div>

   <div class="form-group col-lg-4 col-xs-12">
        <label>Comentario:</label>
        <textarea class="form-control" rows="5" id="comment"></textarea>
   </div>

 </div> 

<hr style="height:5px;border-width:0;color:#E9762F;background-color:#E9762F">

<center>

<h2 style="color:#E9762F">Variantes</h2>
                
</center>


<hr style="height:5px;border-width:0;color:#E9762F;background-color:#E9762F">

<div class="row">

  <div class="form-group col-lg-4 col-xs-12">
    <label>Cantidad de paginas:</label>
    <input type="text" class="form-control" name="usuario" id="usuario">
 </div>

 <div class="form-group col-lg-4 col-xs-12">
    <label>Material de portada:</label>
    <input type="text" class="form-control" name="usuario" id="usuario">
 </div>

 <div class="form-group col-lg-4 col-xs-12">
    <label>Material interior:</label>
    <input type="text" class="form-control" name="usuario" id="usuario">
 </div>
  
</div>


<div class="row">

  <div class="form-group col-lg-4 col-xs-12">
    <label>Número de dobleces:</label>
    <input type="text" class="form-control" name="usuario" id="usuario">
 </div>

 <div class="form-group col-lg-4 col-xs-12">
    <label>Tarjetitas adicionales:</label>
    <input type="text" class="form-control" name="usuario" id="usuario">
 </div>

 <div class="form-group col-lg-4 col-xs-12">
    <label>Variedad de materiales:</label>
    <input type="text" class="form-control" name="usuario" id="usuario">
 </div>
  
</div>

<div class="row">

  <div class="form-group col-lg-4 col-xs-12">
    <label>Sobre:</label>
    <input type="text" class="form-control" name="usuario" id="usuario">
 </div>
  
</div>



      </form>  
      </div>
      </div> 
    <!-- FIN Modal cuerpo-->


      <!-- Modal FOOTER-->
       <div class="modal-footer">

        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <button class="btn btn-primary" type="submit" id=""><i class="fa fa-save"></i> Guardar</button>
          <button id="btnCancelar" class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
      </div>
          
      </div> 
    </div>
  </div>
</div>
<!-- FIN MODAL DE PRODUCTOS -->





<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>
<script type="text/javascript" src="scripts/pedido.js"></script>-->

<script type="text/javascript">
  




<?php 
}
ob_end_flush();
?>
