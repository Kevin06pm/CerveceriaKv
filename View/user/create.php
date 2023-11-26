<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nuevo usuario</title>
</head>
<body>
    <h1>Crear Nueva Cerveza</h1>

    <form method="post" action="http://localhost/MVC2/cerveza/store">
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    <br>
    <div class="form-group">
        <label>Tipo</label>
        <select name="tipo" required>
            <option value="Tostada">Tostada</option>
            <option value="Rubia">Rubia</option>
            <option value="De trigo">De trigo</option>
            <option value="Negra">Negra</option>
        </select>
    </div>
    <br>
    <div class="form-group">
        <label>Graduacion alcoholica</label>
        <input type="number" name="graduacion_alcoholica" class="form-control" required>
    </div>
    <br> 
    <div class="form-group">
        <label>Pais</label>
        <input type="text" name="pais" class="form-control" required>
    </div>
    <br>
    <div class="form-group">
        <label>Precio</label>
        <input type="number" name="precio" class="form-control" required>
    </div>
    <br>
    <div class="form-group">
        <label>Imagen</label>
        <input type="file" name="ruta_imagen" accept=".jpg, .png" size="10MB">
    </div>
    <br>
    <div class="form-group">
        <label for="archivo_desc">Adjuntar Resumen (PDF o DOCX, máximo 5 MB):</label>
        <input type="file" name="archivo_desc">
    </div>

    <button type="submit" class="btn btn-default">Enviar</button>
    </form>
</body>
</html>