<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edicion de la Cerveza <?php echo $cerveza->id ?></h1>

    <form method="post" action="http://localhost/MVC2/cerveza/update" enctype="multipart/form-data"> <!--La ruta- se cambia-->
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?= $cerveza->nombre?>" class="form-control" required> <!--Al poner $cerveza->name, cuando cambiamos la url, se pondran los datos automaticamente -->
    </div>
    <br>
    <div class="form-group">
        <label>Tipo</label>
        <select name="text" name="tipo" value="<?= $cerveza->tipo?>" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label>graduacion alcoholica</label>
        <input type="text" name="graduacion_alcoholica" value="<?= $cerveza->graduacion_alcoholica?>" class="form-control" required>
    </div>
    <br> 
    <div class="form-group">
        <label>Pais</label>
        <input type="text" name="pais" value="<?= $cerveza->pais?>" class="form-control" required>
    </div>
    <br>
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" value="<?= $cerveza->precio?>" class="form-control" required>
    </div>
    <br>
    <div class="form-group">
        <label>Imagen Actual</label>
        <img src="../../img/<?= $cerveza->ruta_imagen ?>" alt="<?= $cerveza->nombre ?>"> <!--ruta de la imagen, en la pagina de actualizar-->
    </div>

    <div class="form-group">
        <label>Nueva Imagen (opcional)</label>
        <input type="file" name="nueva_imagen" accept=".jpg, .png" size="10MB">
    </div>

    <!--recoja datos-->
    <input type="hidden" name="id" value="<?=$cerveza->id?>">

    <button type="submit" class="btn btn-default">Enviar</button>
    </form>
</body>
</html>