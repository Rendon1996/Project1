<!DOCTYPE html>
<html lang="en">

<head>
    <title>Generar un backup</title>
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

    date_default_timezone_set("America/Bogota");
    //creando las variables para crear la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "bdunad36";
    //Para utilizar Mysqldump y realizar el respaldo, se debe declarar una variable haciendo referencia a la ubicacion del archivo mysqldump.exe
    $mysqldump = '"C:\AppServ\MySQL\bin\mysqldump.exe"';
    $backup_file = '"backups\"' . $dbname . "-" . date("Y-m-d-H-i-s") . ".sql";
    system("$mysqldump --no-defaults -u $username -p$password $dbname > $backup_file");
    // echo "Backup Creado";
    ?>
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Header del Modal -->
            <div class="modal-header">
                <h4 class="modal-title">Excelente</h4>
                <!-- Retorno al index dandole a la x -->
                <button class="close" onclick="location.href='index.html'">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Su backup ha sido creado con exito.
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <!-- Retorno al index dandole al boton cerrar -->
                <button class="btn btn-danger" onclick="location.href='index.html'">Cerrar</button>
            </div>

        </div>
    </div>
</body>