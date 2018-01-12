<?php
include("conexion.php");
@session_start();
$nuevoPass = $_POST["nuevoPass"];
$correo = $_SESSION["email"];
$Qr = "SELECT clave FROM clientes WHERE correo = '$correo'";
$result2 = $mysqli->query($Qr);
$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$clave_antigua = $row2["clave"];

$sql = "UPDATE clientes SET clave = '$nuevoPass' WHERE correo = '$correo'";
if($result = $mysqli->query($sql)){
	echo "true";
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	//mail($correo, "Portate - Cambio de clave", "Se ha cambiado tu clave.Si no has sido tú favor pincha el siguiente link:", $cabeceras);
}else{
	echo "false";
}
?>