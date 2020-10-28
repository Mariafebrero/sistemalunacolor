<?php
		include "../../config/Conglobal.php";
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
			  	
        		

        			echo "<script >
            swal({ title: 'Datos incorrectos',
          	text: 'Inténtelo de nuevo o contacte a su soporte técnico.',
          	icon:'error',
         	type: 'error'}).then(okay => 
         	{
         	if (okay)
         	{
       			window.location='ContraPregun.php';
       			exit();
      	 	}
      	 	else 
      	 	{
      	 		window.location='ContraPregun.php';
      	 		exit();
      	 	}
      	 	
       		});
     			 </script>";

			  }  //  --------------  Si las respuestas son iguales final --------------------
	    } //  --------------  Si las casillas estan llenas final --------------------
	} //  --------------  Si presiona botón final --------------------
    

?>