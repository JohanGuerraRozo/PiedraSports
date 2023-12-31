<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../Img/logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../Css/dashboard.css" />
    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <title>Registro Venta</title>
</head>

<body>
    <header class="cabecera">
        <a href="dashboard.html"><img src="../Img/logo.png" alt="Logo" /></a>
        <h1>Registro Venta</h1>
    </header>
    <div class="menu">
        <nav class="menu-desplegable">
            <button class="boton-menu">Ventas</button>
            <div class="Contenido-menu">
                <a href="form-venta.php">Ventas</a>
                <a href="form-pedido.php">Pedido</a>
                <!--<a href="#">Catalogo</a>-->
                <!-- <a href="#">Factura</a> -->
            </div>
        </nav>
        <nav class="menu-desplegable">
            <button class="boton-menu">Compras</button>
            <div class="Contenido-menu">
                <a href="form-compra.php">Compra</a>
                <a href="form-proveedor.php">Proveedor</a>
            </div>
        </nav>
        <nav class="menu-desplegable">
            <button class="boton-menu">Distribución</button>
            <div class="Contenido-menu">
                <a href="form-distribucion.php">Distribucion</a>
                <!-- <a href="#">Domicilio</a>
        <a href="#">Valoracion</a>
        <a href="#">Seguimiento</a> -->
            </div>
        </nav>
        <nav class="menu-desplegable">
            <button class="boton-menu">Inventario</button>
            <div class="Contenido-menu">
                <a href="form-producto.php">Producto</a>
                <a href="Reportes/reporte_venta.php">Reporte Venta</a>
                <a href="Reportes/reporte_compra.php">Reporte Compra</a>
            </div>
        </nav>
    </div>
    <div class="contenido-principal">
        <div class="container-sm m-0">
            <div class="row justify-content-left">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Registrar una Venta</h1>
                        </div>
                        <div class="card-body">
                            <form action="../../controller/ventaController.php? action=crear" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group text-start">
                                            <label for="precioTotal_venta">Precio Total</label>
                                            <input type="number" class="form-control" name="precioTotal_venta" id="precioTotal_venta" required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="precioUnitario_venta">Precio Unitario</label>
                                            <input type="number" class="form-control" name="precioUnitario_venta" id="precioUnitario_venta" required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="cantProduct_venta">Cantidad</label>
                                            <input type="number" class="form-control" name="cantProduct_venta" id="cantProduct_venta" required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="formaPago_venta">Forma de pago</label>
                                            <input type="text" class="form-control" name="formaPago_venta" id="formaPago_venta" required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="fecha_venta">fecha</label>
                                            <input type="date" class="form-control" name="fecha_venta" id="fecha_venta" required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="pedidoFK_venta">Id Pedido</label>
                                            <input type="number" class="form-control" name="pedidoFK_venta" id="pedidoFK_venta" required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="empleadoFK_venta">Id Empleado</label>
                                            <input type="number" class="form-control" name="empleadoFK_venta" id="empleadoFK_venta" required minlength="4" maxlength="20" />
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="text-start">
                                    <input type="submit" class="btn btn-primary" name="Registrar_venta" value="Registrar Venta" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">TOTAL</th>
                                <th scope="col">UNITARIO</th>
                                <th scope="col">FECHA</th>
                                <th scope="col">CANTIDAD</th>
                                <th scope="col">FORMA PAGO</th>
                                <th scope="col">PEDIDO</th>
                                <th scope="col">EMPLEADO</th>
                                <th scope="col">OPCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once '../../controller/ventaController.php';
                            $ventaController = new ventaController();
                            $buscar = $ventaController->getVenta();
                            foreach ($buscar as $datos) {
                                echo '<tr>';
                                echo '<td> <a href="form-venta.php?id-ven=' . $datos['ID_VENTA'] . '">' . $datos['ID_VENTA'] . '</a></td>';
                                echo '<td>' . $datos['PRECIO_TOTAL_VENTA'] . '</td>';
                                echo '<td>' . $datos['PRECIO_UNITARIO_VENTA_VENTA'] . '</td>';
                                echo '<td>' . $datos['FECHA_VENTA'] . '</td>';
                                echo '<td>' . $datos['CANT_PRODUCTO_VENTA'] . '</td>';
                                echo '<td>' . $datos['FORMA_PAGO_VENTA'] . '</td>';
                                echo '<td>' . $datos['ID_PEDIDO_FK_VENTA'] . '</td>';
                                echo '<td>' . $datos['ID_EMPLEADO_FK_VENTA'] . '</td>';
                                echo '<td>';
                                echo '<a href="" class="btn btn-small btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal"><i class="fa-solid fa-pen"></i></a>';
                                echo '<a href="form-venta.php?id=' . $datos['ID_VENTA'] . '" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Modal-->
        <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarModalLabel">Actualizar cargo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <form action="../../controller/ventaController.php? action=modificar" method="post">
                                    <div class="form-group text-start">
                                        <?php
                                        require_once 'C:/xampp/htdocs/PiedraSports/controller/ventaController.php';
                                        $ventaController = new ventaController();
                                        $venta = $ventaController->obtenerPorId($_GET['id-ven']); ?>
                                        <label for="id-venta">ID</label>
                                        <input type="text" class="form-control" name="id-venta" id="id-venta" value="<?php echo $venta[0]; ?>" readonly="readonly" />
                                        <label for="precioTotal_venta">Precio Total</label>
                                        <input type="number" class="form-control" name="precioTotal_venta" id="precioTotal_venta" value="<?php echo $venta[1]; ?>" required minlength="4" maxlength="20" />
                                        <label for="precioUnitario_venta">Precio Unitario</label>
                                        <input type="number" class="form-control" name="precioUnitario_venta" id="precioUnitario_venta" value="<?php echo $venta[2]; ?>" required minlength="4" maxlength="20" />
                                        <label for="cantProduct_venta">Cantidad</label>
                                        <input type="number" class="form-control" name="cantProduct_venta" id="cantProduct_venta" value="<?php echo $venta[3]; ?>" required minlength="4" maxlength="20" />
                                        <label for="formaPago_venta">Forma de pago</label>
                                        <input type="text" class="form-control" name="formaPago_venta" id="formaPago_venta" value="<?php echo $venta[4]; ?>" required minlength="4" maxlength="20" />
                                        <label for="fecha_venta">fecha</label>
                                        <input type="date" class="form-control" name="fecha_venta" id="fecha_venta" value="<?php echo $venta[5]; ?>" required minlength="4" maxlength="20" />
                                        <label for="pedidoFK_venta">Id Pedido</label>
                                        <input type="number" class="form-control" name="pedidoFK_venta" id="pedidoFK_venta" value="<?php echo $venta[6]; ?>" required minlength="4" maxlength="20" />
                                        <label for="empleadoFK_venta">Id Empleado</label>
                                        <input type="number" class="form-control" name="empleadoFK_venta" id="empleadoFK_venta" value="<?php echo $venta[7]; ?>" required minlength="4" maxlength="20" />
                                    </div>
                                    <br>
                                    <div class="text-start">
                                        <input type="submit" class="btn btn-primary" name="Modificar" value="Modificar Venta" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/19e0e62144.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Js/venta.js"></script>
</body>

</html>