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


if ($_SESSION['id_rol']==2)
 {

include '../config/conexion.php';

 $id_usuario1=$_SESSION['id_usuario'];
 $usuario1=$_SESSION['usuario']; 
//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
 $sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
 VALUES('$id_usuario1','1',(select now()),'Entró','Entró a Mantenimiento de Usuario','$usuario1',(select now()))";
  ejecutarConsulta($sql_bitacora);

?>

<?php 
    
          $caracteres = '0123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$#@!?=%-+*.[]{}_,;:<>|';
    
         $caractereslong = strlen($caracteres);
          $clave = '';
           for($i = 0; $i < 10; $i++) 
          $clave .= $caracteres[rand(0, $caractereslong - 1)];
        

 ?>
<!DOCTYPE html>
<html lang="en">
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

                       <!-- IMAGEN TITULO -->
                      <center> 
                          <img class="imagen" width="300" heigth="300" src="../public/img//titulos/EDITARUSUARIO.svg">
                      
                      </center>
                      <!-- FIN IMAGEN TITULO --> 
                          <br>

                       <!-- Editar usuario -->
              <div class="box box-default">
                <div class="box-body box-profile" >

                  <img class="profile-user-img img-responsive img-circle" src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" alt="User profile picture">
                  <h3 class="profile-username text-center"><?php echo $_SESSION['nombre_usuario']?></h3>
                  <center>

                  <!-- <div class="form-group"><a data-toggle="modal" href="#myModal"><button id="" type="button" class="btn btn-primary"> <span class="fa fa-user"></span> Editar Usuario</button></a>-->

                   </center>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

                      <?php

                     // echo $_SESSION['Escritorio'];
                      //echo $_SESSION['Usuario']; 

                       ?>
                     
                          
                            
                    
                    <!-- /.box-header -->
                    <!-- centro -->

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
                        <table id="tbllistado" class="table table-hover" data-page-length=<?php echo $valor1 ?>> 
                          <thead>
                            <th>Editar Usuario</th>
                            <th>Nombre usuario</th>
                            <th>Imagen</th>
                            <th>correo_electronico</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Editar Usuario</th>
                            <th>Nombre usuario</th>
                            <th>Imagen</th>
                            <th>correo_electronico</th>
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
                            <input type="hidden" name="id_usuario" id="id_usuario">
                            <label>Nombre usuario(*):</label>
                            <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" maxlength="100" placeholder="Nombre Usuario" keydown ="teclear()" onkeyup="javascript:this.value=this.value.toUpperCase();" required  
                            onkeypress= "return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) "/>
                           
                          </div> 

                          <!-- Nombre usuario -->
                           <div class="form-group col-lg-4 col-xs-12">
                           
                          </div>
                         </div>

                         <br>


                         <?php  
                         $id_usuario2=$_SESSION['id_usuario'];
    
                        $query5 = "select contrasena FROM tbl_usuarios WHERE id_usuario='$id_usuario2'";
                        ejecutarConsulta($query5);
      

                        while ($tbl_usuarios=ejecutarConsulta($query5)->fetch_array()) 
                          {
                            $clave=$tbl_usuarios["contrasena"];
                          break;
                          }



                          // Método para cifrar
$ciphering = "AES-128-CTR";

  
// Uso de OpenSSl para el método de encriptar 
//$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 

  
// Valor de inicio para la encriptación
//$encryption_iv = '1234567891011121'; 
  
// Llave para la encriptación
//$encryption_key = "LunaColor"; 
  
// usar openssl_encrypt() para encriptar
//$encryption = openssl_encrypt($contrasena, $ciphering, 
//$encryption_key, $options, $encryption_iv); 

                          // Valor de inicio para la desencriptación
                          $decryption_iv = '1234567891011121'; 
                         
  
  
                            //Llave para la desencriptación 
                          $decryption_key = "LunaColor"; 
                       
  
  
                           //usar openssl_encrypt() para desencriptar 
                          $decryption=openssl_decrypt ($clave, $ciphering,  
                                  $decryption_key, $options, $decryption_iv);

                         ?>

                           <div class="row">
                             <!-- Coontraseña -->  
                       <div class="form-group col-lg-4 col-xs-12">
                          <label>Contraseña(*):</label>
                              
                                 <input ID="confirmar_contrasena" type="Password" name="confirmar_contrasena"  Class="form-control"  pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,65}$"  minlength="5"  maxlength="65" 
                                 required  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off value=<?php echo  $decryption; ?>>


                                <!-- boton monstrar Contraseña -->
                             <div class="input-group-append">
                                 <button id="show_password1" class="login100-form-btn" name="" type="button" onclick="mostrarPassword2()" > 
                                  <h5><span class="fas fa-eye-slash icon"></span></h5></button>
                              </div>
                
                        </div>

                              <?php  
                         $id_usuario3=$_SESSION['id_usuario'];
    

                        $query6 = "select contrasena FROM tbl_usuarios WHERE id_usuario='$id_usuario3'";
                        ejecutarConsulta($query6);
      

                        while ($tbl_usuarios1=ejecutarConsulta($query6)->fetch_array()) 
                          {
                            $clave2=$tbl_usuarios1["contrasena"];
                          break;
                          }

                          // Método para cifrar

