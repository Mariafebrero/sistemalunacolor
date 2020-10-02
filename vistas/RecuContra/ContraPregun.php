
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
	<link rel="stylesheet" type="text/css" href="../..//public/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/main.css">
<!--===============================================================================================-->
</head>
<body  style="background-color: rgb(63,63,63)">
	<?php
		include "../../config/Conglobal.php";
	?>
	<!-- Botones atras y adelante -->
	<center>

			<!-- Boton atras -->
		<a href="javascript:history.go(-1)" class="previous"><i class="fas fa-chevron-circle-left fa-2x" aria-hidden="true"></a></i>

	</center>
	<?php

    $ContadorPreg = 0;	
	if(isset($_POST["BotonRespuesta"]))

	{
		if($_POST["UsuarioPre"]!="" &&$_POST["RespuestaPre"]!="")
		{
			include "../../config/Conglobal.php";


			$respuestaB =null;
            $respuestaI = $_POST['RespuestaPre'];

			$sql= "select respuesta from tbl_preguntas_usuarios where (usuario=\"$_POST[UsuarioPre]\" or usuario=\"$_POST[UsuarioPre]\") and id_pregunta=\"$_POST[SelectPre]\" ";


			$query = $con->query($sql);

			while ($r=$query->fetch_array()) 
			{
				$respuestaB=$r["respuesta"];
				break;
			}


			if($respuestaB === $respuestaI)
			{ 
					session_start();
					$_SESSION["nombre_usuario"] = ($_POST['UsuarioPre']);
					print "<script>alert('¡Identificación exitosa!'); window.location='ValidarPreguntaVista.php';</script>";	
				
			}
			else

			  {
			  	//solo debe contar si el usuario existe 
			  	 $ContadorPreg = $ContadorPreg + 1;	
			  		print "<script>alert(\"ERROR: Datos incorrectos. Inténtelo de nuevo o contacte a su soporte técnico. NÚMERO DE INTENTOS: $ContadorPreg \")</script>";	

			  }
	    }
	    else 
	    {
			print "<script>alert(\"Por favor, llene los espacios requeridos. \")</script>";
	    }
	}
    

?>			  
					


	<div class="limiter"  >
		<div class="container-login100" >
			<div class="wrap-login100">

				<form class="login100-form validate-form" method="post" autocomplete="off">

	<!--------------------- Llenar Select picker desde la base de datos Inicio -------------------------------->
		<select name ="SelectPre" class="form-control selectpicker" data-live-search="true" required>
        <option value="0">Seleccione:</option>

           <?php
         	 $query = $con -> query ("SELECT * FROM `tbl_preguntas` ");
          	while ($valores = mysqli_fetch_array($query)) 
          	 {
                 echo '<option value="'.$valores[id_pregunta].'">'.$valores[pregunta].'</option>';
             }
           ?>
      		</select>
 <!----------------------- Llenar Select picker desde la base de datos Fin  ------------------------------------>

					<br>
	   <!------------------------ Casilla de usuario a la pregunta personal ---------------------------->
					<div class="wrap-input100 validate-input" data-validate = "No puede dejar este campo vacío">
						<input class="input100" type="text" name="UsuarioPre" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Ingrese su nombre de usuario </span>
					</div>


		<!------------------------ Casilla de respuesta a la pregunta personal ---------------------------->
					<div class="wrap-input100 validate-input" data-validate = "No puede dejar este campo vacío">
						<input class="input100" type="text" name="RespuestaPre">
						<span class="focus-input100"></span>
						<span class="label-input100">Ingrese su respuesta </span>
					</div>


		<!---------------------------- Botón Ingresar Respuesta ----------------------------------->
					<div class="container-login100-form-btn"  >
						<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
						<button type="submit" name ="BotonRespuesta"  class="login100-form-btn">
							Ingresar
						</button>
					</div>
					
					
				</form>

				 <!-- Fondo de login -->
				<div class="login100-more" style="background-image: url('../../public/img/FONDOS-03.SVG');">
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
