<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['email'] == "") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio Usuario</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }

        h1 {
            color: #333;
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION['nombre']; ?> (Usuario)</h1>
    <h2> Debes aceptar las cookies para seguir navegando </h2>
    <a href="aceptar.php?aceptar=1"> Aceptar </a>
    <a href="cerrarSesion.php">Cerrar Sesión</a>
    <!-- <a href="home.php">Gestion de Biblioteca</a> -->
</body>
</html>

