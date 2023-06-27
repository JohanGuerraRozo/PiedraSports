<?php
class pedidoModel
{
    private $pdo;

    public function __construct()
    {
        require_once "C:/xampp/htdocs/ProyectoPiedraSports/config/db.php";
        $con = new db();
        $this->$pdo = $con->conexion();
    }

    public function getPedido()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM pedido ORDER BY id desc");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function setPedido($desc_pedido, $fech_pedido, $clienteFK_pedido)
    {
        $stmt = $this->pdo->prepare("INSERT INTO cargo VALUES(null, :nomCargo)");
        $stmt->bindParam(":desc_pedido", $desc_pedido);
        $stmt->bindParam(":fech_pedido", $fech_pedido);
        $stmt->bindParam(":clienteFK_pedido", $clienteFK_pedido);
        $stmt->execute();
    }

    public function updatePedido($id, $desc_pedido, $fech_pedido, $clienteFK_pedido)
    {
        $stmt = $this->pdo->prepare("UPDATE cargo SET nom_cargo = :nomCargo");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":desc_pedido", $desc_pedido);
        $stmt->bindParam(":fech_pedido", $fech_pedido);
        $stmt->bindParam(":clienteFK_pedido", $clienteFK_pedido);
        $stmt->execute();
    }

    public function deletePedido($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM pedido WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}