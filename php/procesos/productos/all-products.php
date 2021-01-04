<?php
require("../conexion.php");

$sql = "SELECT *,categorias.nombre_cat AS categoria, categorias.id_cat FROM articulos INNER JOIN categorias ON articulos.id_cat01 = categorias.id_cat WHERE estado_art=1";
$result = $mysqli->query($sql);



$output = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    array_push($output, $row) ;
  }
} else {
  echo json_encode([]);
}

$output = array('data' => $output);

echo json_encode($output);

$mysqli->close();

?>
