// Seleccionar todos los elementos de clase "preguntas"
const preguntas = document.querySelectorAll('.preguntas');

// Recorrer cada elemento de clase "preguntas"
preguntas.forEach((pregunta) => {
    // Agregar un evento de click a cada elemento de clase "pregunta"
    pregunta.addEventListener('click', () => {
        // Obtener el elemento de clase "respuesta" dentro de la pregunta
        const respuesta = pregunta.querySelector('.respuesta');
        // Alternar la clase "mostrar" en el elemento de respuesta
        respuesta.classList.toggle('mostrar');
    });
});

alert('Bienvenido')
