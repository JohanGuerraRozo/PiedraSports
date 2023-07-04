<?php
class ventaController
{
    private $model;

    public function __construct()
    {
        include_once "C:/xampp/htdocs/PiedraSports/model/ventaModel.php";
        $this->model = new ventaModel();
    }

    public function setVenta($precioTotal_venta, $precioUnitario_venta, $cantProduct_venta, $formaPago_venta, $fecha_venta, $pedidoFK_venta, $empleadoFK_venta)
    {
        if ($precioTotal_venta == null || $precioUnitario_venta == null || $cantProduct_venta == null || $formaPago_venta == null || $fecha_venta == null || $pedidoFK_venta == null || $empleadoFK_venta == null) {
            echo '
            <script>alert("Completa los campos para poder registrar la venta");
            window.location = "../views/interfaces/form-venta.php";
            </script>
            ';
            exit;
        } else {
            $this->model->setVenta($precioTotal_venta, $precioUnitario_venta, $cantProduct_venta, $formaPago_venta, $fecha_venta, $pedidoFK_venta, $empleadoFK_venta);
            echo '
            <script>alert("Venta registrada Correctamente");
            window.location = "../views/interfaces/form-venta.php";
            </script>
            ';
        }
    }

    public function updateVenta($idVenta, $precioTotal_venta, $precioUnitario_venta, $cantProduct_venta, $formaPago_venta, $fecha_venta, $pedidoFK_venta, $empleadoFK_venta)
    {
        $this->model->updateVenta($idVenta, $precioTotal_venta, $precioUnitario_venta, $cantProduct_venta, $formaPago_venta, $fecha_venta, $pedidoFK_venta, $empleadoFK_venta);
        echo '
            <script>alert("Venta actualizada Correctamente");
            window.location = "../views/interfaces/form-venta.php";
            </script>
        ';
    }

    public function obtenerPorId($id)
    {
        return $this->model->obtenerPorId($id);
    }

    public function getVenta()
    {
        return $this->model->getVenta();
    }
    public function deleteVenta($id)
    {
        $this->model->deleteVenta($id);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ventaController = new ventaController();
    if ($_GET['action'] == 'crear') {
        $precioTotal_venta = $_POST['precioTotal_venta'];
        $precioUnitario_venta = $_POST['precioUnitario_venta'];
        $cantProduct_venta = $_POST['cantProduct_venta'];
        $formaPago_venta = $_POST['formaPago_venta'];
        $fecha_venta = $_POST['fecha_venta'];
        $pedidoFK_venta = $_POST['pedidoFK_venta'];
        $empleadoFK_venta = $_POST['empleadoFK_venta'];
        $ventaController->setVenta($precioTotal_venta, $precioUnitario_venta, $cantProduct_venta, $formaPago_venta, $fecha_venta, $pedidoFK_venta, $empleadoFK_venta);

        exit;
    }
    if ($_GET['action'] == 'modificar') {
        $idVenta = $_POST['id-venta'];
        $precioTotal_venta = $_POST['precioTotal_venta'];
        $precioUnitario_venta = $_POST['precioUnitario_venta'];
        $cantProduct_venta = $_POST['cantProduct_venta'];
        $formaPago_venta = $_POST['formaPago_venta'];
        $fecha_venta = $_POST['fecha_venta'];
        $pedidoFK_venta = $_POST['pedidoFK_venta'];
        $empleadoFK_venta = $_POST['empleadoFK_venta'];
        $ventaController->updateVenta($idVenta, $precioTotal_venta, $precioUnitario_venta, $cantProduct_venta, $formaPago_venta, $fecha_venta, $pedidoFK_venta, $empleadoFK_venta);

        exit;
    }
}

if (!empty($_GET['id'])) {
    $ventaController = new ventaController();
    $resultado = $ventaController->deleteVenta($_GET['id']);
    if ($resultado != 0) {
        echo
        '<script>alert("Error");
        window.location = "../interfaces/form-venta.php";
        </script>
        ';
    } else {
        echo
        '<script>alert("Venta eliminada Correctamente");
        window.location = "../interfaces/form-venta.php";
        </script>
        ';
    }
}
if (!empty($_GET['id-ven'])) {
    $ventaController = new ventaController();
    $resultado = $ventaController->obtenerPorId($_GET['id-ven']);
}
