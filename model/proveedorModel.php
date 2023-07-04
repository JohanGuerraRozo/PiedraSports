<?php
class proveedorModel
{
    private $pdo;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/PiedraSports/config/db.php");
        $con = new db();
        $this->pdo = $con->conexion();
    }

    public function getProveedor()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM proveedor ORDER BY id_proveedor asc");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function setProveedor($nomProveedor, $emailProveedor, $movilProveedor)
    {
        $stmt = $this->pdo->prepare("INSERT INTO proveedor VALUES(null, :nomProveedor,emailProveedor,movilProveedor)");
        $stmt->bindParam(":nomProveedor", $nomProveedor);
        $stmt->bindParam(":emailProveedor", $emailProveedor);
        $stmt->bindParam(":movilProveedor", $movilProveedor);
        $stmt->execute();
    }

    public function updateProveedor($idProveedor, $nomProveedor, $emailProveedor, $movilProveedor)
    {

        $stmt = $this->pdo->prepare("UPDATE proveedor SET nom_proveedor = :nomProveedor, email_proveedor = :emailProveedor, movil_proveedor = :movilProveedor WHERE id_proveedor = :id");
        $stmt->bindParam("id", $idProveedor);
        $stmt->bindParam(":nomProveedor", $nomProveedor);
        $stmt->bindParam(":emailProveedor", $emailProveedor);
        $stmt->bindParam(":movilProveedor", $movilProveedor);
        $stmt->execute();
    }

    public function deleteProveedor($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM proveedor WHERE id_proveedor = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function obtenerPorId($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM proveedor WHERE id_proveedor = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetch();
    }
}
