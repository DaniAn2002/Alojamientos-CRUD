<?php

include_once("connection.php");
$db1 = new DB();
$connection = $db1->connect();

$ciudad = $_POST['ciudad'];
$nombre_hospedaje = $_POST['nombre_hospedaje'];
$tipo = $_POST['tipo'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];
$ubicacion = $_POST['ubicacion'];
$imagen = $_POST['imagen'];

$sql = "INSERT INTO alojamientos(ciudad, tipo, descripcion, costo_por_dia, nombre_hospedaje, ubicacion,img) 
VALUES('$ciudad','$tipo','$descripcion','$costo','$nombre_hospedaje','$ubicacion','$imagen')";
$result = mysqli_query($connection, $sql);

if ($result) {
    Header("Location: ./index.php");
}
