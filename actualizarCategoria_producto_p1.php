<?php
require_once "ConexionDB.php";
$conexion = ConexionDB::conectar();
$id = $_GET['id'];
$sql = "SELECT id, nombre, tipo_producto FROM categoria_producto WHERE id=:id";
$query = $conexion->prepare($sql);
$query->execute(array('id'=>$id));
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $nombre = $row['nombre'];
    $tipo_producto = $row['tipo_producto'];
    
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
        <h2>Actualizar Categoria Productos Celupaisa</h2>
        <a href="listarCategoria_producto_p1.php">Volver</a>
        <form name="form1" method="post" action="actualizarCategoria_producto_l1.php">
            <table boreder="0">
                <tr>
                    <td>Nombre Categoria</td>
                    <td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
                </tr>
                <tr>
                    <td>Tipo Categoria</td>
                    <td><input type="text" name="tipo_producto" value="<?php echo $tipo_producto;?>"></td>
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