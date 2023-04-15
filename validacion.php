<?php

$usuario = $_POST['nombre'];
$Direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-title text-dark h4" style="text-align: center;" >Bienvenido</div>
                </div>
                <div class="card-body" style="text-align:center">
                <?php
                    echo "<h4> ¡Hola " .$usuario. "! </h4>";
                    echo "<h4> Tu direccion es: ".$Direccion. "</h4>";
                    echo "<h4> Tienes: " .$edad. " y tu correo electronico es: " .$correo. "</h4>";
                ?>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>