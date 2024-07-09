// Event listener para botones "Añadir al Carrito"
document.addEventListener('DOMContentLoaded', function() {
    const botonesAgregar = document.querySelectorAll('.add-to-cart');
    botonesAgregar.forEach(boton => {
        boton.addEventListener('click', () => {
            const libro = boton.closest('.libro');
            const id = boton.getAttribute('data-id');
            const titulo = libro.querySelector('h3').textContent.trim();
            const precioTexto = libro.querySelector('h3').textContent.split('/')[1].trim();
            const precio = parseFloat(precioTexto);
            agregarAlCarrito(id, titulo, precio);
        });
    });

    // Función para agregar un libro al carrito (simulación básica)
    function agregarAlCarrito(id, titulo, precio) {
        console.log(`Añadido al carrito: ${titulo} - Precio: ${precio}`);
        // Aquí puedes añadir la lógica para guardar en localStorage, actualizar UI, etc.
    }

    // Event listener para cerrar el carrito
document.querySelector('.close-cart').addEventListener('click', function () {
    carritoContainer.classList.remove('show');
});



});
