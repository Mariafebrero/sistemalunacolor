
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
<!--=========================Sweet Alert========================================================-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

				<form class="login100-form validate-form" method="post" action = "ContraPregunValidar.php" autocomplete="off">

<!------------------------ Casilla de usuario a la pregunta personal ---------------------------->
					<div class="wrap-input100 validate-input"  style = "position:relative;  top:-90px;" data-validate = "No puede dejar este campo vacío">
						<input class="input100" style="text-transform: uppercase;"  type="text" name="UsuarioPre"  id= "UsuarioPre" keydown ="teclear()">
						<span class="focus-input100"></span>
						<span class="label-input100">Ingrese su nombre de usuario </span>
					</div>

<!--------------------- Llenar Select picker desde la base de datos Inicio -------------------------------->
		<select name ="SelectPre" class="form-control selectpicker" style = "position:relative;  top:-40px;" data-live-search="true" required>
        <option value="0">Seleccione:</option>

           <?php
           include "../../config/Conglobal.php";
         	 $query = $con -> query ("SELECT * FROM `tbl_preguntas` WHERE estado = 1 ");
          	while ($preguntas = mysqli_fetch_array($query)) 
          	 {
                 echo '<option value="'.$preguntas[id_pregunta].'">'.$preguntas[pregunta].'</option>';
             }
           ?>
      		</select>
<!----------------------- Llenar Select picker desde la base de datos Fin  ------------------------------->

					<br>

		<!------------------------ Casilla de respuesta a la pregunta personal ---------------------------->
					<div class="wrap-input100 validate-input" style = "position:relative;  top:-40px;" data-validate = "No puede dejar este campo vacío">
						<input class="input100" type="text" name="RespuestaPre">
						<span class="focus-input100"></span>
						<span class="label-input100">Ingrese su respuesta </span>
					</div>


		<!---------------------------- Botón Ingresar Respuesta ----------------------------------->
					<div class="container-login100-form-btn"  style = "position:relative;  top:-40px;" >
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
	<script type="text/javascript">

document.getElementById("UsuarioPre").addEventListener("keydown", teclear);

var flag = false;
var teclaAnterior = "";

function teclear(event) {
  teclaAnterior = teclaAnterior + " " + event.keyCode;
  var arregloTA = teclaAnterior.split(" ");
  if (event.keyCode == 32 && arregloTA[arregloTA.length - 2] == 32) {
    event.preventDefault();
  }
}

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
