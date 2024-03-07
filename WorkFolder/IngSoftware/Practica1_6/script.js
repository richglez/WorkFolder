function calcular() {
    const n1 = document.getElementById('txtNum1').value.trim();  // se utiliza para eliminar los espacios en blanco
    const n2 = document.getElementById('txtNum2').value.trim();  // se utiliza para eliminar los espacios en blanco
    const parrafoResultadoHTML = document.getElementById('resultado');

    if (n1 !== '' && n2 !== '') {
        //El usuario digito algo en los textbox
        const num1 = parseInt(n1);
        const num2 = parseInt(n2);

        if (!isNaN(num1) && !isNaN(num2)) {
            // Las variables son números
            let resultado = '';

            for (let i = num1; i <= num2; i++) {
                if (i % 2 === 0) {
                    resultado += `${i} par <br>`;
                } else {
                    resultado += `${i} non <br>`;
                }
            }

            parrafoResultadoHTML.innerHTML = resultado;
        } 
        
        else {
            // Las variables no son números válidos
            alert('Error, las variables no son números válidos');
        }
    } 
    
    else {
        //El usuario digito campos vacios
        alert('Error: Estás intentando calcular campos vacíos');
    }
}
