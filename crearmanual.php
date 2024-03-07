<?php

//Archivo 1 en orden de creacion

	//Datos de conexión al servidor
	$servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $conexion = mysqli_connect($servidor, $usuario, $password) or die("Error de conexión");
	

     //Crear BD sino existe 
     //Primero creo la sentencia SQL
    $sql1 = "CREATE DATABASE IF NOT EXISTS productosbd";
    //Despues ejecuto la sentencia de creacion de la base de datos
    mysqli_query($conexion,$sql1);           
    //Seleccionamos la Base de Datos
	mysqli_select_db($conexion,"productosbd");

    //Creo la tabla con sus campos
    //Primero creo la sentencia SQL
    $sql2 = "CREATE TABLE IF NOT EXISTS productos (id_producto INT(11) NOT NULL , nombre VARCHAR(20) , descripcion VARCHAR(255) , precio INT(11) , fotografia BLOB , PRIMARY KEY (id_producto))";
            
    //Despues ejecuto la sentencia de creacion de la tabla
    mysqli_query($conexion,$sql2);
     
	
?>