

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
require_once 'conexion.php';
if(isset($_GET['id'])){

$id=$_GET['id'];

$id = $_GET['id'];
$query = "SELECT * FROM productos WHERE id_producto = $id";
$resultado = $conexion->query($query);
$row = $resultado->fetch_assoc();
$nombre = $row['nombre'];
$precio = $row['precio'];
$stock = $row['stock'];
}
?>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form action="controlador.php" method="POST" class="p-4 border rounded shadow-sm bg-light">
                <h4 class="mb-4 text-center">Actualizar Producto</h4>
                
                <!-- Campo oculto para el ID -->
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <!-- Campo Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" required>
                </div>

                <!-- Campo Precio -->
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="text" name="precio" value="<?php echo $precio; ?>" class="form-control" required>
                </div>

                <!-- Campo Stock -->
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock:</label>
                    <input type="text" name="stock" value="<?php echo $stock; ?>" class="form-control" required>
                </div>

                <!-- Botón de Enviar -->
                <button type="submit" name="actualizar" class="btn btn-primary w-100">Actualizar Producto</button>
                
                <a href="listarProductos.php" class="btn btn-danger w-100 my-3">Cancelar</a>
            </form>
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>