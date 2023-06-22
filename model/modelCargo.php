<?php
class modelCargo
{
    private $pdo;

    public function __construct()
    {
        require_once('C:\xampp\htdocs\ProyectoPiedraSports\config\db.php');
        $con = new db();
        $this->pdo = $con->conexion();
    }

    public function getCargo()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM cargo");
        $stmt->execute();

        return $stmt->fethcALL();
    }

    public function guardar($nomCargo)
    {
        $stmt = $this->pdo->prepare("INSERT INTO cargo VALUES(null, :nom_cargo)");
        $stmt->bindParam(":nom_cargo", $nomCargo);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function actualizar($id, $nomCargo)
    {
        $stmt = $this->pdo->prepare("DELETE FROM cargo WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":id", $nomCargo);
        $stmt->execute();
    }
}