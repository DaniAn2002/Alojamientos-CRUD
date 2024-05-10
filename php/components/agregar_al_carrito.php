<?php 
include_once("carrito_compras.php");

if(!isset($_POST["alojamiento_id"])){
    exit("No hay producto");
}

$carrito_compras = new CarritoCompras();

$carrito_compras->agregarProductoaCarrito($_POST["alojamiento_id"]);
header("Location: ../views/checkout.php");