<?php
include('conexion.php');
if(isset($_POST['texto'])){
	$texto = $_POST['texto'];
	$sql = "SELECT * FROM clientes WHERE estado_cuenta = 'inactiva' OR estado_cuenta = 'pendiente' AND correo LIKE '$texto%' ORDER BY id desc";
}else{
	$sql = "SELECT * FROM clientes WHERE estado_cuenta = 'inactiva' OR estado_cuenta = 'pendiente' ORDER BY id desc";
}

$result = $mysqli->query($sql);
$count = mysqli_num_rows($result);
$cont = 0;
if($count == 0){
	echo "No hay resultados";
}else{
	while($cont < $count){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$ingreso = date_create($row["fecha_ingreso"]);
		$ingreso = date_format($ingreso, "d-m-Y H:i:s");
		echo '
		<tr onclick="mostrarUsuarioActivar(this);">
			<td>'.$row["correo"].'</td>
			<td><div class="lbl-estado estado-'.$row["estado_cuenta"].'">'.ucwords($row["estado_cuenta"]).'</div></td>
			<td>'.$ingreso.'</td>
		</tr>	
		';
		$cont++;
	}
}

?>