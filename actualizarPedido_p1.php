<?php
require_once "ConexionDB.php";
$conexion = ConexionDB::conectar();
$id = $_GET['id'];
$sql = "SELECT id, nombre_pedido, cantidad, telefono FROM pedido WHERE id=:id";
$query = $conexion->prepare($sql);
$query->execute(array('id'=>$id));
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $nombre_pedido = $row['nombre_pedido'];
    $cantidad = $row['cantidad'];
    $telefono = $row['telefono'];
    
}
?>
<html>

<head>
    <title>Actualizar Datos</title>
</head>

<body>
    <center>
        <br>
        <br>
        <h2>Actualizar Pedidos Celupaisa</h2>
        <a href="listarPedido_p1.php">Volver</a>
        <form name="form1" method="post" action="actualizarPedido_l1.php">
            <table boreder="0">
                <tr>
                    <td>Nombre Pedido</td>
                    <td><input type="text" name="nombre_pedido" value="<?php echo $nombre_pedido;?>"></td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td><input type="text" name="cantidad" value="<?php echo $cantidad;?>"></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" name="telefono" value="<?php echo $telefono;?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
                    <td><input type="submit" name="update" value="Editar"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>