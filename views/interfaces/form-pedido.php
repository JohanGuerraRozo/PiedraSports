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
    <title>Registro Pedido</title>
</head>

<body>
    <header class="cabecera">
        <a href="dashboard.html"><img src="../Img/logo.png" alt="Logo" /></a>
        <h1>Registro Pedido</h1>
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
            </div>
        </nav>
    </div>
    <div class="contenido-principal">
        <div class="container-sm m-0">
            <div class="row justify-content-left">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Registrar un pedido</h1>
                        </div>
                        <div class="card-body">
                            <form action="../../controller/cargoController.php? action=crear" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group text-start">
                                            <label for="desc_pedido">Descripcion</label>
                                            <input type="text" class="form-control" name="desc_pedido" id="desc_pedido"
                                                required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="fech_pedido">Fecha</label>
                                            <input type="date" class="form-control" name="fech_pedido" id="fech_pedido"
                                                required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="clienteFK_pedido">Id Cliente</label>
                                            <input type="number" class="form-control" name="clienteFK_pedido"
                                                id="clienteFK_pedido" required minlength="4" maxlength="20" />
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="text-start">
                                    <input type="submit" class="btn btn-primary" name="Registrar_ped"
                                        value="Registrar Pedido" />
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
                                <th scope="col">DESCRIPCION</th>
                                <th scope="col">FECHA</th>
                                <th scope="col">ID_CLIENTE</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
</body>

</html>