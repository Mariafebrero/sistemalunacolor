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


//if ($_SESSION['Usuario']==1)
//{

/*
  include '../../config/conexion.php';
  
  $query=mysqli_query($mysqli,"SELECT valor FROM tbl_parametros WHERE id_parametro = '14'");


  while($tbl_parametros = mysqli_fetch_array($query))
                        {
                    ?> 
                            <?php $valor=$tbl_parametros['valor']?>
                    <?php

                        }*/




?>

<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



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
                           
                            <th>Imagen</th>
                            <th>correo_electronico</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                     
                      <!-- Cabezera del formulario -->
                     <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                          <script>
                              function soloLetras(e) {
                             var key = e.keyCode || e.which,
                              tecla = String.fromCharCode(key).toLowerCase(),
                              letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
                              especiales = [8, 37, 39, 46],
                              tecla_especial = false;

                              for (var i in especiales) {
                                 if (key == especiales[i]) {
                                  tecla_especial = true;
                              break;
                                                            }
                                                        }

                            if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                             return false;
                              }
                              }
                            </script>

                            <!-- Usuario -->
                            <div class="row">
                          <div class="form-group col-lg-4 col-xs-12">
                            <label>Usuario(*):</label>
                            <input type="hidden" name="id_usuario" id="id_usuario">
                            <input type="text" class="form-control" name="usuario" id="usuario" minlength="3" maxlength="15" placeholder="Usuario" onkeyup="javascript:this.value=this.value.toUpperCase();" 
                            onkeypress="return soloLetras(event)" onpaste="return false" required>
                          </div> 

                          <!-- Nombre usuario -->
                           <div class="form-group col-lg-4 col-xs-12">
                            <label>Nombre usuario(*):</label>
                            <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" maxlength="100" placeholder="Nombre Usuario" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                          </div>
                         </div>

                         <br>

                           <div class="row">
                        <!-- Coontraseña -->  
                       <div class="form-group col-lg-4 col-xs-12">
                          <label>Contraseña(*):</label>
                              
                                 <input ID="confirmar_contrasena" type="Password" name="confirmar_contrasena" Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,10}$"  minlength="5" maxlength="10" required>
                                <!-- boton monstrar Contraseña -->
                                 <div class="input-group-append">
                                 <button id="show_password" class="login100-form-btn" name="" type="button" onclick="mostrarPassword2()" > 
                                  <h5><span class="fas fa-eye-slash icon"></span></h5></button>
                             </div>
                          
                       </div>

                        <div class="form-group col-lg-4 col-xs-12">
                          <label>Confirmar Contraseña(*):</label>
                               
                                 <input ID="contrasena" type="Password" name="contrasena" Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,10}$"  minlength="5" maxlength="10" required>
                                <!-- boton monstrar Contraseña -->
                                 <div class="input-group-append">
                                 <button id="show_password" class="login100-form-btn" name="" type="button" onclick="mostrarPassword()" > 
                                  <h5><span class="fas fa-eye-slash svg"></span></h5></button>
                             </div>
                       
                       </div>
                       </div>

                         <div class="row">
                            <div class="form-group col-lg-4 col-xs-12">
                             <center>
                                <small style = "position:relative;  top:-20px;"><h6>*La contraseña debe tener entre 5 a 10 letras, mínimo un número, una letra mayúscula y un símbolo.</h6></small> 
                            </center>
                            </div>
                            <br>
                         </div>

                         <div class="row">
                           <!-- Rol -->
                           <div class="form-group col-lg-4 col-xs-12">
                            <label>Roles(*):</label>
                            <select id="id_rol" name="id_rol" class="form-control selectpicker" data-live-search="true" 
                            required>
                            </select>
                          </div>

                          <!-- Estado -->
                           <div class="form-group col-lg-4 col-xs-12">
                            <label>Estado(*):</label>
                            <select id="id_estado_usuario" name="id_estado_usuario" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
                        </div>
                         <br>

                          <div class="row">
                          <!-- Correo electronico -->
                          <div class="form-group col-lg-4 col-xs-12">
                            <label>Correo electronico:</label>
                            <input type="email" class="form-control" name="correo_electronico" id="correo_electronico" maxlength="50" placeholder="Correo electronico" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
                          </div>

                           <!-- Imagen -->
                          <div class="form-group col-lg-4 col-xs-12">
                            <label>Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                            <input type="hidden" name="imagenactual" id="imagenactual">
                            <img src="" width="150px" height="120px" id="imagenmuestra">
                          </div>
                        </div>
                        <br>

                         <!-- <div class="row">
                        <div class="form-group col-lg-4 col-xs-12">
                            <label>Fecha creación(*):</label>
                            <input type="text" class="form-control" name="fecha_creacion" id="fecha_creacion">
                        </div>

                        <div class="form-group col-lg-4 col-xs-12">
                            <label>Fecha Vencimiento(*):</label>
                            <input type="text" class="form-control" name="fecha_vencimiento" id="fecha_vencimiento">
                        </div>
                        </div>-->
                        
