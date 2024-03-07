<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }

        fieldset {
            border: 2px solid #3498db;
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            margin: auto;
            background-color: #fff;
        }

        legend {
            font-size: 1.2em;
            color: #333;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }

        p {
            margin-top: 20px;
            color: #333;
        }

        a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Registro</legend>
        <form action="registro.php" method="post">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <br>

        <label for="email">Email</label><br>
        <input type="text" name="email" id="email"><br>
        <br>

        <label for="contra">Contraseña</label><br>
        <input type="password" name="contra" id="contra"><br>

        <button type="submit" name="registrarse" id="registrarse">Regístrate</button>
        <br>
        <br><br>
        <a href="formInicio.php">Volver al Login</a>
        <br>
        <br>
        <a href="index.php">Volver al inicio</a>
    </fieldset>

</body>
</html>