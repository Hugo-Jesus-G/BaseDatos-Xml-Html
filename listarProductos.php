<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>
    <h1> Productos</h1>


    <div class="container my-3">
  <div class="d-flex justify-content-between align-items-center">
    <input class="btn btn-success" type="button" value="Ingresar nuevo Producto" onclick="mostrarFormularionuevo()">
    
    <button class="btn btn-warning" onclick="generatePDF('productos.xml')">Imprimir Reporte</button>
  </div>
</div>

    <br>
    <?php
    require_once 'lecturaXml.php';
    require_once 'bd_xml.php';
    require_once 'conexion.php';
    require_once 'nuevo.php';


    if ($conexion) {
        crearXml($conexion);
        leerXml('productos.xml');
    }


    ?>







  
  




</body>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="ocultar.js"></script>
<script src="reporte.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>


</html>