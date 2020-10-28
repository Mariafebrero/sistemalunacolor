
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Sistema Luna Color</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../public/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendor/bootstrap/css/bootstrap.min.css">
	<!-- ICONOS fontawesome --->
	<link rel="stylesheet" type="text/css" href="../../public/iconosfontawesome/css/all.css"> 
	<link rel="stylesheet" type="text/css" href="../../public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../public/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../public/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../..//public/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/main.css">
<!--===============================================================================================-->
<!--=========================Sweet Alert========================================================-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">


	<div class="limiter"  >
		<div class="container-login100" >
			<div class="wrap-login100">
				
				<form class="login100-form validate-form" method="post" autocomplete="off">

				<h3 style = "position:relative;  top:-70px; color:#F27830"> <center> ¡Bienvenido
				<?php 
				include "../../config/Conglobal.php";
				session_start();
				$NombreRecu = "$_SESSION[nombre_usuario]";
				$NombreRecu = strtoupper($NombreRecu);

	$sql= "select id_usuario FROM `tbl_usuarios` WHERE nombre_usuario = " . "'". $NombreRecu . "'";

	$query = $con->query($sql);
	while ($r=$query->fetch_array()) 
			{
				$NombreID=$r["id_usuario"];
				break;
			}

				print $NombreRecu;
				?>!
				<h5 style = "position:relative;  top:10px; color:#F27830" ><span class="hiddenui"><i> ¡Restablece tu contraseña!</i></span><hr></h5>
				
				</h3> </center>

				<?php
//------------------- Consultas para el parametro de MIN y MAX de la contraseña INICIO -------------------
	include "../../config/Conglobal.php";
	$sql= "select valor FROM `tbl_parametros` WHERE parametro = 'MIN_CONTRASENA' ";

	$query = $con->query($sql);

	while ($r=$query->fetch_array()) 
			{
				$Mincontra=$r["valor"];
				break;
			}
			// Las usa en la linea 157 de aquí
			$MincontraLen = "minlength=" . "'" . $Mincontra . "'";

	$sql= "select valor FROM `tbl_parametros` WHERE parametro = 'MAX_CONTRASENA' ";

	$query = $con->query($sql);

	while ($r=$query->fetch_array()) 
			{
				$Maxcontra=$r["valor"];
				break;
			}
			// Las usa en la linea 157 de aquí
			$MaxcontraLen = "maxlength=" . "'" . $Maxcontra . "'";
