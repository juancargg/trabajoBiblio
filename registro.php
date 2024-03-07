<?php
require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contra = $_POST['contra'];

    // Validar que el correo no exista en la base de datos
    $sqlVerificar = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultadoVerificar = mysqli_query($conexion, $sqlVerificar);

    if ($resultadoVerificar && mysqli_num_rows($resultadoVerificar) > 0) {
        echo "Ya existe un usuario con este correo. Por favor, elige otro correo.<br>";
        echo "<a href='formRegistro.php'>Volver a intentarlo</a>";
    } else {
        // Insertar nuevo usuario en la base de datos
        $sqlInsertar = "INSERT INTO usuarios (nombre, email, contra, perfil) VALUES ('$nombre', '$email', '$contra', 'usuario')";
        $resultadoInsertar = mysqli_query($conexion, $sqlInsertar);

        if ($resultadoInsertar) {
            echo "Registro exitoso. Ahora puedes iniciar sesión.";
            echo "<a href='formInicio.php'>Hacer el login</a>";

        } else {
            echo "Error al registrar el usuario. Por favor, inténtalo de nuevo.";
           echo "<a href='formRegistro.php'>Volver a intentarlo</a>";
        }
    }
}
?>

