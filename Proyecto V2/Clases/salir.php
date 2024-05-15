<?php
  include_once "sesion.php";
  $salir = new sesion;
  $salir->cerrar();
  header("Location: ../index.html")

 ?>
