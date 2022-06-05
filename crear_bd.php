<?php
//creando las variables para crear la base de datos
$servername = "localhost";
$username = "root";
$password = "12345678";
//creando la conexion 
$conexion = mysqli_connect($servername,$username,$password);
//checkeando la conexion 
if (!$conexion){
 die("conexion fallida :" . mysqli_connect_error());
}
//creando base de datos
$sql = "CREATE DATABASE bdunad36";
if (mysqli_query($conexion, $sql)){
    echo "Base de datos creada sastifactoriamente";
    } else {
        echo "Error al crear la base de datos: " . mysqli_error($conexion); 
    }
mysqli_close($conexion);
?>