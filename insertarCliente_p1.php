<html>

<head>
    <title>Insertar Cliente</title>
</head>

<body>
    <center>
        <br>
        <br>
        <h1>Insertar Cliente</h1>
        <a href="listarCliente_p1.php">Volver</a>
        <br />
        <br />
        <form action="insertarCliente_l1.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" /></td>
                </tr>
                <tr>
                    <td>Tipo Documento</td>
                    <td><input type="text" name="tipo_documento" /></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" name="telefono" /></td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type="text" name="direccion" /></td>
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