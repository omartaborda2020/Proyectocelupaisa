<?php
include_once("generalDaoImpl.php");
$modelo = new generalDaoImpl();
$resultado = $modelo->listarProveedor();
echo "<table border='1' width='60%'>";
echo "<tr>";
echo "<th> Nombre </th>";
echo "<th> email </th>";
echo "<th> Telefono </th>";
echo "<th> Direccion </th>";
echo "<th> Accion </th>";
echo "</tr>";
if($resultado){
    foreach($resultado as $row => $item) {
        echo "<tr>";
        echo "<td>".$item['nombre']."</td>";
        echo "<td>".$item['email']."</td>";
        echo "<td>".$item['telefono']."</td>";
        echo "<td>".$item['direccion']."</td>";
        echo "<td><a href=\"actualizarProveedor_p1.php?id=$item[id]\">Editar</a> | <a href=\"eliminarProveedor_p1.php?id=$item[id]\"onClick=\"return confirm('Esta seguro de eliminar el registro?')\">Eliminar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>