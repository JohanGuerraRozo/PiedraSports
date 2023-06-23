<?php
class cargoController
{
    private $model;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/ProyectoPiedraSports/model/cargoModel.php");
        $this->model = new cargoModel();
    }

    public function setCargo($nomCargo)
    {
        if ($nomCargo == null) {
            echo '
            <script>alert("Completa todos los campos para registrar el inmueble");
            window.location = "../views/interfaces/index.html";
            </script>
            ';
            exit;
        } else {
            $this->model->setCargo($nomCargo);
            echo '<p>Hola</p>';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cargoController = new cargoController();
    if ($_GET['action'] == 'crear') {
        $nomCargo = $_POST['nom-cargo'];
        $cargoController->setCargo($nomCargo);

        exit;
    }
}