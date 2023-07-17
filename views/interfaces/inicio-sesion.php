<?php
session_start();

// Verificar si se recibieron los datos del formulario de inicio de sesión
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conectar a la base de datos (reemplaza los valores con los de tu propia base de datos)
    $conexion = mysqli_connect('localhost', 'root', '', 'piedrasportsdb');
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    // Verificar las credenciales del usuario en la base de datos
    $query = "SELECT * FROM CLIENTE WHERE EMAIL_CLIENTE='$email' AND CONTRA_CLIENTE='$password'";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $rol = $row['ID_ROL_FK_CLIENTE'];

        // Almacenar el rol en la sesión
        $_SESSION['ID_ROL_FK_CLIENTE'] = $rol;

        // Redirigir según el rol del usuario
        if ($rol == '1') {
            header("Location: dashboard.html");
            exit();
        }
        elseif ($rol == '2') {
            header("Location: index.html");
            exit(); 
        }
         else {
            echo "Rol no válido";
        }
    }   

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>