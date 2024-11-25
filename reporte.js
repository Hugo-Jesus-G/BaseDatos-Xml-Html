function crearTablaDesdeXML(archivoXML) {
  const xhr = new XMLHttpRequest();
  xhr.open('GET', archivoXML, true);

  xhr.onload = function() {
    if (xhr.status === 200) {
      const xml = xhr.responseText;

      const parser = new DOMParser();
      const xmlDoc = parser.parseFromString(xml, "text/xml");

      const productos = xmlDoc.getElementsByTagName("Producto");

      const tabla = document.createElement("table");
      tabla.border = 1;

      const trEncabezado = document.createElement("tr");
      const thID = document.createElement("th");
      thID.textContent = "ID";
      const thNombre = document.createElement("th");
      thNombre.textContent = "Nombre";
      const thPrecio = document.createElement("th");
      thPrecio.textContent = "Precio";
      const thStock = document.createElement("th");
      thStock.textContent = "Stock";

      trEncabezado.appendChild(thID);
      trEncabezado.appendChild(thNombre);
      trEncabezado.appendChild(thPrecio);
      trEncabezado.appendChild(thStock);

      tabla.appendChild(trEncabezado);

      for (let i = 0; i < productos.length; i++) {
        const producto = productos[i];
        const tr = document.createElement("tr");

        const tdID = document.createElement("td");
        tdID.textContent = producto.getElementsByTagName("ID")[0].textContent;
        tr.appendChild(tdID);

        const tdNombre = document.createElement("td");
        tdNombre.textContent = producto.getElementsByTagName("Nombre")[0].textContent;
        tr.appendChild(tdNombre);

        const tdPrecio = document.createElement("td");
        tdPrecio.textContent = producto.getElementsByTagName("Precio")[0].textContent;
        tr.appendChild(tdPrecio);

        const tdStock = document.createElement("td");
        tdStock.textContent = producto.getElementsByTagName("Stock")[0].textContent;
        tr.appendChild(tdStock);

        tabla.appendChild(tr);
      }

      document.body.appendChild(tabla);
    } else {
      console.log("Error al leer el archivo");
    }
  };

  xhr.send();
}

// Llamada a la función
crearTablaDesdeXML('productos.xml');