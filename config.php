<?php
//creando las variables para crear la base de datos
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad36";
//creando la conexion 
$conexion = mysqli_connect($servername,$username,$password,$dbname);
//checkeando la conexion 
if (!$conexion){
 die("conexion fallida :" . mysqli_connect_error());
}
