<?php
ob_start();
session_start();
//error_reporting(0);

    include '../../config/conexion.php';
    
    //Bitacora
	//Incializamos las variables de seccion 
 	$id_usuario1=$_SESSION['id_usuario'];
	$usuario1=$_SESSION['usuario']; 

	$query=mysqli_query($mysqli,"SELECT * FROM tbl_preguntas WHERE estado = '1'");
	$query3=mysqli_query($mysqli,"SELECT id_pregunta FROM tbl_preguntas_usuarios WHERE id_usuario = '$id_usuario1'");
	$query4=mysqli_query($mysqli,"SELECT valor FROM tbl_parametros WHERE id_parametro = '7'");
	$query5=mysqli_query($mysqli,"SELECT * FROM tbl_usuarios WHERE id_usuario = '$id_usuario1'");

while($tbl_preguntas_usuarios = mysqli_fetch_array($query3))
                        {
                    ?> 
                            <?php $id_preguntas=$tbl_preguntas_usuarios['id_pregunta']?>
                    <?php

                        }

while($tbl_parametros2 = mysqli_fetch_array($query4))
                        {
                    ?> 
                            <?php $valor1=$tbl_parametros2['valor']?>
                    <?php

                        }


while($tbl_usuarios2 = mysqli_fetch_array($query5))
                        {
                    ?> 
                    		<?php $id_estado_usuario=$tbl_usuarios2['id_estado_usuario']?>
                            <?php $preguntas_contestadas2=$tbl_usuarios2['preguntas_contestadas']?>
                    <?php

                        }  



	if ($preguntas_contestadas2 == $valor1)
	{       
		if ($id_estado_usuario == 5) 
		{
			mysqli_query($mysqli, "UPDATE tbl_preguntas SET estado = 1");
			mysqli_query($mysqli, "UPDATE tbl_usuarios SET 	id_estado_usuario = '1'  WHERE id_usuario='$id_usuario1'");

			
			echo "<script>alert('El proceso de registro a finalizado. Por favor contacte al administrador para tener acceso al sistema');window.location.href='../login1.php';</script>";
		}
		else
		{
			$sql_bitacora3= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		    VALUES('$id_usuario1','6',(select now()),'Entró','Confirmar contraseña en Preguntas primer ingreso','$usuario1',(select now()))";
		 	ejecutarConsulta($sql_bitacora3);
		 	mysqli_query($mysqli, "UPDATE tbl_preguntas SET estado = 1");
		    echo "<script>window.location='ConfirmarContrasena.php';</script>";
		}			
	}   

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
<!--===============================================================================================-->
</head>
<body  style="background-color: rgb(63,63,63)">

<center>
			<!-- Boton atras -->
		<a href="javascript:history.go(-1)" class="previous"><i class="fas fa-chevron-circle-left fa-2x" aria-hidden="true"></a></i>
			<!-- Boton adelante -->
	

 </center>



	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">

				<!--Validacion base de datos -->
				<form class="login100-form validate-form" method="post" autocomplete="off">

					<!-- Usuario -->	
		          <div class="col-xs-12">
 
		          	 <center>
		           <h3><span class="hiddenui"><i class="fas fa-user-lock"> PREGUNTAS DE SEGURIDAD</i></span></h3>
		           <br>
		          	 <h3><span class="hidden-xs"><i class="fas fa-user"> <?php echo $_SESSION['nombre_usuario'];?></span></i></h3>
					</center>




		          	<br>
                 
						
			

						<!--Combobox Pregunta #1 -->

					 <p><H4>Pregunta: Nº <?php echo $preguntas_contestadas2 + 1; ?></H4></p>
                    <select class="selecion" name="pregunta1" select id="Pregunta1" required>
                    	<option value="0">Seleccione:</option>
                    <?php 


                        while($tbl_preguntas = mysqli_fetch_array($query))
                        {
                    ?>      

                            <option value="<?php echo $tbl_preguntas['pregunta']?>"> <?php echo $tbl_preguntas['pregunta']?> </option>
                            
                    <?php
                        }
                    ?> 
                    </select>
                          
                   <br>
                   <br>
                  
                    <div class="wrap-input100 validate-input">
						<input id="respuesta1" class="input100" type="text" name="respuesta1">
						<span class="focus-input100"></span>
						<span class="label-input100">Respuesta</span>


					</div>
       			   </div>
                   
                   
                      <!-- Boton entrar -->
					<div class="container-login100-form-btn"  >
						<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
						<button type="submit" value="Ingresar" name="botonentrar" class="login100-form-btn">
							Siguiente
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

						
         				.hidden-xs{

         		   color: #3D3D3D;			
                   width: auto;
                   padding: 5px 5px;
                   transition: 0.3s; 
                   border-radius: 70px 70px 70px 70px;
				   -moz-border-radius: 70px 70px 70px 70px;
				   -webkit-border-radius: 70px 70px 70px 70px;
					border: 0px solid #ffffff;
								   }


						.hiddenui{
 				   color: #E8762F;			
                   width: auto;
                   padding: 5px 5px;
                   transition: 0.3s; 
                   border-radius: 70px 70px 70px 70px;
				   -moz-border-radius: 70px 70px 70px 70px;
				   -webkit-border-radius: 70px 70px 70px 70px;
					border: 0px solid #ffffff;



						}		   


					.selecion{
    font-size: 16px;
    font-family: 'Verdana', sans-serif;
    font-weight: 400;
    color: #444;
    line-height: 1.3;
    padding: .4em 1.4em .3em .8em;
    width: 400px;
    max-width: 100%; 
    box-sizing: border-box;
    margin: 20px auto;
    border: 5px solid #E9762E;
    box-shadow: 0 1px 0 1px rgba(0,0,0,.03);
    border-radius: .3em;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;

					}
					</style>
<!--===============================================================================================-->
<!--===============================================================================================-->




</body>

</html>

<?php

while($tbl_usuarios = mysqli_fetch_array($query5))
                        {
                    ?> 
                            <?php $preguntas_contestadas2=$tbl_usuarios['preguntas_contestadas']?>
                    <?php

                        }                        

if (isset($_POST['botonentrar'])) {
	if ($preguntas_contestadas2 == $valor1)
	{       
		
	}
	else
	{
		 mysqli_query($mysqli, "INSERT INTO tbl_preguntas_usuarios ( id_usuario, id_pregunta, respuesta) VALUES ('$id_usuario1',(SELECT id_pregunta FROM tbl_preguntas WHERE pregunta = \"$_POST[pregunta1]\"), \"$_POST[respuesta1]\")");
		 mysqli_query($mysqli, "UPDATE tbl_usuarios SET preguntas_contestadas= (preguntas_contestadas + 1) WHERE id_usuario = '$id_usuario1'");
		 mysqli_query($mysqli, "UPDATE tbl_preguntas SET estado = 0 WHERE id_pregunta = (SELECT id_pregunta FROM tbl_preguntas WHERE pregunta = \"$_POST[pregunta1]\")");

		  //Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
		  $sql_bitacora2= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		  VALUES('$id_usuario1','6',(select now()),'Insertó','Insertó preguntas primer ingreso','$usuario1',(select now()))";
		  ejecutarConsulta($sql_bitacora2);

		   $sql_bitacora3= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		  VALUES('$id_usuario1','6',(select now()),'Actualizó','Actualizó preguntas constestadas','$usuario1',(select now()))";
		  ejecutarConsulta($sql_bitacora3);

		 echo "<script>window.location='preguntaingreso.php';</script>";
	}

}

?>