document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('contact-form');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar que se recargue la página
        alert('Gracias por su mensaje, ' + form.nombre.value + '!');
        form.reset(); // Limpiar el formulario
    });
});
