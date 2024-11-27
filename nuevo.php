<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
</head>
<body>

<div id="formulario" style="display:none;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-3">
                <form action="controlador.php" method="POST" class="p-3 border rounded shadow-sm bg-light">
                    <h5 class="mb-3 text-center">Ingresar Producto</h5>

                    <!-- Campo Nombre -->
                    <div class="mb-2">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" class="form-control form-control-sm" required placeholder="Nombre del producto">
                    </div>

                    <!-- Campo Precio -->
                    <div class="mb-2">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="text" name="precio" class="form-control form-control-sm" required placeholder="Precio del producto">
                    </div>

                    <!-- Campo Stock -->
                    <div class="mb-2">
                        <label for="stock" class="form-label">Stock:</label>
                        <input type="number" name="stock" class="form-control form-control-sm" required step="1" placeholder="Cantidad de stock">
                    </div>

                    <!-- Botón de Enviar -->
                    <button type="submit" class="btn btn-success btn-sm" name="nuevo">Ingresar Producto</button>
                </form>
            </div>
        </div>
    </div>
</div>

    
</body>
</html>