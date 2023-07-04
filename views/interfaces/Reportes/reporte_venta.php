<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PiedraSportsDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT CANT_PRODUCTO_VENTA, FECHA_VENTA, PRECIO_TOTAL_VENTA FROM VENTA";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Cantidad de Producto</th>
                <th>Fecha</th>
                <th>Precio Total</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["CANT_PRODUCTO_VENTA"] . "</td>
                <td>" . $row["FECHA_VENTA"] . "</td>
                <td>" . $row["PRECIO_TOTAL_VENTA"] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>
