<?php
class rolController
{
    private $model;

    public function __construct()
    {
        include_once "c:/xampp/htdocs/PiedraSports/model/rolModel.php";
        $this->model = new rolModel();
    }

    public function setRol($nomRol)
    {
        if ($nomRol == null) {
            echo '
            <script>alert("Completa todos los campos para registrar el rol");
            window.location = "../views/interfaces/form-rol.php";
            </script>
            ';
            exit;
        } else {
            $this->model->setRol($nomRol);
            echo '
            <script>alert("Rol insertado Correctamente");
            window.location = "../views/interfaces/form-rol.php";
            </script>
            ';
        }
    }

    public function updateRol($idRol, $nomRol)
    {
        $this->model->updateRol($idRol, $nomRol);
        echo '
            <script>alert("Rol actualizado Correctamente");
            window.location = "../views/interfaces/form-rol.php";
            </script>
            ';
    }

    public function obtenerPorId($id)
    {
        return $this->model->obtenerPorId($id);
    }

    public function getRol()
    {
        return $this->model->getRol();
    }

    public function deleteRol($id)
    {
        $this->model->deleteRol($id);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rolController = new rolController();
    if ($_GET['action'] == 'crear') {
        $nomRol = $_POST['nom-rol'];
        $rolController->setRol($nomRol);

        exit;
    }
    if ($_GET['action'] == 'modificar') {
        $idRol = $_POST['id-rol'];
        $nomRol = $_POST['nom-rol'];
        $rolController->updateRol($idRol, $nomRol);

        exit;
    }
}


if (!empty($_GET['id'])) {
    $rolController = new rolController();
    $resultado = $rolController->deleteRol($_GET['id']);
    if ($resultado != 0) {
        echo
        '<script>alert("Error");
        window.location = "../interfaces/form-rol.php";
        </script>
        ';
    } else {
        echo
        '<script>alert("Rol eliminnado Correctamente");
        window.location = "../interfaces/form-rol.php";
        </script>
        ';
    }
}
if (!empty($_GET['id-ro'])) {
    $rolController = new rolController();
    $resultado = $rolController->obtenerPorId($_GET['id-ro']);
}
