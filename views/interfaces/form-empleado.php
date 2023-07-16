<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Css/form-emple.css" />
    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <title>Registro Empleado</title>
</head>

<body>
    <header class="cabecera">
        <a href="dashboard.html"><img src="../Img/logo.png" alt="Logo" /></a>
        <h1>Registro Empleado</h1>
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
                            <h1 class="text-center">Registrar un Empleado</h1>
                        </div>
                        <div class="card-body">
                            <form action="../../controller/cargoController.php? action=crear" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group text-start">
                                            <label for="fech_in_cargo">Fecha De Ingreso</label>
                                            <input type="date" class="form-control" name="fech_in_cargo" id="fech_in_cargo" required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="nom_empleado">Nombre</label>
                                            <input type="text" class="form-control" name="nom_empleado" id="nom_empleado" required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="email_empleado">Email</label>
                                            <input type="email" class="form-control" name="email_empleado" id="email_empleado" required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="movil_empleado">Numero de contacto</label>
                                            <input type="number" class="form-control" name="movil_empleado" id="movil_empleado" required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="drr_empleado">Direccion</label>
                                            <input type="text" class="form-control" name="drr_empleado" id="drr_empleado" required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="cargoFk_empleado">Id cargo</label>
                                            <input type="number" class="form-control" name="pedidoFK_venta" id="pedidoFK_venta" required minlength="4" maxlength="20" />
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
                                <th scope="col">FECHA_INGRESO</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">MOVIL</th>
                                <th scope="col">DIRECCION</th>
                                <th scope="col">ID_CARGO</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen"></i></a>
                                    <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/19e0e62144.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../Js/empleado.js"></script>
</body>

</html>