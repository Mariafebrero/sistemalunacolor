
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
</head>
<body style="background-color: #666666;">
	
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
		session_start();
		$NombreRecu = "$_SESSION[nombre_usuario]";

		$sql= "update tbl_usuarios set contrasena =(\"$_POST[Contranueva]\") WHERE usuario=(\"$NombreRecu\") ";
		$query = $con->query($sql);

		print "<script>alert('¡El cambio se ha realizado con éxito!'); window.location='../Login.php';</script>";		
			}
			
			else
			  {
			  	//NO DEBE RECARGAR LA PÁGINA
		print "<script>alert(\"ERROR: Las contraseñas no coinciden entre si. Intentélo de nuevo o contacte a su soporte técnico.\")</script>";	
			  }
	}
}
	?>

	<div class="limiter"  >
		<div class="container-login100" >
			<div class="wrap-login100">
				
				<form class="login100-form validate-form" method="post" autocomplete="off">
				<h2> <center>¡Bienvenido
				<?php 
				session_start();
				print " $_SESSION[nombre_usuario]";
				?>!
				</h2> </center>
				<hr>
				<br>
				<br>

		<!----------------------- Casilla de contraseña nueva---------------------------->
					<div class="wrap-input100 validate-input" data-validate = "Ingrese su contraseña nueva" >
						<input class="input100" type="text" name="Contranueva" >
						<span class="focus-input100"></span>
						<span class="label-input100">Contraseña nueva</span>
					</div>
		<!----------------------- Casilla de confirmación---------------------------->
					<div class="wrap-input100 validate-input" data-validate = "Ingrese la confirmación de su contraseña nueva"  >
						<input class="input100" type="text" name="Contraconfir">
						<span class="focus-input100"></span>
						<span class="label-input100">Confirmar contraseña</span>
					</div>


			<!----------------------- Botón actualizar---------------------------->
					<div class="container-login100-form-btn"  >
						<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
						<button type="submit" name ="BotonValidar" class="login100-form-btn">
							Actualizar
						</button>
					</div>
					
					
				</form>


				 <!-- Fondo de login -->
				<div class="login100-more" style="background-image: url('../../public/img/FONDO REC PREGU.PNG');">
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
