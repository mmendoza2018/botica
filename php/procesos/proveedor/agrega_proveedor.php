<?php
include "../conexion.php";
$nombre_p = $_POST['nombre_p'];
$direccion_p = $_POST['direccion_p'];
$numero_p=$_POST['numero_p'];
$numero_d=$_POST['numero_d'];

//echo "hola".$nombre_p." ".$direccion_p." ".$numero_p." ".$numero_d;
$insertar = "INSERT INTO proveedores(nombre_pro, telefono_pro, direccion_pro, numerodoc_pro) 
VALUES ('$nombre_p','$numero_p','$direccion_p','$numero_d')";
//$resultado=$mysqli->query($insertar);
 echo $resultado = $mysqli->query($insertar);




?>