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
	<meta name="viewport" content='width=device-width, target-densitydpi=device-dpi, initial-scale=1.0, maximum-scale=10.0, user-scalable=no'/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="format-detection" content="telephone=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/funciones.js" async></script>
</head>
<body>
	<div class="body-container">
		<div class="logo-login"><img src="images/logo-mini.png"></div>
		<div class="login-container">
			<h1>Iniciar sesión</h1>
			<div class="no-existe-cuenta"></div>
			<form>
				<label>Email</label>
				<input id="login-email" type="text" name="login-email">
				<p id="email-alert"></p>
				<label>Contraseña</label>
				<input id="login-password" type="password" name="login-password">
				<p id="password-alert"></p>
				<span id="olvidaste"><a href="LoginHelp">¿Olvidaste tu contraseña?</a></span>
				<div class="iniciar-sesion-login">Iniciar sesión</div>
				<input type="checkbox" name=""><label>Recuérdame</label>
				<hr>
				<p>¿Primera vez en Portate? <a href="https://www.portate.cl/">Suscríbete ya</a></p>
			</form>			
		</div>
	</div>
</body>
</html>