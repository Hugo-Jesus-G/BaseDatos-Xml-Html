<?php


$contraseña="";
$usuario="root";
$nombrebd="alumnos";
$host="localhost";

$conexion=mysqli_connect($host,$usuario,$contraseña,$nombrebd);

return $conexion;