$ciphering2 = "AES-128-CTR";  
  
// Uso de OpenSSl para el método de encriptar 
//$iv_length = openssl_cipher_iv_length($ciphering); 

$options2 = 0; 
  
// Valor de inicio para la encriptación
//$encryption_iv = '1234567891011121'; 
  
// Llave para la encriptación
//$encryption_key = "LunaColor"; 
  
// usar openssl_encrypt() para encriptar
//$encryption = openssl_encrypt($contrasena, $ciphering, 
//$encryption_key, $options, $encryption_iv); 

                          // Valor de inicio para la desencriptación
                         
                          $decryption_iv2 = '1234567891011121'; 
  
  
                            //Llave para la desencriptación 
                        
                          $decryption_key2 = "LunaColor"; 
  
  
        
                           $decryption2=openssl_decrypt ($clave2, $ciphering2,  
                                  $decryption_key2, $options2, $decryption_iv2);

                         ?>

                         

                      <div class="form-group col-lg-4 col-xs-12">
                          <label id="Etiqueta" name ="Etiqueta">Confirmar Contraseña(*):</label>
                               
                                 <input ID="contrasena" type="Password" name="contrasena"  Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,65}$"  minlength="5" maxlength="65" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off value=<?php echo  $decryption2; ?>> 

                                
                                <!-- boton monstrar Contraseña -->
                             <div class="input-group-append">
                                 <button id="show_password" class="login100-form-btn" type="button" onclick="mostrarPassword()" > 
                                  <h5><span name="Ojito" Id="Ojito"class="fas fa-eye-slash svg"></span></h5></button>
                                  
                             </div>
                       
                       </div>
                       

                       </div>



                                <small style = "position:relative;  top:-20px;"><h5>*La contraseña debe tener entre 5 a 10 letras, mínimo un número, una letra mayúscula y un símbolo.</h5></small> 

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
</html>



<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>

<script type="text/javascript" src="scripts/editarusuarioescritorio.js"></script>


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



document.getElementById("nombre_usuario").addEventListener("keydown", teclear);

var flag = false;
var teclaAnterior = "";

function teclear(event) {
  teclaAnterior = teclaAnterior + " " + event.keyCode;
  var arregloTA = teclaAnterior.split(" ");
  if (event.keyCode == 32 && arregloTA[arregloTA.length - 2] == 32) {
    event.preventDefault();
  }
}

$(document).ready(function(){
  $('#Autogenerar').on('change',function(){
    if (this.checked) {
     $("#contrasena").hide();
       $("#Etiqueta").hide();
         $("#Ojito").hide();
         $("#Bojito").hide();
         $("#show_password").hide();
    } else {
      $("#contrasena").show();
       $("#Etiqueta").show();
         $("#Ojito").show();
         $("#Bojito").show();
         $("#show_password").show();
    }  
  })
});


  function comprobar(obj)
{   
    if (obj.checked)
      document.getElementById('confirmar_contrasena').readOnly = true;  

    else
     document.getElementById('confirmar_contrasena').readOnly = false;


        
}


function comprobar2(obj)
{   
    if (obj.checked)
      document.getElementById('contrasena').readOnly = true;

    else
     document.getElementById('contrasena').readOnly = false;  
        
}

function comprobar3(obj)
{   

    function generate(length = 12) 
   { var uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; var lowercase = 'abcdefghijklmnopqrstuvwxyz'; var numbers = '0123456789'; var symbols = '!#$%&\*/<=>?@\\'; var all = uppercase + lowercase + numbers + symbols; var password = ''; for (var index = 0; index < length; index++) { var character = Math.floor(Math.random() * all.length); password += all.substring(character, character + 1); } return password;
   
     }
    
    if (obj.checked)
     
      document.getElementById('confirmar_contrasena').defaultValue = generate();
    else
      $("input[name$='confirmar_contrasena']").attr("value","");
  

};


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
include '../config/conexion.php';

 $id_usuario1=$_SESSION['id_usuario'];
 $usuario1=$_SESSION['usuario']; 
//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
 $sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
 VALUES('$id_usuario1','1',(select now()),'Salió','Salió de Mantenimiento de Usuario','$usuario1',(select now()))";
  ejecutarConsulta($sql_bitacora); 
?>


<?php 
}
ob_end_flush();
?>

