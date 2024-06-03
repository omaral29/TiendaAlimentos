<!doctype html>
<html lang="en">
  <head
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="4.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/inicioestilo.css">
    <title>Inicio Sesion</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
      <a class="navbar-brand" href="index.html">La Chinitaaaaaa</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.html" id="Inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.html" id="aC">Registrate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="aC">Acerca de Nosotros</a>
          </li>
        </ul>
      </div>
     </div>
    </nav>

    <div class="modal-dialog tex-center">
      <div class="col-sm-8 main-section">
        <div class="modal-content">
          <h4 class="ola">Inicio de Sesión</h4>
          <form  action="" method="post" class="col-12">
            <div class="form-group">
              <input type="email" name="correo" class="form-control" placeholder="Ingresa tu correo">
            </div>
            <div class="form-group">
                <input type="password" name="clave" class="form-control" placeholder="Ingresa tu contraseña">
            </div>

            <button type="submit" class="boton">Iniciar Sesión</button>
          </form>

          <?php
         if(isset($errorinicio)){

	 echo '<h1 class=form-group>  ' . $errorinicio . ' </h1>'; }
          ?>
        </div>
      </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="4.2/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
