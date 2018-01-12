<?php
$mensaje = '

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<table style="width: 100%;max-width: 500px;margin:0 auto; font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; border-collapse: collapse;">
		<tr style="background-color: #FFF; border-collapse: collapse;">
			<td style="font-size: 16px;color:#333;font-weight: bolder;padding: 10px;">Estimado Administrador</td>
			<td></td>
			<td style="text-align: right;"><img style="width: 50px;margin: 10px;" src="http://portate.cl/images/logo-mini-correo.png"></td>
		</tr>
		<tr>
			<td colspan="3" style="padding: 10px;">Hemos recibido un mensaje a través del formulario de contacto web</td>
		</tr>
		<tr>
			<td style="height: 30px" colspan="3"></td>
		</tr>
		<tr>
			<td  style="padding: 10px;">Nombre</td>
			<td  style="padding: 10px;">:</td>
			<td  style="padding: 10px;">'.$nombre.'</td>
		</tr>
		<tr>
			<td  style="padding: 10px;">Correo</td>
			<td  style="padding: 10px;">:</td>
			<td  style="padding: 10px;">'.$email.'</td>
		</tr>
		<tr>
			<td  style="padding: 10px;">Mensaje</td>
			<td  style="padding: 10px;">:</td>
			<td  style="padding: 10px;">'.$mensaje.'</td>
		</tr>
		<tr>
			<td style="height: 30px" colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3" style="font-size: 12px;text-align: center;background-color: red;padding: 10px;color: #fff"></td>
		</tr>
	</table>
</body>
</html>

';
?>