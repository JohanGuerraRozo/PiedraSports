<?php
class productoController
{
    private $model;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/ProyectoPiedraSports/model/productoModel.php");
        $this->model = new productoModel();
    }

    public function getProducto()
    {
        $productos = $this->model->getProducto();

        if ($productos) {
            foreach ($productos as $producto) {
                // Procesar y mostrar los datos de cada producto
                echo 'ID: ' . $producto['id'] . '<br>';
                echo 'Nombre: ' . $producto['nomProducto'] . '<br>';
                echo 'Precio: ' . $producto['precioProducto'] . '<br>';
                echo 'Descripción: ' . $producto['descrProducto'] . '<br>';
                echo '-------------------------------------<br>';
            }
        } else {
            echo 'No se encontraron productos.';
        }
    }

    public function setProducto($nomProducto, $precioProducto, $descrProducto)
    {
        if ($nomProducto == null || $precioProducto == null || $descrProducto == null) {
            echo '
            <script>alert("Completa todos los campos para registrar el producto");
            window.location = "../views/interfaces/index.html";
            </script>
            ';
            exit;
        } else {
            $this->model->setProducto($nomProducto, $precioProducto, $descrProducto);
            echo '<p>Hola</p>';
        }
    }

    public function actualizarProducto($idProducto, $nomProducto, $precioProducto, $descrProducto)
    {
        if ($idProducto == null || $nomProducto == null || $precioProducto == null || $descrProducto == null) {
            echo '
            <script>alert("Completa todos los campos para actualizar el producto");
            window.location = "../views/interfaces/index.html";
            </script>
            ';
            exit;
        } else {
            $this->model->updateProducto($idProducto, $nomProducto, $precioProducto, $descrProducto);
            echo 'Producto actualizado exitosamente.';
        }
    }

    public function eliminarProducto($idProducto)
    {
        if ($idProducto == null) {
            echo '
            <script>alert("Proporciona el ID del producto para eliminarlo");
            window.location = "../views/interfaces/index.html";
            </script>
            ';
            exit;
        } else {
            $this->model->deleteProducto($idProducto);
            echo 'Producto eliminado exitosamente.';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productoController = new productoController();
    if ($_GET['action'] == 'crear') {
        $nomProducto = $_POST['nom-producto'];
        $precioProducto = $_POST['precio-producto'];
        $descrProducto = $_POST['descr-producto'];

        $productoController->setProducto($nomProducto, $precioProducto, $descrProducto);
        exit;
    } elseif ($_GET['action'] == 'leer') {
        $productoController->getProducto();
        exit;
    } elseif ($_GET['action'] == 'actualizar') {
        $idProducto = $_POST['id-producto'];
        $nomProducto = $_POST['nom-producto'];
        $precioProducto = $_POST['precio-producto'];
        $descrProducto = $_POST['descr-producto'];

        $productoController->actualizarProducto($idProducto, $nomProducto, $precioProducto, $descrProducto);
        exit;
    } elseif ($_GET['action'] == 'eliminar') {
        $idProducto = $_POST['id-producto'];
        $productoController->eliminarProducto($idProducto);
        exit;
    }
}
