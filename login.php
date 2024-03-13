<?php
    include "header.php";
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
        echo "<br><br><div class='text-center'>Credenciales incorrectas. Inténtalo de nuevo.<br></div>";
        echo "<br><div class='text-center'><a href='formInicio.php' class='btn btn-primary'>Volver a intentarlo</a></div><br><br><br>";
    }

    mysqli_close($conexion);
}

include "footer.php";

?>
	
