
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	<?php

    if(isset($_POST['casillausuario']))

    {
        if(!empty($_POST))

{
	if(isset($_POST["casillausuario"]) &&isset($_POST["casillacontra"]))

	{
		if($_POST["casillausuario"]!=""&&$_POST["casillacontra"]!="")
		{
			
			include "../config/conexion.php";

			$user_id=null;
			$sql1= "select * from tbl_usuarios where (usuario=\"$_POST[casillausuario]\" or correo_electronico=\"$_POST[casillausuario]\") and contraseña=\"$_POST[casillacontra]\" ";
			$query = $con->query($sql1);

			while ($r=$query->fetch_array()) 
			{
				$user_id=$r["id_usuario"];
				break;
			}

			if($user_id==null)
			{ 
				
				print "<script>alert(\"Usuario ó Contraseña Incorrecta\");window.location='login.php';</script>";
			}
			else
			{
				//session_start();
				//$_SESSION["user_id"]=$user_id;
				//print "<script>window.location='../barber_shop.php';</script>";
			
				print "<script>alert(\"Usuario y Contraseña correcta\");window.location='categoria.php';</script>";			
			}
		}
	}
}
    }

?>
	<div class="limiter"  >
		<div class="container-login100" >
			<div class="wrap-login100">

				<!--Validacion base de datos -->
				<form class="login100-form validate-form" method="post" autocomplete="off">
					

					<!-- Usuario -->	
					<div class="col-xs-12">
      				 <p class="text-secondary">Usuario</p>
       				 <div class="input-group">
     					<input ID="usuario" type="usuario" name="casillausuario" Class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();">
      					<div class="input-group-append">
          				</div>
    				</div>
                    </div>
	                <p></p>
					
					<!-- Coontraseña -->	
					<div class="col-xs-12">
      				 <p class="text-secondary">Contraseña</p>
       				 <div class="input-group">
     					<input ID="txtPassword" type="Password" name="casillacontra"Class="form-control">
      					<div class="input-group-append">
            			<button id="show_password" class="login100-form-btn" name="botonentrar" type="button" onclick="mostrarPassword()" style="background-color: rgb(233,118,46)"> 
            				<h5><span class="fa fa-eye-slash icon"></span></h5></button>
          				</div>
    				</div>
                    </div>
	                <p></p>


					<!-- Boton ¿Olvidó La Contraseña? -->	
					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="recuperarContraseña.php" class="txt1">
							¿Has olvidado tu correo electrónico?
							</a>
						</div>
					</div>
                      
                      <!-- Boton entrar -->
					<div class="container-login100-form-btn"  >
						<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
						<button type="submit" value="Ingresar" nombre="botonentrar" class="login100-form-btn" >
							Entrar
						</button>
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
<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("txtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>
<!--===============================================================================================-->




</body>

</html>
