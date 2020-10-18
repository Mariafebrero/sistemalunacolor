
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
		<a href="javascript:history.go(-1)" class="previous"><i class="fas fa-chevron-circle-left fa-2x" aria-hidden="true"></a></i>
	</center>

	<?php
	//Hasta aquí 
		if(isset($_POST['enviarcorreo']))
   	    { 	
			include "../../config/Conglobal.php";

			$user_id=null;
			$user_name =null;
			$user_mail =null;
			$user_token = null;

			$sql= "select * from tbl_usuarios where (usuario=\"$_POST[CasillaUsuario]\") ";
			
			$query = $con->query($sql);

			while ($r=$query->fetch_array()) 
			{
				$user_id=$r["id_usuario"];
				$user=$r["usuario"];
				$user_mail=$r["correo_electronico"];
				$user_token = $r["token"];
				break;
			}
			strtoupper($user);
			if($user_id==null)
			{

		echo"<script type='text/javascript'>		
	    swal('Datos incorrectos ', ' Intentélo de nuevo o contacte a su soporte técnico', 'error');
        </script>";
		    }

			else
			  {
	//--------------------------- Proceso que envía correos INICIO--------------------------------
		function CrearToken($length = 15) 
				{ 
    				return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
				} 
		// Creación del token
		$codigo = CrearToken(); 
		//$codigo = strval($codigo);
		// Creación de fechas
		date_default_timezone_set("America/Tegucigalpa"); 
		$sql= "SELECT valor FROM `tbl_parametros` WHERE parametro = 'ADMIN_VIGENCIA_CORREO'" ;
			
			$query = $con->query($sql);

			while ($r=$query->fetch_array()) 
			{ //volver a tratar
				$VigenciaMail=$r["valor"];

				break;
			}
		$HorasToken = "+" . $VigenciaMail . " Hours";
		$fecha_inicio = strtotime("now");
		$fecha_final = strtotime($HorasToken, $fecha_inicio);

		//Formato de fechas 
		$fecha_final = date("d-m-Y H:i:s", $fecha_final);
		$fecha_inicio = date("d-m-Y H:i:s", $fecha_inicio);
		
		//echo $fecha_inicio . " ". $fecha_final;
	
		$sql= "update tbl_usuarios set token =". "'". $codigo ."'" . " ,fecha_inicio = " . "'". $fecha_inicio . "'". " ,fecha_final=" . "'". $fecha_final . "'". " WHERE usuario=" . "'". $user . "'". " ";

		$con->query($sql);
				/*
		echo $sql;

		if ($con -> query($sql) === TRUE) 
		{
			echo "exito";
		}
			else
			{
				echo "error";
			}
		*/

        $cuerpo = "Querido, " . $user ."<br>". 
        "La petici&oacute;n para el restablecimiento de su contrase&ntilde;a ha sido aceptada. El siguiente enlace tiene una duración de ".  $VigenciaMail . "hrs, en caso de que ingrese en un lapso de tiempo mayor, deberá enviar una nueva solicitud." 
        ."<br>".
         "<br>".
         "Para restablecer su contraseña " 
        . '<a href="http://localhost/4/vistas/RecuContra/ValidarCorreoVista.php?user=' . $user . '&lunaverificationcode=' . $codigo . '">click aquí</a>';

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
        if(mail($user_mail,"Recuperación de contraseña",$cuerpo,$headers))
        {
           echo 
           "<script >
           swal({ title: '¡Envío exitoso!',
           text: 'Revise su bandeja de entrada.',
           icon:'success',
           type: 'success'}).then(okay => {
           if (okay) 
           {
       			window.location.href = '../login1.php';
           }
       		  });
     	   </script>";

     	 $sql= "select * from tbl_usuarios where (usuario=\"$_POST[CasillaUsuario]\") ";
			
			$query = $con->query($sql);

			while ($r=$query->fetch_array()) 
			{
				$user_id=$r["id_usuario"];
				$user=$r["usuario"];
				break;
			}


     	 $sql= 
     	 "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
     	 VALUES('$user_id','1',(select now()),'Entró','Entró a Recuperación Contraseña por Correo','$user',(select now()))";
 		 $con->query($sql);

 		 $sql= 
     	 "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
     	 VALUES('$user_id','1',(select now()),'Enviado','El correo de Recuperación de Contraseña fue enviado correctamente','$user',(select now()))";
 		 $con->query($sql);

 		  $sql= 
     	 "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
     	 VALUES('$user_id','1',(select now()),'Salió','Salió de Recuperación Contraseña por Correo','$user',(select now()))";
 		 $con->query($sql);

 		  $sql= 
     	 "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
     	 VALUES('$user_id','1',(select now()),'Entró','Entró al login','$user',(select now()))";
 		 $con->query($sql);

    	}
    	else
    	{
    		echo"<script type='text/javascript'>		
	    swal('ERROR: No se pudo enviar el correo, por favor inténtelo de nuevo o contacte a su soporte técnico.', '', 'error');
        </script>";
    		
         
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

					<div class="wrap-input100 validate-input" data-validate = "Este campo no puede quedar vacío">
						<input class="input100" style="text-transform: uppercase;" type="text"  name="CasillaUsuario">
						<span class="focus-input100"></span>
						<span class="label-input100"> Ingrese su usuario  </span>
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
