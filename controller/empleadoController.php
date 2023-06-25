<?php
class empleadoController
{
    private $model;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/ProyectoPiedraSports/model/empleadoModel.php");
        $this->model = new empleadoModel();
    }

    public function setEmpleado($fech_in_empleado, $nom_empleado, $email_empleado, $movil_empleado, $drr_empleado, $cargoFk_empleado)
    {
        if ($fech_in_empleado == null || $nom_empleado == null || $email_empleado == null || $movil_empleado == null || $drr_empleado == null || $cargoFk_empleado) {
            echo '
            <script>alert("Completa los campos para poder registrar el empleado");
            window.locatio = "../views/interfaces/registro-empleado.html";
            </script>
            ';
            exit;
        } else {
            $this->model->setEmpleado($fech_in_empleado, $nom_empleado, $email_empleado, $movil_empleado, $drr_empleado, $cargoFk_empleado);
            echo '
            <script>alert("Empleado registrado Correctamente");
            window.location = "../views/interfaces/registro-empleado.php";
            </script>
            ';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $empleadoController = new empleadoController();
    if ($_GET['action']  == 'crear') {
        $fech_in_empleado = $_POST['fechaIn-empleado'];
        $nom_empleado = $_POST['nom-empleado'];
        $email_empleado = $_POST['email-empleado'];
        $movil_empleado = $_POST['movil-empleado'];
        $drr_empleado = $_POST['drr-empleado'];
        $cargoFk_empleado = $_POST['cargoFK-empleado'];

        exit;
    }
}
