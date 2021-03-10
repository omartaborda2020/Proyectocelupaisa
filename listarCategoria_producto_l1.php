<?php
include_once("generalDaoImpl.php");
$modelo = new generalDaoImpl();
$resultado = $modelo->listarCategoria_producto();
echo "<table border='1' width='40%'>";
echo "<tr>";
echo "<th> Nombre </th>";
echo "<th> Tipo Producto </th>";
echo "<th> Accion </th>";
echo "</tr>";

if($resultado){
    foreach($resultado as $row => $item) {
        echo "<tr>";
        echo "<td>".$item['nombre']."</td>";
        echo "<td>".$item['tipo_producto']."</td>";
        echo "<td><a href=\"actualizarCategoria_producto_p1.php?id=$item[id]\">Editar</a> | <a href=\"eliminarCategoria_producto_p1.php?id=$item[id]\"onClick=\"return confirm('Esta seguro de eliminar el registro?')\">Eliminar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>