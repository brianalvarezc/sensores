<?php

	// Se realiza la conexion con la Base de datos tomando mysqli como una clase
	$host = 'localhost';

	// Local
	// $host_name = 'db5007405708.hosting-data.io';
	// $database = 'dbs6102808';
	// $user_name = 'dbu947625';
	// $password = 's3rv3ri0n0s16266';

	$host_name = 'db5009573485.hosting-data.io';
	$user_name = 'dbu1396598';
	$password = 's3rv3ri0n0s16266';
	$database = 'dbs8117066';
  
	$conexion = new mysqli($host_name, $user_name, $password, $database);
	if($conexion -> connect_errno){
		die("Fallo la conexion: (" . $conexion -> connect_errno . ")" . $conexion -> mysqli_connect_error);
	}
?>