<?php
require_once "ConexionDB.php";
$conexion = ConexionDB:: conectar();
$id = $_GET['id'];
$sql = "SELECT id, nombre, tipo_documento, telefono, direccion FROM cliente WHERE id=:id";
$query = $conexion->prepare($sql);
$query->execute(array('id'=>$id));
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $nombre = $row['nombre'];
    $tipo_documento = $row['tipo_documento'];
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
        <h2>Actualizar Clientes Celupaisa</h2>
        <a href="listarCliente_p1.php">Volver</a>
        <form name="form1" method="post" action="actualizarCliente_l1.php">
            <table boreder="0">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
                </tr>
                <tr>
                    <td>Tipo Documento</td>
                    <td><input type="text" name="tipo_documento" value="<?php echo $tipo_documento;?>"></td>
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