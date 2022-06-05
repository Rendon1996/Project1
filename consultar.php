<?php
require('config.php');
$id = $_POST['cod'];
$sql = "SELECT codigo, nombre, marca, precio, cantidad FROM tabla36 WHERE codigo=$id";
$result = mysqli_query($conexion, $sql);
// validamos que los resultados sean mas que 0
if (mysqli_num_rows($result) > 0) {
//    Mostramos los datos que sean igual al id seleccionado mediante esta estructura while
    while($row = mysqli_fetch_assoc($result)) {
        echo "codigo: " . $row["codigo"]. " - Nombre del producto: " . $row["nombre"]. " Marca: ". $row["marca"]." Precio del Articulo: " . $row["precio"] . " Cantidad disponible " . $row["cantidad"] ;

// mostramos todo mediante un JSON
        $myJSON = json_encode($row);
        echo $myJSON;

    }
} else {
    echo "El producto que esta consultando no existe";
}

mysqli_close($conexion);
?>
