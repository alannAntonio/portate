<?php
include('conexion.php');
$cliente = $_POST["usuario"];
$sql = "SELECT * FROM clientes WHERE correo = '$cliente'";
$result = $mysqli->query($sql);
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
}else if(strtotime($hoy)>=strtotime($vencimiento)){
	$estado = "Vencida";
}else if(strtotime($hoy)<strtotime($termino)){
	$estado = "Activa";
}

echo '
	<form>
		<p>Usuario</p>
		<h3>'.$cliente.'</h3>
		<p>Activación</p>
		<h3>'.$activacion.'</h3>
		<p>Término</p>
		<h3>'.$termino.'</h3>
		<p>Estado</p>
		<h3 id="estado-desactivar">'.$estado.'</h3>			
		<div class="btn-action action-desactivar-cuenta" onclick="desactivarCuenta();">Desactivar</div>			
	</form>
';
?>