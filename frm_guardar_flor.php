<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./guardar_flor.php" method="post">
        <h2>Registrar Flor</h2>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label for="color">Color:</label>
            <input type="text" name="color" id="color">
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio">
        </div>
        <div>
            <label for="variedad">Variedad:</label>
            <select name="variedad" id="variedad">
                <option value="interior">Para Interior</option>
                <option value="exterior">Para Exterior</option>
            </select>
        </div>
        <div>
            <label for="procedencia">Procedencia:</label>
            <select name="procedencia" id="procedencia">
                <option value="nacional">Nacional</option>
                <option value="extranjera">Extranjera</option>
            </select>
        </div>
        <div>
            <label for="fecha_compra">Fecha primera compra:</label>
            <input type="date" name="fecha_compra" id="fecha_compra">
        </div>
        <div>
            <label for="descuento">Descuento:</label>
            <input type="number" name="descuento" id="descuento">
        </div>
        <button type="submit">GUARDAR</button>
    </form>
</body>
</html>