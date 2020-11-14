<?php
require("../config/conexion.php");
$prove = mysqli_real_escape_string($mysqli, $_POST["id_producto"]);
$query = 'SELECT * FROM tbl_producto_acabado WHERE id_producto = "'.$prove.'"';
$result = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
{
    echo '<option value="' .$row["id_producto"]. '">' .$row["acabado"]. '</option>';
}
mysqli_close($mysqli);
?>
