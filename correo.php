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
		<tr style="background-color: #333; border-collapse: collapse;">
			<td style="font-size: 16px;color:#ededed;font-weight: bolder;padding: 10px;">Estimado Usuario</td>
			<td></td>
			<td style="text-align: right;"><img style="width: 50px;margin: 10px;" src="http://portate.cl/images/logo-mini.png"></td>
		</tr>
		<tr>
			<td colspan="3" style="padding: 10px;">Se ha habilitado tu cuenta Netflix en nuestro portal. Los datos de ingreso son los siguientes:</td>
		</tr>
		<tr>
			<td style="height: 30px" colspan="3"></td>
		</tr>
		<tr>
			<td  style="padding: 10px;">Email Ingreso Netflix</td>
			<td  style="padding: 10px;">:</td>
			<td  style="padding: 10px;">'.$correo.'</td>
		</tr>
		<tr>
			<td  style="padding: 10px;">Contraseña</td>
			<td  style="padding: 10px;">:</td>
			<td  style="padding: 10px;">'.$claveNetflix.'</td>
		</tr>
		<tr>
			<td  style="padding: 10px;">Fecha Activación</td>
			<td  style="padding: 10px;">:</td>
			<td  style="padding: 10px;">'.$hoy2.'</td>
		</tr>
		<tr>
			<td style="height: 30px" colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3" style="font-size: 12px;text-align: center;background-color: red;padding: 10px;color: #fff">Ante cualquier consulta no dudes en contactarnos a <a style="color: #000;" href="mailto:contacto@portate.colspan">contacto@portate.cl</a></td>
		</tr>
	</table>
</body>
</html>

';
?>