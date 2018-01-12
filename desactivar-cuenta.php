<?php
include('conexion.php');
if(isset($_POST["usuario"])){

	$usuario  = $_POST['usuario'];	
	$fechaHoy = date("Y-m-d H:i:s");
	$sql = "UPDATE clientes SET estado_cuenta = 'inactiva' WHERE correo = '$usuario'";

	if($mysqli->query($sql) === TRUE) {
		echo 'Cuenta Inactiva';
	}else{
		echo "Error";
	}
}
?>