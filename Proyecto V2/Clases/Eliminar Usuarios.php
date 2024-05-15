<?php
require_once 'usuarios.php';
$id=$_GET['id'];
$x=new Usuarios();
$x->Eliminar($id);
header("location:../Tabla Usuarios.php");
?>