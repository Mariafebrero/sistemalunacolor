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



//if ($_SESSION['Escritorio']==1)
//{

?>


<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">

              <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="fas fa-shopping-basket"></i>
                  
                </div>
               <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                 <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                 <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->


              <!-- Editar usuario -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" alt="User profile picture">
                  <h3 class="profile-username text-center"><?php echo $_SESSION['nombre_usuario']?></h3>
                  <center>

                  <!-- <div class="form-group"><a data-toggle="modal" href="#myModal"><button id="" type="button" class="btn btn-primary"> <span class="fa fa-user"></span> Editar Usuario</button></a>-->

                   </center>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

    <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog" style="width: 40% !important;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Editar Usuario</h4>
        </div>
        <div class="modal-body">

 <!-- Contenido de editar el usuario -->

                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Editar</th>
                            <th>Usuario </th>
                            <th>Nombre usuario</th>
                            <th>contraseña</th>
                            <th>Imagen</th>
                            <th>correo_electronico</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>  
                          </tfoot>
                        </table>
                    </div>
                     
                      <!-- Cabezera del formulario -->
                     <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                            <!-- Usuario -->
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Usuario(*):</label>
                            <input type="hidden" name="id_usuario2" id="id_usuario2">
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

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                   
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
   
  <!-- fin Contenido de editar el usuario-->

          

</div>
        <div class="modal-footer">

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

//}
//else
//{
  //require 'noacceso.php';
//}

require 'footer.php';
?>

<script type="text/javascript" src="scripts/editarusuarioescritorio.js"></script>
<script type="text/javascript" src="scripts/contrausuario.js"></script>

<script type="text/javascript">
function mostrarPassword(){
    var cambio = document.getElementById("contrasena");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
      cambio.type = "password";
      $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
  } 
  
  $(document).ready(function () {
  //CheckBox mostrar contraseña
  $('#ShowPassword').click(function () {
    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
  });
});
</script>


<?php 
}
ob_end_flush();
?>
