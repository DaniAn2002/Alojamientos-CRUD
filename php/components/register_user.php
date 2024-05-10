<?php

include("connection.php");
$db1 = new DB();
$connection = $db1->connect();

$user = $_POST['username'];
$name = $_POST['name'];
$password = md5($_POST['password']);


$sql = "INSERT INTO usuarios(nombre,username,pass) VALUES ('$name','$user','$password')";
$result = mysqli_query($connection, $sql);

if ($result) {
    Header("Location: ../views/login.php");
}



?>