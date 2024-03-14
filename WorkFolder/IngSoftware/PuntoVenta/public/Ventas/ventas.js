    // Obtener el elemento input
    const inputFecha = document.getElementById('txtFecha');

    // Obtener la fecha y hora local actual en el formato necesario para el input datetime-local
    const fechaActual = new Date();
    const fechaLocal = fechaActual.toLocaleDateString('en-CA', { year: 'numeric', month: '2-digit', day: '2-digit' });
    const horaLocal = fechaActual.toLocaleTimeString('en-US', { hour12: false, hour: '2-digit', minute: '2-digit' });
    const fechaHoraLocal = `${fechaLocal}T${horaLocal}`;

    // Asignar la fecha y hora actual al campo input
    inputFecha.value = fechaHoraLocal;