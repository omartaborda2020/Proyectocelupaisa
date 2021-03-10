<html>

<head>
    <title>Insertar Producto</title>
</head>

<body>
    <center>
        <br>
        <br>
        <h1>Insertar Producto</h1>
        <a href="listarProducto_p1.php">Volver</a>
        <br />
        <br />
        <form action="insertarProducto_l1.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" /></td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td><input type="text" name="cantidad" /></td>
                </tr>
                <tr>
                    <td>Precio</td>
                    <td><input type="text" name="precio" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Insertar" /></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>