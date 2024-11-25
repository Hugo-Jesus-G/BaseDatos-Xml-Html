<?php 
require_once 'conexion.php';

if (isset($_POST['nuevo'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $query = "INSERT INTO productos (nombre, precio, stock) 
              VALUES ('$nombre', '$precio', '$stock')"; 
    
    if ($conexion->query($query) ) {

        header("Location: listarProductos.php");

    } else {
        echo "<script>alert('Ocurrio un Error al crear el Producto');</script>";
    }
}


if (isset($_GET['id']) ) {

    
    $id = $_GET['id'];

    $query = "DELETE FROM productos WHERE id_producto = $id";

    if ($conexion->query($query)) {
        header("Location: listarProductos.php");
    } else {
        echo "<script>alert('Ocurrio un Error al eliminar el Producto');</script>";
    }
}
if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $query = "UPDATE productos SET nombre = '$nombre', precio = '$precio', stock = '$stock' WHERE id_producto = $id";

    if ($conexion->query($query)) {
        header("Location: listarProductos.php");
    } else {
        echo "<script>alert('Ocurrio un Error al actualizar el Producto');</script>";
    }
   







}