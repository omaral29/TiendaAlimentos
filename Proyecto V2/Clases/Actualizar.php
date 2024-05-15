<?php
require '../producto.php';
$id=$_GET['id'];
$x=new Productos();
$x->Actualizar($id);
header("location:../Productos.php");
?>