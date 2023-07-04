<?php

function obtenerDatosDelReporte()
{
    $conexion = mysqli_connect('localhost', 'root','230873', 'piedrasportsdb');

    $query = "SELECT precio,fecha,formadepago,idproveedor FROM compra";
    $result = mysqli_query($conexion, $query);

    $datos = array();

    while ($row = mysqli_fetch_assoc($result)){
        $datos[] = $row; 
    }

    mysqli_close($conexion);

    return $datos;
}