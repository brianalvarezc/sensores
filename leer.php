<?php
require_once("./conexion_bd.php");
$query = $conexion->query("SELECT * FROM sensores order by id DESC limit 20");
while($row = $query->fetch_array()){
    $rows[] = $row;
}
$datos = (object)[];
if($rows != null){
    foreach ($rows as $fila) {
        $valores .= $fila["medida"] . ",";
        $id .= $fila["id"] . ",";
    }
    $datos->valores = substr($valores, 0, strlen($valores)-1);
    $datos->id = substr($id, 0, strlen($id)-1);
    echo json_encode($datos);
}
?>