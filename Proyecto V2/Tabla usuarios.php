<?php
require_once 'Clases/usuarios.php';
$instancia=new Usuarios;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="4.2/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style>
      .navbar{
        background-color:#38598b;
      }
      .navbar a{
        color:black;
      }
    </style>
    <title>Bootstrap</title>
</head>
<nav class="navbar navbar-expand-lg relative-top">
      <div class="container">
      <a class="navbar-brand" href="index.html">La Chinita</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="inicio1.php" id="Inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tienda.html" id="Tienda">Tienda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Tabla usuarios.php" id="aC">Reporte de usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Productos.php" id="aC">Reporte de Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Clases/salir.php" id="aC">Cerrar Sesion</a>
          </li>
        </ul>
      </div>
     </div>
    </nav>
    <div class="container">
    <div class="col-6 justify-content-center"">
    <form action="clases/Registro Usuarios.php" method="post" id="tucupita" name="Registro" >
    <label style="width:100%;">Registro</label>
    <input type="text" class="form-control" placeholder="Cedula" id="Cedula" name="Cedula" >
    <input type="text" class="form-control" style="margin-top:5px;" name="Nombre" placeholder="Nombre" id="Nombre">
    <input type="text" class="form-control" style="margin-top:5px;"name="Apellido" placeholder="Apellido" id="Apellido">
    <input type="text" class="form-control" style="margin-top:5px;"name="Celular" placeholder="Telefono" id="Telefono">
    <input type="password" class="form-control"style="margin-top:5px;" name="Contraseña" placeholder="Contraseña" id="Contraseña">
    <?php
    if(isset($_GET['id'])){
      ?>
      <input type="submit" Name="Accion" class="btn btn-success" style="margin-top:10px;" value="Guardar">
      <?php
    }else{
?>
<input type="submit" name="Accion" class="btn btn-success" style="margin-top:10px;" value="Registrar">
<?php
    }
    ?>

    <input type="reset" class="btn btn-light" style="margin-top:10px;" name="Limpiar" value="Limpiar">
    </form>
  </div>
   </div>

<div class="container-fluid">
  <table class="table table-striped text-center">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Correo</th>
      <th>Celular</th>
      <th>Clave</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
<?php
$instancia->Buscar();
$instancia->ImprimirTablas();
?>
  </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
