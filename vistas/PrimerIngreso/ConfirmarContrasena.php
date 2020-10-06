<?php

ob_start();
session_start();

    include '../../config/conexion.php';

?>
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
	 <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap-select.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script
<!--===============================================================================================-->
</head>
<body  style="background-color: rgb(63,63,63)">

<center>
			<!-- Boton atras -->
		<a href="javascript:history.go(-1)" class="previous"><i class="fas fa-chevron-circle-left fa-2x" aria-hidden="true"></a></i>
			<!-- Boton adelante -->
		<a href="javascript:history.go(1)" class="previous"><i class="fas fa-chevron-circle-right fa-2x" aria-hidden="true"></a></i>

 </center>



	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">

				<!--Validacion base de datos -->
				<form class="login100-form validate-form" method="post" autocomplete="off">

					<!-- Usuario -->	
		          <div class="col-xs-12">
						
						<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="UsuarioIng" onkeyup="javascript:this.value=this.value.toUpperCase();"required >
						<span class="focus-input100"></span>
						<span class="label-input100">Usuario</span>

					</div>
                          


					</div>

					<!-- Coontraseña -->	
					<div class="col-xs-12">
      				 <p class="text-secondary float-left"> Nueva Contraseña</p>
       				 <div class="input-group">
     					<input ID="nueva_contrasena" type="Password" name="nueva_contrasena" Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$" required>
					<!-- boton monstrar Contraseña -->
      					<div class="input-group-append">
            			<button id="show_password" class="login100-form-btn" name="" type="button" onclick="mostrarPassword()" style="background-color: rgb(233,118,46)"> 
            				<h5><span class="fas fa-eye-slash icon"></span></h5></button>

          				</div>
    				</div>
                    </div>
	                <p></p>
                    <p></p>


					<div class="col-xs-12">
      				 <p class="text-secondary float-left">Confirmar Contraseña</p>
       				 <div class="input-group">
     					<input ID="confirmar_contrasena" type="Password" name="confirmar_contrasena" Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$" required>
					<!-- boton monstrar Contraseña -->
      					<div class="input-group-append">
            			<button id="show_password" class="login100-form-btn" name="" type="button" onclick="mostrarPassword2()" style="background-color: rgb(233,118,46)"> 
            				<h5><span class="fas fa-eye-slash icon"></span></h5></button>

          				</div>
    				</div>
                    </div>

	               <p></p>
                          

	                <p></p>

                      <!-- Boton entrar -->
					<div class="container-login100-form-btn"  >
						<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
						<button type="submit" value="Ingresar" name="btn_restablecer" class="login100-form-btn">
							Restablecer
						</button>
					</div>
				
				</form>

				 <!-- Fondo de login -->
				<div class="login100-more" style="background-image: url('../../public/img/EDIT2.SVG');">
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
	 <script src="../../public/js/jquery-3.1.1.min.js"></script>
	  <!-- jQuery -->
    <!-- Bootstrap 3.3.5 -->
    <script src="../../public/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../public/js/app.min.js"></script>

    <!-- DATATABLES -->
    <script src="../../public/datatables/jquery.dataTables.min.js"></script>    
    <script src="../../public/datatables/dataTables.buttons.min.js"></script>
    <script src="../../public/datatables/buttons.html5.min.js"></script>
    <script src="../../public/datatables/buttons.colVis.min.js"></script>
    <script src="../../public/datatables/jszip.min.js"></script>
    <script src="../../public/datatables/pdfmake.min.js"></script>
    <script src="../../public/datatables/vfs_fonts.js"></script> 

    <script src="../../public/js/bootbox.min.js"></script> 
    <script src="../../public/js/bootstrap-select.min.js"></script>  
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("nueva_contrasena");
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

<script type="text/javascript">
function mostrarPassword2(){
		var cambio2 = document.getElementById("confirmar_contrasena");
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
	$('#ShowPassword2').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>

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
					</style>
<!--===============================================================================================-->
<!--===============================================================================================-->




</body>

</html>

<?php


$query3=mysqli_query($mysqli,"SELECT id_usuario, usuario FROM tbl_usuarios WHERE usuario = \"$_POST[UsuarioIng]\"");

while($tbl_usuarios = mysqli_fetch_array($query3))
                        {
                    ?> 
                    		<?php $id_usuario1=$tbl_usuarios['id_usuario']?>
                            <?php $usuario=$tbl_usuarios['usuario']?>
                    <?php

                        }
$query4=mysqli_query($mysqli,"SELECT contrasena FROM tbl_hist_contrasena WHERE id_usuario = $id_usuario1");

while($tbl_hist_contrasena = mysqli_fetch_array($query4))
                        {
                    ?> 
                            <?php $contrasena_exist=$tbl_hist_contrasena['contrasena_exist']?>
                    <?php

                        }


	if(isset($_POST["btn_restablecer"]))

	{

		if($_POST["UsuarioIng"] = $usuario)
		{
				 if($_POST["nueva_contrasena"]!="" &&$_POST["confirmar_contrasena"]!="")
            	$nueva_contrasena = ($_POST["nueva_contrasena"]);
            	$confirmar_contrasena = ($_POST["confirmar_contrasena"]);
			{ 
				if($nueva_contrasena === $confirmar_contrasena)
				{
					if ($nueva_contrasena = $contrasena_exist)
					{
						Print "<script>alert(\"ERROR: No puedes usar una contraseña antigua.\")</script>";		
					}
					else
			  		{ 
			  				mysqli_query($mysqli, "UPDATE tbl_usuarios SET contrasena =(\"$_POST[nueva_contrasena]\")  WHERE usuario=(\"$_POST[UsuarioIng]\")");
							 mysqli_query($mysqli, "UPDATE tbl_usuarios SET primer_ingreso = '0'  WHERE usuario=(\"$_POST[UsuarioIng]\")");
							 mysqli_query($mysqli, "INSERT INTO tbl_hist_contrasena (id_usuario, contrasena) VALUES ('$id_usuario1','$confirmar_contrasena')");
					
		          	
			  		}
			  }
			  else
			  {
			  	print "<script>alert(\"ERROR: Las contraseñas no coinciden entre si. Intentélo de nuevo o contacte a su soporte técnico.\")</script>";	
			  }
	 		}
			
		}

		

echo "<script>window.location='../login.html';</script>";

}

?>