 <?php  

 include '../config/conexion.php';

 ?>




<!DOCTYPE html>
<html lang="en">
<head>

	<title>Sistema Luna Color</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../public/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/vendor/bootstrap/css/bootstrap.min.css">

	<!-- ICONOS fontawesome -->
	<link rel="stylesheet" type="text/css" href="../public/iconosfontawesome/css/all.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../public/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../public/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/css/util.css">
	<link rel="stylesheet" type="text/css" href="../public/css/main.css">
	 <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
<!--===============================================================================================-->
</head>
<body  style="background-color: rgb(63,63,63)">

<center>
			<!-- Boton atras -->
		<a href="login1.php" class="previous"><i class="fas fa-chevron-circle-left fa-2x" aria-hidden="true"></a></i>
			<!-- Boton adelante -->
 </center>



	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">

				<!--Validacion base de datos -->
				<form class="login100-form validate-form" name="formulario" id="formulario" method="post">
                
					<!-- Usuario -->	
		<div class="col-xs-12">

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
 
                    <div class="wrap-input100 validate-input">
                    	
						<input class="input100" type="text" name="usuario" id="usuario"  minlength="3" maxlength="15" onkeyup="javascript:this.value=this.value.toUpperCase();" onkeypress="return soloLetras(event)" onpaste="return false" required> 
						<span class="focus-input100"></span>
						<span class="label-input100">Usuario</span>
					</div>

					 <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nombre_usuario" id="nombre_usuario" maxlength="100" onkeyup="javascript:this.value=this.value.toUpperCase();" onkeypress="return soloLetras(event)" onpaste="return false" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Nombre Usuario</span>
					</div>

					<!-- INICIO -->

       			   <div class="col-xs-12">
      				
       				 <div class="input-group">
     					<input ID="contrasena" type="Password" name="contrasena" Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,10}$" minlength="5" maxlength="10" placeholder="Contraseña" required>
					<!-- boton monstrar Contraseña -->
      					<div class="input-group-append">
            			<button id="show_password" class="login100-form-btn" name="" type="button" onclick="mostrarPassword2()" style="background-color: rgb(233,118,46)"> 
            				<h5><span class="fas fa-eye-slash icon"></span></h5></button>

          				</div>
    				</div>
                    </div>

                     <p></p>
   

                     <div class="col-xs-12">
      				
       				 <div class="input-group">
     					<input ID="confirmar_contrasena" type="Password" name="confirmar_contrasena" Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,10}$" minlength="5" maxlength="10" placeholder="Confirmar Contraseña" required>
					<!-- boton monstrar Contraseña -->
      					<div class="input-group-append">
            			<button id="show_password" class="login100-form-btn" name="" type="button" onclick="mostrarPassword()" style="background-color: rgb(233,118,46)"> 
            				<h5><span class="fas fa-eye-slash svg"></span></h5></button>

          				</div>
    				</div>
                    </div>

                    <br>
				<center>
                     <small  ><h6>*La contraseña debe tener entre 5 a 10 letras, mínimo un número, una letra mayúscula y un símbolo.
	    			</h6></small> 
	    		</center>
	    		 	<br>


                <!-- FIN -->
              
					 <div class="wrap-input100 validate-input">
						<input id="correo_electronico" class="input100" type="text" name="correo_electronico" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required >
						<span class="focus-input100"></span>
						<span class="label-input100">Correo Electronico</span>
					</div>
				
      </div>
                   
                   
                      <!-- Boton entrar -->
					<div class="container-login100-form-btn"  >
						<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
						<button type="submit" value="Ingresar" name="btnGuardar" class="login100-form-btn">
							Registrar
						</button>
					</div>
				
				</form>

				 <!-- Fondo de login -->
				<div class="login100-more" style="background-image: url('../public/img/AR.SVG');">
				</div>

			</div>
		</div>
	</div>


	
	<!--===============================================================================================-->	

<script src="https://www.google.com/recaptcha/api.js"></script>
 <!--catcha-->
