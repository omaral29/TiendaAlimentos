<?php
require 'db.php';

class usuario
{

  private $nombre;
  private $apellido;
  private $correo;
  private $telefono;
  private $contraseña;

  function __construct(){

}

public function registro(){
  global $conexion;
  print "Aaaa";
  $this->nombre = $_POST['Rnombre'];
  $this->apellido = $_POST['RApellido'];
  $this->correo = $_POST['RCorreo'];
  $this->contraseña = $_POST['RContraseña'];
  $this->telefono = $_POST['RNumeroTelefono'];
  print "Aaaa";
  print   $this->nombre;
  $verificar = "INSERT INTO usuario (Cedula, Nacionalidad, Nombre, Apellido,Correo, Clave, Ntlf) VALUES ('$this->cedula','$this->nacionalidad','$this->nombre','$this->apellido','$this->correo','$this->contraseña','$this->telefono')";

  return mysqli_query($conexion, $verificar);

}

  public function comprobar($correo, $clave){
    global $conexion;
    $verificar = "SELECT * FROM usuario where Correo='$correo' and Clave='$clave'";
    $resultado = mysqli_query($conexion, $verificar);

    $iniciar= mysqli_num_rows($resultado);

    if($iniciar){
      return true;
      }
    else false;
  }

  public function setUser($correo){
    global $conexion;
    $verificar = "SELECT * FROM usuario where Correo='$correo'";
    $resultado = mysqli_query($conexion, $verificar);

    $iniciar= mysqli_num_rows($resultado);

    while ($fila = $resultado->fetch_array()){
      $this->nombre = $fila['Nombre'];
      $this->apellido = $fila['Apellido'];
      $this->correo = $fila['Correo'];
      $this->telefono = $fila['Ntlf'];
      $this->contraseña = $fila['Clave'];
        }
    }

  public function User1() {
    return $this->nombre;
    }

    public function correo1(){
      return $this->correo;

    }

    public function eliminar(){
      global $conexion;
      $correo = $this->correo;
      $verificar = "DELETE FROM usuario WHERE Correo ='$correo'";
      $resultado = mysqli_query($conexion, $verificar);
      if($resultado){
        return $resultado;
      }
      else "no se borro";
    }

    public function actualizar(){
      global $conexion;
      $correo = $this->correo;
      $telefono = $this->telefono;
      $contraseña = $this->contraseña;

      if(!isset($_POST['acorreo'])){
        $correo = $_POST['acorreo'];
      }
      if (!isset($_POST['atelefono'])){
        $telefono = $_POST['atelefono'];
      }
      if (!isset($_POST['acontraseña'])){
        $contraseña = $_POST['acontraseña'];
      }

      $verificar = "UPDATE usuario SET Correo = '$correo', Clave = '$contraseña',  Ntlf = '$telefono'  WHERE Correo ='$this->correo'";
      $resultado = mysqli_query($conexion, $verificar);
      if($resultado){
        return $resultado;
      }
      else "no se actualizo";
    }
}


/*
$correo = $_POST["correo"];
$clave = $_POST["clave"];
session_start();
$_SESSION['usuario']=$usuario;




mysqli_free_result($resultado);
mysqli_close($conexion); */
 ?>
