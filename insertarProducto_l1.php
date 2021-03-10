<?php
include_once("generalDaoImpl.php");
$modelo = new generalDaoImpl();
if(isset($_POST['Submit'])) {
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    
    if(empty($nombre) || empty($cantidad) || empty($precio)){
      if(empty($nombre)) {
          echo "<font color='red'>Campo nombre: está vacio.</font><br/>";
      } 
      if(empty($cantidad)) {
          echo "<font color='red'>Campo cantidad: está vacio.</font><br/>";
      } 
      if(empty($precio)) {
          echo "<font color='red'>Campo precio: está vacio.</font><br/>";
      } 
      echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
    }else {
        $resultado = $modelo->insertarProducto($nombre,$cantidad,$precio);
    }
}
?>