<?php
function esPrimo($numero) // todos los numeros que se pasen aqui
{
    if ($numero <= 1) { // no es primo
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) { // no es primo
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true; // de cualquier otra forma es primo
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["txtNum1"];
    $numero2 = $_POST["txtNum2"];

    echo "Números primos entre $numero1 y $numero2: ";
    echo '/n';
    for ($i = $numero1; $i <= $numero2; $i++) {
        if (esPrimo($i)) {

            echo "$i, ";
        }
    }
    exit(); // Es importante terminar el script después de la redirección para evitar que se ejecuten más instrucciones
}
