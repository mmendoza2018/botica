<?php
require("../conexion.php");
// Check connection


$sql = "SELECT * FROM proveedores";
$result = $mysqli->query($sql);

$output = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    array_push($output, $row) ;
  }
} else {
  echo "0 results";
}
$mysqli->close();
//$output = array(data => $output);

echo json_encode($output);

?> 
