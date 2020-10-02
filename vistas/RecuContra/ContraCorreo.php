

<!DOCTYPE html>
<html lang="en">
<head>
	<!---- Para que se pueda leer la letra ñ deben reemplazar la letra por el código "&ntilde;" 
y para tildar letras es asi: &_acute y donde les puse el _ va la letra que quieren tildar -->
	<title>Sistema Luna Color</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../public/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendor/bootstrap/css/bootstrap.min.css">
	<!-- ICONOS fontawesome -->
	<link rel="stylesheet" type="text/css" href="../../public/iconosfontawesome/css/all.css">
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
<body  style="background-color: rgb(63,63,63)">
		<!-- Botones atras y adelante -->
	<center>

			<!-- Boton atras -->
		<a href="javascript:history.go(-1)" class="previous"><i class="fas fa-chevron-circle-left fa-2x" aria-hidden="true"></a></i>

	</center>

	<?php
	if(isset($_POST['CasillaUsuario'], $_POST['CasillaCorreo']))

    {
        if(!empty($_POST))

{
	if(isset($_POST["CasillaUsuario"]) &&isset($_POST["CasillaCorreo"]))

	{
		if($_POST["CasillaUsuario"]!=""&&$_POST["CasillaCorreo"]!="")
		{
			include "../../config/Conglobal.php";

			$user_id=null;
			$user_name =null;
			$user_password =null;
			//Validar el OR
			$sql= "select * from tbl_usuarios where (usuario=\"$_POST[CasillaUsuario]\") and correo_electronico=\"$_POST[CasillaCorreo]\" and condicion=1";
			
			$query = $con->query($sql);

			while ($r=$query->fetch_array()) 
			{
				$user_id=$r["id_usuario"];
				$user_name=$r["nombre_usuario"];
				$user_password=$r["contrasena"];
				break;
			}

			if($user_id==null)
			{ 
				
				print "<script>alert(\"ERROR: Su nombre de usuario y/o correo eléctronico no coinciden entre sí o su usuario se encuentra bloqueado.Intentélo de nuevo o contacte a su soporte técnico.\")</script>";
			}
			else
			  {
			  	//--------------------------- Proceso que envía correos INICIO--------------------------------
    if(isset($_POST['enviarcorreo']))
    {
        $cuerpo = "Querido, " . $user_name ."<br>". 
        "La petici&oacute;n de requerimiento de su contrase&ntilde;a ha sido aceptada." 
        ."<br>".
         "Su contrase&ntilde;a es: " . $user_password 
        ."<br>";

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //Cabecera del emisor - izquierdo
        $headers .= "From: Soporte técnico Luna Color";

         //Cabecera del emisor - derecho
        $headers .= " soportelunacolor@gmail.com";

        //Si Suzy nos pide enviar copia a otro lado
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";

        //Si Suzy nos pide enviar copia a otro lado de forma oculta para otros correos
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        if(mail($_POST['CasillaCorreo'],"Recuperación de contraseña",$cuerpo,$headers))
        {
    		echo "<script>alert('¡Envío exitoso! Revise su bandeja de entrada.');window.location='../login.php';</script>";
    	}
    	else
    	{
    		echo "<script>alert('ERROR: Ha ocurrido un error inesperado, por favor inténtelo de nuevo o contacte a su soporte técnico.');</script>";
    	}
    }			
			}
		}
	}
}
    }

			  
//---------------------------- Proceso que envía correo FIN ----------------------------------------				
			
?>
	
	<div class="limiter"  >
		<div class="container-login100" >
			<div class="wrap-login100">

<!-------------------------------------------Casilla de usuario ---------------------------------->
				<form class="login100-form validate-form" method="post" autocomplete="off">

					<div class="wrap-input100 validate-input" data-validate = "Ingrese su nombre de usuario">
						<input class="input100" type="text" name="CasillaUsuario" Class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Nombre de usuario </span>
					</div>

 <!-------------------------------------------Casilla de correo ---------------------------------->
				<form class="login100-form validate-form" method="post" autocomplete="off">


					<div class="wrap-input100 validate-input" data-validate = "Ingrese una dirección de correo válida, por ejemplo: usuario@yahoo.es">
						<input class="input100" type="text" name="CasillaCorreo">
						<span class="focus-input100"></span>
						<span class="label-input100">Correo Electrónico</span>
					</div>
      				

 <!------------------------------------- Botón enviar correo ------------------------------------------>
					
					<div class="container-login100-form-btn"  >
						<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
						<button type="submit" name="enviarcorreo" value="Enviarcorreo" class="login100-form-btn">
							Enviar
						</button>
					</div>
				
		
				</form>

				 <!-- Fondo de login -->
				<div class="login100-more" style="background-image: url('../../public/img/FONDOS-04.SVG');">
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
					</style>

<!--===============================================================================================-->

<!--</form>-->
</body>

</html>
