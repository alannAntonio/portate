<?php
$servidor ='localhost'; // mysql.hostinger.es
$usuario = 'root'; // u656376199_alan
$clave =''; // ''
$db='portate'; // u656376199_porta
date_default_timezone_set("America/Santiago");
$mysqli = new mysqli($servidor,$usuario,$clave,$db);
$mysqli->set_charset('utf8');
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
?>