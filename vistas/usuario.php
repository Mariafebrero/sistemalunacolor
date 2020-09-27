<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

//nombre new variable para secion
if (!isset($_SESSION["nombre_usuario"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';

if ($_SESSION['usuario']==1)
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
                          <h1 class="box-title">Usuario <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Rol </th>
                            <th>Usuario </th>
                            <th>Nombre usuario</th>
                            <th>contraseña</th>
                            <th>Imagen</th>
                            <th>correo_electronico</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                           <th>Opciones</th>
                            <th>Rol </th>
                            <th>Usuario </th>
                            <th>Nombre usuario</th>
                            <th>contraseña</th>
                            <th>Imagen</th>
                            <th>correo_electronico</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                     
                      <!-- Cabezera del formulario -->
                     <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                            <!-- Usuario -->
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Usuario(*):</label>
                            <input type="hidden" name="id_usuario" id="id_usuario">
                            <input type="text" class="form-control" name="usuario" id="usuario" maxlength="15" placeholder="Usuario" onkeyup="javascript:this.value=this.value.toUpperCase();"required>
                          </div>

                          <!-- Nombre usuario -->
                           <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Nombre usuario(*):</label>
                            <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" maxlength="100" placeholder="Nombre Usuario" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                          </div>

                          <!-- Contraseña -->
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Contraseña(*):</label>
                            <input type="password" class="form-control" name="contrasena" id="contrasena" maxlength="100" placeholder="Contrasena" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$" required>
                          </div>

                           <!-- Permisos -->
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Permisos:</label>
                            <ul style="list-style: none;" id="permisos">
                            </ul>
                          </div>

                           <!-- Rol -->
                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Roles(*):</label>
                            <select id="id_rol" name="id_rol" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>

                           <!-- Imagen -->
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                            <input type="hidden" name="imagenactual" id="imagenactual">
                            <img src="" width="150px" height="120px" id="imagenmuestra">
                          </div>

                          <!-- Correo electronico -->
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Correo electronico:</label>
                            <input type="email" class="form-control" name="correo_electronico" id="correo_electronico" maxlength="50" placeholder="Correo electronico">
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
<script type="text/javascript" src="scripts/usuario.js"></script>

<?php 
}
ob_end_flush();
?>