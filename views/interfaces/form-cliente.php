<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Css/registro-empleado.css" />
    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <title>Registro Cliente</title>
</head>

<body>
    <header class="cabecera">
        <a href="dashboard.html"><img src="../Img/logo.png" alt="Logo" /></a>
        <h1>Registro Cliente</h1>
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
        <div class="container-sm m-0">
            <div class="row justify-content-left">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Registrar un cliente</h1>
                        </div>
                        <div class="card-body">
                            <form action="../../controller/cargoController.php? action=crear" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group text-start">
                                            <label for="nom_cliente">Nombre</label>
                                            <input type="text" class="form-control" name="nom_cliente" id="nom_cliente" required minlength="4" maxlength="20" />
                                        </div>
                                        <div class="form-group text-start">
                                          <label for="apell_cliente">Apellido</label>
                                          <input type="text" class="form-control" name="apell_cliente" id="apell_cliente" required minlength="4" maxlength="20" />
                                      </div>
                                      <div class="form-group text-start">
                                          <label for="drr_cliente">Direccion</label>
                                          <input type="text" class="form-control" name="drr_cliente" id="drr_cliente" required minlength="4" maxlength="20" />
                                      </div>
                                      <div class="form-group text-start">
                                          <label for="email_cliente">Email</label>
                                          <input type="email" class="form-control" name="email_cliente" id="email_cliente" required minlength="4" maxlength="20" />
                                      </div>
                                    </div>
                                </div>
                                <br />
                                <div class="text-start">
                                    <input type="submit" class="btn btn-primary" name="Registrar_cli" value="Registrar Cliente" />
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
                                <th scope="col">NOMBRE</th>
                                <th scope="col">APELLIDO</th>
                                <th scope="col">DIRECCION</th>
                                <th scope="col">EMAIL</th>
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
                                <td>
                                    <a href="">Editar</a>
                                    <a href="">Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>