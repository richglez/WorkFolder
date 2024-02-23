
// Suma
function suma(a, b) {
    return a + b;
}

// Resta
function resta(a, b) {
    return a - b;
}

// Multiplicación
function multiplicacion(a, b) {
    return a * b;
}

// División
function division(a, b) {
    if (b === 0) {
        return "No se puede dividir entre 0";
    }
    return a / b;
}

// Ejemplos de uso
console.log("Suma: " + suma(5, 3));
console.log("Resta: " + resta(5, 3));
console.log("Multiplicación: " + multiplicacion(5, 3));
console.log("División: " + division(5, 3));



function calcular() {
    var num1Input = document.getElementById('num1');
    var num2Input = document.getElementById('num2');
    
    var num1 = parseFloat(num1Input.value);
    var num2 = parseFloat(num2Input.value);

    if (isNaN(num1) || isNaN(num2)) { //si no es un numero
        alert("Por favor ingresa solo números.");
        num1Input.value = "";  //se ponen en blanco los inputs
        num2Input.value = "";  //se ponen en blanco los inputs
        return;
    }

    document.getElementById('result').innerHTML = "Suma: " + suma(num1, num2) + "<br>" +
                                                   "Resta: " + resta(num1, num2) + "<br>" +
                                                   "Multiplicación: " + multiplicacion(num1, num2) + "<br>" +
                                                   "División: " + division(num1, num2);
}
