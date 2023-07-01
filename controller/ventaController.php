<?php
class ventaController
{
    private $model;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/ProyectoPiedraSports/model/ventaModel.php");
        $this->model = new ventaModel();
    }

    public function setVenta($precioTotal_venta, $precioUnitario_venta, $cantProduct_venta, $formaPago_venta, $fecha_venta, $pedidoFK_venta, $empleadoFK_venta)
    {
        if ($precioTotal_venta == null || $precioUnitario_venta == null || $cantProduct_venta == null || $formaPago_venta == null || $fecha_venta == null || $pedidoFK_venta == null || $empleadoFK_venta == null) {
            echo '
            <script>alert("Completa los campos para poder registrar la venta");
            window.locatio = "../views/interfaces/registro-venta.html";
            </script>
            ';
            exit;
        } else {
            $this->model->setVenta($precioTotal_venta, $precioUnitario_venta, $cantProduct_venta, $formaPago_venta, $fecha_venta, $pedidoFK_venta, $empleadoFK_venta);
            echo '
            <script>alert("Venta registrada Correctamente");
            window.locatio = "../views/interfaces/registro-venta.html";
            </script>
            ';
        }
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


        exit;
    }
}