<!--===============================================================================================-->
	<script src="../public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../public/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../public/vendor/bootstrap/js/popper.js"></script>
	<script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../public/vendor/daterangepicker/moment.min.js"></script>
	<script src="../public/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../public/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../public/js/main.js"></script>
	 <script src="../public/js/jquery-3.1.1.min.js"></script>
	 
	  <!-- jQuery -->
    <!-- Bootstrap 3.3.5 -->
    <script src="../public/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/js/app.min.js"></script>

    <!-- DATATABLES -->
    <script src="../public/datatables/jquery.dataTables.min.js"></script>    
    <script src="../public/datatables/dataTables.buttons.min.js"></script>
    <script src="../public/datatables/buttons.html5.min.js"></script>
    <script src="../public/datatables/buttons.colVis.min.js"></script>
    <script src="../public/datatables/jszip.min.js"></script>
    <script src="../public/datatables/pdfmake.min.js"></script>
    <script src="../public/datatables/vfs_fonts.js"></script> 

    <script src="../public/js/bootbox.min.js"></script> 
    <script src="../public/js/bootstrap-select.min.js"></script>  
   


	</script>
					<style type="text/css">
						a{
							text-decoration: none;
							display: inline-flex;
							padding: 10px 10px;
						}
						a:hover{
							background-color: black;
							color: white;
							transition: 0.3s; 
							border-radius: 200px 200px 200px 200px;
                            -moz-border-radius: 200px 200px 200px 200px;
                            -webkit-border-radius: 200px 200px 200px 200px;
                            border: 0px solid #000000;
						}
						.previous{
							background-color: #E9762E;
							color:white;
							border-radius: 200px 200px 200px 200px;
                            -moz-border-radius: 200px 200px 200px 200px;
                            -webkit-border-radius: 200px 200px 200px 200px; 
                            border: 0px solid #000000;
						}
						.round{
							border-radius:100%;
						}

						
         				.hidden-xs{

         		   color: #3D3D3D;			
                   width: auto;
                   padding: 5px 5px;
                   transition: 0.3s; 
                   border-radius: 70px 70px 70px 70px;
				   -moz-border-radius: 70px 70px 70px 70px;
				   -webkit-border-radius: 70px 70px 70px 70px;
					border: 0px solid #ffffff;
								   }


						.hiddenui{
 				   color: #E8762F;			
                   width: auto;
                   padding: 5px 5px;
                   transition: 0.3s; 
                   border-radius: 70px 70px 70px 70px;
				   -moz-border-radius: 70px 70px 70px 70px;
				   -webkit-border-radius: 70px 70px 70px 70px;
					border: 0px solid #ffffff;



						}		   


					.selecion{
    font-size: 16px;
    font-family: 'Verdana', sans-serif;
    font-weight: 400;
    color: #444;
    line-height: 1.3;
    padding: .4em 1.4em .3em .8em;
    width: 400px;
    max-width: 100%; 
    box-sizing: border-box;
    margin: 20px auto;
    border: 5px solid #E9762E;
    box-shadow: 0 1px 0 1px rgba(0,0,0,.03);
    border-radius: .3em;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;

					}
					</style>


<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("confirmar_contrasena");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.svg').removeClass('fas fa-eye-slash').addClass('fas fa-eye');
		}else{
			cambio.type = "password";
			$('.svg').removeClass('fas fa-eye').addClass('fas fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>

<script type="text/javascript">
function mostrarPassword2(){
		var cambio1 = document.getElementById("contrasena");
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
<!--===============================================================================================-->
<!--===============================================================================================-->


</body>

</html>



<?php 

//FALTA LA VALIDACION SI EL USUARIO YA EXISTE EN EL SISTEMA 

if(isset($_POST["btnGuardar"])) { 
	
	$contra2=$_POST['contrasena'];
    $clavehash2=hash("SHA256",$contra2);

	$contra =$_POST['contrasena'];
	$clavehash=hash("SHA256",$contra);
	//$clavehash2=hash("SHA256",$contra2);
	//$clavehash3=hash("SHA256",$contra3);

	if(isset($_POST["btnGuardar"])) {

		$sql1= "Select usuario,correo_electronico from tbl_usuarios where usuario = \"$_POST[usuario]\" or correo_electronico =\"$_POST[correo_electronico]\"";
    	$result =mysqli_query($conexion,$sql1);

      if (mysqli_num_rows($result)>0)
 									{
		echo '<script>swal({
  			title: "",
  			text: "El usuario y/o correo ya existen.",
  			icon: "warning",
  			button: "OK",
			});</script>';
		
	   }

	   else{

	   	mysqli_query($mysqli, "INSERT INTO tbl_usuarios (id_rol,usuario,nombre_usuario,contrasena,imagen,correo_electronico,id_estado_usuario,fecha_ultima_conexion,preguntas_contestadas,fecha_creacion,intentos,fecha_vencimiento,token,fecha_inicio,fecha_final)
			VALUES ('1',\"$_POST[usuario]\",\"$_POST[nombre_usuario]\",'$clavehash','',\"$_POST[correo_electronico]\",'5','','0','$fecha_creacion','1','$fecha_vencimiento','','','')");


	mysqli_query($mysqli, "INSERT INTO tbl_hist_contrasena (id_usuario,contrasena) VALUES ((select id_usuario from tbl_usuarios where usuario =\"$_POST[nombre_usuario]\"),'$clavehash2')");

		 $sql_bitacora4= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		  VALUES((SELECT MAX(id_usuario) AS id FROM tbl_usuarios),'7',(select now()),'Entró','Entró en Auto registro',\"$_POST[usuario]\",(select now()))";
 		  ejecutarConsulta($sql_bitacora4);
		 
		 $sql_bitacora4= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		  VALUES((SELECT MAX(id_usuario) AS id FROM tbl_usuarios),'7',(select now()),'Insertó','Un usuario se Autoregistro',\"$_POST[usuario]\",(select now()))";
 		  ejecutarConsulta($sql_bitacora4);

 		  $sql_bitacora5= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		  VALUES((SELECT MAX(id_usuario) AS id FROM tbl_usuarios),'7',(select now()),'Salió','Salió del Autoregistro',\"$_POST[usuario]\",(select now()))";
 		  ejecutarConsulta($sql_bitacora5);

 		   $sql_bitacora6= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		  VALUES((SELECT MAX(id_usuario) AS id FROM tbl_usuarios),'5',(select now()),'Entró','Entró al login',\"$_POST[usuario]\",(select now()))";
 		  ejecutarConsulta($sql_bitacora6);


	echo "<script >
           swal({ title: '¡Registro exitoso!',
           text: 'Para finalizar este proceso, deberá ingresar al sistema nuevamente y responder las preguntas de seguridad.', 
           icon:'success',
           type: 'success'}).then(okay => {
           if (okay) 
           {
       			window.location.href = 'login1.php';
           }
       		  });
     	   </script>";
	   }

}
	
	
} 


 ?>