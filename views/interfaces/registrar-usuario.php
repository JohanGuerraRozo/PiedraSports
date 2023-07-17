<?php
// Verificar si se recibieron los datos del formulario de registro
if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['direccion'])  && isset($_POST['email']) && isset($_POST['pass'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol= 2;

    // Conectar a la base de datos (reemplaza los valores con los de tu propia base de datos)
    $con = mysqli_connect('localhost', 'root', '', 'piedrasportsdb');
    if (!$con) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    // Verificar si el usuario ya existe en la base de datos
    $query = "SELECT * FROM CLIENTE WHERE email='$email'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "El usuario ya está registrado";
    } else {
        // Insertar el nuevo usuario en la base de datos
        $query = "INSERT INTO cliente('nom_cliente', 'apell_cliente', 'drr_cliente', 'email_cliente', 'contra_usuario' id_rol_fk_cliente) VALUES ('$nombre', '$apellido', '$direccion', '$email', '$password', '$rol')";
        if (mysqli_query($con, $query)) {
            echo "Registro exitoso. Ahora puedes <a href='login.html  '>iniciar sesión</a>.";
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($con);
        }
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($con);
}
?>