<?php 

//otra forma de conexión pero la variable se llama $mysqli
/*
$mysqli = new MySQLi("localhost", "root","", "db_luna_color");
if ($mysqli -> connect_errno) 
{
die( "ERROR: Intente de nuevo: (" . $mysqli -> mysqli_connect_errno() 
	. ") " . $mysqli -> mysqli_connect_error());
}
else {
	echo "¡Conexón exitosa! Bienvenido al sistema"
}
*/

$host="localhost";
$user="root";
$password="";
$db="db_luna_color";
$con = new mysqli($host,$user,$password,$db);
if ($con -> connect_errno) 
	echo "ERROR: La conexión ha fallado, inténtelo de nuevo";
else
	//si se pone mensaje sale en todas las paginas de conexion
?>