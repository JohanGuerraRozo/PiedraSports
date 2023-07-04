<?php
class ventaModel
{
    private $pdo;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/PiedraSports/config/db.php");
        $con = new db();
        $this->pdo = $con->conexion();
    }

    public function getVenta()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM venta ORDER BY id_venta desc");
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

    public function updateVenta($idVenta, $precioTotal_venta, $precioUnitario_venta, $cantProduct_venta, $formaPago_venta, $fecha_venta, $pedidoFK_venta, $empleadoFK_venta)
    {
        $stmt = $this->pdo->prepare("UPDATE venta SET precio_total_venta = :precioTotal_venta, precio_unitario_venta_venta = :precioUnitario_venta,cant_producto_venta = :cantProduct_venta,
        forma_pago_venta = :formaPago_venta,fecha_venta= :fecha_venta,id_pedido_fk_venta = :pedidoFK_venta,id_empleado_fk_venta = :empleadoFK_venta WHERE id_venta = :id");
        $stmt->bindParam(":id", $idVenta);
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
        $stmt = $this->pdo->prepare("DELETE FROM venta WHERE id_venta = :id");
        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }

    public function obtenerPorId($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM venta WHERE id_venta = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetch();
    }
}
