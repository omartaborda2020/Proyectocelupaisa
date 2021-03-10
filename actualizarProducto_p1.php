<?php
require_once "ConexionDB.php";
$conexion = ConexionDB::conectar();
$id = $_GET['id'];
$sql = "SELECT id, nombre, cantidad, precio FROM producto WHERE id=:id";
$query = $conexion->prepare($sql);
$query->execute(array('id'=>$id));
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $nombre = $row['nombre'];
    $cantidad = $row['cantidad'];
    $precio = $row['precio'];
    
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
        <h2>Actualizar Productos Celupaisa</h2>
        <a href="listarProducto_p1.php">Volver</a>
        <form name="form1" method="post" action="actualizarProducto_l1.php">
            <table boreder="0">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td><input type="text" name="cantidad" value="<?php echo $cantidad;?>"></td>
                </tr>
                <tr>
                    <td>Precio</td>
                    <td><input type="text" name="precio" value="<?php echo $precio;?>"></td>
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