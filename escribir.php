<?php

require_once("./conexion_bd.php");
$valor = $_GET["sensor"];
$query = $conexion->query("INSERT INTO sensores VALUES (null, $valor)");

echo "Valor registrado: " . $valor;

?>