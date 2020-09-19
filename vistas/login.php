
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
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter"  >
		<div class="container-login100" >
			<div class="wrap-login100">

				<!--Validacion base de datos -->
				<form class="login100-form validate-form" method="post" action="../../../database/loguear2.php" autocomplete="off">
					
					<!--Usuario -->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="usuario">
						<span class="focus-input100"></span>
						<span class="label-input100">Nombre</span>
					</div>
					
					
					<!--Contraseña -->
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="clave"  data-toggle="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Contraseña</span>
					</div>
	

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						

					<!-- Boton ¿Olvidó La Contraseña? -->	
						<div>
							<a href="#" class="txt1">
							¿Olvidó La Contraseña?
							</a>
						</div>
					</div>
                      
                      <!-- Boton entrar -->
					<div class="container-login100-form-btn"  >
						<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
						<button type="submit" value="Ingresar" class="login100-form-btn">
							Entrar
						</button>
					</div>
					
					 <!-- Boton de direccionamiento a registrarse -->
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
						<h4><p class="text-dark"> <a href="registro.php" class="bg-gradient-dark" > REGISTRARME</p></a></h4>
						</span>
					</div>



				</form>

				 <!-- Fondo de login -->
				<div class="login100-more" style="background-image: url('../public/img/FONDO LOGIN.PNG');">
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
<!--===============================================================================================-->


<!--===============================================================================================-->




</body>

</html>
