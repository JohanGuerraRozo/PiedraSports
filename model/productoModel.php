<?php
class productoModel
{
    private $pdo;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/ProyectoPiedraSports/config/db.php");
        $con = new db();
        $this->pdo = $con->conexion();
    }

    public function getproducto()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM producto ORDER BY id desc");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function setProducto($nomProducto, $precioProducto, $descrProducto)
    {
        $stmt = $this->pdo->prepare("INSERT INTO producto VALUES(null, :nomProducto, precioProducto, descrProducto )");
        $stmt->bindParam(":nom_producto", $nomProducto);
        $stmt->bindParam(":precio_producto", $precioProducto);
        $stmt->bindParam(":descr_producto", $descrProducto);
        $stmt->execute();
    }

    public function updateProducto($idProducto,$nomProducto,$precioProducto,$descrProducto)
    {
        $stmt = $this->pdo->prepare("UPDATE Producto SET nom_producto = :nomProducto, 
        precio_producto = :precioProducto, descr_producto = :descrProducto)");
        $stmt->bindParam(":id_producto", $idProducto);
        $stmt->bindParam(":nom_producto", $nomProducto);
        $stmt->bindParam(":precio_producto", $precioProducto);
        $stmt->bindParam(":descr_producto", $descrProducto);
        $stmt->execute();
    }

    public function deleteProducto($id_emple)
    {
        $stmt = $this->pdo->prepare("DELETE FROM producto WHERE id_producto :idProducto");
        $stmt->bindParam(":id_producto", $idProducto);
        $stmt->execute();
    }
}

