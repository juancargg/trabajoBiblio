<?php 
//Archivo 14 en orden de creacion
//Reutilizacion de registrar.php con modificaciones

include "conexion.php" ?>

<?php
    $idm=$_GET["idmodifica"];
    $nombreatiguo=$_GET["nombreimagen"];

//var_dump($_POST);

//almacena lo que hay en el array asociativo
$identificador = $_POST["identificador"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];

//Mostrará nombre,tipo,ubicación, errores, tamaño; ddel archivo
//var_dump($_FILES['imagen'])


//Guardo datos en variables
$directorioSubida = "imagenes/";
$max_file_size = "5120000";
$extensionesValidas = array("jpg", "png", "gif");

//Realizo las comprobaciones

if (($_FILES['imagen']['name']!="")) {
    $errores = 0;
    $nombreArchivo = $_FILES['imagen']['name'];
    $filesize = $_FILES['imagen']['size'];
    $directorioTemp = $_FILES['imagen']['tmp_name'];
    $arrayArchivo = pathinfo($nombreArchivo);
    //var_dump($arrayArchivo);
    $extension = $arrayArchivo['extension'];

    if (!in_array($extension, $extensionesValidas)) {
        echo "La extensión no es válida";
        $errores = 1;
    }

    if ($filesize > $max_file_size) {
        echo "La imagen debe tener un tamaño inferior.";
        $errores = 1;
    }

    if ($errores == 0) {
        $nombreCompleto = $directorioSubida . $nombreArchivo;
        move_uploaded_file($directorioTemp, $nombreCompleto);
    }
}
//Tras realizar comprobaciones, ejecuto actualizacion
//Si el campo no esta vacio y el usuario ha subido una imagen
if ($_FILES['imagen']['name'] != "") {
    $insertar = "UPDATE productos SET id_producto =$identificador, nombre='$nombre', descripcion='$descripcion', precio=$precio, fotografia='$nombreArchivo' WHERE id_producto='$idm'";
    
}
//Si el usuario ha dejado la imagen antigua y no ha subido nada
else{
    $insertar = "UPDATE productos SET id_producto =$identificador, nombre='$nombre', descripcion='$descripcion', precio='$precio', fotografia='$nombreantiguo' WHERE id_producto='$idm'";


}


mysqli_query($conexion, $insertar);
header("Location:actualiza_ok.php");
?>