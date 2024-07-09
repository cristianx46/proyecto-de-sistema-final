document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contacto-form');
    const formMensaje = document.getElementById('form-mensaje');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(form);

        fetch('procesar_formulario.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            formMensaje.innerHTML = data;
            form.reset(); // Opcional: Resetea el formulario después de enviarlo
        })
        .catch(error => {
            formMensaje.innerHTML = 'Error al enviar el mensaje. Por favor, intenta de nuevo.';
        });
    });
});
