<?php
	session_start();
	if(!($_SESSION["administrador"] === TRUE)){
		header("location:ingreso.php");
		include("cpanel_creation.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Netflix Débito | Portate.cl</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="font/flaticon.css">
	<link rel="icon" type="image/png" href="favicon.png"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
	<meta name="description" content="Netflix débito para todos"/>	
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content='width=device-width, target-densitydpi=device-dpi, initial-scale=1.0, maximum-scale=10.0, user-scalable=no'/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="format-detection" content="telephone=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/admin.js" async></script>
</head>
<body>

	<div class="header">
		<div id="logo"><img src="images/logo-mini.png"></div>
		<div id="cerrar-sesion"><a href="cerrar-administrador.php">Cerrar sesion</a></div>
	</div>
	
	<div class="main-container">
		<div class="alerta-activar">
			<div class="alerta-activar-contain"></div>
		</div>
		<div class="labels-container">
			<div class="label btn-activar">Activar</div>
			<div class="label btn-desactivar">Desactivar</div>
		</div>

		<div class="container activar-container">
			<div class="sublabel">
				<div class="btn-registro-activar btn">Registro</div>
				<div class="btn-detalle-activar btn">Detalle</div>
			</div>
			<div class="table-activar-container table-container">	
				<table class="tabla" id="table-activar">
					<thead>
						<tr>
							<th colspan="3">
								<div class="buscar-container">
									<p>Buscar usuario</p>
									<input type="text" name="buscar-activar" class="buscar-activar-input">
									<div class="btn-buscar-action buscar-activar">Buscar</div>
								</div>								
							</th>							
						</tr>
						<tr>
							<th>Usuario</th>
							<th>Cuenta</th>
							<th>Registro</th>
							
						</tr>
					</thead>
					<tbody class="tabla-body-activar">
						<?php
							include("rescatar-tabla-activar.php");
						?>
					</tbody>
				</table>
			</div>
			<div class="detalle detalle-activar">
				<div class="detalle-contain detalle-activar-contain">
					<h3>Seleccionar un cliente</h3>
				</div>
			</div>
		</div>

		<!-- desactivar -->

		<div class="container desactivar-container">
			<div class="sublabel">
				<div class="btn-registro-desactivar btn">Registro</div>
				<div class="btn-detalle-desactivar btn">Detalle</div>
			</div>
			<div class="table-desactivar-container table-container">
				<table class="tabla" id="table-desactivar">
					<thead>
						<tr>
							<th colspan="3">
								<div class="buscar-container">
									<p>Buscar usuario</p>
									<input type="" name="buscar-desactivar">
									<div class="btn-buscar-action buscar-desactivar">Buscar</div>
								</div>								
							</th>							
						</tr>
						<tr>
							<th>Usuario</th>
							<th>Estado</th>
							<th>Término</th>
							
						</tr>
					</thead>
					<tbody class="tabla-body-desactivar">
						<?php
							include("rescatar-tabla-desactivar.php");
						?>
					</tbody>						
				</table>
			</div>
			<div class="detalle detalle-desactivar">
				<div class="detalle-contain detalle-desactivar-contain">
					<h3>Seleccionar un cliente</h3>
				</div>
			</div>
		</div>
	</div>		
	
</body>
</html>