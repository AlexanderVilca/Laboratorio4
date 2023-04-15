<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="card-title text-dark h4" style="text-align: center;"> Datos de Usuario </div>
                    </div>
                    <div class="card-body">
                        <form action="validacion.php" method="post">
                            <div class="form-group text-align">
                                <label class="form-label">Nombre y Apellido</label>
                                <input id= "usuario" name="nombre" type="text" class="form-control" placeholder="Nombre de Usuario" required>
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Direccion</label>
                                <input type="text" class="form-control" id="Direccion" name="direccion" placeholder="Direccion del Usuario" required>
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo del Usuario" required>
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Edad</label>
                                <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad del Usuario" required>
                            </div>
                            <button id="btnLogin" type="submit" class="btn btn-primary mt-3">Enviar</button>
                            <button type="reset" class="btn btn-light sm-2 mt-3">Limpiar</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>