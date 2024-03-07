<?php
    require_once 'conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contra = $_POST['contra'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND contra = '$contra'";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        session_start();
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['email'] = $usuario['email'];

        // Redirecciona solo después de asegurarte de que no haya salida antes de header
        if ($usuario['perfil'] == 'usuario') {
            header("Location: inicioUsuario.php");
            exit();
        } elseif ($usuario['perfil'] == 'admin') {
            header("Location: inicioAdmin.php");
            exit();
        }
    } else {
        echo "Credenciales incorrectas. Inténtalo de nuevo.<br>";
        echo "<a href='formInicio.php'>Volver a intentarlo</a>";
    }

    mysqli_close($conexion);
}

?>
