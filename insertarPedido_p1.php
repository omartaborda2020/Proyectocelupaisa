<html>

<head>
    <title>Insertar Pedido</title>
</head>

<body>
    <center>
        <br>
        <br>
        <h1>Insertar Pedido</h1>
        <a href="listarPedido_p1.php">Volver</a>
        <br />
        <br />
        <form action="insertarPedido_l1.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Nombre Pedido</td>
                    <td><input type="text" name="nombre_pedido" /></td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td><input type="text" name="cantidad" /></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" name="telefono" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Insertar" /></td>
                </tr>
            </table>
        </form>
    </center>
</body>