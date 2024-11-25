<?php

function crearXml($conexion)
{
    $query = "SELECT * FROM productos";
    $consulta = $conexion->query($query);

    $docXml = new DOMDocument("1.0", "UTF-8");

    $docXml->formatOutput = true;

    $inventario = $docXml->createElement("Inventario");
    $docXml->appendChild($inventario);

    $productos = $docXml->createElement("Productos");
    $inventario->appendChild($productos);

    if ($consulta->num_rows > 0) {
        while ($row = $consulta->fetch_assoc()) {
            $producto = $docXml->createElement("Producto");

            $id = $docXml->createElement("ID", $row["id_producto"]);
            $producto->appendChild($id);

            $nombre = $docXml->createElement("Nombre", $row["nombre"]);
            $producto->appendChild($nombre);

            $precio = $docXml->createElement("Precio", $row["precio"]);
            $producto->appendChild($precio);

            $stock = $docXml->createElement("Stock", $row["stock"]);
            $producto->appendChild($stock);

            $productos->appendChild($producto);
        }


        $xmlFilePath = 'productos.xml';
        $docXml->save($xmlFilePath);
    } else {


        $xmlFilePath = 'productos.xml';
        $docXml->save($xmlFilePath);
    }
}
