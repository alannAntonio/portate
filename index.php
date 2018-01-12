<?php
date_default_timezone_set("America/Santiago");
$hoy = date("Y-m-d");
$fecha = date_create($hoy);
date_add($fecha, date_interval_create_from_date_string('1 month'));
date_add($fecha, date_interval_create_from_date_string('-2 day'));
$fecha = date_format($fecha, 'd-m-Y');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Netflix Débito | Portate.cl</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="font/flaticon.css">
	<link rel="icon" type="image/png" href="favicon.png"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
	<meta name="description" content="Netflix débito para todos"/>	
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content='width=device-width, target-densitydpi=device-dpi, initial-scale=1.0, maximum-scale=10.0, user-scalable=yes'/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="format-detection" content="telephone=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/funciones.js" async></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112361954-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-112361954-1');
	</script>
</head>
<body>
	<div class="main-container">
		<div class="contacto-result">
			<div class="contacto-result-container">
				<div class="contacto-result-contain">					
				</div>	
			</div>
		</div>
		<div class="section home">			
			<div id="titulo">				
				<?php
				session_start();					
				if(empty($_SESSION['activa'])){
					echo '<div id="acceso">Iniciar sesión</div>';
				}else if($_SESSION['activa'] === TRUE){
					echo '<div id="cerrar">Cerrar sesión</div>';
				}
				?>						
				<div id="logo-mobile"><img src="images/logo2.png"></div>
				<img id="logo" src="images/logo2.png">
				<h2>¡Al fin en Chile!</h2>
				<h1>Netflix Débito</h1>
				<div id="comenzar" class="comenzar2">COMENZAR</div>
			</div>			
		</div>
		<div class="section">
			<div class="menu-container">
				<div class="menu">
					<div class="option primera selected">
						<img src="images/renueva.png">
						<div id="end1"></div>
					</div>
					<div class="option segunda">
						<img src="images/mira.png">
						<div id="end2"></div>
					</div>
					<div class="option tercera">
						<img src="images/precio.png">
						<div id="end3"></div>
					</div>
				</div>
			</div>
			<div class="premio">
				<div id="premio-contain">
					<div id="info-premio">
						<p>Disfruta del contenido sin interrupciones. Renueva o extiende el servicio cuantas veces quieras y recibe descuentos exclusivos.</p>
						<div class="comenzar2" id="comenzar2">COMENZAR</div>
					</div>
					<div id="image-premio">
						<img src="images/renueva-image.jpg">
					</div>
				</div>
			</div>
			<div class="precio">
				<h3>Elige un plan y ve lo que quieras en Netflix</h3>
				<div id="comenzar" class="comenzar2">¡COMENZAR YA!</div>
				<table class="tabla-precios">
					<tr class="first-tr">
						<th></th>
						<td class="strong">BÁSICO</td>
						<td class="strong">ESTANDAR</td>
						<td class="strong">PREMIUM</td>
					</tr>
					<tr class="tr-hidden">
						<th></th>
						<td colspan="4">El precio mensual hasta <?php echo $fecha; ?></td>	
					</tr>
					<tr>
						<th>El precio mensual hasta <?php echo $fecha; ?></th>
						<td>$6.890</td>
						<td>$7.990</td>
						<td>$9.890</td>
					</tr>
					<tr class="tr-hidden">
						<th></th>
						<td colspan="4">HD disponible</td>	
					</tr>					
					<tr id="paint">
						<th>HD disponible</th>
						<td><div id="no"><span class="flaticon-marca-de-prohibido"></span></div></td>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
					</tr>
					<tr class="tr-hidden">
						<th></th>
						<td colspan="4">Ultra HD disponible</td>	
					</tr>
					<tr>
						<th>Ultra HD disponible</th>
						<td><div id="no"><span class="flaticon-marca-de-prohibido"></span></div></td>
						<td><div id="no"><span class="flaticon-marca-de-prohibido"></span></div></td>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
					</tr>
					<tr class="tr-hidden">
						<th></th>
						<td colspan="4">Pantallas en las que puedes ver al mismo tiempo</td>	
					</tr>
					<tr id="paint">
						<th>Pantallas en las que puedes ver al mismo tiempo</th>
						<td>1</td>
						<td>2</td>
						<td>4</td>
					</tr>
					<tr class="tr-hidden">
						<th></th>
						<td colspan="4">Ve en tu laptop, TV, teléfono y tableta</td>	
					</tr>
					<tr>
						<th>Ve en tu laptop, TV, teléfono y tableta</th>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
					</tr>
					<tr class="tr-hidden">
						<th></th>
						<td colspan="4">Películas y programas de TV ilimitados</td>	
					</tr>
					<tr id="paint">
						<th>Películas y programas de TV ilimitados</th>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
					</tr>
					<tr class="tr-hidden">
						<th></th>
						<td colspan="4">Renueva en cualquier momento</td>	
					</tr>
					<tr>
						<th>Renueva en cualquier momento</th>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
					</tr>
					<tr class="tr-hidden">
						<th></th>
						<td colspan="4">Acumula puntos y beneficios</td>	
					</tr>
					<tr id="paint">
						<th>Acumula Puntos y beneficios</th>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
						<td><div id="si"><span class="flaticon-correcto-simbolo"></span></div></td>
					</tr>					
				</table>
			</div>
			<div class="mira">
				<p>Ve películas y programas de TV cuando y donde quieras, personalizados para ti.</p>
				<div id="comenzar" class="comenzar2">COMENZAR</div>
				<div class="mira-contain">
					<div id="item">
						<img src="images/pc.jpg">
						<h3>Ve Netflix en tu TV</h3>
						<p>Smart TV, PlayStation, Xbox, Chromecast, Apple TV, reproductores de Blu-ray y más.</p>
					</div>
					<div id="item">
						<img src="images/tablet.jpg">
						<h3>Disfruta al instante o descarga videos para más tarde</h3>
						<p>Disponible en tu teléfono o tableta, vayas donde vayas.</p>
					</div>
					<div id="item">
						<img src="images/notebook.jpg">
						<h3>Usa cualquier computadora</h3>
						<p>Ve directamente en Netflix.com.</p>
					</div>					
				</div>
			</div>
		</div>
		<div class="footer">			
			<div class="contacto">				
				<div class="container-contacto">
					<div class="info">
						<p>Somos el primer reseller Netflix establecido en Chile y el único que te premia por tu preferencia.</p>
						<p>Nuestros clientes avalan la calidad de nuestro servicio.</p>
						<p id="redes">Síguenos en nuestras redes sociales y entérate de las últimas ofertas y promociones.</p>
						<div id="social">
							<a href="https://www.facebook.com/portateChile/"><img src="images/instagram.png"></a>
							<img src="images/facebook.png">
							<img src="images/twitter.png">
						</div>		
					</div>
					<div class="contacto">
						<h4>¿Dudas? ¿Sugerencias? ¿Reclamos? <br>Contáctanos</h4>
						<form>
							<label>Nombre</label>
							<input type="text" name="nombre" class="nombre-contacto">
							<p class="error-contacto error-nombre-contacto"></p>
							<label>Email</label>
							<input type="email" name="email" placeholder="alguien@ejemplo.algo" class="email-contacto">
							<p class="error-contacto error-email-contacto"></p>
							<label>Mensaje</label>
							<textarea name="mensaje" class="mensaje-contacto"></textarea>
							<p class="error-contacto error-mensaje-contacto"></p>
							<div class="button btn-contacto">Enviar</div>
						</form>
					</div>
				</div>
			</div>
			<p id="derechos">Copyright © 2014-2017 Portate.cl</p>
			<p id="derechos"><a target="_blank" href="https://alann.cl">Desarrollado por Alann®</a></p>
		</div>
	</div>
</body>
</html>