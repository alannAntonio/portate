<?php
include('conexion.php');
$cliente = $_POST["usuario"];
$sql = "SELECT * FROM clientes WHERE correo = '$cliente'";
$result = $mysqli->query($sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$ingreso = date_create($row["fecha_ingreso"]);
$ingreso = date_format($ingreso, "d-m-Y H:i:s");
echo '
	<form>
		<p>Usuario</p>
		<h3>'.$row["correo"].'</h3>
		<p>Registro</p>
		<h3>'.$ingreso.'</h3>
		<p>Estado</p>
		<h3 id="estado-'.$row["estado_cuenta"].'">'.ucwords($row["estado_cuenta"]).'</h3>
		<p>Cuenta</p>
		<select class="cuenta-select" onchange="verificarCuentaActivar();">
			<option selected hidden></option>							
			<option>Básica</option>
			<option>Estándar</option>
			<option>Premium</option>
		</select>
		<span class="error-activar-alert alert-cuenta-activar"></span>
		<p>Meses</p>
		<input type="number" name="meses" class="meses" max="6" min="1" placeholder="1" onkeyup="verificarMesesActivar(this);">
		<span class="error-activar-alert alert-meses-activar"></span>
		<p>Correo cuenta Netflix</p>
		<input type="email" name="" class="correo-activar" onkeyup="verificarCorreoActivar();">
		<span class="error-activar-alert alert-email-activar"></span>
		<p>Clave Netflix</p>
		<input type="text" name="" class="clave-netflix" onkeyup="verificarClaveActivar();">
		<span class="error-activar-alert alert-clave-activar"></span>
		';
		if($row["estado_cuenta"] == "inactiva"){
			echo '<div class="btn-action action-pendiente-cuenta" onclick="acuseRecibo();">Acuse recibo</div>';
		}else if($row["estado_cuenta"] == "pendiente"){
			echo '
				<div class="btn-action action-activar-cuenta" onclick="activarCuenta();">Activar</div>
			';
		}
		echo '
		
	</form>
';
?>