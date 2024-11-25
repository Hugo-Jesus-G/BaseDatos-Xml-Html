

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



<form action="controlador.php" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="text" name="nombre" value="<?php echo $nombre; ?>">
<input type="text" name="precio" value="<?php echo $precio; ?>">
<input type="text" name="stock" value="<?php echo $stock; ?>">
<input type="submit" name="actualizar" value="Actualizar">


</form>



</body>
</html>