<?php
include_once("generalDaoImpl.php");
$modelo = new generalDaoImpl();
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    
    if(empty($nombre) || empty($email) || empty($telefono) || empty($direccion)) {
        
      if(empty($nombre)) {
          echo "<font color='red'>Campo nombre: está vacio.</font><br/>";
      } 
      if(empty($email)) {
          echo "<font color='red'>Campo email: está vacio.</font><br/>";
      } 
      if(empty($telefono)) {
          echo "<font color='red'>Campo telefono: está vacio.</font><br/>";
      } 
      if(empty($direccion)) {
          echo "<font color='red'>Campo direccion: está vacio.</font><br/>";
      } 
      
    }else {
        $resultado = $modelo->actualizarProveedor($id,$nombre,$email,$telefono,$direccion);
    }
    
}
?>