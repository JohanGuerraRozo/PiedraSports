<?php
class pedidoController
{
    private $model;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/PiedraSports/model/pedidoModel.php");
        $this->model = new pedidoModel();
    }

    public function setPedido($desc_pedido, $fech_pedido, $clienteFK_pedido)
    {
        if ($desc_pedido == null || $fech_pedido == null || $clienteFK_pedido == null) {
            echo '
            <script>alert("Completa los campos para poder registrar el pedido");
            window.location = "../views/interfaces/form-pedido.php";
            </script>
            ';
            exit;
        } else {
            $this->model->setPedido($desc_pedido, $fech_pedido, $clienteFK_pedido);
            echo '
            <script>alert("Pedido registrado Correctamenta");
            window.location = "../views/interfaces/form-pedido.php";
            </script>
            ';
        }
    }

    public function updatePedido($idPedido, $desc_pedido, $fech_pedido, $clienteFK_pedido)
    {
        $this->model->updatePedido($idPedido, $desc_pedido, $fech_pedido, $clienteFK_pedido);
        echo '
            <script>alert("Pedido actualizado Correctamente");
            window.location = "../views/interfaces/form-pedido.php";
            </script>
            ';
    }

    public function obtenerPorId($id)
    {
        return $this->model->obtenerPorId($id);
    }

    public function getPedido()
    {
        return $this->model->getPedido();
    }

    public function deletePedido($id)
    {
        $this->model->deletePedido($id);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pedidoController = new pedidoController();
    if ($_GET['action'] == 'crear') {
        $desc_pedido = $_POST['desc_pedido'];
        $fech_pedido = $_POST['fech_pedido'];
        $clienteFK_pedido = $_POST['clienteFK_pedido'];
        $pedidoController->setPedido($desc_pedido, $fech_pedido, $clienteFK_pedido);

        exit;
    }
    if ($_GET['action'] == 'modificar') {
        $idPedido = $_POST['id-pedido'];
        $desc_pedido = $_POST['desc_pedido'];
        $fech_pedido = $_POST['fech_pedido'];
        $clienteFK_pedido = $_POST['clienteFK_pedido'];
        $pedidoController->updatePedido($idPedido, $desc_pedido, $fech_pedido, $clienteFK_pedido);

        exit;
    }
}

if (!empty($_GET['id'])) {
    $pedidoController = new pedidoController();
    $resultado = $pedidoController->deletePedido($_GET['id']);
    if ($resultado != 0) {
        echo
        '<script>alert("Error");
        window.location = "../interfaces/form-pedido.php";
        </script>
        ';
    } else {
        echo
        '<script>alert("Pedido eliminnado Correctamente");
        window.location = "../interfaces/form-pedido.php";
        </script>
        ';
    }
}
if (!empty($_GET['id-ped'])) {
    $pedidoController = new pedidoController();
    $resultado = $pedidoController->obtenerPorId($_GET['id-ped']);
}
