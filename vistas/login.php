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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<!--===============================================================================================-->

</head>
<body  style="background-color: rgb(63,63,63)">
	<!-- Botones atras y adelante -->
	<center>

			<!-- Boton atras -->
		<a href="javascript:history.go(-1)" class="previous"><i class="fas fa-chevron-circle-left fa-2x" aria-hidden="true"></a></i>
			

	</center>

	<div class="limiter"  >
		<div class="container-login100" >

			<div class="wrap-login100">

 				
				<!--Validacion base de datos -->
				<form class="login100-form validate-form" accion="" method="post" id="frmAcceso">


					<!-- Usuario -->	
					<div class="col-xs-12">
      				 <p class="text-secondary float-left">Usuario</p>
       				 <div class="input-group">
     					<input ID="usuariolog" type="usuario" name="usuariolog" Class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
      					<div class="input-group-append"></div>
    				</div>
                    </div>
	                <p></p>
					
					<!-- Coontraseña -->	
					<div class="col-xs-12">
      				 <p class="text-secondary float-left">Contraseña</p>
       				 <div class="input-group">
     					<input ID="contrasenalog" type="Password" name="contrasenalog" Class="form-control" required>
					<!-- boton monstrar Contraseña -->
      					<div class="input-group-append">
            			<button id="show_password" class="login100-form-btn" name="" type="button" onclick="mostrarPassword()" style="background-color: rgb(233,118,46)"> 
            				<h5><span class="fas fa-eye-slash icon"></span></h5></button>

          				</div>
    				</div>
                    </div>
	                <p></p>

					<!-- Boton ¿Olvidó La Contraseña? -->	
					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="recuperarContraseña.php" class="txt1">
							¿Has olvidado tu contraseña?
							</a>
						</div>
					</div>
                      
                       <!-- Boton entrar -->
					<div class="container-login100-form-btn"><button  type="submit" class="login100-form-btn" >Entrar </button> </div>

				</form>

				<!-- Fondo de login -->
				<div class="login100-more" style="background-image: url('../public/img/FONDOS-01.SVG');">
				</div>
				
			</div>
		</div>
	</div>
	<!--===============================================================================================-->	


<script src="https://www.google.com/recaptcha/api.js"></script>
 <!--catcha-->
<!--=========================MENSAJES================================================================-->
	<script src="../public/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../public/vendor/bootstrap/js/popper.js"></script>
	<script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../public/plugins/sweetAlert2/sweetalert2.all.min.js"></script>
	<script src="CodigoJS.js"></script> 
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="../public/vendor/animsition/js/animsition.min.js"></script>
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

	<script type="text/javascript" src="scripts/login.js"></script>

	<script type="text/javascript" src="scripts/login.js"></script>


</script>


<!--============================= script PARA VER CONTRASENA ====================================-->
<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("contrasenalog");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fas fa-eye-slash').addClass('fas fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fas fa-eye').addClass('fas fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
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



<!--===============================================================================================-->
</body>
</html>


