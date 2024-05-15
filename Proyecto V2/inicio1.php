<?php
/*
Omar Yépez V-30.754.314
Richard Valera V-30.303.948
Omar Suarez V-31143300
*/



include_once 'Clases/userysesion.php';

global $usuario;
global $sesion;

if(isset($_SESSION['usuario'])){

   $usuario->setUser($sesion->getcorreo());
   include_once 'inicioses.php';
}
else if (isset($_POST['correo']) && isset($_POST['clave'])) {
    print "eeeee";
    $correopost = $_POST['correo'];
    $clavepost = $_POST['clave'];

    if($usuario->comprobar($correopost,$clavepost)){
      $usuario->setUser($correopost);
      $sesion->setusuario($usuario->User1());
      $sesion->setcorreo($usuario->correo1());

      include_once 'inicioses.php';

    }
    else {
      $errorinicio = "Correo y/o contraseña son incorrectos";
      include_once 'inicio1.php';

    }

}
else {
  print "aaa";
  include_once 'inicio.php';
}


 ?>
