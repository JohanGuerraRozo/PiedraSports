<?php
class rolModel
{
    private $pdo;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/PiedraSports/config/db.php");
        $con = new db();
        $this->pdo = $con->conexion();
    }

    public function getRol()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM rol ORDER BY id_rol asc");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function setRol($nomRol)
    {
        $stmt = $this->pdo->prepare("INSERT INTO rol VALUES(null, :nomRol)");
        $stmt->bindParam(":nomRol", $nomRol);
        $stmt->execute();
    }

    public function updateRol($idRol, $nomRol)
    {

        $stmt = $this->pdo->prepare("UPDATE rol SET nom_rol = :nomRol WHERE id_rol = :id");
        $stmt->bindParam(":id", $idRol);
        $stmt->bindParam(":nomRol", $nomRol);
        $stmt->execute();
    }

    public function deleteRol($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM rol WHERE ID_ROL = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
    public function obtenerPorId($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM rol WHERE id_rol = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetch();
    }
}
