<?php
class ventaModel
{
    private $pdo;

    public function __construct()
    {
        require_once "C:/xampp/htdocs/ProyectoPiedraSports/config/db.php";
        $con = new db();
        $this->$pdo = $con->conexion();
    }

    public function getVenta()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM venta ORDER BY id desc");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function setVenta($precioTotal_venta, $precioUnitario_venta, $cantProduct_venta, $formaPago_venta, $fecha_venta, $pedidoFK_venta, $empleadoFK_venta)
    {
        $stmt = $this->pdo->prepare("INSERT INTO venta VALUES(null, :precioTotal_venta, :precioUnitario_venta, :cantProduct_venta, :formaPago_venta, :fecha_venta, :pedidoFK_venta, :empleadoFK_venta)");
        $stmt->bindParam(":precioTotal_venta", $precioTotal_venta);
        $stmt->bindParam(":precioUnitario_venta", $precioUnitario_venta);
        $stmt->bindParam(":cantProduct_venta", $cantProduct_venta);
        $stmt->bindParam(":formaPago_venta", $formaPago_venta);
        $stmt->bindParam(":fecha_venta", $fecha_venta);
        $stmt->bindParam(":pedidoFK_venta", $pedidoFK_venta);
        $stmt->bindParam(":empleadoFK_venta", $empleadoFK_venta);

        $stmt->execute();
    }

    public function updateVenta($id, $precioTotal_venta, $precioUnitario_venta, $cantProduct_venta, $formaPago_venta, $fecha_venta, $pedidoFK_venta, $empleadoFK_venta)
    {
        $stmt = $this->pdo->prepare("UPDATE FROM venta WHERE id = :id");
        $stmt->bindParam(":precioTotal_venta", $precioTotal_venta);
        $stmt->bindParam(":precioUnitario_venta", $precioUnitario_venta);
        $stmt->bindParam(":cantProduct_venta", $cantProduct_venta);
        $stmt->bindParam(":formaPago_venta", $formaPago_venta);
        $stmt->bindParam(":fecha_venta", $fecha_venta);
        $stmt->bindParam(":pedidoFK_venta", $pedidoFK_venta);
        $stmt->bindParam(":empleadoFK_venta", $empleadoFK_venta);

        $stmt->execute();
    }

    public function deleteVenta($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM venta WHERE id = :id");
        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }
}