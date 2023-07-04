<?php
class proveedorController
{
    private $model;

    public function __construct()
    {
        include_once "c:/xampp/htdocs/PiedraSports/model/proveedorModel.php";
        $this->model = new proveedorModel();
    }

    public function setProveedor($nomProveedor, $emailProveedor, $movilProveedor)
    {
        if ($nomProveedor == null || $emailProveedor == null || $movilProveedor == null) {
            echo '
            <script>alert("Completa todos los campos para registrar el proveedor");
            window.location = "../views/interfaces/form-proveedor.php";
            </script>
            ';
            exit;
        } else {
            $this->model->setProveedor($nomProveedor, $emailProveedor, $movilProveedor);
            echo '
            <script>alert("Proveedor insertado Correctamente");
            window.location = "../views/interfaces/form-proveedor.php";
            </script>
            ';
        }
    }

    public function updateProveedor($idProveedor, $nomProveedor, $emailProveedor, $movilProveedor)
    {
        $this->model->updateProveedor($idProveedor, $nomProveedor, $emailProveedor, $movilProveedor);
        echo '
            <script>alert("Proveedor actualizado Correctamente");
            window.location = "../views/interfaces/form-proveedor.php";
            </script>
            ';
    }

    public function obtenerPorId($id)
    {
        return $this->model->obtenerPorId($id);
    }

    public function getProveedor()
    {
        return $this->model->getProveedor();
    }

    public function deleteProveedor($id)
    {
        $this->model->deleteProveedor($id);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $proveedorController = new proveedorController();
    if ($_GET['action'] == 'crear') {
        $nomProveedor = $_POST['nom_proveedor'];
        $emailProveedor = $_POST['email_proveedor'];
        $movilProveedor = $_POST['movil_proveedor'];
        $proveedorController->setProveedor($nomProveedor, $emailProveedor, $movilProveedor);

        exit;
    }
    if ($_GET['action'] == 'modificar') {
        $idProveedor = $_POST['id-proveedor'];
        $nomProveedor = $_POST['nom_proveedor'];
        $emailProveedor = $_POST['email_proveedor'];
        $movilProveedor = $_POST['movil_proveedor'];
        $proveedorController->updateProveedor($idProveedor, $nomProveedor, $emailProveedor, $movilProveedor);

        exit;
    }
}


if (!empty($_GET['id'])) {
    $proveedorController = new proveedorController();
    $resultado = $proveedorController->deleteProveedor($_GET['id']);
    if ($resultado != 0) {
        echo
        '<script>alert("Error");
        window.location = "../interfaces/form-proveedor.php";
        </script>
        ';
    } else {
        echo
        '<script>alert("Proveedor eliminnado Correctamente");
        window.location = "../interfaces/form-proveedor.php";
        </script>
        ';
    }
}
if (!empty($_GET['id-prove'])) {
    $proveedorController = new proveedorController();
    $resultado = $proveedorController->obtenerPorId($_GET['id-prove']);
}
