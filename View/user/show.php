<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la Cerveza</title>
</head>
<body>

<h1>Detalle de la Cerveza <?php echo $cerveza->id ?></h1> <!--Metodo find(encontrar id)-->
<ul>
    <li><strong>Nombre: </strong><?php echo $cerveza->nombre ?></li>
    <li><strong>Tipo: </strong><?php echo $cerveza->tipo ?></li>
    <li><strong>graduacion alcoholica: </strong><?php echo $cerveza->graduacion_alcoholica ?></li>
    <li><strong>Pais: </strong><?php echo $cerveza->pais ?></li>
    <li><strong>Precio: </strong><?php echo $cerveza->precio ?></li>

</ul>

<img src="../../img/<?= $cerveza->ruta_imagen ?>" alt="<?= $cerveza->nombre ?>">

    
</body>
</html>

