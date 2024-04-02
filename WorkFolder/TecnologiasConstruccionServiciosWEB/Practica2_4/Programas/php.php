<?php
function factorial($numero) // todos los numeros que se pasen aqui
{
    $fac = 1; // el factorial se inicializa en 1
    if ($numero <= 0) { // no se aceptan numero negativas
        return false; // error
    }

    for ($i = 1; $i <= $numero; $i++) { // opercacion
        $fac = $i * $numero;

    }
    return $fac; // de cualquier otra forma es primo
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["txtNum1"];

    echo "Factorial de $num1 es ";
    echo '<br>';
    echo factorial($num1);
    exit(); // Es importante terminar el script después de la redirección para evitar que se ejecuten más instrucciones
}
