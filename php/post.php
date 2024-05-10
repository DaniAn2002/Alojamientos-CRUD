<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <form action="../../components/insert_alojamiento.php" method="POST">
            <input type="text" name="ciudad" placeholder="Ciudad">
            <input type="text" name="nombre_hospedaje" placeholder="Nombre de Hospedaje">
            <input type="text" name="tipo" placeholder="Tipo de hospedaje">
            <input type="text" name="descripcion" placeholder="Descripcion de hospedaje">
            <input type="text" name="costo" placeholder="Costo en dolares/noche">
            <input type="text" name="ubicacion" placeholder="Ubicacion">
            <input type="text" name="imagen" placeholder="Imagen">
       
            <input type="submit" value="Agregar alojamiento">
        </form>
    </div>

</body>

</html>