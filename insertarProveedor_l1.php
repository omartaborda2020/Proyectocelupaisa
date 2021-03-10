<?php
include_once("generalDaoImpl.php");
$modelo = new generalDaoImpl();
if(isset($_POST['Submit'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    
    if(empty($nombre) || empty($email) || empty($telefono) || empty($direccion)){
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
      echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
    }else {
        $resultado = $modelo->insertarProveedor($nombre,$email,$telefono,$direccion);
    }
}
?>