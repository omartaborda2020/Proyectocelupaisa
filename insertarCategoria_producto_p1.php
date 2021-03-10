<html>

<head>
    <title>Insertar Categoria</title>
</head>

<body>
    <center>
        <br>
        <br>
        <h1>Insertar Categoria</h1>
        <a href="listarCategoria_producto_p1.php">Volver</a>
        <br />
        <br />
        <form action="insertarCategoria_producto_l1.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" /></td>
                </tr>
                <tr>
                    <td>Tipo Producto</td>
                    <td><input type="text" name="tipo_producto" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Insertar" /></td>
                </tr>
            </table>
        </form>
    </center>
</body>