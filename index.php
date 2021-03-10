<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto&display=swap"
        rel="stylesheet">

</head>

<body>


    <header class="headerindex">

        <div class="contenido">

            <section class="sectimg img">
                <a href="index.php"><img src="img/celular.png"></a>
            </section>

            <nav class="navegacion">
                <ul>

                    <?php 
                        echo "<a href='listarCliente_p1.php'><li>Cliente</li></a>";
                        echo "<a href='listarProveedor_p1.php'><li>Proveedor</li></a>";
                        echo "<a href='listarProducto_p1.php'><li>Producto</li></a>";
                        echo "<a href='listarPedido_p1.php'><li>Pedido</li></a>";
                        echo "<a href='listarCategoria_producto_p1.php'><li>Categoria Producto</li></a>";
                        ?>
                </ul>

            </nav>
        </div>

        <h1>Celupaisa</h1>
    </header>




</body>


</html>