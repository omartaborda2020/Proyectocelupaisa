<?php
include_once("generalDaoImpl.php");
$id = $_GET['id'];
$modelo = new generalDaoImpl();
$resultado = $modelo->eliminarProducto($id);
?>