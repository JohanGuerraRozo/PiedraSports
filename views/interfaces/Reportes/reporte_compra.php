<!DOCTYPE html>
<html>
<head>
    <style>
        div{
            margin: 150px auto;
            width: 600px;
        }
        table {
            background-color: #ffffff;
            text-align: left;
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
        thead {
            background-color: #143d59;
            border-bottom: solid 5px #121e4a;
            color: #ffffff;
        }
        
        tr:nth-child(even) {
            background-color: #dddddd;
        }

        tr:over td{
            background-color: #12394a;
            color: #ffffff;
        }
    </style>
</head>
<body>
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
            echo "<div>
                    <table>
                        <thead>
                            <tr>
                                <th>Precio</th>
                                <th>Fecha</th>
                                <th>Forma de Pago</th>
                            </tr>
                        </thead>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["PRECIO_COMPRA"] . "</td>
                        <td>" . $row["FECHA_COMPRA"] . "</td>
                        <td>" . $row["FORMA_PAGO_COMPRA"] . "</td>
                    </tr>";
            }
            echo "</table> </div>";
        } else {
            echo "No se encontraron resultados.";
        }

        $conn->close();
    ?>
</body>
</html>
