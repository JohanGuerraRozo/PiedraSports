<?php
class compraModel
{
    private $pdo;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/PiedraSports/config/db.php");
        $con = new db();
        $this->pdo = $con->conexion();
    }

    public function getCompra()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM compra ORDER BY id_compra asc");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function setCompra($precioCompra, $fechaCompra, $formaPagoCompra, $idProveedor_Compra)
    {
        $stmt = $this->pdo->prepare("INSERT INTO compra VALUES(null, :precioCompra, :fechaCompra, :formaPagoCompra, :idProveedor_Compra)");
        $stmt->bindParam(":precioCompra", $precioCompra);
        $stmt->bindParam(":fechaCompra", $fechaCompra);
        $stmt->bindParam(":formaPagoCompra", $formaPagoCompra);
        $stmt->bindParam(":idProveedor_Compra", $idProveedor_Compra);
        $stmt->execute();
    }

    public function updateCompra($idCompra, $precioCompra, $fechaCompra, $formaPagoCompra, $idProveedor_Compra)
    {
        $stmt = $this->pdo->prepare("UPDATE compra SET precio_compra = :precioCompra, fecha_compra = :fechaCompra, forma_pago_compra = :formaPagoCompra, id_proveedor_fk_compra = :idProveedor_Compra WHERE id_compra = :idCompra");
        $stmt->bindParam(':idCompra', $idCompra);
        $stmt->bindParam(":precioCompra", $precioCompra);
        $stmt->bindParam(":fechaCompra", $fechaCompra);
        $stmt->bindParam(":formaPagoCompra", $formaPagoCompra);
        $stmt->bindParam(":idProveedor_Compra", $idProveedor_Compra);
        $stmt->execute();
    }

    public function deleteCompra($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM compra where id_compra = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function obtenerPorId($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM compra where id_compra = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetch();
    }
}
