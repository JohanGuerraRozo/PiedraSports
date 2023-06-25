<?php
class clienteController
{
    private $model;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/ProyectoPiedraSports/model/clienteModel.php");
        $this->model = new clienteModel();
    }

    public function getCliente()
    {
        $clientes = $this->model->getCliente();

        if ($clientes) {
            foreach ($clientes as $cliente) {
                // Procesar y mostrar los datos de cada cliente
                echo 'ID: ' . $cliente['id'] . '<br>';
                echo 'Nombre: ' . $cliente['nom_cliente'] . '<br>';
                echo 'Apellido: ' . $cliente['apell_cliente'] . '<br>';
                echo 'Dirección: ' . $cliente['drr_cliente'] . '<br>';
                echo 'Email: ' . $cliente['email_cliente'] . '<br>';
                echo '-------------------------------------<br>';
            }
        } else {
            echo 'No se encontraron clientes.';
        }
    }

    public function setCliente($nomCliente, $apellCliente, $drrCliente, $emailCliente)
    {
        if ($nomCliente == null || $apellCliente == null || $drrCliente == null || $emailCliente == null) {
            echo '
            <script>alert("Completa todos los campos para registrar el cliente");
            window.location = "../views/interfaces/index.html";
            </script>
            ';
            exit;
        } else {
            $this->model->setCliente($nomCliente, $apellCliente, $drrCliente, $emailCliente);
            echo '<p>Hola</p>';
        }
    }

    public function actualizarCliente($idCliente, $nomCliente, $apellCliente, $drrCliente, $emailCliente)
    {
        if ($idCliente == null || $nomCliente == null || $apellCliente == null || $drrCliente == null || $emailCliente == null) {
            echo '
            <script>alert("Completa todos los campos para actualizar el cliente");
            window.location = "../views/interfaces/index.html";
            </script>
            ';
            exit;
        } else {
            $this->model->updateCliente($idCliente, $nomCliente, $apellCliente, $drrCliente, $emailCliente);
            echo 'Cliente actualizado exitosamente.';
        }
    }

    public function eliminarCliente($idCliente)
    {
        if ($idCliente == null) {
            echo '
            <script>alert("Proporciona el ID del cliente para eliminarlo");
            window.location = "../views/interfaces/index.html";
            </script>
            ';
            exit;
        } else {
            $this->model->deleteCliente($idCliente);
            echo 'Cliente eliminado exitosamente.';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $clienteController = new clienteController();
    if ($_GET['action'] == 'crear') {
        $nomCliente = $_POST['nom-cliente'];
        $apellCliente = $_POST['apell-cliente'];
        $drrCliente = $_POST['drr-cliente'];
        $emailCliente = $_POST['email-cliente'];

        $clienteController->setCliente($nomCliente, $apellCliente, $drrCliente, $emailCliente);
        exit;
    } elseif ($_GET['action'] == 'leer') {
        $clienteController->getCliente();
        exit;
    } elseif ($_GET['action'] == 'actualizar') {
        $idCliente = $_POST['id-cliente'];
        $nomCliente = $_POST['nom-cliente'];
        $apellCliente = $_POST['apell-cliente'];
        $drrCliente = $_POST['drr-cliente'];
        $emailCliente = $_POST['email-cliente'];

        $clienteController->actualizarCliente($idCliente, $nomCliente, $apellCliente, $drrCliente, $emailCliente);
        exit;
    } elseif ($_GET['action'] == 'eliminar') {
        $idCliente = $_POST['id-cliente'];
        $clienteController->eliminarCliente($idCliente);
        exit;
    }
}

