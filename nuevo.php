<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
</head>
<body>

    <div id="formulario" style="display:none;">
        <form action="controlador.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br><br>
            
            <label for="precio">Precio:</label>
            <input type="text" name="precio" required><br><br>
            
            <label for="stock">Stock:</label>
            <input type="number" name="stock" step="1" required><br><br>
            
            

            <input type="submit" value="Ingresar Producto" name="nuevo">
        </form>
    </div>
    
</body>
</html>