<?php
class compraController
{
    private $model;

    public function __construct()
    {
        include_once "c:/xampp/htdocs/PiedraSports/model/compraModel.php";
        $this->model = new compraModel();
    }

    public function setCompra($precioCompra, $fechaCompra, $formaPagoCompra, $idProveedor_Compra)
    {
        if ($precioCompra == null || $fechaCompra == null || $formaPagoCompra == null || $idProveedor_Compra == null) {
            echo '
            <script>alert("Completa todos los campos para registrar la compra");
            window.location = "../views/interfaces/form-compra.php";
            </script>
            ';
            exit;
        } else {
            $this->model->setCompra($precioCompra, $fechaCompra, $formaPagoCompra, $idProveedor_Compra);
            echo '
            <script>alert("Compra insertada Correctamente");
            window.location = "../views/interfaces/form-compra.php";
            </script>
            ';
        }
    }

    public function updateCompra($idCompra, $precioCompra, $fechaCompra, $formaPagoCompra, $idProveedor_Compra)
    {
        $this->model->updateCompra($idCompra, $precioCompra, $fechaCompra, $formaPagoCompra, $idProveedor_Compra);
        echo '
            <script>alert("Compra actualizada Correctamente");
            window.location = "../views/interfaces/form-compra.php";
            </script>
            ';
    }

    public function obtenerPorId($id)
    {
        return $this->model->obtenerPorId($id);
    }

    public function getCompra()
    {
        return $this->model->getCompra();
    }

    public function deleteCompra($id)
    {
        $this->model->deleteCompra($id);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $compraController = new compraController();
    if ($_GET['action'] == 'crear') {
        $precioCompra = $_POST['preci_compra'];
        $fechaCompra = $_POST['fech_compra'];
        $formaPagoCompra = $_POST['forpago_compra'];
        $idProveedor_Compra = $_POST['proveFK_compra'];
        $compraController->setCompra($precioCompra, $fechaCompra, $formaPagoCompra, $idProveedor_Compra);

        exit;
    }
    if ($_GET['action'] == 'modificar') {
        $idCompra = $_POST['id-compra'];
        $precioCompra = $_POST['preci_compra'];
        $fechaCompra = $_POST['fech_compra'];
        $formaPagoCompra = $_POST['forpago_compra'];
        $idProveedor_Compra = $_POST['proveFK_compra'];
        $compraController->updateCompra($idCompra, $precioCompra, $fechaCompra, $formaPagoCompra, $idProveedor_Compra);

        exit;
    }
}

if (!empty($_GET['id'])) {
    $compraController = new compraController();
    $resultado = $compraController->deleteCompra($_GET['id']);
    if ($resultado != 0) {
        echo
        '<script>alert("Error");
        window.location = "../interfaces/form-compra.php";
        </script>
        ';
    } else {
        echo
        '<script>alert("Compra eliminnada Correctamente");
        window.location = "../interfaces/form-compra.php";
        </script>
        ';
    }
}
if (!empty($_GET['id-comp'])) {
    $compraController = new compraController();
    $resultado = $compraController->obtenerPorId($_GET['id-comp']);
}
