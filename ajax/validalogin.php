<!DOCTYPE html>
<html>
<head>
	
<!--=========================Sweet Alert========================================================-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--===============================================================================================-->	
</head>
<body>

</body>
</html>



</head>

<?php
session_start(); 
error_reporting(0);
require_once "../modelos/Usuario.php";

$usuarios1 = new Usuario();
$usuarios2 = new Usuario();



$usuario=isset($_POST["usuario"])? limpiarCadena($_POST["usuario"]):false;
$contrasena=isset($_POST["contrasena"])? limpiarCadena($_POST["contrasena"]):false;
$preguntas_contestadas=isset($_POST["preguntas_contestadas"])? limpiarCadena($_POST["preguntas_contestadas"]):false;

$id_usuario1=$_SESSION['id_usuario'];
$usuario1=$_SESSION['usuario'];
// var_dump($usuario);
// var_dump($contrasena);
// die();
if (isset($_POST["btningresar"])){
		//if ($usuario && $contrasena){
	    

		$rspta=$usuarios1->verificar($usuario,$contrasena);
		$fetch=$rspta->fetch_object();
		
	       $rsptaa=$usuarios2->verifica_ingreso($usuario,$contrasena);
	       $fetchh=$rsptaa->fetch_object();

	       		


		if (isset($fetch)){
			mysqli_query($mysqli, "UPDATE tbl_usuarios SET intentos = 1 WHERE usuario = '$usuario'");
           header("Location: ../vistas/escritorio.php");
           //Declaramos las variables de sesión
	        $_SESSION['id_usuario']=$fetch->id_usuario;
	        $_SESSION['nombre_usuario']=$fetch->nombre_usuario;
	        $_SESSION['imagen']=$fetch->imagen;
	        $_SESSION['usuario']=$fetch->usuario;

	        /*
             //Obtenemos los permisos del usuario
	    	$marcados = $usuarios1->listarmarcados($fetch->id_usuario);

	    	//Declaramos el array para almacenar todos los permisos marcados
			$valores=array();

			//Almacenamos los permisos marcados en el array
			while ($per = $marcados->fetch_object())
				{
					array_push($valores, $per->idpermiso);

				}

			//Determinamos los accesos del usuario
			in_array(1,$valores)?$_SESSION['Escritorio']=1:$_SESSION['Escritorio']=0;
			in_array(2,$valores)?$_SESSION['Cliente']=1:$_SESSION['Cliente']=0;
			in_array(3,$valores)?$_SESSION['Cotizacion']=1:$_SESSION['Cotizacion']=0;
			in_array(4,$valores)?$_SESSION['Pedido']=1:$_SESSION['Pedido']=0;
			in_array(5,$valores)?$_SESSION['Factura']=1:$_SESSION['Factura']=0;
			in_array(6,$valores)?$_SESSION['Inventario']=1:$_SESSION['Inventario']=0;
			in_array(7,$valores)?$_SESSION['Compras']=1:$_SESSION['Compras']=0;
			in_array(8,$valores)?$_SESSION['Usuario']=1:$_SESSION['Usuario']=0;
			in_array(9,$valores)?$_SESSION['Reporte']=1:$_SESSION['Reporte']=0;
			in_array(10,$valores)?$_SESSION['Seguridad']=1:$_SESSION['Seguridad']=0;

		*/

	    $id_usuario1=$_SESSION['id_usuario'];
		$usuario1=$_SESSION['usuario'];

		 $sql_bitacora4= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		  VALUES('$id_usuario1','1',(select now()),'Salió','Salió de login','$usuario1',(select now()))";
 		  ejecutarConsulta($sql_bitacora4);
  		//Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
 		$sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
      	VALUES('$id_usuario1','1',(select now()),'Entrada','Entró al Sistema','$usuario1',(select now()))";
      	ejecutarConsulta($sql_bitacora);




	    }elseif(isset($fetchh)){

	    	$_SESSION['id_usuario']=$fetchh->id_usuario;
	        $_SESSION['nombre_usuario']=$fetchh->nombre_usuario;
	        $_SESSION['imagen']=$fetchh->imagen;
	        $_SESSION['usuario']=$fetchh->usuario;
	        $_SESSION['preguntas_contestadas']=$fetchh->preguntas_contestadas;

	       


	      $id_usuario1=$_SESSION['id_usuario'];
		  $usuario1=$_SESSION['usuario'];
		  
  		  $sql_bitacora4= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		  VALUES('$id_usuario1','1',(select now()),'Salió','Salió de login','$usuario1',(select now()))";
 		  ejecutarConsulta($sql_bitacora4);

	      $sql_bitacora3= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		  VALUES('$id_usuario1','1',(select now()),'Entró','Preguntas Primer Ingreso','$usuario1',(select now()))";
		  ejecutarConsulta($sql_bitacora3);

              header("Location: ../vistas/PrimerIngreso/preguntaingreso.php");
	    }else{
          $query3=mysqli_query($mysqli,"SELECT * FROM tbl_usuarios WHERE usuario = '$usuario'");
		  $query2=mysqli_query($mysqli,"SELECT valor FROM tbl_parametros WHERE id_parametro = '8'");


				while($tbl_usuarios = mysqli_fetch_array($query3))
                        {
                    ?> 
                    		<?php $id_usuario2=$tbl_usuarios['id_usuario']?>
                    		 <?php $id_estado_usuario=$tbl_usuarios['id_estado_usuario']?>
                            <?php $intentos=$tbl_usuarios['intentos']?>
                    <?php

                        }
		
				while($tbl_parametros = mysqli_fetch_array($query2))
                        {
                    ?> 
                            <?php $valor=$tbl_parametros['valor']?>
                    <?php

                        }	

                        	if ($intentos == $valor)
							{

							 
  		 					

								echo "<script >
            swal({ title: '',
          	text: 'Has agotado el límite de intentos, su usuario ha sido bloqueado. Favor contactar al administrador.',
          	icon:'error',
         	type: 'error'}).then(okay => 
         	{
         	if (okay)
         	{
       			window.location='../vistas/login1.php';
       			exit();
      	 	}
      	 	else 
      	 	{
      	 		window.location='../vistas/login1.php';
      	 		exit();
      	 	}
      	 	
       		});
     			 </script>";

   								mysqli_query($mysqli, "UPDATE tbl_usuarios SET id_estado_usuario= 4 WHERE usuario = '$usuario'");

   								
   								

   								 $sql_bitacora4= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		 						 VALUES('$id_usuario2','1',(select now()),'Actualizó','Actualizó Estado a: Bloqueado','$usuario',(select now()))";
 		 	 						ejecutarConsulta($sql_bitacora4);
							}
							else
							{
								if ($id_estado_usuario == 1) {
									echo "<script >
            swal({ title: '',
          	text: 'Su usuario se encuentra inactivo, por favor contacte al administrador.',
         	type: 'error'}).then(okay => 
         	{
         	if (okay)
         	{
       			window.location='../vistas/login1.php';
       			exit();
      	 	}
      	 	else 
      	 	{
      	 		window.location='../vistas/login1.php';
      	 		exit();
      	 	}
      	 	
       		});
     			 </script>";

								}
								else
								{
									
									

 		 	 					echo "<script >
            swal({ title: '',
          	text: 'Usuario o Contraseña incorrecta. Por favor ingrese los datos correctamente. Lleva $intentos intentos',
          	icon:'error',
         	type: 'error'}).then(okay => 
         	{
         	if (okay)
         	{
       			window.location='../vistas/login1.php';
       			exit();
      	 	}
      	 	else 
      	 	{
      	 		window.location='../vistas/login1.php';
      	 		exit();
      	 	}
      	 	
       		});
     			 </script>";




								mysqli_query($mysqli, "UPDATE tbl_usuarios SET intentos = (intentos + 1) WHERE usuario = '$usuario'");

								$sql_bitacora5= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
		 				 		VALUES('$id_usuario2','1',(select now()),'Actualizó','Actualizó Intentos/contraseña','$usuario',(select now()))";
 		 	 					ejecutarConsulta($sql_bitacora5);	

								}
							}	
                        
				
	    }
	}
?>