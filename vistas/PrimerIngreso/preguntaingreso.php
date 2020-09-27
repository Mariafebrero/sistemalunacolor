<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Preguntas Secretas</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../public/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendor/bootstrap/css/bootstrap.min.css">
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
	<link rel="stylesheet" type="text/css" href="../../public/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/main.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">




	<div class="limiter"  >
		<div class="container-login100" >
			<div class="wrap-login100">

				<!--Validacion base de datos -->
				<form class="login100-form validate-form" method="post" autocomplete="off">

					<!-- Usuario -->	
					<div class="col-xs-12">
						
      				 <p class="text-secondary">Preguntas #1</p>
       				 
     					<div class="form-group col-lg-10 col-md-6 col-sm-6 col-xs-12">
                            <select id="Pregunta1" name="Pregunta1" 
                            class="form-control selectpicker" data-live-search="true" required></select>
                          </div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="usuario">
						<span class="focus-input100"></span>
						<span class="label-input100">Repuesta #1</span>
					</div>

    				
                    </div>
	                <p></p>
					<div class="col-xs-12">
      				 <p class="text-secondary">Preguntas #2</p>
     					<div class="form-group col-lg-10 col-md-6 col-sm-6 col-xs-12">
                            <select id="Pregunta2" name="Pregunta2" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
                    </div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="usuario">
						<span class="focus-input100"></span>
						<span class="label-input100">Repuesta #2</span>
					</div>

	                <p></p>

	                <div class="col-xs-12">
      				 <p class="text-secondary">Preguntas #3</p>
       				 
     					<div class="form-group col-lg-10 col-md-6 col-sm-6 col-xs-12">
                            <select id="Pregunta3" name="Pregunta3" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
                    </div>

                     <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="usuario">
						<span class="focus-input100"></span>
						<span class="label-input100">Repuesta #3</span>
					</div>


	                <p></p>
	                <p></p>

                      
                      <!-- Boton entrar -->
					<div class="container-login100-form-btn"  >
						<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
						<button type="submit" value="Ingresar" nombre="botonentrar" class="login100-form-btn" >
							Entrar
						</button>
					</div>
				

				</form>

				 <!-- Fondo de login -->
				<div class="login100-more" style="background-image: url('../../public/img/FONDO LOGIN.PNG');">
				</div>
			</div>
		</div>
	</div>
	
	

	
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




</body>

</html>
