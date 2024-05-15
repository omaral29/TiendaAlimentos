<?php

class sesion{

  function __construct() {
    session_start();
  }

  public function setusuario($usuario){
    $_SESSION['usuario'] = $usuario;
  }

  public function setcorreo($correo){
    $_SESSION['correo'] = $correo;
  }

  public function getusuario(){
    return $_SESSION['usuario'];
  }

  public function getcorreo(){
    return $_SESSION['correo'];
  }
  public function cerrar() {
    session_unset();
    session_destroy();

  }
}



/*$si = new login();

$si->User("richard23@GMAIL.COM", "30303948ri");
*/
 ?>
