<?php
//creando las variables para crear la base de datos
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad36";
//creando la conexion 
$conexion = mysqli_connect($servername, $username, $password, $dbname);
//checkeando la conexion 
if (!$conexion) {
 die("conexion fallida :" . mysqli_connect_error());
}
//creando la tabla productos
$sql = "CREATE TABLE tabla36 (
 codigo INT(30) PRIMARY KEY,    
 nombre VARCHAR(30) NOT NULL,
 marca VARCHAR(30) NOT NULL,
 precio VARCHAR(30) NOT NULL,
 cantidad VARCHAR(30) NOT NULL
)";
if (mysqli_query($conexion, $sql)){
    echo "Tabla creada sastifactoriamente";
    } else {
        echo "Error al crear la tabla: " . mysqli_error($conexion); 
    }
mysqli_close($conexion);
?> 