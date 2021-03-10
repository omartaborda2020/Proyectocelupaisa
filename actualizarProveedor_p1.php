<?php
require_once "ConexionDB.php";
$conexion = ConexionDB::conectar();
$id = $_GET['id'];
$sql = "SELECT id, nombre, email, telefono, direccion FROM proveedor WHERE id=:id";
$query = $conexion->prepare($sql);
$query->execute(array('id'=>$id));
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $nombre = $row['nombre'];
    $email = $row['email'];
    $telefono = $row['telefono'];
    $direccion = $row['direccion'];
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
        <h2>Actualizar Proveedores Celupaisa</h2>
        <a href="listarProveedor_p1.php">Volver</a>
        <form name="form1" method="post" action="actualizarProveedor_l1.php">
            <table boreder="0">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $email;?>"></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" name="telefono" value="<?php echo $telefono;?>"></td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type="text" name="direccion" value="<?php echo $direccion;?>"></td>
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