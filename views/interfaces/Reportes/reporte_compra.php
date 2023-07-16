<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../Img/logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../../Css/dashboard.css" />
    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <title>Registro Venta</title>
    
    <style>
        table {
            background-color: #ffffff;
            text-align: left;
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
        thead {
            background-color: #143d59;
            border-bottom: solid 5px #121e4a;
            color: #ffffff;
        }
        
        tr:nth-child(even) {
            background-color: #dddddd;
        }

        tr:hover td{
            background-color: #406984;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <header class="cabecera">
        <a href="dashboard.html"><img src="../../Img/logo.png" alt="Logo" /></a>
        <h1>Reporte Venta</h1>
    </header>
    <div class="menu">
        <nav class="menu-desplegable">
            <button class="boton-menu">Ventas</button>
            <div class="Contenido-menu">
                <a href="../form-venta.php">Ventas</a>
                <a href="../form-pedido.php">Pedido</a>
                <!--<a href="#">Catalogo</a>-->
                <!-- <a href="#">Factura</a> -->
            </div>
        </nav>
        <nav class="menu-desplegable">
            <button class="boton-menu">Compras</button>
            <div class="Contenido-menu">
                <a href="../form-compra.php">Compra</a>
                <a href="../form-proveedor.php">Proveedor</a>
            </div>
        </nav>
        <nav class="menu-desplegable">
            <button class="boton-menu">Distribución</button>
            <div class="Contenido-menu">
                <a href="../form-distribucion.php">Distribucion</a>
                <!-- <a href="#">Domicilio</a>
        <a href="#">Valoracion</a>
        <a href="#">Seguimiento</a> -->
            </div>
        </nav>
        <nav class="menu-desplegable">
            <button class="boton-menu">Inventario</button>
            <div class="Contenido-menu">
                <a href="../form-producto.php">Producto</a>
                <a href="reporte_venta.php">Reporte Venta</a>
                <a href="reporte_compra.php">Reporte Compra</a>
            </div>
        </nav>
    </div>
    <div class="contenido-principal">
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "PiedraSportsDB";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $sql = "SELECT PRECIO_COMPRA, FECHA_COMPRA, FORMA_PAGO_COMPRA FROM COMPRA";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<div>
                    <table>
                        <thead>
                            <tr>
                                <th>Precio</th>
                                <th>Fecha</th>
                                <th>Forma de Pago</th>
                            </tr>
                        </thead>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["PRECIO_COMPRA"] . "</td>
                        <td>" . $row["FECHA_COMPRA"] . "</td>
                        <td>" . $row["FORMA_PAGO_COMPRA"] . "</td>
                    </tr>";
            }
            echo "</table> </div>";
        } else {
            echo "No se encontraron resultados.";
        }

        $conn->close();
    ?>
    </div>
    <script src="https://kit.fontawesome.com/19e0e62144.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Js/venta.js"></script>
</body>

</html>