//------------------- Consultas para el parametro de MIN y MAX de la contraseña FIN -------------------					
				?>
		<!----------------------- Casilla de contraseña nueva--------------------->
					<div class="col-xs-12"  style = "position:relative;  top:-40px;">
      				 <p class="text-secondary float-left"> <h6> Ingrese su contraseña nueva </h6></p>
      				 <!--- posicion del boton-->
       				 <div class="input-group">
     					<input ID="Contranueva" type="Password" name="Contranueva" Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,10}$"<?php echo $MincontraLen . " " .  $MaxcontraLen; ?>  required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off/>
      					<div class="input-group-append">
            			<button id="show_password" class="login100-form-btn" name="eye1" type="button" onclick="mostrarPassword()" style="background-color: rgb(233,118,46)"> 
            				<h5><span class="fas fa-eye-slash icon"></span></h5></button>
          				</div>
    				</div>
                    </div>
                 
                   <br>
		<!---------------------------------- Casilla de confirmación----------------------------->
					<div class="col-xs-12" style = "position:relative;  top:-40px;">
      				 <p class="text-secondary float-left"> <h6> Confirme su contraseña nueva </h6></p>
       				 <div class="input-group">
     					<input Id="Contraconfir" type="password" name="Contraconfir" Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,10}$"<?php echo $MincontraLen . " " .  $MaxcontraLen; ?>  required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off/>
      					<div class="input-group-append">
            			<button id="show_password2" class="login100-form-btn" name="eye2" type="button" onclick="mostrarPassword2()" style="background-color: rgb(233,118,46)"> 
            				<h5><span class="fas fa-eye-slash svg"></span></h5></button>
          				</div>
    				</div>
                    </div>
                    <br>

		<!---- Variables directas de SQL, sin modificar ------>
		<small style = "position:relative;  top:-50px;" >  *La contraseña debe tener entre <?php echo $Mincontra . " a " .  $Maxcontra; ?> letras, mínimo un número, una letra mayúscula y un símbolo.
	    </small> 
	    <br>
	    <br>



			<!----------------------- Botón actualizar---------------------------->
					<div class="container-login100-form-btn" style = "position:relative;  top:-70px;" >
						<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
						<button type="submit" name ="BotonValidar" class="login100-form-btn">
							Actualizar
						</button>
					</div>
			
					
				</form>


				 <!-- Fondo de login -->
				<div class="login100-more" style="background-image: url('../../public/img/FONDOS-03.SVG');">
				</div>
			</div>
		</div>
	</div>
	
	<?php
    include "../../config/Conglobal.php";
	?>

	<?php
	if(isset($_POST["BotonValidar"]))

	{
		if($_POST["Contranueva"]!="" &&$_POST["Contraconfir"]!="")
            $ContraNueva = ($_POST['Contranueva']);
            $Contraconfir = ($_POST['Contraconfir']);
		{
			if($ContraNueva === $Contraconfir)
			{
				include "../../config/Conglobal.php";
				 
//____________________________ Cifrar y descifrar contraseña INICIO ____________________________________ 
// Método para cifrar
$ciphering = "AES-128-CTR"; 
  
// Uso de OpenSSl para el método de encriptar 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
  
// Valor de inicio para la encriptación
$encryption_iv = '1234567891011121'; 
  
// Llave para la encriptación
$encryption_key = "LunaColor"; 
  
// usar openssl_encrypt() para encriptar
$encryption = openssl_encrypt($Contraconfir, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
  
// Mostrar el valor encriptado 
//echo "Encrypted String: " . $encryption . "\n"; 
  
// Valor de inicio para la desencriptación
//$decryption_iv = '1234567891011121'; 
  
//  Llave para la desencriptación 
//$decryption_key = "LunaColor"; 
  
// usar openssl_encrypt() para desencriptar 
//$decryption=openssl_decrypt ($encryption, $ciphering,  
//        $decryption_key, $options, $decryption_iv); 
  
// Descrifrado 
//echo "Decrypted String: " . $decryption;  
//________________________________ Cifrar y descifrar contraseña FIN ____________________________________

		$sql= "update tbl_usuarios set contrasena =" . "'" . $Contraconfir . "'" . " WHERE usuario=" . "'" .  $NombreRecu. "'". "";
		$query = $con->query($sql);

		$sql= "update tbl_usuarios set id_estado_usuario =2 WHERE usuario=" . "'" .  $NombreRecu. "'". "";
		$query = $con->query($sql);

 		  echo "<script >
          swal({ title: '¡El cambio se ha realizado con éxito!',
          text: ' ',
          icon:'success',
          type: 'success'}).then(okay => {
          if (okay)
          {
          window.location='../login1.php';
       			exit();
          }
          else 
          {
 		 window.location='../login1.php';
       			exit();
          }
       });
      </script>";
      

       include "../../config/Conglobal.php";

     	 $sql= 
     	 "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
     	 VALUES('$NombreID','9',(select now()),'Entró','Entró a Validación de Recuperación Contraseña por Pregunta Secreta','$NombreRecu',(select now()))";
     	
 		 $con->query($sql);
 		 	
 		 $sql= 
     	 "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
     	 VALUES('$NombreID','9',(select now()),'Actualizó','Actualizó contraseña','$NombreRecu',(select now()))";
 		 $con->query($sql);
 		

 		  $sql= 
     	 "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
     	 VALUES('$NombreID','9',(select now()),'Actualizó','Actualizó estado de usuario a: Activo','$NombreRecu',(select now()))";
 		 $con->query($sql);

 		  $sql= 
     	 "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
     	 VALUES('$NombreID','9',(select now()),'Salió','Salió de Validación de Recuperación Contraseña por Pregunta Secreta','$NombreRecu',(select now()))";
 		 $con->query($sql);

 		  $sql= 
     	 "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
     	 VALUES('$NombreID','5',(select now()),'Entró','Entró al login','$NombreRecu',(select now()))";
 		 $con->query($sql);
		//print "<script>alert('¡El cambio se ha realizado con éxito!'); window.location='../Login.php';</script>";		
			}
			
			else
			  {

		echo"<script type='text/javascript'>		
	    swal('ERROR: Las contraseñas no coinciden entre si. ', 'Intentélo de nuevo o contacte a su soporte técnico.', 'error');
        </script>";

		
			  }
	}
}
	?>

	
	<!--===============================================================================================-->	


<script src="https://www.google.com/recaptcha/api.js"></script>
 <!--catcha-->
<!--===============================================================================================-->
	<script src="../../public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../public/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../../public/vendor/bootstrap/js/popper.js"></script>
	<script src="../../public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../public/vendor/daterangepicker/moment.min.js"></script>
	<script src="../../public/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../../public/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../../public/js/main.js"></script>
<!--===============================================================================================-->


<!--===============================================================================================-->

<!--============================= Habilitar ver Nueva contraseña Inicio=================================-->
<script type="text/javascript">
function mostrarPassword()
{
		var cambio = document.getElementById("Contranueva");
		if(cambio.type == "password" )
		{ 
			cambio.type = "text";
			$('.icon').removeClass('fas fa-eye-slash').addClass('fas fa-eye');
		}
		else
		{
			cambio.type = "password";
			$('.icon').removeClass('fas fa-eye').addClass('fas fa-eye-slash');
		}
}  
	
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

						.fas fa-eye-slash icon{
							background-color: #E9762E;
							color:white;
							border-radius: 200px 200px 200px 200px;
                            -moz-border-radius: 200px 200px 200px 200px;
                            -webkit-border-radius: 200px 200px 200px 200px; 
                            border: 0px solid #000000;
						}
					</style>



<!--============================= Habilitar ver Nueva contraseña FIN=================================-->
<!--============================= Habilitar ver Confirmar contraseña Inicio==========================-->
<script type="text/javascript">
function mostrarPassword2()
{
		var cambio2 = document.getElementById("Contraconfir");
		if(cambio2.type == "password")
		{
			cambio2.type = "text";
			$('.svg').removeClass('fas fa-eye-slash').addClass('fas fa-eye');
		}
		else
		{
			cambio2.type = "password";
			$('.svg').removeClass('fas fa-eye').addClass('fas fa-eye-slash');
		}
} 
	
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

						.fas fa-eye-slash icon{
							background-color: #E9762E;
							color:white;
							border-radius: 200px 200px 200px 200px;
                            -moz-border-radius: 200px 200px 200px 200px;
                            -webkit-border-radius: 200px 200px 200px 200px; 
                            border: 0px solid #000000;
						}
					</style>


<!--============================= Habilitar ver Confirmar contraseña Final=========================-->
</body>

</html>
