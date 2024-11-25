<?php

function leerXml($file)
{
    $xml = simplexml_load_file($file);

    if ($xml === false) {
        echo "Error al cargar el archivo XML.";
        return;
    }

    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>
            <th scope='col'>ID</th>
            <th scope='col'>Nombre</th>
            <th scope='col'>Precio</th>
            <th scope='col'>Stock</th>
          </tr>";
    echo "</thead>";
    echo "<tbody class='table-group-divider'>";

    foreach ($xml->Productos->Producto as $producto) {
        echo "<tr>";
        echo "<td>" . $producto->ID . "</td>";
        echo "<td>" . $producto->Nombre . "</td>";
        echo "<td>" . $producto->Precio . "</td>";
        echo "<td>" . $producto->Stock . "</td>";
        echo "<td><a href='controlador.php?id=" . $producto->ID . "' class='btn btn-danger'>Eliminar</a></td>";
        echo "<td><a href='actualizar.php?id={$producto->ID}'class='btn btn-primary'>Actualizar</a></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}
