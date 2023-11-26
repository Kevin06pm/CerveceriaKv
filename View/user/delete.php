<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Borrar Cerveza</title>
</head>
<body>

<h2>Borrar Cerveza</h2>

<form action="http://localhost/MVC2/cerveza/delete" method="post">
    <input type="hidden" name="id" value="<?= $cerveza->id?>"> <!-- Reemplaza con el ID real de la cerveza a borrar -->

</form>

</body>
</html>
