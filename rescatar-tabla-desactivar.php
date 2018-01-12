<?php
include('conexion.php');
if(isset($_POST['texto'])){
	// $texto = $_POST['texto'];
	// $sql = "SELECT * FROM clientes WHERE estado_cuenta = 'inactiva' OR estado_cuenta = 'pendiente' AND correo LIKE '$texto%' ORDER BY id desc";
}else{
	$sql = "SELECT * FROM clientes WHERE estado_cuenta = 'activa' ORDER BY fecha_termino asc";
}

$result = $mysqli->query($sql);
$count = mysqli_num_rows($result);
$cont = 0;
if($count == 0){
	echo "No hay resultados";
}else{
	while($cont < $count){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$hoy = date("d-m-Y");
		$activacion = date_create($row["fecha_activacion"]);
		$activacion = date_format($activacion, "d-m-Y");
		$termino = date_create($row["fecha_termino"]);
		$termino = date_format($termino, "d-m-Y");

		$vencimiento = date_format(date_create($row["fecha_activacion"]), "Y-m-d");
		$vencimiento = date_create($vencimiento);
		date_add($vencimiento, date_interval_create_from_date_string('1 month'));
		$vencimiento = date_format($vencimiento, 'd-m-Y');

		if(strtotime($hoy)>=strtotime($termino) && strtotime($hoy)<strtotime($vencimiento)){
			$estado = "Por vencer";
			$estadoLbl = "porvencer";
		}else if(strtotime($hoy)>=strtotime($vencimiento)){
			$estado = "Vencida";
			$estadoLbl = "vencida";
		}else if(strtotime($hoy)<strtotime($termino)){
			$estado = "Activa";
			$estadoLbl = "activa";
		}
		
		echo '
		<tr onclick="mostrarUsuarioDesactivar(this);">
			<td>'.$row["correo"].'</td>
			<td><div class="lbl-estado estado-'.$estadoLbl.'">'.ucwords($estado).'</div></td>
			<td>'.$termino.'</td>
		</tr>	
		';
		$cont++;
	}
}

?>