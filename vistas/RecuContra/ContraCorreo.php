

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
	<link rel="stylesheet" type="text/css" href="../../public/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	<?php

    if(isset($_POST['enviarcorreo']))
    {
        $cuerpo = "Luna color ha confirmado su identidad.Su contrase&ntilde;a es: 1 2 3";

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: Soporte técnico Luna Color";

        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= " soportelunacolor@gmail.com";

        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";

        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        if(mail($_POST['CasillaCorreo'],"Recuperación de contraseña",$cuerpo,$headers)){
    		echo "<script>alert('Funcion \"mail()\" ejecutada, por favor verifique su bandeja de correo.');</script>";
    	}else{
    		echo "<script>alert('No se pudo enviar el mail, por favor verifique su configuracion de correo SMTP saliente.');</script>";
    	}
    }
?>
	
	<div class="limiter"  >
		<div class="container-login100" >
			<div class="wrap-login100">

<!-------------------------------------------Casilla de usuario ---------------------------------->
				<form class="login100-form validate-form" method="post" autocomplete="off">

					<div class="wrap-input100 validate-input" data-validate = "Ingrese un nombre de usuario correcto">
						<input class="input100" type="text" name="CasillaUusario">
						<span class="focus-input100"></span>
						<span class="label-input100">Nombre de usuario </span>
					</div>

 <!-------------------------------------------Casilla de correo ---------------------------------->
				<form class="login100-form validate-form" method="post" autocomplete="off">


					<div class="wrap-input100 validate-input" data-validate = "Ingrese una dirección de correo válida: ejemplo@yahoo.com">
						<input class="input100" type="text" name="CasillaCorreo">
						<span class="focus-input100"></span>
						<span class="label-input100">Correo Electrónico</span>
					</div>
      				

 <!------------------------------------- Botón enviar correo Comienzo------------------------------------------>
					
					<div class="container-login100-form-btn"  >
						<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
						<button type="submit" name="enviarcorreo" value="Enviarcorreo" class="login100-form-btn">
							Enviar
						</button>
					</div>
				
					
<!---------------------------------------- Botón enviar correo FIN ---------------------------------------------->
				</form>

				 <!-- Fondo de login -->
				<div class="login100-more" style="background-image: url('../../public/img/FONDO REC CORREO.png');">
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

<!--</form>-->
</body>

</html>