<small id="fa" name="fa" style = "position:relative;  top:-10px;" ><h4> *Fecha Creación <?php
                            $fecha_creacion=null;



                             date_default_timezone_set("America/Tegucigalpa");
                             $fecha_creacion = strtotime("now"); 
                             $fecha_creacion = date("d-m-Y H:i:s", $fecha_creacion); 
                             echo $fecha_creacion; 
                             ?> 
        </h4></small>

        <br>
        <br>

<small id="fv" name="fv" style = "position:relative;  top:-10px;" ><h4> *Fecha Vencimiento <?php
                            $fecha_vencimiento=null;
                        
                        include '../config/conexion.php';
                            $query4=mysqli_query($mysqli,"SELECT valor FROM tbl_parametros WHERE id_parametro = '14'");
      
                        while($tbl_parametros = mysqli_fetch_array($query4))
                        {
                    ?> 
                            <?php $valor=$tbl_parametros['valor']?>
                    <?php

                        }


                            $parametroV = "+" . $valor . " Days";

                           
                             date_default_timezone_set("America/Tegucigalpa");
                             $fecha_creacion = strtotime("now"); 
                             $fecha_vencimiento = strtotime($parametroV, $fecha_creacion);
                             $fecha_vencimiento = date("d-m-Y H:i:s", $fecha_vencimiento); 
                             echo $fecha_vencimiento; 
                             ?> 
        </h4></small>
                          
                           <!-- Permisos -->
                         <!-- <div class="form-group col-lg-4 col-xs-12"> -->
                          <!--   <label>Permisos:</label> -->
                           <!--  <ul style="list-style: none;" id="permisos"> -->
                          <!--   </ul> -->
                         <!--  </div> -->

                          <!--  <br> -->

                          <br>
                          <br>
                          <br>
                          <br>
                          <br>

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

//}
//else
//{
// require 'noacceso.php';

//}

require 'footer.php';
?>
<script type="text/javascript" src="scripts/usuario.js"></script>


<script type="text/javascript">
function mostrarPassword2(){
    var cambio1 = document.getElementById("confirmar_contrasena");
    if(cambio1.type == "password"){
      cambio1.type = "text";
      $('.icon').removeClass('fas fa-eye-slash').addClass('fas fa-eye');
    }else{
      cambio1.type = "password";
      $('.icon').removeClass('fas fa-eye').addClass('fas fa-eye-slash');
    }
  } 
  
  $(document).ready(function () {
  //CheckBox mostrar contraseña
  $('#ShowPassword2').click(function () {
    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
  });
});
</script>

<script type="text/javascript">
function mostrarPassword(){
    var cambio = document.getElementById("contrasena");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.svg').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
      cambio.type = "password";
      $('.svg').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
  } 
  
  $(document).ready(function () {
  //CheckBox mostrar contraseña
  $('#ShowPassword').click(function () {
    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
  });
});
</script>



<script>
        window.onload = function () {
          document.getElementById("contrasena").onchange = validatePassword;
          document.getElementById("confirmar_contrasena").onchange = validatePassword;
        }

        function validatePassword() {
          var pass2 = document.getElementById("confirmar_contrasena").value;
          var pass1 = document.getElementById("contrasena").value;
          if (pass1 != pass2)
            document.getElementById("confirmar_contrasena").setCustomValidity("La clave no coincide");
          else
            document.getElementById("confirmar_contrasena").setCustomValidity('');
          //empty string means no validation error
        }
</script>


<style type="text/css">
  
  #container input {
  padding-right: 32px;
}

.input-group-append {
  bottom: 10px;
  cursor: pointer;
  height: 25px;
  position: absolute;
  right: 10px;
  width: 25px;
  z-index: 10;
}

.form-clear .material-icons {
  font-size: 24px;
  position:absolute;
  top:0px;
  right:0px!important;
}

.login100-form-btn{

  border-radius: 0px 0px 0px 0px;
-moz-border-radius: 0px 0px 0px 0px;
-webkit-border-radius: 0px 0px 0px 0px;
border: 0px solid #000000;
}
</style>



<?php 
}
ob_end_flush();
?>

