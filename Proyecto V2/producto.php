<?php
require_once 'Datos/db.php';

class Productos{

    public function Buscar(){
    global $conexion;
    $sql="SELECT * FROM `productos`";
    $GLOBALS['datos']=$conexion->query($sql);
    }
    public function ImprimirTablas(){
        while($campo=$GLOBALS['datos']->fetch_object()){
            ?>
          <tr>
          <td><?php echo $campo->Codigo ?></td>
          <td><?php echo $campo->Descripcion ?></td>
          <td><?php echo $campo->Precio?>$</td>
          <td><?php echo $campo->Cantidad ?></td>
          <td>
           <a class="btn btn-success" href="?id=<?php echo $campo->Codigo?>" id="<?php echo $campo->Codigo?>" style="margin-top:10px;">Modificar</a>
           <a class="btn btn-danger"  href="clases/Eliminar Productos.php?id=<?php echo $campo->Codigo?>" id="<?php echo $campo->Codigo?>" style="margin-top:10px;">Eliminar</a>
          </td>
          </tr>
          <?php
            }
    }
    public function Eliminar($id){
        global $conexion;
        $sql="DELETE FROM `productos` WHERE Codigo=$id";
        $conexion->query($sql);
    }

    public function Registrar(){
    global $conexion;
    if(!isset($_POST['Registro'])){
        if($_POST['Accion']=="Registrar"){
    $codigo=$_POST['Codigo'];
    $descripcion=$_POST['Descripcion'];
    $precio=$_POST['Precio'];
    $cantidad=$_POST['Cantidad'];
    $sql="INSERT INTO `productos`(Codigo, Precio, Descripcion, Cantidad) VALUES ('$codigo','$precio','$descripcion','$cantidad')";
    $conexion->query($sql);
    print_r($_POST);
}else{
   header("location:Actualizar.php");
}
}
else echo "chupalo";
    }
    public function Actualizar($id){
        global $conexion;
            $codigo=$_POST['Codigo'];
            $descripcion=$_POST['Descripcion'];
            $precio=$_POST['Precio'];
            $cantidad=$_POST['Cantidad'];
            $sql="UPDATE `productos` SET `Codigo`='$codigo',`Precio`='$precio',`Descripcion`='$descripcion',`Cantidad`='$cantidad' WHERE Codigo=$id";
            $conexion->query($sql);
        $conexion->query($sql);

    }
}
?>
