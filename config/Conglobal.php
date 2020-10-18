
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


$host="localhost";
$user="root";
$password="";
$db="db_luna_color";
$con = new mysqli($host,$user,$password,$db);
if ($con -> connect_errno) 


	echo '<script>swal({
  			title: "",
  			text: "ERROR: La conexión ha fallado, inténtelo de nuevo",
  			icon: "warning",
  			button: "OK",
			});</script>';

	//echo "ERROR: La conexión ha fallado, inténtelo de nuevo";
else
	//si se pone mensaje sale en todas las paginas de conexion
?>