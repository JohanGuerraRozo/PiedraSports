<?php
class pedidoController
{
    private $model;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/ProyectoPiedraSports/model/pedidoModel.php");
        $this->model = new pedidoModel();
    }

    public function setPedido($desc_pedido, $fech_pedido, $clienteFK_pedido)
    {
        if ($desc_pedido == null || $fech_pedido || $clienteFK_pedido == null) {
            echo '
            <script>alert("Completa los campos para poder registrar el pedido");
            window.locatio = "../views/interfaces/registrar-pedido.html";
            </script>
            ';
            exit;
        } else {
            $this->model->setPedido($desc_pedido, $fech_pedido, $clienteFK_pedido);
            echo '
            <script>alert("Pedido registrado Correctamenta");
            window.locatio = "../views/interfaces/registrar-pedido.html";
            </script>
            ';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pedidoController = new pedidoController();
    if ($_GET['action'] == 'crear') {
        $desc_pedido = $_POST['desc_pedido'];
        $fech_pedido = $_POST['fech_pedido'];
        $clienteFK_pedido = $_POST['clienteFK_pedido'];

        exit;
    }
}
