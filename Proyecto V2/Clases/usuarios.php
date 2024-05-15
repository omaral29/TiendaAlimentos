<?php
require_once ('db.php');

class Usuarios{
    public function Buscar(){
        global $conexion;
        $sql="SELECT * FROM `usuario`";
        $GLOBALS['datos']=$conexion->query($sql);
        }
        public function ImprimirTablas(){
            while($campo=$GLOBALS['datos']->fetch_object()){
                ?>
              <tr>
              <td><?php echo $campo->Nombre ?></td>
              <td><?php echo $campo->Apellido ?></td>
              <td><?php echo $campo->Correo ?></td>
              <td><?php echo $campo->Ntlf ?></td>
              <td><?php echo $campo->Clave ?></td>
              <td>
               <a class="btn btn-success" href="?id=<?php echo $campo->Nombre?>" id="<?php echo $campo->Nombre ?>" style="margin-top:10px;">Modificar</a>
               <a class="btn btn-danger"  href="clases/Eliminar Usuarios.php?id=<?php echo $campo->Nombre ?>" id="<?php echo $campo->Nombre?>" style="margin-top:10px;">Eliminar</a>
              </td>
              </tr>
              <?php
                }
    }
    public function Eliminar($id){
        global $conexion;
        $sql="DELETE FROM `usuario` WHERE Nombre=$id";
        $conexion->query($sql);
    }
    public function registrar(){
        global $conexion;
        $Nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $precio=$_POST['correo'];
        $celular=$_POST['telefono'];
        $clave=$_POST['contraseña'];
        $sql="INSERT INTO `usuario`(`Nombre`, `Apellido`, `Correo`, `Clave`, `Ntlf`) VALUES ('$Nombre',' $apellido','$precio','$celular','$clave')";
        $conexion->query($sql);
        print_r($_POST);

}
}
