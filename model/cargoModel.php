<?php
class cargoModel
{
    private $pdo;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/ProyectoPiedraSports/config/db.php");
        $con = new db();
        $this->pdo = $con->conexion();
    }

    public function getCargo()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM cargo ORDER BY id desc");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function setCargo($nomCargo)
    {
        $stmt = $this->pdo->prepare("INSERT INTO cargo VALUES(null, :nomCargo)");
        $stmt->bindParam(":nom_cargo", $nomCargo);
        $stmt->execute();
    }

    public function updateCargo($id, $nomCargo)
    {
        $stmt = $this->pdo->prepare("UPDATE cargo SET nom_cargo = :nomCargo");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nom_cargo", $nomCargo);
        $stmt->execute();
    }

    public function deleteCargo($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM inmuebles WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}
