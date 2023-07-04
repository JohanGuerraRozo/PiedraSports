<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PiedraSportsDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT PRECIO_COMPRA, FECHA_COMPRA, FORMA_PAGO_COMPRA FROM COMPRA";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Forma de Pago</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["PRECIO_COMPRA"] . "</td>
                <td>" . $row["FECHA_COMPRA"] . "</td>
                <td>" . $row["FORMA_PAGO_COMPRA"] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>