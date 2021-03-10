<?php
include_once("generalDaoImpl.php");
$modelo = new generalDaoImpl();
$resultado = $modelo->listarCliente();
echo "<table border='1' width='70%'>";
echo "<tr>";
echo "<th> Nombre </th>";
echo "<th> Tipo_documento </th>";
echo "<th> Telefono </th>";
echo "<th> Direccion </th>";
echo "<th> Accion </th>";
echo "</tr>";
if($resultado){
    foreach($resultado as $row => $item) {
        echo "<tr>";
        echo "<td>".$item['nombre']."</td>";
        echo "<td>".$item['tipo_documento']."</td>";
        echo "<td>".$item['telefono']."</td>";
        echo "<td>".$item['direccion']."</td>";
        echo "<td><a href=\"actualizarCliente_p1.php?id=$item[id]\">Editar</a> | <a href=\"eliminarCliente_p1.php?id=$item[id]\"onClick=\"return confirm('Esta seguro de eliminar el registro?')\">Eliminar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>