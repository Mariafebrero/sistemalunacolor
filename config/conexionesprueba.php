<?php


		$mysqli = new MySQLi("localhost", "root","", "db_luna_color");
		if ($mysqli -> connect_errno) 
		{
			die( "ERROR: Intente de nuevo: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else


?>