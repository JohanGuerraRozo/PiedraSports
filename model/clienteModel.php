<?php
class clienteModel
{
    private $pdo;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/ProyectoPiedraSports/config/db.php");
        $con = new db();
        $this->pdo = $con->conexion();
    }

    public function getCliente()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM cliente ORDER BY id desc");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function setCliente($nomCliente, $apellCliente, $drrCliente, $emailCliente)
    {
        $stmt = $this->pdo->prepare("INSERT INTO cliente VALUES(null, :nomCliente,apellCliente,drrCliente,emailCliente)");
        $stmt->bindParam(":nom_cliente", $nomCliente);
        $stmt->bindParam(":apell_cliente", $apellCliente);
        $stmt->bindParam(":drr_cliente", $drrCliente);
        $stmt->bindParam(":email_cliente", $emailCliente);
        $stmt->execute();
    }

    public function updateCliente($idCliente,$nomCliente,$apellCliente,$drrCliente,$emailCliente)
    {
        $stmt = $this->pdo->prepare("UPDATE cliente SET nom_cliente = :nomCliente,apell_cliente, apell_cliente = :apellCliente,
        drr_cliente = :drrCliente, email_cliente = :emailCliente )");
        $stmt->bindParam(":id_cliente", $idCliente);
        $stmt->bindParam(":nom_cliente", $nomCliente);
        $stmt->bindParam(":apell_cliente", $apellCliente);
        $stmt->bindParam(":drr_cliente", $drrCliente);
        $stmt->bindParam(":email_cliente", $emailCliente);
        $stmt->execute();
    }

    public function deleteCliente($idCliente)
    {
        $stmt = $this->pdo->prepare("DELETE FROM cliente WHERE id_cliente :idCliente");
        $stmt->bindParam(":id_cliente", $idCliente);
        $stmt->execute();
    }
}

