<?php
require_once 'usuarios.php';
$instancia=new Usuarios;
$instancia->Registrar();
header("location:../Tabla Usuarios.php");
?>
