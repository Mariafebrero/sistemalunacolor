<?php

ob_start();
session_start();
error_reporting(0);
    include '../../config/conexion.php';

   $id_usuario1=$_SESSION['id_usuario'];
   $usuario1=$_SESSION['usuario']; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="../../public/js/bootbox.min.js"></script> 
	<script src="../../public/plugins/sweetalert/sweetalert.min.js"></script>
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
<!--===============================================================================================-->

<!--=========================Sweet Alert========================================================-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--===============================================================================================-->	

</head>
<body  style="background-color: rgb(63,63,63)">





	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">

				<!--Validacion base de datos -->
				<form class="login100-form validate-form" method="post" autocomplete="off">

					<!-- Usuario -->	
		          <div class="col-xs-12">
						
						 <center>
		          		 <h3><span class="hiddenty"><i class="fas fa-user"> <?php echo $_SESSION['nombre_usuario'];?></span></i></h3>
					</center>
                          
					<br>
                    
                     <div class="col-xs-12">
      				 <p class="text-secondary float-left">Contraseña anterior</p>
       				 <div class="input-group">
     					<input ID="contrasena_anterior" type="Password" name="contrasena_anterior" Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,10}$" minlength="5" maxlength="10" required>
					<!-- boton monstrar Contraseña -->
      					<div class="input-group-append">
            			<button id="show_password" class="login100-form-btn" name="" type="button" onclick="mostrarPassword3()" style="background-color: rgb(233,118,46)"> 
            				<h5><span class="fas fa-eye-slash icon"></span></h5></button>

          				</div>
    				</div>
                    </div>
				<!-- NUEVOS -->

       			   <div class="col-xs-12">
      				 <p class="text-secondary float-left">Nueva contraseña</p>
       				 <div class="input-group">
     					<input ID="nueva_contrasena" type="Password" name="nueva_contrasena" Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,10}$" minlength="5" maxlength="10" required>
					<!-- boton monstrar Contraseña -->
      					<div class="input-group-append">
            			<button id="show_password" class="login100-form-btn" name="" type="button" onclick="mostrarPassword2()" style="background-color: rgb(233,118,46)"> 
            				<h5><span class="fas fa-eye-slash SVG"></span></h5></button>

          				</div>
    				</div>
                    </div>

                     <p></p>
                      <p></p>

                     <div class="col-xs-12">
      				 <p class="text-secondary float-left">Confirmar contraseña</p>
       				 <div class="input-group">
     					<input ID="confirmar_contrasena" type="Password" name="confirmar_contrasena" Class="form-control" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,10}$" minlength="5" maxlength="10" required>
					<!-- boton monstrar Contraseña -->
      					<div class="input-group-append">
            			<button id="show_password" class="login100-form-btn" name="" type="button" onclick="mostrarPassword()" style="background-color: rgb(233,118,46)"> 
            				<h5><span class="fas fa-eye-slash png"></span></h5></button>

          				</div>
    				</div>
                    </div>

                   
                    <br>
				<center>
                     <small  ><h6>*La contraseña debe tener entre 5 a 10 letras, mínimo un número, una letra mayúscula y un símbolo.
	    			</h6></small> 
	    		</center>
	    		 	<br>

                <!-- FIN -->
                   
                    <p></p>

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

