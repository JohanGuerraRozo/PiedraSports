<?php
class pedidoModel
{
    private $pdo;

    public function __construct()
    {
        require_once "C:/xampp/htdocs/PiedraSports/config/db.php";
        $con = new db();
        $this->pdo = $con->conexion();
    }

    public function getPedido()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM pedido ORDER BY id_pedido asc");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function setPedido($desc_pedido, $fech_pedido, $clienteFK_pedido)
    {
        $stmt = $this->pdo->prepare("INSERT INTO pedido VALUES(null, :desc_pedido, :fech_pedido, :clienteFK_pedido)");
        $stmt->bindParam(":desc_pedido", $desc_pedido);
        $stmt->bindParam(":fech_pedido", $fech_pedido);
        $stmt->bindParam(":clienteFK_pedido", $clienteFK_pedido);
        $stmt->execute();
    }

    public function updatePedido($id, $desc_pedido, $fech_pedido, $clienteFK_pedido)
    {
        $stmt = $this->pdo->prepare("UPDATE pedido SET desc_pedido = :desc_pedido,fech_pedido = :fech_pedido,
         id_cliente_fk_pedido = :clienteFK_pedido WHERE id_pedido = :id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":desc_pedido", $desc_pedido);
        $stmt->bindParam(":fech_pedido", $fech_pedido);
        $stmt->bindParam(":clienteFK_pedido", $clienteFK_pedido);
        $stmt->execute();
    }

    public function deletePedido($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM pedido WHERE id_pedido = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function obtenerPorId($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM pedido WHERE id_pedido = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetch();
    }
}
