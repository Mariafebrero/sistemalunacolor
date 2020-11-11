<?php 

require '../config/conexion.php';
require 'header.php'; 

?>

<!DOCTYPE html>
<div class="content-wrapper"> 
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <title>Backup</title>
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
  <center><h2>Generar Backup o Respaldo de la base de datos</h2></center>
<center>
    <h3>Realizar Backup</h3>
    <a href="../ajax/backup_ajax.php"> <img src="../public/img/download.jpg" height="100px" width="100px"></a>

</center>
  
</div>


</div>
</div>	
<?php

include 'footer.php';

?>




</html>



