<?php
include('conexion.php');
if(isset($_POST["usuarioPendiente"])){
	$cliente = $_POST["usuarioPendiente"];
	$sql = "UPDATE clientes SET estado_cuenta = 'pendiente' WHERE correo = '$cliente'";
	if($mysqli->query($sql) === TRUE) {
   		echo("Estado modificado: Pendiente - Crear cuenta Netflix");
	}else{
		echo "Error";
	}
}
if(isset($_POST["cuenta"])){
	$cuenta = $_POST['cuenta'];
	$meses = $_POST['meses'];
	$correo = $_POST['correo'];
	$claveNetflix = $_POST['claveNetflix'];
	$usuario  = $_POST['usuario'];	
	$fechaHoy = date("Y-m-d H:i:s");
	$hoy2 = date('d-m-Y');
	$hoy = date("Y-m-d H:i:s");
	$fecha = date_create($hoy);
	date_add($fecha, date_interval_create_from_date_string($meses.' month'));
	date_add($fecha, date_interval_create_from_date_string('-2 day'));
	$fechaVencimiento = date_format($fecha, 'Y-m-d H:i:s');

	$sql = "UPDATE clientes SET estado_cuenta = 'activa', usuario_netflix = '$correo', clave_netflix = '$claveNetflix', tipo_cuenta = '$cuenta', fecha_activacion = '$fechaHoy', fecha_termino = '$fechaVencimiento' WHERE correo = '$usuario'";

	if($mysqli->query($sql) === TRUE) {
		$monto = 0;
		switch($cuenta){
			case 'Premium':
				$monto = 9980;
				break;
			case 'Estándar':
				$monto = 7990;
				break;
			case 'Básica':
				$monto = 6890;
				break;			
		}
		$montoTotal = $monto*$meses;

		$sql2 = "INSERT INTO pagos (usuario,plan,meses,monto,fecha) VALUES ('$usuario','$cuenta','$meses','$montoTotal','$hoy')";
		$mysqli->query($sql2);

   		echo "Cliente activado" ;

   		$destinatarioEmail = $usuario;
	    $asuntoEmail = "Pórtate: Activación cuenta Netflix";
	    include("correo.php");  
		$headers =  'MIME-Version: 1.0' . "\r\n"; 
		$headers .= 'From: Portate.cl <noresponder@jokais.cl>' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
		$headers .= 'Content-type: text/html; charset=utf-8';
	    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
	    mail($destinatarioEmail, $asuntoEmail, $mensaje, $headers);
	}else{
		echo "Error";
	}
}
?>