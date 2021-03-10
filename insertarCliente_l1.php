<?php
include_once("generalDaoImpl.php");
$modelo = new generalDaoImpl();
if(isset($_POST['Submit'])) {
    $nombre = $_POST['nombre'];
    $tipo_documento = $_POST['tipo_documento'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    
    if(empty($nombre) || empty($tipo_documento) || empty($telefono) || empty($direccion)){
      if(empty($nombre)) {
          echo "<font color='red'>Campo nombre: está vacio.</font><br/>";
      } 
      if(empty($tipo_documento)) {
          echo "<font color='red'>Campo tipo_documento: está vacio.</font><br/>";
      } 
      if(empty($telefono)) {
          echo "<font color='red'>Campo telefono: está vacio.</font><br/>";
      } 
      if(empty($direccion)) {
          echo "<font color='red'>Campo direccion: está vacio.</font><br/>";
      } 
      echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
    }else {
        $resultado = $modelo->insertarCliente($nombre,$tipo_documento,$telefono,$direccion);
    }
}
?>