<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
        .centrar{
            text-align: center;
        }
    </style>
    <title>Formulario Base de Datos</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <form action="guardar.php" method="post">
                <h1 class="centrar">Formulario</h1>
                <div class="form-group">
                    <label for="cedula">Usuario:</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su cédula">
                </div>
                <div class="form-group">
                    <label for="nombre">Rol:</label>
                    <input type="text" class="form-control" id="rol" name="rol" placeholder="Ingrese su nombre">
                </div>
                <div class="form-group">
                    <label for="nombre">Clave:</label>
                    <input type="text" class="form-control" id="clave" name="clave" placeholder="Ingrese su nombre">
                </div>
                <div class="form-group">
                    <label for="permisos">Permisos:</label>
                    <input type="text" class="form-control" id="permisos" name="permisos" placeholder="Ingrese su nombre">
                </div>
                <button type="submit">Enviar</button>
                
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
