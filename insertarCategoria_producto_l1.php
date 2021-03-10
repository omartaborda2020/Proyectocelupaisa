<?php
include_once("generalDaoImpl.php");
$modelo = new generalDaoImpl();
if(isset($_POST['Submit'])) {
    $nombre = $_POST['nombre'];
    $tipo_producto = $_POST['tipo_producto'];
    
    if(empty($nombre) || empty($tipo_producto)){
      if(empty($nombre)) {
          echo "<font color='red'>Campo nombre: está vacio.</font><br/>";
      } 
      if(empty($tipo_producto)) {
          echo "<font color='red'>Campo tipo_producto: está vacio.</font><br/>";
      } 
      echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
    }else {
        $resultado = $modelo->insertarCategoria_producto($nombre,$tipo_producto);
    }
}
?>