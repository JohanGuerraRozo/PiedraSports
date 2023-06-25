<?php

class empleadoModel
{
    private $pdo;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/ProyectoPiedraSports/config/db.php");
        $con = new db();
        $this->pdo = $con->conexion();
    }

    public function getEmpleado()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM empleado ORDER BY id desc");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function setEmpleado($fech_in_empleado, $nom_empleado, $email_empleado, $movil_empleado, $drr_empleado, $cargoFk_empleado)
    {
        $stmt = $this->pdo->prepare("INSERT INTO empleado VALUES(null, :fech_in_empleado, :nom_empleado, :movil_empleado, :drr_empleado, :cargoFk_empleado)");
        $stmt->bindParam(":fech_in_cargo", $fech_in_empleado);
        $stmt->bindParam(":nom_empleado", $nom_empleado);
        $stmt->bindParam(":email_empleado", $email_empleado);
        $stmt->bindParam(":movil_empleado", $movil_empleado);
        $stmt->bindParam(":drr_empleado", $drr_empleado);
        $stmt->bindParam(":cargoFk_empleado", $cargoFk_empleado);

        $stmt->execute();
    }

    public function updateEmpleado($id, $fech_in_empleado, $nom_empleado, $email_empleado, $movil_empleado, $drr_empleado, $cargoFk_empleado)
    {
        $stmt = $this->pdo->prepare("UPDATE FROM empleado WHERE id = :id");
        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }

    public function deleteEmpleado($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM empleado WHERE id = :id");
        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }
}
