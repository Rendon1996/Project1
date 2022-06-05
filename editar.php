<!DOCTYPE html>
<html lang="en">

<head>
    <title>Editar un producto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- llamado a bootstrap para las ventanas modales. -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Inicio del script php     -->
    <?php
    // llamamos al archivo config.php
    require('config.php');
    // creamos las variables donde mediante el metodo post guardaremos los datos capturados por los imputs del formularios
    $i = $_POST['cod'];
    $n = $_POST['nombre'];
    $m = $_POST['marca'];
    $p = $_POST['precio'];
    $c = $_POST['cantidad'];

    $sql = "UPDATE tabla36 SET nombre='$n' , marca='$m' , precio='$p', cantidad='$c'  WHERE codigo='$i'";

    if (mysqli_query($conexion, $sql)) {

    ?>

        <!-- Creamos la ventana Modal -->
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Header del Modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Excelente</h4>
                    <!-- Retorno al formulario de editar elementos del inventario dandole a la x -->
                    <button class="close" onclick="location.href='inventario_actualizar.html'">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Los datos del producto han sido editados sastifactioriamente.
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <!-- Retorno al formulario de editar elementos del inventario dandole al boton cerrar -->
                    <button class="btn btn-danger" onclick="location.href='inventario_actualizar.html'">Cerrar</button>
                </div>

            </div>
        </div>
    <?php
    } else {



    ?>

        <!-- Creamos la ventana Modal -->

        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Error</h4>
                    <!-- Retorno al formulario de Editar elementos del inventario dandole a la x -->
                    <button class="close" onclick="location.href='inventario_actualizar.html'">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Los datos no fueron editados.

                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <!-- Retorno al formulario de editar elementos del inventario dandole al boton cerrar -->
                    <button class="btn btn-danger" onclick="location.href='inventario_actualizar.html'">Cerrar</button>
                </div>

            </div>
        </div>
    <?php

        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        //  echo '<script language="javascript">alert("Datos grabados satisfactoriamente'.$i.'");window.location.href="form_insertar.html"</script>';

    }

    mysqli_close($conexion);

    ?>
</body>