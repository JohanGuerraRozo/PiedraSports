<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Css/registro-empleado.css" />
    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <title>Registro Cargo</title>
</head>

<body>
    <header class="cabecera">
        <a href="dashboard.html"><img src="../Img/logo.png" alt="Logo" /></a>
        <h1>Registro Cargo</h1>
    </header>
    <div class="menu">
        <nav class="menu-desplegable">
            <button class="boton-menu">Ventas</button>
            <div class="Contenido-menu">
                <a href="ventas.html">Ventas</a>
                <a href="#">Pedido</a>
                <a href="#">Catalogo</a>
                <a href="#">Factura</a>
            </div>
        </nav>
        <nav class="menu-desplegable">
            <button class="boton-menu">Compras</button>
            <div class="Contenido-menu">
                <a href="compra.html">Compra</a>
                <a href="#">Proveedor</a>
                <a href="#">Solicitud Compra</a>
                <a href="#">Pago proveedor</a>
            </div>
        </nav>
        <nav class="menu-desplegable">
            <button class="boton-menu">Distribución</button>
            <div class="Contenido-menu">
                <a href="distribucion.html">distribucion</a>
                <a href="#">Domicilio</a>
                <a href="#">Valoracion</a>
                <a href="#">Seguimiento</a>
            </div>
        </nav>
        <nav class="menu-desplegable">
            <button class="boton-menu">Inventario</button>
            <div class="Contenido-menu">
                <a href="inventario.html">Inventario</a>
                <a href="#">Entradas</a>
                <a href="#">Salidas</a>
            </div>
        </nav>
    </div>
    <div class="contenido-principal">
        <div class="container-sm text-center m-0">
            <div class="row justify-content-center">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Registrar un cargo</h1>
                        </div>
                        <div class="card-body">
                            <form action="../../controller/cargoController.php? action=crear" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group text-start">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" name="nom-cargo" id="nombre" required minlength="4" maxlength="20" />
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="text-end">
                                    <input type="submit" class="btn btn-primary" value="Registrar Cargo" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>