<?php

ob_start();
session_start();

$usuario1 = $sql="SELECT id_usuario FROM tbl_usuarios WHERE usuario=$usuario";
		return ejecutarConsulta($sql);


		$sql="INSERT INTO tbl_preguntas_usuarios (id_pregunta, id_usuario ,respuesta)
			VALUES ($id_usuario, $respuesta)";
			return ejecutarConsulta($sql);

    include '../../config/conexion.php';
    $query=mysqli_query($mysqli,"SELECT id_pregunta, pregunta FROM tbl_preguntas");
    $query1=mysqli_query($mysqli,"SELECT id_pregunta, pregunta FROM tbl_preguntas");
    $query2=mysqli_query($mysqli,"SELECT id_pregunta, pregunta FROM tbl_preguntas");

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
						<input class="input100" type="text" name="usuario">
						<span class="focus-input100"></span>
						<span class="label-input100">Nombre Usuario</span>


					</div>

						<!--Combobox Pregunta #1 -->
                   <p class="text-secondary">Preguntas #1</p>
                    <select name="pregunta1" select id="Pregunta1" required>
                    <?php 
                        while($tbl_preguntas = mysqli_fetch_array($query))
                        {
                    ?>
                            <option value="<?php echo $tbl_preguntas['pregunta']?>"> <?php echo $tbl_preguntas['pregunta']?> </option>
                    <?php
                        }
                    ?> 
                    </select>
                          

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="respuesta1">
						<span class="focus-input100"></span>
						<span class="label-input100">Repuesta #1</span>
					</div>
       			   </div>

                    <p></p>

                    <!--Combobox Pregunta #2 -->
    				<p class="text-secondary">Preguntas #2</p>
                    <select name="pregunta2" select id="Pregunta2" required>
                    <?php 
                        while($tbl_preguntas = mysqli_fetch_array($query1))
                        {
                    ?>
                            <option value="<?php echo $tbl_preguntas['pregunta']?>"> <?php echo $tbl_preguntas['pregunta']?> </option>
                    <?php
                        }
                    ?> 
                    </select>
                          

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="respuesta2">
						<span class="focus-input100"></span>
						<span class="label-input100">Repuesta #2</span>
					</div>

	               <p></p>

	               <!--Combobox Pregunta #3 -->
	               <p class="text-secondary">Preguntas #3</p>

                    <select name="pregunta3" select id="Pregunta3" required>
                    <?php 
                        while($tbl_preguntas = mysqli_fetch_array($query2))
                        {
                    ?>
                            <option value="<?php echo $tbl_preguntas['pregunta']?>"> <?php echo $tbl_preguntas['pregunta']?> </option>
                    <?php
                        }
                    ?> 
                    </select>
                          

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="respuesta3">
						<span class="focus-input100"></span>
						<span class="label-input100">Repuesta #3</span>
					</div>

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