<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("confirmar_contrasena");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.png').removeClass('fas fa-eye-slash').addClass('fas fa-eye');
		}else{
			cambio.type = "password";
			$('.png').removeClass('fas fa-eye').addClass('fas fa-eye-slash');
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
		var cambio1 = document.getElementById("nueva_contrasena");
		if(cambio1.type == "password"){
			cambio1.type = "text";
			$('.SVG').removeClass('fas fa-eye-slash').addClass('fas fa-eye');
		}else{
			cambio1.type = "password";
			$('.SVG').removeClass('fas fa-eye').addClass('fas fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword2').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>


<script type="text/javascript">
function mostrarPassword3(){
		var cambio3 = document.getElementById("contrasena_anterior");
		if(cambio3.type == "password"){
			cambio3.type = "text";
			$('.icon').removeClass('fas fa-eye-slash').addClass('fas fa-eye');
		}else{
			cambio3.type = "password";
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

						.hiddenty{

         		   color: #3D3D3D;			
                   width: auto;
                   padding: 5px 5px;
                   transition: 0.3s; 
                   border-radius: 70px 70px 70px 70px;
				   -moz-border-radius: 70px 70px 70px 70px;
				   -webkit-border-radius: 70px 70px 70px 70px;
					border: 0px solid #ffffff;
								   }
					</style>
<!--===============================================================================================-->
<!--===============================================================================================-->




</body>

</html>


<?php


$query4=mysqli_query($mysqli,"SELECT contrasena FROM tbl_hist_contrasena WHERE id_usuario = '$id_usuario1'");

while($tbl_hist_contrasena = mysqli_fetch_array($query4))
                        {
                    ?> 
                            <?php $contrasena_exist=$tbl_hist_contrasena['contrasena']?>
                    <?php

                        }


	if(isset($_POST["btn_restablecer"]))
	{
				if($_POST["nueva_contrasena"]!="" &&$_POST["confirmar_contrasena"]!="")
            	
            	
			{ 
				$contrasena_anterior= ($_POST["contrasena_anterior"]);
	            $clavehash=hash("SHA256",$contrasena_anterior);
                

                $nueva_contrasena= ($_POST["nueva_contrasena"]);
	            $clavehash1=hash("SHA256",$nueva_contrasena);
                
                


	            $confirmar_contrasena= ($_POST["confirmar_contrasena"]);
	            $clavehash2=hash("SHA256",$confirmar_contrasena);
	           
                

				if ($clavehash == $contrasena_exist)
				{
					if($clavehash1 == $clavehash2)
					{
						if ($clavehash1== $contrasena_exist)
						{
							//echo 
           
							echo "<script>alert('No puede usar una contraseña antigua. Por favor ingrese una nueva.');window.location.href='ConfirmarContrasena.php';</script>";		
						}
						else
			  			{ 
			  				mysqli_query($mysqli, "UPDATE tbl_usuarios SET contrasena ='$clavehash2'  WHERE id_usuario='$id_usuario1'");
							mysqli_query($mysqli, "UPDATE tbl_usuarios SET 	id_estado_usuario = '2'  WHERE id_usuario='$id_usuario1'");
							mysqli_query($mysqli, "INSERT INTO tbl_hist_contrasena (id_usuario, contrasena) VALUES ('$id_usuario1','$clavehash2')");

							//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
		  					$sql_bitacora1= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		 						 VALUES('$id_usuario1','6',(select now()),'Actualizó','Actualizó contraseña','$usuario1',(select now()))";
		 						 ejecutarConsulta($sql_bitacora1);

		 					$sql_bitacora2= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		 						 VALUES('$id_usuario1','6',(select now()),'Actualizó','Actualizó Primer ingreso a usuario: Activo','$usuario1',(select now()))";
		 						 ejecutarConsulta($sql_bitacora2);
		 					$sql_bitacora3= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		 						 VALUES('$id_usuario1','6',(select now()),'Insertó','Insertó contraseña a historial de contraseñas','$usuario1',(select now()))";
		 						 ejecutarConsulta($sql_bitacora3);	 
		          	
			  			}
			 	 	}
			  		else
			  		{
			  			echo "<script>alert('Las contraseñas no coinciden. Por favor ingrese los datos correctamente.');window.location.href='ConfirmarContrasena.php';</script>";
			 		}
	 			}

				else
				{
               

				/*echo '<script>swal({
  			    title: "",
  			    text: "La contraseña anterior no existe. Por favor ingrese una contraseña valida",
  			    icon: "warning",
  			    button: "OK",
			    });window.location.href="ConfirmarContrasena.php";</script>';*/


				echo "<script>alert('La contraseña anterior no existe. Por favor ingrese una contraseña valida');window.location.href='ConfirmarContrasena.php';</script>";
				}
			
		
 $sql_bitacora4= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		  VALUES('$id_usuario1','6',(select now()),'Salió','Salió de Primer ingreso/Confirmar contraseña','$usuario1',(select now()))";
 		  ejecutarConsulta($sql_bitacora4);
 $sql_bitacora5= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		  VALUES('$id_usuario1','5',(select now()),'Entró','Entró a login','$usuario1',(select now()))";
 		  ejecutarConsulta($sql_bitacora5); 		  
		

echo "<script>alert('¡Su Contraseña se ha restablecido exitosamente!');window.location='../login1.php';</script>";
}
}

?>