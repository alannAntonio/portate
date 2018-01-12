<?php
include("conexion.php");
$email = $_POST['email'];
$password = $_POST['password'];
$ahora = date("Y-m-d H:i:s");
$sql2 = "INSERT INTO clientes (correo, clave, fecha_ingreso, estado_cuenta, fecha_activacion) VALUES ('$email', '$password', '$ahora', 'inactiva', 'NULL') ";
$mysqli->query($sql2);
?>