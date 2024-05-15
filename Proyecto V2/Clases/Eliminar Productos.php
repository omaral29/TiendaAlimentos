<?php
require_once '../productos.php';
$id=$_GET['id'];
$x=new Productos();
$x->Eliminar($id);
header("location:../Tabla Usuarios.php");
?>
