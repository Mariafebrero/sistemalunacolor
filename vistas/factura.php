<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre_usuario"]))
{
  header("Location:factur login1.php");
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
                          <img class="imagen" width="250" heigth="250" src="../public/img/titulos/FACTURACION.svg">
                      
                      </center>
                      <!-- FIN IMAGEN TITULO --> 
                          <br>

                            <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar nueva factura</button>

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

                        <div class="box-tools pull-right">
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>

                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <label>Cliente:</label>
                            <input type="hidden" name="idingreso" id="idingreso">
                            <select id="idproveedor" name="idproveedor" class="form-control selectpicker" data-live-search="true" required>
                               <option value="Boleta">Seleccione un cliente</option>
                              
                            </select>

                          </div>
                           <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>Fecha factura:</label>
                            <input type="date" class="form-control" name="fecha_hora" id="fecha_hora" required="">
                          </div>

                        
                          

                          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-10">
                            <label>Tipo de pago::</labe>
                            <select name="tipo_comprobante" id="tipo_comprobante" class="form-control selectpicker" required="">
                                 <option value="Boleta">Seleccione una opción</option>
                        
                            </select>
                          </div>

                           

                          <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                              <thead style="background-color:#fcb072">
                                    <th>Id Producto</th>
                                    <th>Nombre Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unitario</th>
                                    <th>Subtotal</th>
                                </thead>
                                <tfoot>
                                </tfoot>
                                <tbody>
                                  
                                </tbody>
                            </table>
                          </div>

                            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-4">
                            <label>Descuento:</label>
                            <input type="text" class="form-control" name="impuesto" id="impuesto" required="">

                            <label>Importe Gravado:</label>
                            <input type="text" class="form-control" name="impuesto" id="impuesto" required="">
                          </div>

                  

                           <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-4">
                            <label>Importe Exento:</label>
                            <input type="text" class="form-control" name="impuesto" id="impuesto" required="">

                            <label>Importe Exonerado:</label>
                            <input type="text" class="form-control" name="impuesto" id="impuesto" required="">
                      
                          </div>

                           

                           <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-4">
                            <label>Impuesto:</label>
                            <input type="text" class="form-control" name="impuesto" id="impuesto" required="">
                            <label>Total:</label>
                            <input type="text" class="form-control" name="impuesto" id="impuesto" required="">
                          </div>

                          
                        
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-print"></i> Facturar</button>

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

  <!-- Modal -->
  
  <!-- Fin modal -->
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



