<?php
	require'../config/conexion.php';
	
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['fecha_inicio']));
		$date2 = date("Y-m-d", strtotime($_POST['fecha_fin']));
		$query=mysqli_query($conexion, "SELECT b.id_bitacora,b.fecha,u.id_usuario,o.id_objeto,o.objeto,o.descripcion as descripcion1,b.accion,b.descripcion,b.creado_por,b.fecha_creacion
		from tbl_bitacora b
		INNER JOIN tbl_usuarios u ON b.id_usuario = u.id_usuario 
		INNER JOIN tbl_objetos o ON b.id_objeto = o.id_objeto
		Where
        DATE(fecha)>='$date1' AND DATE(fecha)<='$date2'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['id_bitacora']?></td>
		<td><?php echo $fetch['fecha']?></td>
		<td><?php echo $fetch['id_usuario']?></td>
		<td><?php echo $fetch['id_objeto']?></td>
		<td><?php echo $fetch['objeto']?></td>
		<td><?php echo $fetch['descripcion1']?></td>
		<td><?php echo $fetch['accion']?></td>
		<td><?php echo $fetch['descripcion']?></td>
		<td><?php echo $fetch['creado_por']?></td>
		<td><?php echo $fetch['fecha_creacion']?></td>
	</tr>
<?php
			}
		}else{
			echo'
			<tr>
				<td colspan = "4"><center>Registros no Existen</center></td>
			</tr>';
		}
	}else{
		$query=mysqli_query($conexion, "SELECT b.id_bitacora,b.fecha,u.id_usuario,u.imagen,o.id_objeto,o.objeto,o.descripcion as descripcion1,b.accion,b.descripcion,b.creado_por,b.fecha_creacion
		from tbl_bitacora b
		INNER JOIN tbl_usuarios u ON b.id_usuario = u.id_usuario 
		INNER JOIN tbl_objetos o ON b.id_objeto = o.id_objeto") or die(mysqli_error());
		
		while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['id_bitacora']?></td>
		<td><?php echo $fetch['fecha']?></td>
		<td><?php echo $fetch['id_usuario']?></td>
		<td><?php echo $fetch['id_objeto']?></td>
		<td><?php echo $fetch['objeto']?></td>
		<td><?php echo $fetch['descripcion1']?></td>
		<td><?php echo $fetch['accion']?></td>
		<td><?php echo $fetch['descripcion']?></td>
		<td><?php echo $fetch['creado_por']?></td>
		<td><?php echo $fetch['fecha_creacion']?></td>
	</tr>
<?php
		}
	}
?>



