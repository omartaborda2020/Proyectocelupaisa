<?php
include_once("generalDaoImpl.php");
$modelo = new generalDaoImpl();
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nombre_pedido = $_POST['nombre_pedido'];
    $cantidad = $_POST['cantidad'];
    $telefono = $_POST['telefono'];
    
    if(empty($nombre_pedido) || empty($cantidad) || empty($telefono)) {
        
      if(empty($nombre_pedido)) {
          echo "<font color='red'>Campo nombre_pedido: está vacio.</font><br/>";
      } 
      if(empty($cantidad)) {
          echo "<font color='red'>Campo cantidad: está vacio.</font><br/>";
      } 
      if(empty($telefono)) {
          echo "<font color='red'>Campo telefono: está vacio.</font><br/>";
      } 
      
    }else {
        $resultado = $modelo->actualizarPedido($id,$nombre_pedido,$cantidad,$telefono);
    }
    
}
?>