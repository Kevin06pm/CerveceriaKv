<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Cervecería XYZ</title>
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
                    <a class="navbar-brand" href="http://localhost/MVC2/cerveza/">CRUD</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Bienvenido a la Cervecería NefeliKV</h1>
        <p>Descubre nuestra coleccion de cervezas artesanales.</p>

        <div class="row">
            <?php foreach ($cervezas as $cerveza) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/<?= $cerveza->ruta_imagen ?>" class="card-img-top" alt="<?= $cerveza->nombre ?>">

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
