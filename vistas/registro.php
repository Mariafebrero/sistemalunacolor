
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
	
	<div class="limiter"  style="background-color: rgb(255,140,0)" >
		<div class="container-login100"  style="background-color: rgb(255,140,0)">
			<div class="wrap-login100">

				<form class="login100-form validate-form" method="POST" action="../../../database/registrar.php"  class=" was-validated">
					
					<!--Nombre-->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="nombre" required autocomplete="off">
						<span class="focus-input100"></span>
						<span class="label-input100">Nombre</span>
					</div><br>

					<!--Apellido-->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="apellido" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="label-input100">Apellido</span>
					</div><br>

					<!--Correo-->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="correo" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="label-input100">Correo</span>
					</div><br>

                    <!--usuario-->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,20}" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="label-input100">Nombre Usuario</span>
					</div>
					<br>
					
					<!--contraseña-->
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" id="password" pattern="(?=.*[\u0021-\u002b\u003c-\u0040]).{6,25}" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="label-input100">Contraseña</span>
						
					</div>
					<br>

					<!--confirmar contraseña -->
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="clave1"  id="clave1" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="label-input100">Confirmar Contraseña</span>
					</div>

			
					<!-- Boton registrarme -->
					<div class="container-login100-form-btn">
						<button type="submit"  class="login100-form-btn" name="boton" >
						REGISTRARME
						</button>
					</div>
					
					
				</form>

 				<!-- Fondo de login -->
				<div class="login100-more" style="background-image: url('../public/img/FONDO REG.PNG');">
				</div>

			</div>
		</div>
	</div>
	
	

	
	<!--===============================================================================================-->	
	<script src="https://www.google.com/recaptcha/api.js"></script>
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
    <script>
				window.onload = function () {
					document.getElementById("password").onchange = validatePassword;
					document.getElementById("clave1").onchange = validatePassword;
				}

				function validatePassword() {
					var pass2 = document.getElementById("clave1").value;
					var pass1 = document.getElementById("password").value;
					if (pass1 != pass2)
						document.getElementById("clave1").setCustomValidity("La clave no counside");
					else
						document.getElementById("clave1").setCustomValidity('');
					//empty string means no validation error
				}
			</script>
<!--===============================================================================================-->




</body>

</html>
