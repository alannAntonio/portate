<?php
	session_start();
	if(!($_SESSION["activa"] === TRUE)){
		header("location:https://portate.cl");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Error | Portate.cl</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="favicon.png"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
	<meta name="description" content="Netflix débito para todos"/>	
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, target-densitydpi=device-dpi, initial-scale=1.0, maximum-scale=10.0, user-scalable=no"/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="format-detection" content="telephone=no">
</head>
<style type="text/css">
html, body{
	width: 100%;
	height: 100%;
	margin: 0;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.main-container-error{
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
}
.main-contain-error{
	width: 100%;
	max-width: 500px;
}
.main-contain-error img{
	width: 100%;
}
.main-contain-error p{
	width: calc(100% - 20px);
	text-align: center;
	color: #ff0048;
	font-size: 1.1em;
	padding: 10px;
	margin: 0;
}
.main-contain-error a{
	text-decoration: none;
}
.span-error{
	font-size: 0.8em !important;
	width: 100%;
	color: #666 !important;
	margin: 0;
}
.llevame{
	background-color: #42d982;
	color: #fff;
	width: calc(100% - 40px);
	padding: 20px;
	max-width: 200px;
	text-align: center;
	margin: 0 auto;
	border-radius: 30px;
}

</style>
<body>
	<div class="main-container-error">
		<div class="main-contain-error">
			<img src="images/gracias.png">
			<p>¡Muchas Gracias!</p>
			<p class="span-error">En unos minutos validaremos tu pago y te enviaremos las credenciales de acceso al correo registrado.</p>
			<a href="cpanel"><div class="llevame">Llévame a mi Panel de Usuario</div></a>
		</div>
	</div>
</body>
</html>