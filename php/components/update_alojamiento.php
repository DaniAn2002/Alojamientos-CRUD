<?php

include("connection.php");
$db1 = new DB();
$connection = $db1->connect();

$id_alojamiento = $_GET['id'];
$sql = "SELECT * FROM alojamientos WHERE id='$id'";
$connect = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);
