<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      
        body {
            background-color: #292b2c; 
            color: #ffffff; 
        }

        .navbar-light .navbar-nav .nav-link {
            color: black; 
        }

        .navbar-light .navbar-toggler-icon {
            background-color: #ffffff; 
        }

        .card {
            background-color: #4a148c; 
            border: 1px solid #4a148c; 
            color: #ffffff; 
            margin-bottom: 20px;
        }

        .card-img-top {
            height: 200px; 
            object-fit: cover; 
        }

        .card-body {
            text-align: center; 
        }
    </style>
    <title>Cervecera</title>
</head>




<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Cervecería NefeliKV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/MVC2">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/MVC2/cerveza/create">Crear Cerveza</a>
                </li>
            </ul>
        </div>
    
    </nav>

    <div class="container mt-4">
        <h1 class="text-center">Bienvenido a la Cervecería Artesanal NefeliKV</h1>
        <p class="text-center">Descubre nuestra selección de cervezas artesanales.</p>

        <div class="row">
            <?php foreach ($cervezas as $cerveza) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/<?= $cerveza->ruta_imagen ?>" class="card-img-top" alt="<?= $cerveza->nombre ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $cerveza->nombre ?></h5>
                            <a href="show/<?= $cerveza->id ?>" class="btn btn-light">Ver Detalles</a>
                            <a href="edit/<?= $cerveza->id ?>" class="btn btn-light">Actualizar</a>
                            <a href="delete/<?= $cerveza->id ?>" onclick="return confirm('¿Esta seguro de borrar esta Cerveza?')" class="btn btn-light">Borrar</a>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
