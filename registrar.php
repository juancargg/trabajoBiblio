<?php 
//Archivo 7 en orden de creacion
include "conexion.php" 
?>

<?php
mysqli_select_db($conexion, "productosbd");

//var_dump($_POST);

//almacena lo que hay en el array asociativo correspondiente al formulario
$identificador = $_POST["identificador"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];

//Mostrará nombre,tipo,ubicación, errores, tamaño del archivo tipo fichero
//var_dump($_FILES['imagen'])

//Restricciones para que el usuario no pueda subir cualquier fichero
$directorioSubida = "imagenes/";
$max_file_size = "5120000";
$extensionesValidas = array("jpg", "png", "gif");

if (isset($_FILES['imagen'])) {
    $errores = 0;
    $nombreArchivo = $_FILES['imagen']['name'];
    $filesize = $_FILES['imagen']['size'];
    $directorioTemp = $_FILES['imagen']['tmp_name'];
    $arrayArchivo = pathinfo($nombreArchivo);
    //var_dump($arrayArchivo);
    $extension = $arrayArchivo['extension'];

    //Comprobaciones
    if (!in_array($extension, $extensionesValidas)) {
        echo "La extensión no es válida";
        $errores = 1;
    }

    if ($filesize > $max_file_size) {
        echo "La imagen debe tener un tamaño inferior.";
        $errores = 1;
    }

    //Si no hay errores, subo la imagen al servidor
    if ($errores == 0) {
        $nombreCompleto = $directorioSubida . $nombreArchivo;
        move_uploaded_file($directorioTemp, $nombreCompleto);
    }
}

//Insertamos el resto de datos
$insertar = "INSERT productos (id_producto,nombre,descripcion,precio,fotografia) VALUES ($identificador,'$nombre','$descripcion',$precio,'$nombreArchivo')";
//Ejecutamos la insercion
mysqli_query($conexion, $insertar);
//Para redirigir a otra pagina cuando inserte todos los datos
header("Location:alta_ok.php");
?>