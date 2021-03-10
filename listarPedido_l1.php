<?php
include_once("generalDaoImpl.php");
$modelo = new generalDaoImpl();
$resultado = $modelo->listarPedido();
echo "<table border='1' width='40%'>";
echo "<tr>";
echo "<th> Nombre_pedido </th>";
echo "<th> Cantidad </th>";
echo "<th> Telefono </th>";
echo "<th> Accion </th>";
echo "</tr>";
if($resultado){
    foreach($resultado as $row => $item) {
        echo "<tr>";
        echo "<td>".$item['nombre_pedido']."</td>";
        echo "<td>".$item['cantidad']."</td>";
        echo "<td>".$item['telefono']."</td>";
        echo "<td><a href=\"actualizarPedido_p1.php?id=$item[id]\">Editar</a> | <a href=\"eliminarPedido_p1.php?id=$item[id]\"onClick=\"return confirm('Esta seguro de eliminar el registro?')\">Eliminar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>