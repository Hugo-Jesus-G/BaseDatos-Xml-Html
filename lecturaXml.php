<?php

function leerXml($file)
{
    $xml = simplexml_load_file($file);

    echo "<ul>";

    foreach ($xml->alumno as $alumno) {

        echo $xml->alumno;

        echo "<li>" . "Nombre: " . $alumno->nombre .
            " Carrera: " . $alumno->carrera . " Promedio: " .
            $alumno->promedio .
            " Edad :" . $alumno->edad . " </li>";
    }

    echo "</ul>";
}
