<?php
    include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trabajo Final PHP</title>      
</head>

<body>
    <div class="text-center pt-2 pb-5 mb-5">
    <h2 class="mt-3" >Datos sobre cookies</h2>
    <img src="imagenes/cookies.png" alt="">
    <?php
    if(!isset($_COOKIE['micookie'])){
        $caducidad= time() + (60*60*24*365);
        setcookie('micookie', 1, $caducidad);
        echo "La cookie se ha creado con exito";
        
    } 
    else {
        echo  "La cookie ya existe." ;
        
    }        
        ?>
    
    </br></br>
    <!-- <a href="home.php"><i class="bi-arrow-return-left px-3" style="font-size:4rem; color:black;"></i></a> -->
    <a href="cerrarSesion.php"><input type="button" class="btn btn-primary" value="Cerrar sesion"/></a>&nbsp;&nbsp;
    <a href="home.php"><input type="button" class="btn btn-primary" value="Ir a Biblioteca"/></a>

</div>
</body>
</html>

<?php
    include "footer.php";
?>