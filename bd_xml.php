<?php


include 'conexion.php';

if ($conexion->connect_error) {

    die("Error en la conexion: " . $conexion->connect_error);
}





function crearXml($conexion )
{


    $query = "SELECT * FROM alumnos";
    $consulta = $conexion->query($query);

    $docXml = new DOMDocument("1.0", "UTF-8");

    $docXml->formatOutput = true;

    $usuarios = $docXml->createElement("alumnos");

    $docXml->appendChild($usuarios);

    if ($consulta->num_rows > 0) {
        while ($row = $consulta->fetch_assoc()) {
            $usuario = $docXml->createElement("alumno");

            $id = $docXml->createElement("id", $row["id"]);
            $usuario->appendChild($id);

            $nombre = $docXml->createElement("nombre", $row["nombre"]);
            $usuario->appendChild($nombre);

            $carrera = $docXml->createElement("carrera", $row["carrera"]);
            $usuario->appendChild($carrera);


            $promedio = $docXml->createElement("promedio", $row["promedio"]);
            $usuario->appendChild($promedio);

            $edad = $docXml->createElement("edad", $row["edad"]);
            $usuario->appendChild($edad);

            $usuarios->appendChild($usuario);
        }


        $xmlFilePath = 'alumnos.xml';
        $docXml->save($xmlFilePath);
    } else {
        echo "No se encontraron usuarios.";
    }
}
