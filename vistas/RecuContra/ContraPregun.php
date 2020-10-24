
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
	<?php
		include "../../config/Conglobal.php";
	?>
	<!-- Botones atras y adelante -->
	<center>

			<!-- Boton atras -->
		<a href="javascript:history.go(-1)" class="previous"><i class="fas fa-chevron-circle-left fa-2x" aria-hidden="true"></a></i>

	</center>
	<?php
			
	if(isset($_POST["BotonRespuesta"]))

	{ //  --------------  Si presiona botón inicio --------------------
		if($_POST["UsuarioPre"]!="" &&$_POST["RespuestaPre"]!="")
		{ //  --------------  Si las casillas estan llenas inicio --------------------
			include "../../config/Conglobal.php";


			$respuestaB =null;
            $respuestaI = $_POST['RespuestaPre'];

			$sql="select pr.respuesta from tbl_preguntas_usuarios pr join tbl_usuarios u on u.id_usuario =pr.id_usuario where (u.usuario =\"$_POST[UsuarioPre]\" and pr.id_pregunta=\"$_POST[SelectPre]\")";

			 //"select respuesta from tbl_preguntas_usuarios where (usuario=\"$_POST[UsuarioPre]\"  and id_pregunta=\"$_POST[SelectPre]\") ";


			$query = $con->query($sql);

			while ($r=$query->fetch_array()) 
			{
				$respuestaB=$r["respuesta"];
				break;
			}


			if($respuestaB === $respuestaI)
			{ //  --------------  Si las respuestas son iguales inicio --------------------
			session_start();
			$_SESSION["nombre_usuario"] = ($_POST['UsuarioPre']);


			echo "<script >
            swal({ title: '¡Identificación exitosa!',
          	text: '',
          	icon:'success',
         	type: 'success'}).then(okay => 
         	{
         	if (okay)
         	{
       			window.location='ValidarPreguntaVista.php';
       			exit();
      	 	}
      	 	else 
      	 	{
      	 		window.location='ValidarPreguntaVista.php';
      	 		exit();
      	 	}
      	 	
       		});
     			 </script>";



     		 $sql= "select * from tbl_usuarios where (usuario=\"$_POST[UsuarioPre]\") ";
			
			$query = $con->query($sql);

			while ($r=$query->fetch_array()) 
			{
				$user_id=$r["id_usuario"];
				$user=$r["usuario"];
				break;
			}


     	 $sql= 
     	 "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
     	 VALUES('$user_id','9',(select now()),'Entró','Entró a Recuperación Contraseña por Pregunta Secreta','$user',(select now()))";
 		 $con->query($sql);

 		   $sql= 
     	 "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
     	 VALUES('$user_id','9',(select now()),'Contestó','Contestó Pregunta Secreta','$user',(select now()))";
 		 $con->query($sql);

 		  $sql= 
     	 "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
     	 VALUES('$user_id','9',(select now()),'Salió','Salió de Recuperación Contraseña por Pregunta Secreta','$user',(select now()))";
 		 $con->query($sql);

 		 

 			 

					//print "<script>alert('¡Identificación exitosa!'); window.location='ValidarPreguntaVista.php';</script>";	
				
			}  //  --------------  Si las respuestas son iguales inicio --------------------
			else

			  {  //  --------------  Si las respuestas no son iguales inicio --------------------
			  	
        		echo"<script type='text/javascript'>		
	   			 swal(\"ERROR: Datos incorrectos. \", ' Inténtelo de nuevo o contacte a su soporte técnico.', 'error');
        		</script>";

			  }  //  --------------  Si las respuestas son iguales final --------------------
	    } //  --------------  Si las casillas estan llenas final --------------------
	} //  --------------  Si presiona botón final --------------------
    

?>			  
					


	<div class="limiter"  >
		<div class="container-login100" >
			<div class="wrap-login100">

				<form class="login100-form validate-form" method="post" autocomplete="off">

<!------------------------ Casilla de usuario a la pregunta personal ---------------------------->
					<div class="wrap-input100 validate-input"  style = "position:relative;  top:-90px;" data-validate = "No puede dejar este campo vacío">
						<input class="input100" style="text-transform: uppercase;"  type="text" name="UsuarioPre">
						<span class="focus-input100"></span>
						<span class="label-input100">Ingrese su nombre de usuario </span>
					</div>

<!--------------------- Llenar Select picker desde la base de datos Inicio -------------------------------->
		<select name ="SelectPre" class="form-control selectpicker" style = "position:relative;  top:-40px;" data-live-search="true" required>
        <option value="0">Seleccione:</option>

           <?php
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
