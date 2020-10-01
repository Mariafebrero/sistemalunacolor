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

if ($_SESSION['Escritorio']==1)
{

?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">


              <!-- Editar usuario -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" alt="User profile picture">
                  <h3 class="profile-username text-center"><?php echo $_SESSION['nombre_usuario']; ?></h3>
                  <center>
                   <div class="form-group"><a data-toggle="modal" href="#myModal"><button id="btnAgregarArt" type="button" class="btn btn-primary"> <span class="fa fa-user"></span> Editar Usuario</button></a>
                   </center>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

    <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog" style="width: 65% !important;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Editar Usuario</h4>
        </div>
        <div class="modal-body">

 <!-- Contenido de editar el usuario -->
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
                            <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" maxlength="100" placeholder="Nombre Usuario" required>
                          </div>

                      
                        <!-- Coontraseña -->  
          <div class="col-xs-12">
              <label>Contraseña(*):</label>
               <div class="input-group">
              <input ID="contrasena" type="Password" name="contrasena" Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"  minlength="5" maxlength="10" required>
          <!-- boton monstrar Contraseña -->
                <div class="input-group-append">
                  <button id="show_password" class="login100-form-btn" name="botonentrar" type="button" onclick="mostrarPassword()" style="background-color: rgb(233,118,46)"> 
                    <h5><span class="fa fa-eye-slash icon"></span></h5></button>
                  </div>
                  </div>
                    </div>
                  <p></p> 

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
                            <input type="email" class="form-control" name="correo_electronico" id="correo_electronico" maxlength="50" placeholder="Correo electronico" required>
                          </div>




  <!-- fin Contenido de editar el usuario-->

          

        </div>
        <div class="modal-footer">

      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

      <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>

          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>        
      </div>
    </div>
  </div>  
  <!-- Fin modal -->


       
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
<script type="text/javascript" src="scripts/contrausuario.js"></script>


<?php 
}
ob_end_flush();
?>
