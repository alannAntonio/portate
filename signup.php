<?php
	session_start();					
	if(!(empty($_SESSION['estado_cuenta']))){
		if($_SESSION['estado_cuenta'] == "activa"){
			header("location:cpanel.php");
		}
	}
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Planes, precios y suscripción en Portate.cl</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="font/flaticon.css">
	<link rel="icon" type="image/png" href="favicon.png"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
	<meta name="description" content="Netflix débito para todos"/>	
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content='width=device-width, target-densitydpi=device-dpi, initial-scale=1.0, maximum-scale=10.0, user-scalable=no'/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="format-detection" content="telephone=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/funciones.js" async></script>
</head>
<body>
	<div class="full-container">
		<div id="mini-header">
			<div id="mini-logo">
				<a href="index"><img src="images/logo-mini.png"></a>
			</div>
			<div id="iniciar-sesion">
				<?php
					//session_start();					
					if(empty($_SESSION['activa'])){
						echo '<a href="login">Iniciar sesión</a>';
					}else if($_SESSION['activa'] === TRUE){
						echo '<a href="cerrar-sesion">Cerrar sesión</a>';
					}
				?>				
			</div>
		</div>

		<div class="pasos primer-paso">
			<div class="mini-body">
				<div class="mini-body-contain">
					<div id="check-red"><img src="images/check-red.png"></div>
					<p>PASO <strong>1</strong> DE <strong>3</strong></p>
					<h3>Selecciona tu plan.</h3>
					<p>Selecciona cualquiera de nuestros tres<br> planes y no se te cobrará ningún cargo <br>hasta que termine tu mes gratis.</p>
					<div class="ver-planes btn-primer-paso">VER LOS PLANES</div>
				</div>
			</div>
		</div>

		<div class="pasos segundo-paso">
			<div class="mini-body">
				<div class="mini-body-contain-table">
					<p>PASO <strong>1</strong> DE <strong>3</strong></p>
					<h3>Selecciona el plan ideal para ti.</h3>
					<p>Cambia a un plan inferior o superior en cualquier momento</p>
					<table class="table-signup">
						<tr class="first-tr">
							<th></th>
							<td><div class="title-box box-basico">Básico</div></td>
							<td><div class="title-box box-estandar">Estandar</div></td>
							<td><div class="title-box box-premium">Premium</div></td>
						</tr>
						<tr class="tr-hidden">
							<th></th>
							<td colspan="4">El precio mensual hasta 25-01-18</td>	
						</tr>
						<tr>
							<th>El precio mensual hasta 25-01-18</th>
							<td class="basico">$6.890</td>
							<td class="estandar">$7.990</td>
							<td class="premium">$9.890</td>
						</tr>
						<tr class="tr-hidden">
							<th></th>
							<td colspan="4">HD disponible</td>	
						</tr>					
						<tr >
							<th>HD disponible</th>
							<td class="basico"><div id="no"><span class="flaticon-marca-de-prohibido"></span></div></td>
							<td class="estandar"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
							<td class="premium"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						</tr>
						<tr class="tr-hidden">
							<th></th>
							<td colspan="4">Ultra HD disponible</td>	
						</tr>
						<tr>
							<th>Ultra HD disponible</th>
							<td class="basico"><div id="no"><span class="flaticon-marca-de-prohibido"></span></div></td>
							<td class="estandar"><div id="no"><span class="flaticon-marca-de-prohibido"></span></div></td>
							<td class="premium"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						</tr>
						<tr class="tr-hidden">
							<th></th>
							<td colspan="4">Pantallas en las que puedes ver al mismo tiempo</td>	
						</tr>
						<tr >
							<th>Pantallas en las que puedes ver al mismo tiempo</th>
							<td class="basico">1</td>
							<td class="estandar">2</td>
							<td class="premium">4</td>
						</tr>
						<tr class="tr-hidden">
							<th></th>
							<td colspan="4">Ve en tu laptop, TV, teléfono y tableta</td>	
						</tr>
						<tr>
							<th>Ve en tu laptop, TV, teléfono y tableta</th>
							<td class="basico"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
							<td class="estandar"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
							<td class="premium"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						</tr>
						<tr class="tr-hidden">
							<th></th>
							<td colspan="4">Películas y programas de TV ilimitados</td>	
						</tr>
						<tr >
							<th>Películas y programas de TV ilimitados</th>
							<td class="basico"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
							<td class="estandar"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
							<td class="premium"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						</tr>
						<tr class="tr-hidden">
							<th></th>
							<td colspan="4">Renueva en cualquier momento</td>	
						</tr>
						<tr>
							<th>Renueva en cualquier momento</th>
							<td class="basico"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
							<td class="estandar"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
							<td class="premium"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						</tr>
						<tr class="tr-hidden">
							<th></th>
							<td colspan="4">Acumula puntos y beneficios</td>	
						</tr>
						<tr class="first-tr">
							<th>Acumula Puntos y beneficios</th>
							<td class="basico"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
							<td class="estandar"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
							<td class="premium"><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						</tr>
						<!-- <tr class="first-tr">
							<th></th>
							<td><div class="comprar">ELEGIR</div></td>
							<td><div class="comprar">ELEGIR</div></td>
							<td><div class="comprar">ELEGIR</div></td>
						</tr> -->
					</table>					
					<p id="p-small">La disponibilidad del contenido HD y Ultra HD depende de tu proveedor de servicios de internet y del dispositivo en uso. No todo el contenido está disponible en HD o en Ultra HD. Consulta los Términos de uso para obtener más información.</p>
					<div class="comprar-ocultar">CONTINUAR</div>
					<div class="interrupcion">CONTINUAR</div>
				</div>
			</div>
		</div>

		<div class="pasos tercer-paso">
			<div class="mini-body">
				<div class="mini-body-contain">
					<div id="multi-red"><img src="images/multidevice-red.png"></div>
					<p>PASO <strong>2</strong> DE <strong>3</strong></p>
					<h3>Crea tu cuenta.</h3>
					<p>Usa tu email y crea una contraseña<br> para ver Netflix en cualquier<br>dispositivo, cuando quieras.</p>
					<div class="ver-planes btn-tercer-paso">CONTINUAR</div>
				</div>
			</div>
		</div>

		<div class="pasos cuarto-paso">
			<div class="mini-body">
				<div class="suscripcion">
					<div class="alerta">
						<div class="alerta-container">
							<div id="alerta-usuario">
								<img src="images/alerta.png">
							</div>
							<div id="texto-alerta-usuario">
								Ingresaste un email que ya está registrado en Portate.cl Si ya eres miembro o si lo fuiste anteriormente, haz clic en "Iniciar sesión".
							</div>
						</div>						
					</div>
					<p>PASO <strong>2</strong> DE <strong>3</strong></p>
					<?php

						if(empty($_SESSION['activa'])){
							echo '
								 <h3>Suscríbete para que comiences tu mes gratis.</h3>
					<p>¡Dos pasos más y listo!
					<br>Tampoco nos gustan los trámites.</p>
					<form class="formulario-suscripcion">
						<input id="email" type="text" name="email" placeholder="Email">
						<p id="email-alert"></p>
						<input id="password" type="password" name="password" placeholder="Contraseña" maxlength="50">			
						<p id="password-alert"></p>	
					</form>
					<div class="continuar btn-validar-registro">CONTINUAR</div>
							';
						}else{
							echo '
							<h3>Ya has iniciado sesión como '.$_SESSION["email"].'</h3>
					
					<div class="continuar ya-registrado">CONTINUAR</div>
							';
						}
					?>	
					
				</div>
			</div>
		</div>

		<div class="pasos quinto-paso">
			<div class="mini-body">
				<div class="mini-body-contain">
					<div id="check-red"><img src="images/blocking.png"></div>
					<p>PASO <strong>3</strong> DE <strong>3</strong></p>
					<h3>Confirma tu plan.</h3>
					<p>Elige la cantidad de meses.<br>Renueva cuando quieras.</p>	
					<div class="tu-plan">
						<span id="cambiar">Cambiar</span>
						<h3>Tu plan</h3>
						<p id="mostrar-plan"></p>
						<h3>Cantidad de meses</h3>
						<div id="meses-contain">
							<input class="cantidad-meses" type="number" name="" min="1" max="6" value="1">
						</div>
						<div class="total"><h3>Total $7.390</h3></div>	
					</div>
					<div class="ver-planes btn-quinto-paso">PAGAR</div>					
				</div>
			</div>
		</div>

		<div class="pasos sexto-paso">
			<div class="mini-body">
				<div class="mini-body-contain">
					<div id="check-red"><img src="images/blocking.png"></div>
					<p>PASO <strong>3</strong> DE <strong>3</strong></p>
					<h3>Pagar</h3>
					<p>A continuación debes ingresar el mismo correo registrado en nuestro portal<br> para realizar una validación automática.</p>
					<div class="screen">
						<img src="images/screen.png">
					</div>
					<div class="btn-pago-webpay"></div>
				</div>
			</div>
		</div>
	</div>
	<script>
		
	</script>
</body>
</html>