async function generatePDF(ruta) {
  try {
    const respuesta = await fetch(ruta);

    if (!respuesta.ok) {
      alert("Error al cargar el archivo XML.");
      return;
    }

    const text = await respuesta.text(); 
    const parser = new DOMParser();
    const xmlDoc = parser.parseFromString(text, "application/xml");

    const productos = xmlDoc.querySelectorAll('Producto');
    if (productos.length === 0) {
      doc.text("No hay productos en el Inventario ", 14, 10);
      return;
    }

    const tableData = [];
    productos.forEach((producto) => {
      const id = producto.querySelector('ID').textContent;
      const nombre = producto.querySelector('Nombre').textContent;
      const precio = producto.querySelector('Precio').textContent;
      const stock = producto.querySelector('Stock').textContent;

      tableData.push([id, nombre, `$${precio}`, stock]);
    });

    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    doc.text("Inventario de Productos", 14, 10);

    doc.autoTable({
      startY: 20,
      head: [['ID', 'Nombre', 'Precio', 'Stock']], 
      body: tableData, 
      styles: { fontSize: 13 }, 
      headStyles: { fillColor: [0, 102, 204] }, 
    });

    doc.save("inventario_productos.pdf");
  } catch (error) {
    console.error("Error al generar el PDF:", error);
    alert("Ocurrió un error al procesar el archivo XML.");
  }
}
