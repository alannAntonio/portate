<?php
include("conexion.php");
@session_start();
$ahora = date("Y-m-d H:i:s");
$correo = $_SESSION["email"];
$sql = "SELECT * FROM clientes WHERE correo  = '$correo'";
$result = $mysqli->query($sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$estadoCuenta = $row["estado_cuenta"];
if($estadoCuenta == "inactiva"){
	$tipoCuenta = "No existe información";
	$fechaActivacion = "No existe información";
	$fechaTermino = "No existe información";	
}else if($estadoCuenta == "pendiente"){
	$tipoCuenta = "Validando información";
	$fechaActivacion = "Validando información";
	$fechaTermino = "Validando información";
}else{
	$tipoCuenta = ucwords($row["tipo_cuenta"]);
	$fechaActivacion = date_create($row["fecha_activacion"]);
	$fechaActivacion = date_format($fechaActivacion, "d-m-Y");
	$fechaTermino = date_create($row["fecha_termino"]);
	$fechaTermino = date_format($fechaTermino, "d-m-Y");
}
$fechaIngreso = date_create($row["fecha_ingreso"]);
$fechaIngreso = date_format($fechaIngreso, "d-m-Y");
$count = mysqli_num_rows($result);
echo'
		<div class="progreso-container">				
			<div class="fase registro">Registro</div>
			<div class="fase comprobacion-pago'; if($estadoCuenta == "pendiente" || $estadoCuenta == "activa"){ echo ' registro'; } echo '">Proceso habilitación</div>
			<div class="fase activacion-cuenta'; if($estadoCuenta == "activa"){ echo ' registro'; } echo '">Activación</div>
		</div>
		<h1>Información de la cuenta</h1>
		<div class="datos-cpanel">

			<div class="datos-ingreso">
					<h3>Datos de ingreso Portate</h3>
					<table>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>'.$correo.'</td>					
						</tr>
						<tr class="tr-old-pass">
							<td>Contraseña</td>
							<td>:</td>
							<td>********</td>							
						</tr>
						<tr class="tr-nuevo-pass">
							<td>Nueva Contraseña</td>
							<td>:</td>
							<td><input class="nuevo-pass" type="password" name=""><p class="alert-nuevo-pass"></p></td>
						</tr>
						<tr class="tr-nuevo-pass">
							<td></td>
							<td></td>
							<td><div class="btn-cambiar-pass">Cambiar</div></td>							
						</tr>
						<tr class="tr-nuevo-pass">
							<td></td>
							<td></td>
							<td><div class="btn-cancelar-pass">Cancelar</div></td>			
						</tr>
						<tr>
							<td>Registrado desde</td>
							<td>:</td>
							<td>'.$fechaIngreso.'</td>		
						</tr>
					</table>
					<p id="cambiar-label">Cambiar contraseña</p>					
				</div>
				<div class="datos-cuenta">
					<h3>Información de la cuenta</h3>
					<table>
						<tr>
							<td>Membresía</td>
							<td>:</td>
							<td>'.$tipoCuenta.'</td>					
						</tr>
						<tr>
							<td>Fecha activación</td>
							<td>:</td>
							<td>'.$fechaActivacion.'<td>							
						</tr>
						<tr>
							<td>Fecha término</td>
							<td>:</td>
							<td>'.$fechaTermino.'<td>							
						</tr>
					</table>
					';
					if($estadoCuenta == "inactiva"){
						echo '<div class="adquirir">Adquirir un plan</div>';
					}
					echo '</div>
					</div>';
										
?>