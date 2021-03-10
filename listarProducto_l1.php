<?php
include_once("generalDaoImpl.php");
$modelo = new generalDaoImpl();
$resultado = $modelo->listarProducto();
echo "<table border='1' width='40%'>";
echo "<tr>";
echo "<th> Nombre </th>";
echo "<th> Cantidad </th>";
echo "<th> Precio </th>";
echo "<th> Accion </th>";
echo "</tr>";
if($resultado){
    foreach($resultado as $row => $item) {
        echo "<tr>";
        echo "<td>".$item['nombre']."</td>";
        echo "<td>".$item['cantidad']."</td>";
        echo "<td>".$item['precio']."</td>";
        echo "<td><a href=\"actualizarProducto_p1.php?id=$item[id]\">Editar</a> | <a href=\"eliminarProducto_p1.php?id=$item[id]\"onClick=\"return confirm('Esta seguro de eliminar el registro?')\">Eliminar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>