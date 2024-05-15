<?php
require_once '../producto.php';
$instancia=new Productos;
$instancia->Registrar();
header("location:../Productos.php");
?>