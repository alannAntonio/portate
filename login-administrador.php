<?php
include("conexion.php");
$usuario = $_POST["u"];
$password = $_POST["p"];

$sql = "SELECT * FROM administradores WHERE user = '$usuario' AND pass = '$password'";
$result = $mysqli->query($sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count>0){
	echo 'true';
	session_start();
	$_SESSION['administrador'] = TRUE;
	$_SESSION['usuario'] = $usuario;
}else{
	echo 'false';
}

?>