<?php
	session_start();
	if(!($_SESSION["activa"] === TRUE)){
		header("location:login");
		include("cpanel_creation.php");
	}
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
	<meta name="viewport" content='width=device-width, target-densitydpi=device-dpi, initial-scale=1.0, maximum-scale=10.0, user-scalable=no'/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="format-detection" content="telephone=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/funciones.js" async></script>
</head>
<body>
	<div class="cpanel-main-container">
		<div class="menu-cpanel-container">
			<div id="logo-cpanel"><img src="images/logo-mini.png"></div>
			<div class="cerrar-cpanel">Cerrar sesión</div>
		</div>
		<div class="body-cpanel-container">
			<div class="pass-changed"></div>
			<h1>Progreso de activación 1/3</h1>
			
			
				<?php require("cpanel_creation.php");?>
			
		</div>		
	</div>				
</body>
</html>